<?php
if(isset($_FILES['file'])){
    $errors = array();
    $allowed_extensions = array("jpeg", "jpg", "png", "gif" ,"doc","docx","pdf");
    
    foreach($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if(!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "$file_name: Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, JPEG, JPG, PNG, atau GIF.";
        }
        if($file_size > 2097152) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB.";
        }
        if(empty($errors)) {
            move_uploaded_file($file_tmp, "document/" . $file_name);
            echo "$file_name berhasil diunggah.<br>";
        }
    }

    if(!empty($errors)){
        echo implode("<br>", $errors);
    }
}


?>

