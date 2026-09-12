 <?php

    session_start();

    if (isset($_SESSION['user_id'])) {

        header("Location: admin.php");
        exit();
    }

    // Agar login nahi hai to niche login page ka HTML chalega

    ?>
 <?php include "admin_access/db_config.php" ?>


 <style>

 </style>

 <section>
     <div id="orders" class="page ">
         <div
             style="display: flex; justify-content: space-between; margin-bottom: 25px; flex-wrap: wrap; gap: 10px;">
             <h2>Blog Management</h2>
             <!-- <button class="btn btn-outline">Export CSV</button> -->
         </div>
         <div class="card">
             <div class="table-container">
                 <!-- blog contect add start here -->

                 <div class="blog_nav">
                     <ul>
                         <li class="search_btr">
                             <label for="Search">Search :-</label>
                             <input type="text" placeholder="Enter the Blog ID or Title">
                         </li>
                         <li id="adeac">
                             <button id="btn_add_sadcarlod" class="btn btn-primary" onclick="
                                        let form=document.getElementById('add_newblog_form');
                                        let btn=document.getElementById('btn_add_sadcarlod');
                                        let blog_cards=document.getElementById('vaweca');

                                        form.classList.toggle('show_add_from');

                                        blog_cards.classList.toggle('show_add_from')
                                        btn.innerHTML=form.classList.contains('show_add_from')
                                        ? 'Add New Blog'
                                        : 'Cancel';
                                        ">
                                 Add New Blog
                             </button>

                         </li>
                         <li id="btn_update_sadcarlod" class="show_add_from">

                             <div style="padding: 0 20px;display: flex;gap: 10px;">
                                 <div>
                                     <button class="btn btn-primary" onclick="cancel_update_blog()">
                                         Cancel
                                     </button>
                                 </div>
                                 <div id="btn_update_sadcarlodasas" class="show_add_from">
                                     <button class="btn btn-primary" id="delete_update_blog_sd">
                                         Delete Blog
                                     </button>
                                 </div>
                             </div>

                         </li>

                     </ul>
                 </div>

                 <!-- line -->
                 <div class="devidedLine"> Blogs Contect </div>

                 <!-- blogs card -->
                 <div class="show_bolg" id="vaweca">
                     <div class="card_into">

                         <!-- cards -->
                         <?php

                            $sql = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 8";
                            $result = mysqli_query($mydb, $sql);

                            while ($blog = mysqli_fetch_assoc($result)) {
                            ?>

                             <div class="blog_card">

                                 <div>
                                     <img src="assets/blog/<?php echo $blog['blog_img']; ?>" alt="<?php echo $blog['blog_title']; ?>">
                                 </div>

                                 <div class="blog_content">

                                     <div class="blog_meta">
                                         <span class="blog_author">
                                             <?php echo $blog['blog_author']; ?>
                                         </span>

                                         <span>
                                             <!-- <?php echo date("d M Y", $blog['created_at']); ?> -->
                                             <?php
                                                if ($blog['updated_at'] == "Null") {
                                                    echo timeAgo($blog['created_at']);
                                                } else {
                                                    echo timeAgo($blog['updated_at']) . " Updated";
                                                }
                                                ?>
                                         </span>
                                     </div>

                                     <h3 class="blog_title">
                                         <?php echo $blog['blog_title']; ?>
                                     </h3>

                                     <p class="blog_desc">
                                         <?php echo substr(strip_tags($blog['blog_content']), 0, 120); ?>...
                                     </p>

                                     <button onclick="edit_blog('<?php echo $blog['blog_slug']; ?>')" class="blog_btn">
                                         Edit Blog
                                     </button>

                                 </div>

                             </div>

                         <?php } ?>



                     </div>
                 </div>

                 <!-- add new form -->
                 <div id="add_newblog_form" class="add_fromw show_add_from">
                     <section class="blog-upload-section">
                         <div class="blog-upload-container">
                             <h1 class="blog-upload-title">Create New Blog</h1>

                             <form id="blogUploadForm" method="POST"
                                 enctype="multipart/form-data">

                                 <!-- Image Upload -->
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label">Blog Image *</label>
                                     <div class="blog-image-upload-area" id="blogImageUploadArea">
                                         <input type="file" name="blog_image" id="blogImageInput"
                                             accept="image/*" required>
                                         <div class="blog-image-placeholder" id="blogImagePlaceholder">
                                             <svg xmlns="[w3.org](http://www.w3.org/2000/svg)" width="48"
                                                 height="48" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="1.5">
                                                 <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                                 <circle cx="8.5" cy="8.5" r="1.5" />
                                                 <polyline points="21 15 16 10 5 21" />
                                             </svg>
                                             <p>Click or drag image here</p>
                                         </div>
                                         <img id="blogImagePreview" class="blog-image-preview" alt="Preview">
                                     </div>
                                 </div>
                                 <!-- Blog Title -->
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label" for="blogTitle">Blog Title *</label>
                                     <input type="text" name="blog_title" id="blogTitle"
                                         class="blog-upload-input" placeholder="Enter blog title" required>
                                 </div>
                                 <!-- Blog Author -->
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label" for="blogAuthor">Author Name *</label>
                                     <input type="text" name="blog_author" id="blogAuthor"
                                         class="blog-upload-input" placeholder="Enter author name" required>
                                 </div>
                                 <!-- Blog Content Editor -->
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label">Blog Content *</label>

                                     <!-- Toolbar -->
                                     <div class="blog-editor-toolbar">
                                         <select id="blogFontSize" class="blog-toolbar-select" title="Font Size">
                                             <option value="1">Small</option>
                                             <option value="3" selected>Normal</option>
                                             <option value="5">Large</option>
                                             <option value="7">Extra Large</option>
                                         </select>

                                         <div class="blog-toolbar-divider"></div>

                                         <button type="button" class="blog-toolbar-btn" data-command="bold"
                                             title="Bold">
                                             <strong>B</strong>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn" data-command="italic"
                                             title="Italic">
                                             <em>I</em>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn" data-command="underline"
                                             title="Underline">
                                             <u>U</u>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="strikeThrough" title="Strikethrough">
                                             <s>S</s>
                                         </button>

                                         <div class="blog-toolbar-divider"></div>

                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="justifyLeft" title="Align Left">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M3 3h18v2H3V3zm0 4h12v2H3V7zm0 4h18v2H3v-2zm0 4h12v2H3v-2zm0 4h18v2H3v-2z" />
                                             </svg>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="justifyCenter" title="Align Center">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M3 3h18v2H3V3zm3 4h12v2H6V7zm-3 4h18v2H3v-2zm3 4h12v2H6v-2zm-3 4h18v2H3v-2z" />
                                             </svg>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="justifyRight" title="Align Right">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M3 3h18v2H3V3zm6 4h12v2H9V7zm-6 4h18v2H3v-2zm6 4h12v2H9v-2zm-6 4h18v2H3v-2z" />
                                             </svg>
                                         </button>

                                         <div class="blog-toolbar-divider"></div>

                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="insertUnorderedList" title="Bullet List">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M4 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm4-15h14v2H8V5zm0 8h14v2H8v-2zm0 8h14v2H8v-2z" />
                                             </svg>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="insertOrderedList" title="Numbered List">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M2 5h2v2H3v1h2v1H2V7.5h1v-1H2V5zm0 7h2.5v.5H3v1h1.5V14H2v-2zm0 6h2v.5H3v1h1v.5H2v-1.5h.5v-1H2V18zM8 5h14v2H8V5zm0 6h14v2H8v-2zm0 6h14v2H8v-2z" />
                                             </svg>
                                         </button>

                                         <div class="blog-toolbar-divider"></div>

                                         <button type="button" class="blog-toolbar-btn" id="blogLinkBtn"
                                             title="Insert Link">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2">
                                                 <path
                                                     d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                 <path
                                                     d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                             </svg>
                                         </button>

                                         <div class="blog-toolbar-divider"></div>

                                         <div class="blog-color-picker-wrap">
                                             <button type="button" class="blog-toolbar-btn blog-color-btn"
                                                 title="Text Color">
                                                 <span class="blog-color-icon">A</span>
                                                 <span class="blog-color-bar" id="blogTextColorBar"></span>
                                             </button>
                                             <input type="color" id="blogTextColor" class="blog-color-input"
                                                 value="#000000">
                                         </div>

                                         <div class="blog-color-picker-wrap">
                                             <button type="button" class="blog-toolbar-btn blog-color-btn"
                                                 title="Background Color">
                                                 <svg width="16" height="16" viewBox="0 0 24 24"
                                                     fill="currentColor">
                                                     <path
                                                         d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                                 </svg>
                                                 <span class="blog-color-bar" id="blogBgColorBar"></span>
                                             </button>
                                             <input type="color" id="blogBgColor" class="blog-color-input"
                                                 value="#ffffff">
                                         </div>
                                     </div>

                                     <!-- Content Editable Area -->
                                     <div id="blogContentEditor" class="blog-content-editor"
                                         contenteditable="true" placeholder="Write your blog content here...">
                                     </div>
                                     <input type="hidden" name="blog_content" id="blogContentHidden">
                                 </div>
                                 <!-- Submit Button -->
                                 <div class="blog-upload-actions">
                                     <button type="submit" name="blog_submit" class="blog-submit-btn">
                                         <span class="blog-btn-text">Publish Blog</span>
                                         <span class="blog-btn-loader"></span>
                                     </button>
                                 </div>

                             </form>
                         </div>
                     </section>

                     <!-- Link Modal -->
                     <div class="blog-modal-overlay" id="blogLinkModal">
                         <div class="blog-modal">
                             <div class="blog-modal-header">
                                 <h3>Insert Link</h3>
                                 <button type="button" class="blog-modal-close"
                                     id="blogModalClose">&times;</button>
                             </div>
                             <div class="blog-modal-body">
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label" for="blogLinkUrl">URL</label>
                                     <input type="url" id="blogLinkUrl" class="blog-upload-input"
                                         placeholder="[example.com](https://example.com)">
                                 </div>
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label" for="blogLinkText">Link Text</label>
                                     <input type="text" id="blogLinkText" class="blog-upload-input"
                                         placeholder="Click here">
                                 </div>
                             </div>
                             <div class="blog-modal-footer">
                                 <button type="button" class="blog-modal-btn blog-modal-cancel"
                                     id="blogLinkCancel">Cancel</button>
                                 <button type="button" class="blog-modal-btn blog-modal-confirm"
                                     id="blogLinkConfirm">Insert</button>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- update blog  -->
                 <div id="update_blog_form" class="add_fromw show_add_from">
                     <section class="blog-upload-section">
                         <div class="blog-upload-container">
                             <h1 class="blog-upload-title">Update Blog</h1>

                             <form id="blogUploadForm" method="POST"
                                 enctype="multipart/form-data">

                                 <!-- Image Upload -->

                                 <input type="text" name="blog_id_name" id="blog_id_update" readonly hidden>

                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label">Blog Image *</label>
                                     <div class="blog-image-upload-area" id="blogImageUploadArea">
                                         <input type="file" name="blog_image2" id="blogImageInput2"
                                             accept="image/*">
                                         <div class="blog-image-placeholder" id="blogImagePlaceholder">
                                             <svg xmlns="[w3.org](http://www.w3.org/2000/svg)" width="48"
                                                 height="48" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="1.5">
                                                 <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                                 <circle cx="8.5" cy="8.5" r="1.5" />
                                                 <polyline points="21 15 16 10 5 21" />
                                             </svg>
                                             <p>Click or drag image here</p>
                                         </div>
                                         <img id="blogImagePreview" class="blog-image-preview" alt="Preview">
                                     </div>
                                 </div>

                                 <div style="width: 170px;height: 180px;">
                                     <img id="blogimg2" alt="" style="object-fit: cover;width: 100%;">
                                 </div>
                                 <!-- Blog Title -->
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label" for="blogTitle">Blog Title *</label>
                                     <input type="text" name="blog_title2" id="blogTitle2"
                                         class="blog-upload-input" placeholder="Enter blog title" required>
                                 </div>
                                 <!-- Blog Author -->
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label" for="blogAuthor">Author Name *</label>
                                     <input type="text" name="blog_author2" id="blogAuthor2"
                                         class="blog-upload-input" placeholder="Enter author name" required>
                                 </div>
                                 <!-- Blog Content Editor -->
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label">Blog Content *</label>

                                     <!-- Toolbar -->
                                     <div class="blog-editor-toolbar">
                                         <select id="blogFontSize" class="blog-toolbar-select" title="Font Size">
                                             <option value="1">Small</option>
                                             <option value="3" selected>Normal</option>
                                             <option value="5">Large</option>
                                             <option value="7">Extra Large</option>
                                         </select>

                                         <div class="blog-toolbar-divider"></div>

                                         <button type="button" class="blog-toolbar-btn" data-command="bold"
                                             title="Bold">
                                             <strong>B</strong>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn" data-command="italic"
                                             title="Italic">
                                             <em>I</em>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn" data-command="underline"
                                             title="Underline">
                                             <u>U</u>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="strikeThrough" title="Strikethrough">
                                             <s>S</s>
                                         </button>

                                         <div class="blog-toolbar-divider"></div>

                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="justifyLeft" title="Align Left">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M3 3h18v2H3V3zm0 4h12v2H3V7zm0 4h18v2H3v-2zm0 4h12v2H3v-2zm0 4h18v2H3v-2z" />
                                             </svg>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="justifyCenter" title="Align Center">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M3 3h18v2H3V3zm3 4h12v2H6V7zm-3 4h18v2H3v-2zm3 4h12v2H6v-2zm-3 4h18v2H3v-2z" />
                                             </svg>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="justifyRight" title="Align Right">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M3 3h18v2H3V3zm6 4h12v2H9V7zm-6 4h18v2H3v-2zm6 4h12v2H9v-2zm-6 4h18v2H3v-2z" />
                                             </svg>
                                         </button>

                                         <div class="blog-toolbar-divider"></div>

                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="insertUnorderedList" title="Bullet List">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M4 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm4-15h14v2H8V5zm0 8h14v2H8v-2zm0 8h14v2H8v-2z" />
                                             </svg>
                                         </button>
                                         <button type="button" class="blog-toolbar-btn"
                                             data-command="insertOrderedList" title="Numbered List">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                 <path
                                                     d="M2 5h2v2H3v1h2v1H2V7.5h1v-1H2V5zm0 7h2.5v.5H3v1h1.5V14H2v-2zm0 6h2v.5H3v1h1v.5H2v-1.5h.5v-1H2V18zM8 5h14v2H8V5zm0 6h14v2H8v-2zm0 6h14v2H8v-2z" />
                                             </svg>
                                         </button>

                                         <div class="blog-toolbar-divider"></div>

                                         <button type="button" class="blog-toolbar-btn" id="blogLinkBtn"
                                             title="Insert Link">
                                             <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2">
                                                 <path
                                                     d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                 <path
                                                     d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                             </svg>
                                         </button>

                                         <div class="blog-toolbar-divider"></div>

                                         <div class="blog-color-picker-wrap">
                                             <button type="button" class="blog-toolbar-btn blog-color-btn"
                                                 title="Text Color">
                                                 <span class="blog-color-icon">A</span>
                                                 <span class="blog-color-bar" id="blogTextColorBar"></span>
                                             </button>
                                             <input type="color" id="blogTextColor" class="blog-color-input"
                                                 value="#000000">
                                         </div>

                                         <div class="blog-color-picker-wrap">
                                             <button type="button" class="blog-toolbar-btn blog-color-btn"
                                                 title="Background Color">
                                                 <svg width="16" height="16" viewBox="0 0 24 24"
                                                     fill="currentColor">
                                                     <path
                                                         d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                                 </svg>
                                                 <span class="blog-color-bar" id="blogBgColorBar"></span>
                                             </button>
                                             <input type="color" id="blogBgColor" class="blog-color-input"
                                                 value="#ffffff">
                                         </div>
                                     </div>

                                     <!-- Content Editable Area -->
                                     <div id="blogContentEditor2" class="blog-content-editor"
                                         contenteditable="true" placeholder="Write your blog content here...">
                                     </div>
                                     <input type="hidden" name="blog_content2" id="blogContentHidden2">
                                 </div>
                                 <!-- Submit Button -->
                                 <div class="blog-upload-actions">
                                     <button type="submit" name="update_blog15515" class="blog-submit-btn">
                                         <span class="blog-btn-text">Update Blog</span>
                                         <span class="blog-btn-loader"></span>
                                     </button>
                                 </div>

                             </form>
                         </div>
                     </section>

                     <!-- Link Modal -->
                     <div class="blog-modal-overlay" id="blogLinkModal">
                         <div class="blog-modal">
                             <div class="blog-modal-header">
                                 <h3>Insert Link</h3>
                                 <button type="button" class="blog-modal-close"
                                     id="blogModalClose">&times;</button>
                             </div>
                             <div class="blog-modal-body">
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label" for="blogLinkUrl">URL</label>
                                     <input type="url" id="blogLinkUrl" class="blog-upload-input"
                                         placeholder="[example.com](https://example.com)">
                                 </div>
                                 <div class="blog-upload-group">
                                     <label class="blog-upload-label" for="blogLinkText">Link Text</label>
                                     <input type="text" id="blogLinkText" class="blog-upload-input"
                                         placeholder="Click here">
                                 </div>
                             </div>
                             <div class="blog-modal-footer">
                                 <button type="button" class="blog-modal-btn blog-modal-cancel"
                                     id="blogLinkCancel">Cancel</button>
                                 <button type="button" class="blog-modal-btn blog-modal-confirm"
                                     id="blogLinkConfirm">Insert</button>
                             </div>
                         </div>
                     </div>
                 </div>



                 <!-- blog contect add end here -->

             </div>
         </div>
     </div>
 </section>