<?php
require "Dblogin.php";
?>

<!doctype html>
<html lang="vi">
<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        h2 {
            text-align: center;
            margin-top: 80px;
        }
        body {
            background: url("https://img4.thuthuatphanmem.vn/uploads/2020/07/03/background-cong-nghe-dep_034236048.jpg");
            color: white;
        }
        #container {
            width:800px;
            margin: 0 auto;
            margin-top: 100px;
            border: 2px solid lightgreen;
            border-radius: 20px;
        }
        .wrapper {
            width: 650px;
            height: 450px;
            margin: 0 auto;
        }
        #note > form-check > a :hover {
            color: black;
        }
    </style>
</head>
<body>
<h2>👜 Smart IT Shop (Apply to Admin)😉</h2>
<div id="container">
    <div class="wrapper">

        <br>
        <h4 style="text-align: center">Login Panel</h4>
        <hr>
        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label" style="margin-left: 160px"><h5>Email :</h5></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Fill your email">
                <?php
                if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    if ($email == "") {echo "<br><div style='color: red; margin-left: 270px'>(*) Please fill your email</div>";}
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="margin-left: 160px"><h5>Password :</h5></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Fill your password">
                <?php
                if (isset($_POST['login'])) {
                    $password = $_POST['password'];
                    if ($password == "") {echo "<br><div style='color: red; margin-left: 270px'>(*) Please fill your password</div>";}
                }
                ?>
            </div>
            <div id="note">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style="color: lightsalmon">Remember this account</label>
                    <?php
                    if (isset($_POST['login'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        if (isset($_POST['remember'])) {
                            setcookie('email', $email);
                            setcookie('password', $password);
                        }
                        else{
                            setcookie('email', '');
                            setcookie('password', '');
                        }
                    }
                    ?>
                    <a style="text-decoration: none; float: right; color: lightsalmon;" href="register.php">Create new account</a>
                </div>
                <div id="register">

                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100px; margin-left: 270px " name="login">Login</button>
        </form>
    </div>
    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email != "" && $password != "") {
            $conn = new mysqli('localhost', 'root', '', 'sale') or die("Connect failed");
            $sql = "select * from  loginAdmin where email='$email' and pass='$password'";
            $result = $conn->query($sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<script>alert('Login successful!');window.location='http://localhost/project/trangchu.php'; </script>";
            }
            else {
                echo "<script>alert('Username or Password wrong')</script>";
            }
        }

    }
    ?>
</div>

<?php


?>


</body>
</html>

