<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["media"]["name"]);
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Allow only image and video formats
$allowedTypes = ["jpg", "jpeg", "png", "gif", "mp4", "webm", "ogg"];

if (in_array($fileType, $allowedTypes)) {
    if (move_uploaded_file($_FILES["media"]["tmp_name"], $targetFile)) {
        echo "Upload successful: <a href='$targetFile' target='_blank'>$targetFile</a>";
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Invalid file type. Only images and videos allowed.";
}
?>
