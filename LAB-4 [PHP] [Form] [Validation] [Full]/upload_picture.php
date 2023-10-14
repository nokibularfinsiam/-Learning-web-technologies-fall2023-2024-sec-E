<?php

        $picture = $_REQUEST["picture"];
        $allowedFormats = ['jpeg', 'jpg', 'png'];
        $maxFileSize = 4 * 1024 * 1024; // 4MB

        $file = $_FILES['picture'];
        $fileInfo = pathinfo($file['name']);
        $fileExtension = strtolower($fileInfo['extension']);
        if (!in_array($fileExtension, $allowedFormats)) {
            echo "Invalid file format. Please upload a JPEG, JPG, or PNG image.";
        }

        if ($file['size'] > $maxFileSize) {
            echo "File size is too large. Please upload a file that is less than 4MB.";
        }

        else {
            echo "Failed to upload the file. Please try again.";
        }
?>
