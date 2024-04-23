<?php
// if(isset($_POST["submit"])){
//     $targetDirectory = "../uploads";
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

//     if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
//         echo "File berhasil diunggah.";
//     }else{
//         echo "Gagal Mengunggah file.";
//     }
// }

// if(isset($_POST["submit"])){
//     $targetDirectory = "../uploads/"; 
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");

//     $maxFileSize = 5 * 1024 * 1024;

//     if(in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
//         if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
//             echo "File berhasil diunggah.";
//         }else{
//             echo "Gagal Mengunggah file.";
//         }
//     }else{
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }

// if (isset($_POST["submit"])) {
//     $targetDirectory = "../uploads/"; 
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");
//     $maxFileSize = 5 * 1024 * 1024;

//     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah.<br>";

//             echo "<h2>Gambar yang diunggah:</h2>";
//             echo "<img src='$targetFile' alt='Uploaded Image' style='max-width: 100%; height: auto;' />";
//         } else {
//             echo "Gagal mengunggah file.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }

// function createThumbnail($source, $destination, $width) {
//     list($originalWidth, $originalHeight) = getimagesize($source);
//     $height = ($originalHeight / $originalWidth) * $width;

//     $sourceImage = imagecreatefromjpeg($source);
//     $thumbnail = imagecreatetruecolor($width, $height);

//     imagecopyresampled($thumbnail, $sourceImage, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);

//     imagejpeg($thumbnail, $destination);
// }

if(isset($_POST["submit"])){
    $targetDirectory = "C:\laragon\www\dasarWeb\Jobsheet8\Documents";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


    $allowedExtensions = array("txt","pdf","doc","docx");

    $maxFileSize = 10 * 1024 * 1024;

    if(in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
            echo "Dokumen berhasil diunggah.";
        }else{
            echo "Gagal Mengunggah dokumen.";
        }
    }else{
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}

?>