<!DOCTYPE html>
<html lang="en">

<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Maxi | Connection Check</title>
</head>

<body>
    <center>
        <?php
        session_start();
        include('connect.php');
        $apogee = $_POST['apogee'];
        $password = $_POST['password'];
        $_SESSION['apogee'] = $apogee;
        $_SESSION['password'] = $password;

        $username = $_SESSION['apogee'];
        $password = $_SESSION['password'];
        $sql = "select * from connection where apogee = '$apogee' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count != 0) {
            echo "<h1><center> Login successful </center></h1>";
        ?>
            <div class="d-flex justify-content-center">
                <a href="students.php"> <button type="submit" value="All Students" class="btn btn-light">All Students</button> </a>
            </div>

        <?php
        } else {
            echo "<h1> Incorrect Apogee N° or password !</h1>";
        ?>
            <center><a href="index.php"> <input type="submit" class="btn btn-light" value="Try Again"> </a></center>
        <?php
        }
        ?>
    </center>
</body>


</html>