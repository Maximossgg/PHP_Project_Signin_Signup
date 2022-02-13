<!DOCTYPE html>
<html lang="en">

<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Maximoss | Infos</title>
</head>

<body>
    <?php
    include "connect.php";
    $first = $_POST['firstn'];
    $last = $_POST['lastn'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = "INSERT INTO infos VALUES ('$first','$last','$phone','$email');";
    $result = mysqli_query($conn, $sql);
    ?>
    <p class="d-flex justify-content-center" style="font-size:180px">Image Upload </p>
    <div class="d-flex justify-content-center">
        <a href="image.php"> <button type="submit" value="Upload an Image" class="btn btn-light">Upload your image</button> </a>
    </div>
</body>

</html>