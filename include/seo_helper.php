<?php
/* =========================================================
   EAGLETFLY - SEO HELPER

   KAISE KAAM KARTA HAI (priority order):
   1) Page ne khud variable set kiya ho ($seo_title, $seo_description ...) -> wahi use hoga
   2) Page ne kuch nahi diya -> page ke <h1> aur pehle <p> se AUTOMATIC ban jayega
      (wo bhi na mile to file ke naam se)
   (Optional: $seo_pages list se bhi defaults de sakte ho, neeche dekho)

   Is file ko header.php me include karna hai (neeche instructions me bataya hai).
========================================================= */

$seo_site_name = 'Eagletfly';

/* false = page me value nahi daali to seedha AUTO (h1 + pehle paragraph se)
   true  = page me nahi daali to neeche wali $seo_pages list use hogi, uske baad auto */
$seo_use_presets = false;

/* ---------------------------------------------------------
   OPTIONAL: PAGE-WISE DEFAULTS (abhi khali hai)
   Zaroorat ho to yahan kisi page ki entry daal sakte ho. Example:

   'python.php' => [
       'title'       => 'Python Course in Delhi | EagletFly',
       'description' => 'Learn Python from scratch with live projects.',
   ],
--------------------------------------------------------- */
$seo_pages = [];

/* ---------------------------------------------------------
   CURRENT PAGE INFO
--------------------------------------------------------- */
$seo_proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$seo_host  = $seo_proto . '://' . $_SERVER['HTTP_HOST'];
$seo_path  = rawurldecode((string) parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$seo_file  = basename($seo_path);
if ($seo_file === '') {
    $seo_file = 'index.php';
}

/* ---------------------------------------------------------
   SMALL HELPERS
--------------------------------------------------------- */
function seo_clean($text)
{
    $text = html_entity_decode(strip_tags((string) $text), ENT_QUOTES, 'UTF-8');
    return trim(preg_replace('/\s+/u', ' ', $text));
}

function seo_cut($text, $max)
{
    if (mb_strlen($text) <= $max) {
        return $text;
    }
    $text = mb_substr($text, 0, $max);
    $pos  = mb_strrpos($text, ' ');
    if ($pos !== false && $pos > $max * 0.6) {
        $text = mb_substr($text, 0, $pos);
    }
    return rtrim($text, " ,.-") . '...';
}

function seo_e($text)
{
    return htmlspecialchars((string) $text, ENT_QUOTES, 'UTF-8');
}

/* ---------------------------------------------------------
   MAIN: poora page ban jaane ke baad <!--SEO_TAGS--> ki jagah
   SEO tags daalta hai (isi wajah se page apne variables
   header se pehle ya baad me, kahin bhi set kar sakta hai)
--------------------------------------------------------- */
function seo_inject($html)
{
    if (strpos($html, '<!--SEO_TAGS-->') === false) {
        return $html;
    }

    global $seo_pages, $seo_use_presets, $seo_file, $seo_site_name, $seo_host, $seo_path, $global_info;
    global $seo_title, $seo_description, $seo_keywords, $seo_image, $seo_canonical, $seo_robots, $seo_type, $seo_schema;

    $map = $seo_use_presets ? ($seo_pages[$seo_file] ?? []) : [];

    /* ---- page content se auto values ---- */
    $h1 = '';
    if (preg_match('/<h1[^>]*>(.*?)<\/h1>/is', $html, $m)) {
        $h1 = seo_clean($m[1]);
    }

    $first_p = '';
    if (preg_match_all('/<p[^>]*>(.*?)<\/p>/is', $html, $ps)) {
        foreach ($ps[1] as $p) {
            $p = seo_clean($p);
            if (mb_strlen($p) >= 60) {
                $first_p = $p;
                break;
            }
        }
    }

    $nice_name = ucwords(trim(preg_replace('/[-_]+/', ' ', pathinfo($seo_file, PATHINFO_FILENAME))));

    /* ---- TITLE ---- */
    if (!empty($seo_title)) {
        $title = $seo_title;
    } elseif (!empty($map['title'])) {
        $title = $map['title'];
    } elseif ($h1 !== '') {
        $title = seo_cut($h1, 45) . ' | ' . $seo_site_name;
    } else {
        $title = $nice_name . ' | ' . $seo_site_name;
    }

    /* ---- DESCRIPTION ---- */
    if (!empty($seo_description)) {
        $description = $seo_description;
    } elseif (!empty($map['description'])) {
        $description = $map['description'];
    } elseif ($first_p !== '') {
        $description = seo_cut($first_p, 155);
    } else {
        $description = 'Explore ' . $nice_name . ' at ' . $seo_site_name . '. Contact us for course details and enrollment.';
    }

    /* ---- BAAKI ---- */
    $robots    = !empty($seo_robots) ? $seo_robots : 'index, follow';
    $type      = !empty($seo_type) ? $seo_type : 'website';
    $canonical = !empty($seo_canonical) ? $seo_canonical : $seo_host . $seo_path;

    // Image: page ne di to wo, warna site ka logo
    $image = '';
    if (!empty($seo_image)) {
        $image = $seo_image;
    } elseif (!empty($global_info['logo'])) {
        $image = 'img/logo/' . $global_info['logo'];
    }
    if ($image !== '' && !preg_match('#^https?://#i', $image)) {
        $image = $seo_host . '/' . ltrim($image, '/');
    }

    /* ---- TAGS BANAO ---- */
    $out  = '<title>' . seo_e($title) . "</title>\n";
    $out .= '  <meta name="description" content="' . seo_e($description) . "\">\n";
    if (!empty($seo_keywords)) {
        $out .= '  <meta name="keywords" content="' . seo_e($seo_keywords) . "\">\n";
    }
    $out .= '  <meta name="robots" content="' . seo_e($robots) . "\">\n";
    $out .= '  <link rel="canonical" href="' . seo_e($canonical) . "\">\n";

    $out .= '  <meta property="og:type" content="' . seo_e($type) . "\">\n";
    $out .= '  <meta property="og:site_name" content="' . seo_e($seo_site_name) . "\">\n";
    $out .= '  <meta property="og:title" content="' . seo_e($title) . "\">\n";
    $out .= '  <meta property="og:description" content="' . seo_e($description) . "\">\n";
    $out .= '  <meta property="og:url" content="' . seo_e($canonical) . "\">\n";
    if ($image !== '') {
        $out .= '  <meta property="og:image" content="' . seo_e($image) . "\">\n";
    }

    $out .= '  <meta name="twitter:card" content="summary_large_image">' . "\n";
    $out .= '  <meta name="twitter:title" content="' . seo_e($title) . "\">\n";
    $out .= '  <meta name="twitter:description" content="' . seo_e($description) . "\">\n";
    if ($image !== '') {
        $out .= '  <meta name="twitter:image" content="' . seo_e($image) . "\">\n";
    }

    // Organization schema (har page par)
    $org = [
        '@context' => 'https://schema.org',
        '@type'    => 'EducationalOrganization',
        'name'     => $seo_site_name,
        'url'      => $seo_host,
    ];
    if ($image !== '') {
        $org['logo'] = $image;
    }
    $flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG;
    $out  .= '  <script type="application/ld+json">' . json_encode($org, $flags) . "</script>\n";

    // Page ka apna schema (optional)
    if (!empty($seo_schema)) {
        $out .= '  <script type="application/ld+json">' . json_encode($seo_schema, $flags) . "</script>\n";
    }

    return str_replace('<!--SEO_TAGS-->', $out, $html);
}

ob_start('seo_inject');
