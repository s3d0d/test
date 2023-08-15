<?php

session_start();
if (isset($_SESSION["user"])) {
    header("Location: Home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YETRADING | تسجيل الدخول</title>

    <link rel="stylesheet" href="Css/L&S.css">

    <!--رابط الخط-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <!--Bootstrap Cdn-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<!--Content-->

<div class="Container">

<?php

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "Conn.php";
    $sql = "SELECT * FROM tb_users WHERE email = '$email'";
    $result =  mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if($user){
        if(password_verify($password, $user["password"])){

            session_start();
            $_SESSION["user"] = "yes";

            header("location: Home.php");
            die();
        }else{
            echo "<div class = 'alert alert-danger'>كلمة المرور غير صحيحة</div>";
        }
    }else{
        echo "<div class = 'alert alert-danger'>البريد الالكتروني غير صحيح</div>";
    }
}

?>

<form action="Login.php" method="POST">

<div class="form-group">
<input class="form-control" type="email" name="email" placeholder="ادخل البريد الالكتروني"> 
</div>

<div class="form-group">
<input class="form-control" type="password" name="password" placeholder="ادخل كلمة المرور "> 
</div>

<div class="form-btn">
<input class="btn btn-primary" type="submit" name="login" value="تسجيل دخول"> <br> <br> 
</div>

</form>

<p>ليس لدي حساب .. <a href="SignUp.php"><span class="text-login">انشاء حساب</span></a></p>

</div>

</body>
</html>