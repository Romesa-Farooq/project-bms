<?php include 'includes/header.php'; ?>

<style>
    .blog-page {
        background: #eeeeee;
        min-height: calc(100vh - 60px);
        padding: 12px 0;
    }

    .blog-container {
        background: #ffffff;
        border: 1px solid #dcdcdc;
        border-radius: 5px;
        padding: 36px 12px 20px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .blog-title {
        font-size: 36px;
        font-weight: 600;
        color: #444;
        margin: 0 0 14px 24px;
    }

    .blog-title i {
        margin-right: 10px;
    }

    .blog-close {
        margin-left: 24px;
        margin-bottom: 22px;
        background: #3199bd;
        border-color: #2584a5;
        color: #fff;
        padding: 7px 18px;
        border-radius: 4px;
    }

    .blog-close:hover {
        background: #2789aa;
        color: #fff;
    }

    .blog-divider {
        border-top: 1px solid #ddd;
        margin: 0 -12px 8px;
    }

    .blog-scroll {
        height: 22px;
        overflow-x: auto;
        overflow-y: hidden;
        border: 1px solid #bbb;
        border-radius: 4px;
        margin: 0 12px 5px;
        background: #fff;
    }

    .blog-scroll-content {
        width: 1800px;
        height: 1px;
    }

    .blog-add-title {
        font-size: 23px;
        font-weight: 600;
        color: #555;
        margin: 0 12px 8px;
    }

    .editor-wrapper {
        margin: 0 12px;
        border: 1px solid #ccc;
        background: #fff;
    }

    .editor-toolbar {
        min-height: 50px;
        background: #f5f5f5;
        border-bottom: 1px solid #ccc;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        padding: 5px 8px;
        gap: 2px;
    }

    .editor-toolbar select {
        height: 34px;
        border: 0;
        background: transparent;
        padding: 0 12px;
        color: #555;
    }

    .editor-button {
        width: 34px;
        height: 34px;
        border: 0;
        background: transparent;
        color: #555;
        font-size: 16px;
        border-radius: 3px;
    }

    .editor-button:hover {
        background: #ddd;
    }

    .editor-separator {
        height: 28px;
        width: 1px;
        background: #ccc;
        margin: 0 5px;
    }

    .blog-editor {
        width: 100%;
        height: 270px;
        border: 0;
        resize: vertical;
        padding: 12px;
        outline: none;
        font-size: 15px;
    }

    .editor-status {
        height: 30px;
        border-top: 1px solid #ccc;
        background: #fafafa;
        position: relative;
    }

    .editor-resize {
        position: absolute;
        right: 4px;
        bottom: 2px;
        color: #888;
        font-size: 18px;
    }

    .blog-save {
        margin: 22px 12px 0;
        background: #3199bd;
        border-color: #2584a5;
        color: #fff;
        padding: 7px 17px;
        border-radius: 4px;
    }

    .blog-save:hover {
        background: #2789aa;
        color: #fff;
    }

    @media (max-width: 768px) {
        .blog-title {
            font-size: 28px;
        }

        .editor-toolbar {
            overflow-x: auto;
            flex-wrap: nowrap;
        }

        .blog-editor {
            height: 250px;
        }
    }
</style>

<div class="blog-page">

    <div class="container-fluid blog-container">

        <h1 class="blog-title">
            <i class="bi bi-list"></i>
            View Employee Blog
        </h1>

        <a href="index.php" class="btn blog-close">
            Close
        </a>

        <div class="blog-divider"></div>

        <div class="blog-scroll">
            <div class="blog-scroll-content"></div>
        </div>

        <h2 class="blog-add-title">
            Add New:
        </h2>

        <div class="editor-wrapper">

            <div class="editor-toolbar">

                <select>
                    <option>Styles</option>
                </select>

                <div class="editor-separator"></div>

                <select>
                    <option>Format</option>
                </select>

                <div class="editor-separator"></div>

                <select>
                    <option>Font</option>
                </select>

                <div class="editor-separator"></div>

                <select>
                    <option>Size</option>
                </select>

                <div class="editor-separator"></div>

                <button type="button" class="editor-button">
                    <strong>B</strong>
                </button>

                <button type="button" class="editor-button">
                    <em>I</em>
                </button>

                <button type="button" class="editor-button">
                    <u>U</u>
                </button>

                <div class="editor-separator"></div>

                <button type="button" class="editor-button">
                    ↶
                </button>

                <button type="button" class="editor-button">
                    ↷
                </button>

                <button type="button" class="editor-button">
                    ✂
                </button>

                <button type="button" class="editor-button">
                    📋
                </button>

                <button type="button" class="editor-button">
                    🔍
                </button>

                <div class="editor-separator"></div>

                <button type="button" class="editor-button">
                    ⇤
                </button>

                <button type="button" class="editor-button">
                    ⇥
                </button>

                <button type="button" class="editor-button">
                    ☰
                </button>

                <button type="button" class="editor-button">
                    ☷
                </button>

                <button type="button" class="editor-button">
                    ≡
                </button>

                <button type="button" class="editor-button">
                    ≣
                </button>

                <button type="button" class="editor-button">
                    ≡
                </button>

                <div class="editor-separator"></div>

                <button type="button" class="editor-button">
                    🖼
                </button>

                <button type="button" class="editor-button">
                    ▦
                </button>

                <button type="button" class="editor-button">
                    🔗
                </button>

                <button type="button" class="editor-button">
                    ☺
                </button>

                <button type="button" class="editor-button">
                    A
                </button>

                <button type="button" class="editor-button">
                    <strong>A</strong>
                </button>

                <button type="button" class="editor-button">
                    ◈
                </button>

                <button type="button" class="editor-button">
                    Source
                </button>

                <button type="button" class="editor-button">
                    ⛶
                </button>

            </div>

            <textarea
                class="blog-editor"
                id="blogContent"
                placeholder=""
            ></textarea>

            <div class="editor-status">
                <span class="editor-resize">
                    ◢
                </span>
            </div>

        </div>

        <button
            type="button"
            class="btn blog-save"
            onclick="saveBlog()"
        >
            Save
        </button>

    </div>

</div>

<script>
    function saveBlog() {
        const content = document.getElementById('blogContent').value.trim();

        if (content === '') {
            alert('Please enter blog content.');
            return;
        }

        alert('Blog saved successfully.');
    }
</script>

<?php include 'includes/footer.php'; ?>