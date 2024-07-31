<?php
$target_directory = "./packageImages/"; // Directory where files will be stored
$target_file = $target_directory . basename($_FILES["image"]["name"]); // Full path of the uploaded file

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    // File uploaded successfully, store its absolute path in the database
    $absolute_path = realpath($target_file); // Get the absolute path of the uploaded file
    // Now you can store $absolute_path in your database along with other information
    
    // Display a success message
    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
} else {
    // If file upload failed, display an error message
    echo "Sorry, there was an error uploading your file.";
}
?>
