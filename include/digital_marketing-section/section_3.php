    <style>
        .kd-cov-section {
            background: #ffffff;
            font-family: 'Manrope', Arial, sans-serif;
            max-width: 1180px;
            margin: 0 auto;
            padding: 56px 24px 80px;
            display: grid;
            grid-template-columns: 1.55fr 1fr;
            gap: 56px;
            align-items: start;
        }

        /* ================= LEFT COLUMN ================= */

        .kd-cov-eyebrow {
            color: #5b6bd6;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: .08em;
            margin: 0 0 14px;
        }

        .kd-cov-heading {
            font-size: 42px;
            line-height: 1.15;
            font-weight: 800;
            letter-spacing: -.02em;
            margin: 0 0 26px;
            color: #12121f;
        }

        .kd-cov-body-wrap {
            position: relative;
            max-height: 330px;
            overflow: hidden;
            transition: max-height .4s ease;
        }

        .kd-cov-body-wrap.kd-cov-expanded {
            max-height: 420px;
            overflow-y: auto;
            padding-right: 14px;
        }

        .kd-cov-body-wrap.kd-cov-expanded::-webkit-scrollbar {
            width: 6px;
        }

        .kd-cov-body-wrap.kd-cov-expanded::-webkit-scrollbar-track {
            background: transparent;
        }

        .kd-cov-body-wrap.kd-cov-expanded::-webkit-scrollbar-thumb {
            background: #5b6bd6;
            border-radius: 10px;
        }

        .kd-cov-body-wrap:not(.kd-cov-expanded):after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 90px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0), #ffffff 88%);
            pointer-events: none;
        }

        .kd-cov-body-wrap ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .kd-cov-body-wrap li {
            position: relative;
            padding: 0 0 18px 20px;
            font-size: 16.5px;
            line-height: 1.65;
            color: #3a3a4a;
        }

        .kd-cov-body-wrap li:before {
            content: "";
            position: absolute;
            left: 0;
            top: 10px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #12121f;
        }

        .kd-cov-body-wrap li b {
            color: #12121f;
            font-weight: 800;
        }

        .kd-cov-body-wrap p {
            font-size: 16.5px;
            line-height: 1.65;
            color: #3a3a4a;
            margin: 0 0 18px;
        }

        .kd-cov-body-wrap h2 {
            font-size: 24px;
            font-weight: 800;
            color: #12121f;
            margin: 30px 0 14px;
        }

        .kd-cov-body-wrap>*:first-child {
            margin-top: 0;
        }

        .kd-cov-body-wrap h3 {
            font-size: 18px;
            font-weight: 800;
            color: #12121f;
            margin: 22px 0 10px;
        }

        .kd-cov-body-wrap ul {
            margin: 0 0 18px;
        }

        .kd-cov-body-wrap a {
            color: #5b6bd6;
            font-weight: 700;
            text-decoration: none;
        }

        .kd-cov-body-wrap a:hover {
            text-decoration: underline;
        }

        .kd-cov-readmore {
            margin-top: 24px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 26px;
            border: none;
            border-radius: 30px;
            background: #12123a;
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s ease;
        }

        .kd-cov-readmore:hover {
            background: #1c1c52;
        }

        .kd-cov-readmore svg {
            width: 13px;
            height: 13px;
            transition: transform .3s ease;
        }

        .kd-cov-readmore.kd-cov-open svg {
            transform: rotate(180deg);
        }

        /* ================= RIGHT COLUMN (FORM CARD) ================= */

        .kd-cov-form-wrap {
            position: sticky;
            top: 24px;
        }

        .kd-cov-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            margin-bottom: 14px;
            border-radius: 30px;
            background: linear-gradient(90deg, #ff8a3d, #ff6a3d);
            color: #ffffff;
            font-size: 12.5px;
            font-weight: 800;
        }

        .kd-cov-form-card {
            background: #ffffff;
            border: 1px solid rgba(20, 20, 40, .08);
            border-radius: 18px;
            padding: 26px 26px 22px;
            box-shadow: 0 18px 40px rgba(20, 20, 50, .08);
        }

        .kd-cov-form-title {
            margin: 0 0 18px;
            font-size: 21px;
            font-weight: 800;
            color: #12121f;
        }

        .kd-cov-field {
            width: 100%;
            padding: 13px 15px;
            margin-bottom: 12px;
            border: 1px solid #d8dae3;
            border-radius: 8px;
            font-size: 14.5px;
            font-family: inherit;
            color: #4a4a5a;
            background: #ffffff;
            outline: none;
            transition: border-color .2s ease;
        }

        .kd-cov-field:focus {
            border-color: #5b6bd6;
        }

        select.kd-cov-field {
            appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'><path d='M1 1l5 5 5-5' stroke='%237a7a8a' stroke-width='1.6' fill='none' fill-rule='evenodd'/></svg>");
            background-repeat: no-repeat;
            background-position: right 15px center;
            cursor: pointer;
        }

        .kd-cov-field[readonly] {
            background: #f2f3f7;
            color: #6a6a7a;
            cursor: default;
        }

        .kd-cov-captcha-label {
            font-size: 14.5px;
            font-weight: 800;
            color: #12121f;
            margin: 6px 0 10px;
        }

        .kd-cov-submit {
            width: 100%;
            padding: 14px;
            margin-top: 4px;
            border: none;
            border-radius: 8px;
            background: #1c2b6b;
            color: #ffffff;
            font-size: 15.5px;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s ease;
        }

        .kd-cov-submit:hover {
            background: #142058;
        }

        .kd-cov-trust {
            text-align: center;
            margin: 14px 0 0;
            font-size: 12px;
            color: #8a8a96;
        }

        .kd-cov-msg {
            text-align: center;
            font-size: 13px;
            font-weight: 700;
            margin-top: 10px;
            min-height: 16px;
        }

        .kd-cov-msg.kd-cov-error {
            color: #e04b4b;
        }

        .kd-cov-msg.kd-cov-success {
            color: #2fa96a;
        }

        @media(max-width: 900px) {
            .kd-cov-section {
                grid-template-columns: 1fr;
                padding: 40px 20px 60px;
            }

            .kd-cov-heading {
                font-size: 30px;
            }

            .kd-cov-form-wrap {
                position: static;
            }
        }
    </style>


    <section class="kd-cov-section">

        <!-- LEFT: COURSE OVERVIEW -->
        <div>
            <p class="kd-cov-eyebrow">COURSE OVERVIEW</p>
            <h1 class="kd-cov-heading">Everything you need to master Digital Marketing Course In Faridabad.</h1>


           
<div class="kd-cov-body-wrap" id="kdCovBody">

    <h2>Why EagletFly Solutions Stands Out as a Digital Marketing Training Institute in Patel Nagar</h2>

    <p>With numerous training options available across Delhi NCR, selecting the right partner determines whether you just learn concepts or master real commercial execution. <strong>EagletFly Solutions</strong> sets a high bar for digital marketing education:</p>

    <ul>
        <li>Execution of Live Advertising Budget: Participation in current projects with Google Ads, Meta Ads, and Search Engine Optimization will provide the student with hands-on budgeting experience, conducting A/B testing, and analyzing conversion parameters.</li>
        <li>Educational Faculty Involved in Actual Work at the Agency: Learning from real practitioners (digital strategists, media buyers, and SEO specialists) who develop and implement marketing campaigns for large companies.</li>
        <li>Practical Laboratory Training: More than 70% of class hours are devoted to gaining experience in hands-on labs covering website development, tracking pixels installation, and keywords audit.</li>
        <li>Career and Placement Support: Extensive assistance in obtaining a job in the profession through individual resume refinement, mock interviews and optimization of the LinkedIn profile.</li>
    </ul>

    <h2>Complete Core Curriculum Overview</h2>

    <p>Our <strong>Digital Marketing Training in Patel Nagar</strong> builds your skill set step-by-step across 12 modules, covering every aspect of modern organic, paid, and automated marketing channels.</p>

    <h3>Module 1: Marketing Fundamentals, Consumer Psychology &amp; Funnel Strategy</h3>

    <p>Establish a strong strategic baseline before diving into digital software execution.</p>

    <ul>
        <li>Inbound Marketing vs. Outbound Marketing- Learn the differences between pull strategies of organic marketing and the disruptive ads of outbound marketing.</li>
        <li>Buyer Persona Mapping and Customer Journeys- Determine the characteristics of the audience that has pain points, buyer signals, and customer triggers.</li>
        <li>Structure of the Marketing Funnel- Understand the stages of awareness, consideration, conversion and retention (TOFU, MOFU, BOFU) in customer acquisition.</li>
        <li>Competitor Analysis and Market Research- Use platforms such as SimilarWeb, SEMrush, or SpyFu to perform a complete digital audit.</li>
    </ul>

    <h3>Module 2: Website Planning, Domain Mapping &amp; WordPress Architecture</h3>

    <p>Find out how you can create, set up and promote websites that focus on increasing conversion rates without having to write complex code.</p>

    <ul>
        <li>Domain and Hosting: Know how to configure DNS, setup SSL certificates, and organize cloud hosting.</li>
        <li>WordPress CMS Installation: Get WordPress installed, choose a theme, customize the layout without special programming knowledge.</li>
        <li>Landing Page Creation: Design landing pages optimized for conversion and mobile-capable with lead-generating forms.</li>
        <li>User Experience (UX) and Speed Related Deployments: Optimize loading speeds and image compression rate, and ensure easy navigation.</li>
    </ul>

    <h3>Module 3: Search Engine Optimization (SEO) &amp; Search Architecture</h3>

    <p>Master organic search algorithms to secure top page-one rankings on Google and drive organic web traffic.</p>

    <p>The following are the steps for improving the search engine optimization (SEO) of a business's website.</p>

    <ul>
        <li>Keyword Research and Search Intent: Find high-intent keywords both for transactional and informational usages by using tools like Google Keyword Planner, Ahrefs, and Ubersuggest.</li>
        <li>On-Page SEO Optimization: Keep optimizing the title, meta description, and headers (e.g. H1 - H6), URL slugs, alt text for images, and internal links.</li>
        <li>Technical SEO and Site Audits: Fix crawling and indexing issues, produce XML sitemaps, manage the robots file, fix the Core Web Vitals, and optimize the Schema Markup.</li>
        <li>Off-Page SEO and Link Building: Conduct all linking efforts ethically and legally.</li>
        <li>Local SEO and Google My Business Profile (GMB Profile): Help the local businesses obtain high position in local searches through citation and reviews.</li>
    </ul>

    <h3>Module 4: Google Analytics 4 (GA4) &amp; Google Tag Manager (GTM)</h3>

    <p>Convert raw website traffic data into actionable business insights with industry-standard measurement platforms.</p>

    <ul>
        <li>GA4 Property Setup: Configure data flows, measurement IDs, data retention settings, and privacy-related configuration.</li>
        <li>Event &amp; Conversion Tracking: Prepare customized events, button clicks, form submission, and purchase goals—using Google Tag Manager.</li>
        <li>Audience Segmentation &amp; Exploration Reports: Create customized conversion paths, path explorations, and demographics to analyze the performance of different channels.</li>
        <li>Looker Studio Dashboards: Create automated, executive-ready marketing reports for your clients and company's stakeholders.</li>
    </ul>

    <h3>Module 5: Search Engine Marketing (SEM) &amp; Google Ads</h3>

    <p>Become proficient at Google search ads to drive instant traffic from customers as soon as they need what you're offering.</p>

    <ul>
        <li>Use a proper structure for your campaigns by organizing your Google Ads account, making separate campaigns, ad groups and choose a bidding option.</li>
        <li>Select various types of Google Ads using the Search Ads, Display Network Banner Ads, Shopping Ads, YouTube Video Ads, Performance Max (PMax).</li>
        <li>Adjust your quality score for each of the ads you place in order to achieve higher ad rank and lower your Cost-per-click.</li>
        <li>Create ads that have everything necessary in order to sell your products making use of all the tools that are available.</li>
        <li>Determine the bidding options that you would like to apply, such as Target CPA, Target ROAS and Maximize Conversions.</li>
    </ul>

    <h3>Module 6: Social Media Optimization (SMO) &amp; Organic Brand Building</h3>

    <p>Develop an organic social media presence on every major platform in order build brand loyalty and engage audiences.</p>

    <ul>
        <li>Platform-Specific Strategies: Different formats of content should be created for Instagram, Facebook, LinkedIn, YouTube, Twitter/X, and Pinterest.</li>
        <li>Content Calendar &amp; Aesthetic: There should be branding themes created visually and the posting must be scheduled regularly through the usage of tools like Canva, Buffer, and Hootsuite.</li>
        <li>Short-Form Video Marketing: Instagram Reels and YouTube shorts must be scripted, recorded and edited; good videos should go viral.</li>
        <li>Community Management: Customer feedback should be handled as well as keeping the engagement of users higher.</li>
    </ul>

    <h3>Module 7: Social Media Marketing (SMM) &amp; Meta Ads Management</h3>

    <p>Use precise, profitable paid ads on Facebook and Instagram.</p>

    <ul>
        <li>Meta Business Suite and Ads Manager - take advantage of Business Manager features to set up business assets, provide access rights, and secure ad accounts.</li>
        <li>Meta Pixel and CAPI - set up pixel tracking, use the Aggregated event measurement feature, and configure server-side conversions.</li>
        <li>Target Audience Frameworks - dive into the audience targeting techniques to learn how to work with different types of audiences.</li>
        <li>Creative Strategy and A/B Testing - show great results by applying high-performing video ads, carousel ads, and catalog ads in your campaign.</li>
        <li>E-commerce Funnel Retargeting - increase the number of paid clients and keep your customers longer by using conversion funnels.</li>
    </ul>

    <h3>Module 8: Content Marketing, Copywriting &amp; Storytelling</h3>

    <p>Generate persuasive text and useful assets that guide customers smoothly through their purchase journey.</p>

    <ul>
        <li>Theories of copywriting: Implement successful selling methods such as AIDA (Attention, Interest, Desire, Action) and PAS (Problem, Agitate, Solve).</li>
        <li>Creating Content Strategy: Create a strategy for long publications such as blogs, eBooks, whitepapers, case studies, and email marketing.</li>
        <li>Writing video scripts: Construct full scripts for advertisements, brand narrative, product description, and videos for YouTube.</li>
    </ul>

    <h3>Module 9: Email Marketing &amp; Marketing Automation</h3>

    <p>Utilize automated customer communication in order to develop the leads, maintain repeat sales, and develop long-term customer relationships.</p>

    <ul>
        <li>List-building &amp; Opt-in strategies: Create harmless lead capture pop-ups, embedded forms, and landing pages.</li>
        <li>Email service platforms: Install and run email services like mailchimp, Brevo, ActiveCampaign, and Klaviyo.</li>
        <li>Automated email sequences: Create welcome series, abandoned cart recovery flows, drip email sequences, and re-engagement campaigns.</li>
        <li>Deliverability &amp; A/B testing: Improve the rate of opening emails and rate of clicks through management of sender's reputation, subject line testing, as well as SPF/DKIM authentication.</li>
    </ul>

    <h3>Module 10: E-Commerce Marketing &amp; Marketplace Optimization</h3>

    <p>Boost revenue for e-commerce businesses around the world with unique platforms and conventional e-commerce directories.</p>

    <p>Creating Shopify Stores: Design simple and conversion-driven e-commerce environments that allow for payment processing and stock management.</p>

    <ul>
        <li>Marketplace Enrichment (Amazon/Flipkart): Improve product descriptions on Amazon (Search Engine Optimization), oversee A+ content, and manage Amazon PPC campaigns.</li>
        <li>Conversion Optimization (CRO): Minimize issues during checkout, improve product pages, and utilize heatmaps through Hotjar, etc.</li>
    </ul>

    <h3>Module 11: AI-Driven Digital Marketing &amp; Automation Tools</h3>

    <p>Use current platforms in artificial intelligence to speed up the process of making content as well as optimization of campaigns and conducting research.</p>

    <ul>
        <li>Generative AI for Content and Copy: Use programs like ChatGPT, Claude and Gemini in order to write drafts for blogs, ad properties and emails.</li>
        <li>Visual and Video Creation through AI: Create videos and marketing pictures by using advanced software such as Midjourney, Canva AI and Runway.</li>
        <li>Search Engine Optimization through AI: Use artificial intelligence during conducting keyword research and carrying out work on SEO.</li>
    </ul>

    <h3>Module 12: Affiliate Marketing, Freelancing &amp; Agency Operations</h3>

    <p>The following are some independent ways to monetize your digital expertise via freelancing, operating your own agency, or leveraging affiliate networks.</p>

    <ul>
        <li>Affiliate Marketing: Sign up and make money on platforms such as Amazon Associates, ClickBank, and Impact Radius.</li>
        <li>Freelancing: Source clients from online platforms such as Upwork, Fiverr, LinkedIn, and cold emailing.</li>
        <li>Setting Up an Agency: Package your services and make client proposals, contracts, and reports scalable.</li>
    </ul>

</div>



            <button class="kd-cov-readmore" id="kdCovToggle">
                <span id="kdCovToggleText">Read More</span>
                <svg viewBox="0 0 12 8" fill="none">
                    <path d="M1 1l5 5 5-5" stroke="currentColor" stroke-width="1.6" />
                </svg>
            </button>
        </div>

        <!-- RIGHT: DEMO FORM -->
        <div class="kd-cov-form-wrap">
            <span class="kd-cov-badge">★ Bestseller</span>

            <div class="kd-cov-form-card">
                <h3 class="kd-cov-form-title">Request Free Demo</h3>

                <form id="kdCovForm">
                    <input class="kd-cov-field" type="text" placeholder="Full Name" required>
                    <input class="kd-cov-field" type="email" placeholder="Email Address" required>
                    <input class="kd-cov-field" type="tel" placeholder="Phone Number" required>
                    <input class="kd-cov-field" type="text" value="Digital Marketing Course In Faridabad" readonly>

                    <select class="kd-cov-field" required>
                        <option value="" disabled selected>Select a Branch</option>
                        <option>Faridabad - Sector 15</option>
                        <option>Faridabad - NIT</option>
                        <option>Delhi - Laxmi Nagar</option>
                    </select>

                    <p class="kd-cov-captcha-label">Solve: <span id="kdCovA">4</span> + <span id="kdCovB">4</span> = ?</p>
                    <input class="kd-cov-field" type="text" id="kdCovAnswer" placeholder="Enter answer" required>

                    <button type="submit" class="kd-cov-submit">Submit</button>
                    <p class="kd-cov-msg" id="kdCovMsg"></p>
                </form>

                <p class="kd-cov-trust">🔒 Your data is safe with us. No spam.</p>
            </div>
        </div>

    </section>

    <script>
        // Read More toggle
        const body = document.getElementById('kdCovBody');
        const toggleBtn = document.getElementById('kdCovToggle');
        const toggleText = document.getElementById('kdCovToggleText');

        toggleBtn.addEventListener('click', () => {
            const expanded = body.classList.toggle('kd-cov-expanded');
            toggleBtn.classList.toggle('kd-cov-open', expanded);
            toggleText.textContent = expanded ? 'Read Less' : 'Read More';
        });

        // Simple math captcha
        let numA = 4,
            numB = 4;

        function newCaptcha() {
            numA = Math.floor(Math.random() * 8) + 1;
            numB = Math.floor(Math.random() * 8) + 1;
            document.getElementById('kdCovA').textContent = numA;
            document.getElementById('kdCovB').textContent = numB;
        }

        const form = document.getElementById('kdCovForm');
        const msg = document.getElementById('kdCovMsg');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const answer = parseInt(document.getElementById('kdCovAnswer').value, 10);

            if (answer !== numA + numB) {
                msg.textContent = 'Incorrect answer, please try again.';
                msg.className = 'kd-cov-msg kd-cov-error';
                newCaptcha();
                document.getElementById('kdCovAnswer').value = '';
                return;
            }

            msg.textContent = 'Thank you! We will contact you shortly.';
            msg.className = 'kd-cov-msg kd-cov-success';
            form.reset();
            newCaptcha();
        });
    </script>