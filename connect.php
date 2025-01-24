<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the input data
    $name = htmlspecialchars($_POST['name']);
    $category = htmlspecialchars($_POST['category']);
    $lat = htmlspecialchars($_POST['lat']);
    $long = htmlspecialchars($_POST['long']);

    $image = $_FILES['file'];
    $imagefilename = $image['name'];
    $imagefiletemp = $image['tmp_name'];
    $filename_separate = explode('.',$imagefilename);
    $file_extension = strtolower($filename_separate[1]);
}

include("DB.php");

$upload_image = 'img/'.$imagefilename;
move_uploaded_file($imagefiletemp,$upload_image);


$sql = "INSERT INTO locations (name, category, lat, long_, image)
        VALUES ('$name','$category','$lat','$long','$upload_image')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();}
?>