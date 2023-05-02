<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Crop Images then Upload</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required accept=".jpg, .png, .jpeg, .gif">
    <input type="submit" name="submit"/>
</form>

</body>
</html>