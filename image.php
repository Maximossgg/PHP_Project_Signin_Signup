<!DOCTYPE html>
<html>

<head>
    <link href="style.css" rel="stylesheet">
    <title>Maximoss | Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <center>
        <br>
        <br>
        <div class="d-flex justify-content-center" id="content">


            <form class="d-flex justify-content-center" method="POST" action="" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="file" name="uploadfile" value="" class="form-control" id="inputGroupFile02">
                    <button class="input-group-text" for="inputGroupFile02" type="submit" name="upload">Upload</button>
                </div>
            </form>
        </div>
        <br>
        <br>
        <center><a href="index.php"><input class="btn btn-light" type="submit" value="Sign In" </a></center>
        <br>
        <br>
    </center>
</body>

</html>

<?php
error_reporting(0);
?>
<?php
$msg = "";
if (isset($_POST['upload'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = $filename;
    $db = mysqli_connect("localhost", "root", "", "projectphp");
    $sql = "INSERT INTO pictures (filename) VALUES ('$filename')";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}
$result = mysqli_query($db, "SELECT * FROM pictures");
while ($data = mysqli_fetch_array($result)) {
?>
    <img src="<?php echo $data['filename']; ?>" height="200" width="200">
<?php
}
?>