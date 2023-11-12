<?php
if ($_GET["error"]) {
    $error_message = "Some unknown error has occurred, please contact support.";
    $error_message = match ($_GET["error"]) {
        "file_large" => "Please keep the image size under 16MB.",
        "not_image" => "Please only upload supported images (jpeg, png, webp, gif)",
        default => "Some unknown error has occurred, please contact support.",
    };
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="description of the website.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="John Spice">

    <title>Image uploader</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.ico">
</head>
<body>

<main>
    <section class="sidebar_image">
        <img src="https://www.brunobouwman.nl/images/src/animals_draw.webp" alt="sidebar background">
    </section>

    <section class="content">
        <div class="circle_overflow"></div>
        <form class="upload_image" action="upload.php" method="post" enctype="multipart/form-data">
            <h1>Upload image here</h1>
            <label for="fileToUpload" class="image_label">
                <span>Click here to upload image</span>
                <input type="file" name="fileToUpload" class="image_input" id="fileToUpload"
                       accept=".webp, .png, .jpeg, .gif">
            </label>
            <img class="image_demo" src="" alt="Upload demo">
            <?php if (isset($error_message)) { ?>
                <p style="color: red" class="error_message"><?php echo $error_message ?></p>
            <?php } ?>
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </section>
</main>

<script src="script.js"></script>
</body>
</html>
