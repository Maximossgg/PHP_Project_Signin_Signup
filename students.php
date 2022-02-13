<!DOCTYPE html>
<html lang="en">

<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Maximoss | All Members</title>
</head>

<body>
    <center>
        <?php
        include "connect.php";
        $sql1 = "SELECT * FROM infos ;";
        $result1 = mysqli_query($conn, $sql1);
        $sql2 = "SELECT * FROM pictures ;";
        $result2 = mysqli_query($conn, $sql2);
        ?>
        <h1>All Students</h1>
        <br>
        <a href="insert.php"><button class="btn btn-primary" type="submit"> Add Student </button></a>
        <br>
        <br>
        <br>
        <table>

            <?php
            while ($rows = $result1->fetch_assoc()) {
                $data = mysqli_fetch_array($result2)
            ?>
                <tr>
                    <td><?php echo $rows['firstn']; ?></td>
                    <td><?php echo $rows['lastn']; ?></td>
                    <td><?php echo "+212".$rows['phone']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><img src="<?php echo $data['filename']; ?>" height="200" width="200"></td>

                </tr>
            <?php
            }
            ?>
        </table>

    </center>
</body>

</html>