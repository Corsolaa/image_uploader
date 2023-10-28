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

<h1>Welcome handsome</h1>
<form class="upload_image" action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" class="image_input" accept=".webp, .png, .jpeg, .gif">
    <img class="image_demo" src="" alt="Upload demo">
    <input type="submit" value="Upload Image" name="submit">
</form>

<script src="script.js"></script>
</body>
</html>
