<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Image Upload</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="post" action="upload.php" enctype="multipart/form-data">
        <div>New photo:</div>
            <div>
                <input type="file" id="ImgInp" name="fileToUpload" accept="image/*" onchange="loadFile(event)">
                <img id="output">
            </div>
        <p><input type="submit" value="Upload Image" name="submit"></p>
    </form>

    <script>
        var loadFile = function (event){
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>