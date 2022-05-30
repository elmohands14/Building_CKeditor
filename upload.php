<?php
// print_r($_FILES);
if(isset($_FILES['upload']['name'])){
    $file_name = $_FILES['upload']['name'];
    $file_timp = $_FILES['upload']['tmp_name'];
    $target = "upload/";
    
    $func = $_GET['CKEditorFuncNum'];
    $url = "upload/" . $file_name;
    $massage = '';
    echo '<script>' ;
    echo 'window.parent.CKEDITOR.tools.callFunction("'.$func.'","'.$url.'","'.$massage.'")';
    echo '</script>';
}



?>


