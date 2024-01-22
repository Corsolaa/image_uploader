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
    <link rel="stylesheet" href="https://www.brunobouwman.nl/standard.css">
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
            <h1>Upload images here</h1>
            <label for="fileToUpload" class="image_label stripe_background">
                <span>Click here to upload image</span>
                <input type="file" name="fileToUpload" class="image_input" id="fileToUpload"
                       accept=".webp, .png, .jpeg, .gif" multiple>
            </label>

            <div class="queue">
                <div class="image_wrapper">
                    <img src="https://www.brunobouwman.nl/images/src/animals_draw.webp" alt="">
                    <div class="error">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="remove">
                        remove
                    </div>
                </div>
                <div class="image_wrapper">
                    <img src="https://www.brunobouwman.nl/images/src/animals_draw.webp" alt="">
                    <div class="error">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="remove">
                        remove
                    </div>
                </div>
                <div class="image_wrapper">
                    <img src="https://www.brunobouwman.nl/images/src/animals_draw.webp" alt="">
                    <div class="error">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="remove">
                        remove
                    </div>
                </div>
                <div class="image_wrapper">
                    <img src="https://www.brunobouwman.nl/images/src/animals_draw.webp" alt="">
                    <div class="error">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="remove">
                        remove
                    </div>
                </div>
            </div>
            <input class="stripe_background" type="submit" value="Upload Images" name="submit">
        </form>
    </section>
</main>

<script src="https://kit.fontawesome.com/947c4c8fa0.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
