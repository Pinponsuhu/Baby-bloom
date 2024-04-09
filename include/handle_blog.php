<?php 
    $title = $_POST["title"];
    $description = $_POST["description"];
    $cover_image_name = $_FILES["cover_image"]["name"];
    $cover_image_tmp_name = $_FILES["cover_image"]["tmp_name"];

    $allowed_extensions = array('png', 'jpeg', 'jpg');
    $file_extension = strtolower(pathinfo($cover_image_name, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_extensions)) {
        echo "Invalid file extension. Allowed extensions: " . implode(', ', $allowed_extensions);
    } else {
        $upload_directory = 'uploads/';
        $target_file = $upload_directory . $cover_image_name;
        if (move_uploaded_file($cover_image_tmp_name, $target_file)) {
            $sql = "INSERT INTO blogs (title, description, cover_image) VALUES ('$title', '$description', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "Blog inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Failed to upload file";
        }
    }
?>