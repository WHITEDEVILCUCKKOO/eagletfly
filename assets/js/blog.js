
/*  ============================  blogedit  ================================  */

(function () {
    'use strict';

    // DOM Elements
    var blogImageInput = document.getElementById('blogImageInput');
    var blogImageArea = document.getElementById('blogImageUploadArea');
    var blogImagePreview = document.getElementById('blogImagePreview');
    var blogContentEditor = document.getElementById('blogContentEditor');
    var blogContentHidden = document.getElementById('blogContentHidden');
    var blogForm = document.getElementById('blogUploadForm');
    var blogSubmitBtn = document.getElementById('blogSubmitBtn');

    // Toolbar Elements
    var blogFontSize = document.getElementById('blogFontSize');
    var blogTextColor = document.getElementById('blogTextColor');
    var blogBgColor = document.getElementById('blogBgColor');
    var blogTextColorBar = document.getElementById('blogTextColorBar');
    var blogBgColorBar = document.getElementById('blogBgColorBar');
    var blogLinkBtn = document.getElementById('blogLinkBtn');

    // Modal Elements
    var blogLinkModal = document.getElementById('blogLinkModal');
    var blogModalClose = document.getElementById('blogModalClose');
    var blogLinkCancel = document.getElementById('blogLinkCancel');
    var blogLinkConfirm = document.getElementById('blogLinkConfirm');
    var blogLinkUrl = document.getElementById('blogLinkUrl');
    var blogLinkText = document.getElementById('blogLinkText');

    var savedSelection = null;

    // Image Upload & Preview
    if (blogImageInput) {
        blogImageInput.addEventListener('change', function (e) {
            handleImageUpload(e.target.files[0]);
        });
    }

    if (blogImageArea) {
        blogImageArea.addEventListener('dragover', function (e) {
            e.preventDefault();
            blogImageArea.classList.add('blog-drag-over');
        });

        blogImageArea.addEventListener('dragleave', function () {
            blogImageArea.classList.remove('blog-drag-over');
        });

        blogImageArea.addEventListener('drop', function (e) {
            e.preventDefault();
            blogImageArea.classList.remove('blog-drag-over');
            var files = e.dataTransfer.files;
            if (files.length > 0 && files[0].type.startsWith('image/')) {
                blogImageInput.files = files;
                handleImageUpload(files[0]);
            }
        });
    }

    function handleImageUpload(file) {
        if (!file || !file.type.startsWith('image/')) return;

        var reader = new FileReader();
        reader.onload = function (e) {
            blogImagePreview.src = e.target.result;
            blogImageArea.classList.add('blog-has-image');
        };
        reader.readAsDataURL(file);
    }

    // Toolbar Commands
    var toolbarBtns = document.querySelectorAll('.blog-toolbar-btn[data-command]');
    toolbarBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var command = btn.getAttribute('data-command');
            document.execCommand(command, false, null);
            blogContentEditor.focus();
            updateToolbarState();
        });
    });

    // Font Size
    if (blogFontSize) {
        blogFontSize.addEventListener('change', function () {
            document.execCommand('fontSize', false, blogFontSize.value);
            blogContentEditor.focus();
        });
    }

    // Text Color
    if (blogTextColor) {
        blogTextColor.addEventListener('input', function () {
            document.execCommand('foreColor', false, blogTextColor.value);
            blogTextColorBar.style.background = blogTextColor.value;
            blogContentEditor.focus();
        });

        var textColorBtn = blogTextColor.previousElementSibling;
        if (textColorBtn) {
            textColorBtn.addEventListener('click', function () {
                blogTextColor.click();
            });
        }
    }

    // Background Color
    if (blogBgColor) {
        blogBgColor.addEventListener('input', function () {
            document.execCommand('hiliteColor', false, blogBgColor.value);
            blogBgColorBar.style.background = blogBgColor.value;
            blogContentEditor.focus();
        });

        var bgColorBtn = blogBgColor.previousElementSibling;
        if (bgColorBtn) {
            bgColorBtn.addEventListener('click', function () {
                blogBgColor.click();
            });
        }
    }

    // Link Modal
    if (blogLinkBtn) {
        blogLinkBtn.addEventListener('click', function () {
            savedSelection = saveSelection();
            var selectedText = getSelectedText();
            blogLinkText.value = selectedText || '';
            blogLinkUrl.value = '';
            openModal();
        });
    }

    if (blogModalClose) {
        blogModalClose.addEventListener('click', closeModal);
    }

    if (blogLinkCancel) {
        blogLinkCancel.addEventListener('click', closeModal);
    }

    if (blogLinkModal) {
        blogLinkModal.addEventListener('click', function (e) {
            if (e.target === blogLinkModal) {
                closeModal();
            }
        });
    }

    if (blogLinkConfirm) {
        blogLinkConfirm.addEventListener('click', function () {
            var url = blogLinkUrl.value.trim();
            var text = blogLinkText.value.trim() || url;

            if (url) {
                if (!/^https?:\/\//i.test(url)) {
                    url = 'https://' + url;
                }

                restoreSelection(savedSelection);

                var link = '<a href="' + url + '" target="_blank">' + text + '</a>';
                document.execCommand('insertHTML', false, link);
            }

            closeModal();
            blogContentEditor.focus();
        });
    }

    function openModal() {
        blogLinkModal.classList.add('blog-modal-active');
        setTimeout(function () {
            blogLinkUrl.focus();
        }, 100);
    }

    function closeModal() {
        blogLinkModal.classList.remove('blog-modal-active');
    }

    function saveSelection() {
        if (window.getSelection) {
            var sel = window.getSelection();
            if (sel.rangeCount > 0) {
                return sel.getRangeAt(0);
            }
        }
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
        if (window.getSelection) {
            return window.getSelection().toString();
        }
        return '';
    }

    // Update Toolbar State
    function updateToolbarState() {
        toolbarBtns.forEach(function (btn) {
            var command = btn.getAttribute('data-command');
            if (command && document.queryCommandState(command)) {
                btn.classList.add('blog-active');
            } else {
                btn.classList.remove('blog-active');
            }
        });
    }

    if (blogContentEditor) {
        blogContentEditor.addEventListener('keyup', updateToolbarState);
        blogContentEditor.addEventListener('mouseup', updateToolbarState);
    }

    // Form Submission
    if (blogForm) {
        blogForm.addEventListener('submit', function (e) {
            // Transfer content to hidden input
            blogContentHidden.value = blogContentEditor.innerHTML;

            // Show loading state
            blogSubmitBtn.classList.add('blog-loading');
            blogSubmitBtn.disabled = true;
        });
    }

    // Keyboard Shortcuts
    if (blogContentEditor) {
        blogContentEditor.addEventListener('keydown', function (e) {
            if (e.ctrlKey || e.metaKey) {
                switch (e.key.toLowerCase()) {
                    case 'b':
                        e.preventDefault();
                        document.execCommand('bold', false, null);
                        break;
                    case 'i':
                        e.preventDefault();
                        document.execCommand('italic', false, null);
                        break;
                    case 'u':
                        e.preventDefault();
                        document.execCommand('underline', false, null);
                        break;
                    case 'k':
                        e.preventDefault();
                        savedSelection = saveSelection();
                        var selectedText = getSelectedText();
                        blogLinkText.value = selectedText || '';
                        blogLinkUrl.value = '';
                        openModal();
                        break;
                }
                updateToolbarState();
            }
        });
    }

    // Prevent paste with formatting issues
    if (blogContentEditor) {
        blogContentEditor.addEventListener('paste', function (e) {
            e.preventDefault();
            var text = (e.clipboardData || window.clipboardData).getData('text/html');
            if (!text) {
                text = (e.clipboardData || window.clipboardData).getData('text/plain');
            }
            document.execCommand('insertHTML', false, text);
        });
    }

})();

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

        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },

        body: new URLSearchParams({
            action: "get_blog",
            slug: slug
        })

    })

    .then(response => response.json())

    .then(data => {

        // API se actual blog data
        const blog = data.data;

        // Agar blog nahi mila
        if (!data.status || !blog) {
            console.error("Blog not found:", data);
            return;
        }


        // Clean content
        let content = (blog.blog_content || '')
            .replace(/<!--StartFragment-->/g, '')
            .replace(/<!--EndFragment-->/g, '')
            .trim();


        document.getElementById("delete_update_blog_sd")
            .setAttribute(
                'onclick',
                `delete_update_blog(${blog.blog_id})`
            );


        document.getElementById("blog_id_update").value =
            blog.blog_id;


        document.getElementById("blogimg2").src =
            "assets/blog/" + blog.blog_img;


        document.getElementById("blogTitle2").value =
            blog.blog_title;


        document.getElementById("blogAuthor2").value =
            blog.blog_author;


        // Editor
        const editor =
            document.getElementById("blogContentEditor2");


        editor.innerHTML = content;


        document.getElementById("blogContentHidden2").value =
            content;


        // User edit kare to hidden update ho
        editor.oninput = function () {

            document.getElementById("blogContentHidden2").value =
                this.innerHTML;

        };

    })

    .catch(error => {

        console.error("API Error:", error);

    });
}


function cancel_update_blog() {
    let update_blog_form = document.getElementById("update_blog_form")
    let card_into = document.getElementById("vaweca")
    document.getElementById("btn_update_sadcarlodasas").classList.add("show_add_from")

    document.getElementById("delete_update_blog_sd").removeAttribute("onclick")

    document.getElementById("adeac").classList.remove("show_add_from")
    document.getElementById("btn_update_sadcarlod").classList.add("show_add_from")
    card_into.classList.remove("show_add_from")
    update_blog_form.classList.add("show_add_from")
}

function delete_update_blog(blog_id) {

    if (!confirm("Are you sure you want to delete this Blog?")) {
        return;
    }

    fetch("include/apis.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams({
            action: "delete_blog",
            id: blog_id
        })
    })
        .then(response => response.json())
        .then(data => {

            console.log(data);

            if (data.status) {
                alert(data.message);

                // page reload
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

    console.log(bta)
    let detalis_box = document.getElementById("blg-modal-bg")

    detalis_box.style.opacity = '1';
    detalis_box.style.pointerEvents = 'auto';


    // content fill in box

    let blog_img = document.getElementById("blg-modal-img");
    let blog_witer = document.getElementById("blg-modal-tag");
    let blog_title = document.getElementById("blg-modal-title");
    let blg_meta_data = document.getElementById("blg-modal-meta");
    let blg_content_long_desc = document.getElementById("blg-modal-content");

    blog_img.src = `assets/blog/${bta.blog_img}`;
    blog_title.innerHTML = bta.blog_title;
    blg_meta_data.innerHTML = bta.blog_meta_desc;
    blg_content_long_desc.innerHTML = bta.blog_content;
}



// document.getElementById("blg-modal-close").addEventListener("click", () => {

//     let detalis_box = document.getElementById("blg-modal-bg")
//     let blog_img = document.getElementById("blg-modal-img");
//     let blog_title = document.getElementById("blg-modal__title");
//     let blg_meta_data = document.getElementById("blg-modal__meta");
//     let blg_content_long_desc = document.getElementById("blg-modal-content");
//     detalis_box.style.opacity = '0';
//     detalis_box.style.pointerEvents = 'none';

//     blog_img.src = `assets/blog/`;
//     blog_title.innerHTML = "";
//     blg_meta_data.innerHTML = "";
//     blg_content_long_desc.innerHTML = "";




// })