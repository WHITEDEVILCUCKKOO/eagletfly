/*  ============================  blogedit (event delegation version)  ================================  */

var blogSavedSelection = {}; // per-form saved selection

function getFormSuffix(el) {
    var form = el.closest('form');
    if (!form) return '';
    return form.id === 'blogUploadForm2' ? '2' : '';
}

function updateToolbarState(form) {
    if (!form) return;
    var toolbarBtns = form.querySelectorAll('.blog-toolbar-btn[data-command]');
    toolbarBtns.forEach(function (btn) {
        var command = btn.getAttribute('data-command');
        if (command && document.queryCommandState(command)) {
            btn.classList.add('blog-active');
        } else {
            btn.classList.remove('blog-active');
        }
    });
}

function saveSelection() {
    var sel = window.getSelection();
    if (sel.rangeCount > 0) return sel.getRangeAt(0);
    return null;
}

function restoreSelection(range) {
    if (range) {
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    }
}

function getSelectedText() {
    return window.getSelection ? window.getSelection().toString() : '';
}

function handleImageUpload(file, previewEl, areaEl) {
    if (!file || !file.type.startsWith('image/')) return;
    var reader = new FileReader();
    reader.onload = function (e) {
        previewEl.src = e.target.result;
        areaEl.classList.add('blog-has-image');
    };
    reader.readAsDataURL(file);
}

/* -------- CLICK (delegated) -------- */
document.addEventListener('click', function (e) {

    // Toolbar formatting buttons (Bold, Italic, etc + alignment + lists)
    var toolbarBtn = e.target.closest('.blog-toolbar-btn[data-command]');
    if (toolbarBtn) {
        var command = toolbarBtn.getAttribute('data-command');
        var suffix = getFormSuffix(toolbarBtn);
        var editor = document.getElementById('blogContentEditor' + suffix);
        document.execCommand(command, false, null);
        if (editor) editor.focus();
        updateToolbarState(toolbarBtn.closest('form'));
        return;
    }

    // Text Color button (opens native color input)
    if (e.target.closest('#blogTextColor, #blogTextColor2')) {
        return; // native input, handled by 'input' event below
    }
    var textColorBtn = e.target.closest('.blog-color-btn');
    if (textColorBtn && textColorBtn.querySelector('.blog-color-icon')) {
        var suffix2 = getFormSuffix(textColorBtn);
        var colorInput = document.getElementById('blogTextColor' + suffix2);
        if (colorInput) colorInput.click();
        return;
    }

    // Background Color button
    if (textColorBtn && !textColorBtn.querySelector('.blog-color-icon')) {
        var suffix3 = getFormSuffix(textColorBtn);
        var bgInput = document.getElementById('blogBgColor' + suffix3);
        if (bgInput) bgInput.click();
        return;
    }

    // Link Insert button
    var linkBtn = e.target.closest('#blogLinkBtn, #blogLinkBtn2');
    if (linkBtn) {
        var s = linkBtn.id === 'blogLinkBtn2' ? '2' : '';
        blogSavedSelection[s] = saveSelection();
        var selectedText = getSelectedText();
        document.getElementById('blogLinkText' + s).value = selectedText || '';
        document.getElementById('blogLinkUrl' + s).value = '';
        var modal = document.getElementById('blogLinkModal' + s);
        modal.classList.add('blog-modal-active');
        setTimeout(function () { document.getElementById('blogLinkUrl' + s).focus(); }, 100);
        return;
    }

    // Modal Close / Cancel
    var closeBtn = e.target.closest('#blogModalClose, #blogModalClose2, #blogLinkCancel, #blogLinkCancel2');
    if (closeBtn) {
        var overlay = e.target.closest('.blog-modal-overlay');
        if (overlay) overlay.classList.remove('blog-modal-active');
        return;
    }

    // Modal overlay background click closes it
    if (e.target.classList.contains('blog-modal-overlay')) {
        e.target.classList.remove('blog-modal-active');
        return;
    }

    // Modal Insert/Confirm
    var confirmBtn = e.target.closest('#blogLinkConfirm, #blogLinkConfirm2');
    if (confirmBtn) {
        var s2 = confirmBtn.id === 'blogLinkConfirm2' ? '2' : '';
        var url = document.getElementById('blogLinkUrl' + s2).value.trim();
        var text = document.getElementById('blogLinkText' + s2).value.trim() || url;
        if (url) {
            if (!/^https?:\/\//i.test(url)) url = 'https://' + url;
            restoreSelection(blogSavedSelection[s2]);
            var link = '<a href="' + url + '" target="_blank">' + text + '</a>';
            document.execCommand('insertHTML', false, link);
        }
        document.getElementById('blogLinkModal' + s2).classList.remove('blog-modal-active');
        document.getElementById('blogContentEditor' + s2).focus();
        return;
    }

}, false);

/* -------- CHANGE (delegated) -------- */
document.addEventListener('change', function (e) {

    if (e.target.matches('#blogFontSize, #blogFontSize2')) {
        document.execCommand('fontSize', false, e.target.value);
        var s = e.target.id === 'blogFontSize2' ? '2' : '';
        document.getElementById('blogContentEditor' + s).focus();
        return;
    }

    if (e.target.matches('#blogImageInput, #blogImageInput2')) {
        var s2 = e.target.id === 'blogImageInput2' ? '2' : '';
        var preview = document.getElementById('blogImagePreview' + s2);
        var area = document.getElementById('blogImageUploadArea' + s2);
        handleImageUpload(e.target.files[0], preview, area);
        return;
    }

}, false);

/* -------- INPUT (delegated) - live color pickers -------- */
document.addEventListener('input', function (e) {

    if (e.target.matches('#blogTextColor, #blogTextColor2')) {
        var s = e.target.id === 'blogTextColor2' ? '2' : '';
        document.execCommand('foreColor', false, e.target.value);
        document.getElementById('blogTextColorBar' + s).style.background = e.target.value;
        document.getElementById('blogContentEditor' + s).focus();
        return;
    }

    if (e.target.matches('#blogBgColor, #blogBgColor2')) {
        var s2 = e.target.id === 'blogBgColor2' ? '2' : '';
        document.execCommand('hiliteColor', false, e.target.value);
        document.getElementById('blogBgColorBar' + s2).style.background = e.target.value;
        document.getElementById('blogContentEditor' + s2).focus();
        return;
    }

}, false);

/* -------- KEYUP/MOUSEUP - update bold/italic active state -------- */
document.addEventListener('keyup', function (e) {
    if (e.target.matches('#blogContentEditor, #blogContentEditor2')) {
        updateToolbarState(e.target.closest('form'));
    }
});
document.addEventListener('mouseup', function (e) {
    if (e.target.matches('#blogContentEditor, #blogContentEditor2')) {
        updateToolbarState(e.target.closest('form'));
    }
});

/* -------- KEYBOARD SHORTCUTS -------- */
document.addEventListener('keydown', function (e) {
    if (!e.target.matches('#blogContentEditor, #blogContentEditor2')) return;
    if (e.ctrlKey || e.metaKey) {
        var s = e.target.id === 'blogContentEditor2' ? '2' : '';
        switch (e.key.toLowerCase()) {
            case 'b': e.preventDefault(); document.execCommand('bold', false, null); break;
            case 'i': e.preventDefault(); document.execCommand('italic', false, null); break;
            case 'u': e.preventDefault(); document.execCommand('underline', false, null); break;
            case 'k':
                e.preventDefault();
                blogSavedSelection[s] = saveSelection();
                var selectedText = getSelectedText();
                document.getElementById('blogLinkText' + s).value = selectedText || '';
                document.getElementById('blogLinkUrl' + s).value = '';
                document.getElementById('blogLinkModal' + s).classList.add('blog-modal-active');
                break;
        }
    }
});

/* -------- PASTE - clean formatting -------- */
document.addEventListener('paste', function (e) {
    if (!e.target.matches('#blogContentEditor, #blogContentEditor2')) return;
    e.preventDefault();
    var text = (e.clipboardData || window.clipboardData).getData('text/html');
    if (!text) text = (e.clipboardData || window.clipboardData).getData('text/plain');
    document.execCommand('insertHTML', false, text);
});

/* -------- IMAGE DRAG & DROP -------- */
document.addEventListener('dragover', function (e) {
    var area = e.target.closest('#blogImageUploadArea, #blogImageUploadArea2');
    if (area) {
        e.preventDefault();
        area.classList.add('blog-drag-over');
    }
});
document.addEventListener('dragleave', function (e) {
    var area = e.target.closest('#blogImageUploadArea, #blogImageUploadArea2');
    if (area) area.classList.remove('blog-drag-over');
});
document.addEventListener('drop', function (e) {
    var area = e.target.closest('#blogImageUploadArea, #blogImageUploadArea2');
    if (area) {
        e.preventDefault();
        area.classList.remove('blog-drag-over');
        var files = e.dataTransfer.files;
        if (files.length > 0 && files[0].type.startsWith('image/')) {
            var s = area.id === 'blogImageUploadArea2' ? '2' : '';
            var input = document.getElementById('blogImageInput' + s);
            input.files = files;
            var preview = document.getElementById('blogImagePreview' + s);
            handleImageUpload(files[0], preview, area);
        }
    }
});

/* -------- SUBMIT (delegated) -------- */
document.addEventListener('submit', function (e) {
    var form = e.target;
    if (form.id === 'blogUploadForm') {
        document.getElementById('blogContentHidden').value =
            document.getElementById('blogContentEditor').innerHTML;
    }
    if (form.id === 'blogUploadForm2') {
        document.getElementById('blogContentHidden2').value =
            document.getElementById('blogContentEditor2').innerHTML;
    }
    var btn = form.querySelector('.blog-submit-btn');
    if (btn) {
        btn.classList.add('blog-loading');
        btn.disabled = true;
    }
}, false);


/*  ============================  Edit / Update / Delete Blog  ================================  */

function edit_blog_api(slug) {

    let update_blog_form = document.getElementById("update_blog_form");
    let card_into = document.getElementById("vaweca");

    document.getElementById("adeac").classList.add("show_add_from");
    document.getElementById("btn_update_sadcarlod").classList.remove("show_add_from");

    card_into.classList.add("show_add_from");
    update_blog_form.classList.remove("show_add_from");

    document.getElementById("btn_update_sadcarlodasas").classList.remove("show_add_from");

    fetch("include/apis.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: new URLSearchParams({ action: "get_blog", slug: slug })
    })
    .then(response => response.json())
    .then(data => {

        const blog = data.data;

        if (!data.status || !blog) {
            console.error("Blog not found:", data);
            return;
        }

        let content = (blog.blog_content || '')
            .replace(/<!--StartFragment-->/g, '')
            .replace(/<!--EndFragment-->/g, '')
            .trim();

        document.getElementById("delete_update_blog_sd")
            .setAttribute('onclick', `delete_update_blog(${blog.blog_id})`);

        document.getElementById("blog_id_update").value = blog.blog_id;
        document.getElementById("blogimg2").src = "assets/blog/" + blog.blog_img;
        document.getElementById("blogTitle2").value = blog.blog_title;
        document.getElementById("blogAuthor2").value = blog.blog_author;

        const editor = document.getElementById("blogContentEditor2");
        editor.innerHTML = content;

        document.getElementById("blogContentHidden2").value = content;

    })
    .catch(error => {
        console.error("API Error:", error);
    });
}

function cancel_update_blog_btn() {
    let update_blog_form = document.getElementById("update_blog_form");
    let card_into = document.getElementById("vaweca");

    document.getElementById("btn_update_sadcarlodasas").classList.add("show_add_from");
    document.getElementById("delete_update_blog_sd").removeAttribute("onclick");

    document.getElementById("adeac").classList.remove("show_add_from");
    document.getElementById("btn_update_sadcarlod").classList.add("show_add_from");
    card_into.classList.remove("show_add_from");
    update_blog_form.classList.add("show_add_from");
}

function delete_update_blog(blog_id) {

    if (!confirm("Are you sure you want to delete this Blog?")) {
        return;
    }

    fetch("include/apis.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: new URLSearchParams({ action: "delete_blog", id: blog_id })
    })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                alert(data.message);
                location.reload();
            } else {
                alert("Delete Failed");
            }
        })
        .catch(error => {
            console.error(error);
        });
}

async function Get_all_blog_info(blog_id) {
    const response = await fetch("include/apis.php?action=get_all_blogs&blog_info=" + blog_id);
    const res = await response.json();
    let bta = res.data[0];

    let detalis_box = document.getElementById("blg-modal-bg");
    detalis_box.style.opacity = '1';
    detalis_box.style.pointerEvents = 'auto';

    let blog_img = document.getElementById("blg-modal-img");
    let blog_title = document.getElementById("blg-modal-title");
    let blg_meta_data = document.getElementById("blg-modal-meta");
    let blg_content_long_desc = document.getElementById("blg-modal-content");

    blog_img.src = `assets/blog/${bta.blog_img}`;
    blog_title.innerHTML = bta.blog_title;
    blg_meta_data.innerHTML = bta.blog_meta_desc;
    blg_content_long_desc.innerHTML = bta.blog_content;
}