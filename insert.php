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
    if (isset($_POST['apogee']) && isset($_POST['password'])) {
        $apogee = $_POST['apogee'];
        $password = $_POST['password'];
        $sql = "INSERT INTO connection VALUES ('$apogee','$password');";
        $result = mysqli_query($conn, $sql);
    }
    ?>
    <p class="d-flex justify-content-center" style="font-size:150px">Informations</p>
    <div class="d-flex justify-content-center">
        <form method="post" action="data.php">
            <center>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">First Name</span>
                    <input type="text" class="form-control" name="firstn" placeholder="First Name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Last Name</span>
                    <input type="text" class="form-control" name="lastn" placeholder="Last Name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Phone</span>
                    <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="d-flex justify-content-center" id="content">
                    <input class="btn btn-light" type="submit" value="Submit">
        </form>
    </div>
</body>

</html>