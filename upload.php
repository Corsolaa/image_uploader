<?php
if(isset($_POST["submit"]) && $_FILES["fileToUpload"]["size"] != 0) {
    function getCounterDigit() {
        // Read the JSON file.
        $json = file_get_contents("uploaded/dex.json");
        $jsonData = json_decode($json, true);

        $data["counter"] = $jsonData["counter"] + 1;

        // Write the JSON file.
        $newJsonString = json_encode($data);
        file_put_contents('uploaded/dex.json', $newJsonString);

        return $jsonData["counter"];
    }

    function getFileExtension($file_name): string
    {
        return "." . substr(strrchr($file_name,'.'),1);
    }

    function allowedImages($extension): bool
    {
        return match ($extension) {
            "image/png", "image/gif", "image/webp", "image/jpeg" => true,
            default => false,
        };
    }

    $targetDir = "uploaded/";
    $fileInfo = $_FILES["fileToUpload"];
    $check = getimagesize($fileInfo["tmp_name"]);

    // Check if the image is an actual image.
    if (!$check) {
        header("Location: index.php?error=not_image");
        die();
    }

    // Check if image is over 16MB.
    if ($fileInfo["size"] > 16000000) {
        header("Location: index.php?error=file_large");
        die();
    }

    // Check if image extension is allowed.
    if (!allowedImages($check['mime'])) {
        header("Location: index.php?error=not_image");
        die();
    }

    // Upload the file to the server.
    $target_file = $targetDir . basename(getCounterDigit() . getFileExtension($fileInfo["name"]));
    if (move_uploaded_file($fileInfo["tmp_name"], $target_file)) {
        header("Location: index.php?done");
    } else {
        header("Location: index.php?error=unknown");
    }
    die();
} else {
    header("Location: index.php");
}
