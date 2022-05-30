

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script> <!-- here include library CKeditor --->
 
</head>
<body>
    <form action="">
        <textarea name="editor" id="editor" cols="30" rows="10">  <!-----  here place convert to CKeditor  ----->

        </textarea>
    </form>
    

<script>
    CKEDITOR.replace('editor', {    // here tool convert element to CKeditor
        filebrowserUploadUrl: 'upload.php',  // here send data to page process and upload file to server
        filebrowserUploadMethod: 'form'
    });
</script>
 
</body>
</html>