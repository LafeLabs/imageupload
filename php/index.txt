<!doctype html>
<html>
<head>
<title>Image Upload</title>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
-->
<!--Stop Google:-->
<META NAME="robots" CONTENT="noindex,nofollow">
</head>
<body>

<p>
    <a href = "editor.php">editor.php</a>
</p>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<style>
body{
    font-family:Helvetica;
    font-size:1.5em;
}
h1,h2,h3,h4,h5{
    width:100%;
    text-align:center;
}
</style>

</body>
</html>