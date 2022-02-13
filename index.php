<!DOCTYPE html>
<html lang="en">

<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Maximoss | Login</title>
</head>

<body>
    <p class="d-flex justify-content-center" style="font-size:150px">Login</p>
    <br>
    <div class="d-flex justify-content-center">
        <form method="post" action="store.php">
            <center>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Apogee N°</span>
                    <input type="text" class="form-control" name="apogee" placeholder="Apogee Number">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Password</span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <input class="btn btn-light" type="submit" value="Connect">
        </form>
        <div style="margin:150px">
            <p class="d-flex justify-content-center">New Student?</p>
            <a class="link" href="signup.php">Click Here</a>
        </div>
    </div>
</body>

</html>