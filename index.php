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
<div id = "listdiv" style = "display:none"><?php

echo file_get_contents("list.txt");

?></div>
<p>
    <a href = "editor.php">editor.php</a>
</p>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<div id = "imagescroll">
    
</div>

<script>
    imagenames = document.getElementById("listdiv").innerHTML.split(",");
    for(var index = 0;index < imagenames.length;index++){
        if(imagenames[index].length> 2){
            var newimg = document.createElement("IMG");
            newimg.src = "images/" + imagenames[index];
            document.getElementById("imagescroll").appendChild(newimg);
        }
    }
    
</script>
<style>
#imagescroll{
    position:absolute;
    top:25%;
    bottom:0px;
    left:0px;
    right:0px;
    overflow:scroll;
}
#imagescroll img{
    display:block;
    margin:auto;
    width:25%;
}
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