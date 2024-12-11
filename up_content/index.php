<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form với TinyMCE</title>
    <!-- Đưa script TinyMCE vào phần <head> -->
    <script src="https://cdn.tiny.cloud/1/c7ejol3dem5j5y7rboiiywzj0cktq0cqqmynes21y4l5vqmt/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    form {
        margin-top: 20px;
    }

    textarea {
        width: 100%;
        height: 300px;
    }
    </style>
</head>

<body>

    <h1>Form Gửi Nội Dung</h1>
    <form id="myForm" action="luu_noi_dung.php" method="POST">
        <label for="tensanpham">Nội dung:</label>
        <input id="tensanpham" name="ten_san_pham">Welcome to TinyMCE!</t>
        <br>
        <label for="content">Nội dung:</label>
        <textarea id="content" name="noi_dung_san_pham">Welcome to TinyMCE!</textarea>
        <br>
        <button type="submit">Gửi</button>
    </form>

    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: [
            'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media',
            'searchreplace', 'table', 'visualblocks', 'wordcount',
            'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker',
            'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage',
            'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags',
            'autocorrect', 'typography', 'inlinecss', 'markdown',
            'importword', 'exportword', 'exportpdf'
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
            'See docs to implement AI Assistant')),
        exportpdf_converter_options: {
            'format': 'Letter',
            'margin_top': '1in',
            'margin_right': '1in',
            'margin_bottom': '1in',
            'margin_left': '1in'
        },
        exportword_converter_options: {
            'document': {
                'size': 'Letter'
            }
        },
        importword_converter_options: {
            'formatting': {
                'styles': 'inline',
                'resets': 'inline',
                'defaults': 'inline'
            }
        },
    });
    </script>

</body>

</html>