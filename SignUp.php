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
    <title>YETRADING | انشاء حساب</title>

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


        if(isset($_POST ['submit'])){
            $FullName = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_r = $_POST['r_password'];
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $errors = array();
            
            if(empty($FullName) & empty($email) & empty($password) & empty($password_r)){
                array_push($errors, "قم بملى جميع الحقول");
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "قم بأدخال الايميل بشكل صحيح");
            }

            if(strlen($password) < 5){
                array_push($errors, "يجب الا تقل كلمة المرور عن 8 احرف");
            }

            if($password !== $password_r){
                array_push($errors, "كلمتا المرور غير متطابقتين");
            }

            require_once "Conn.php";
            $sql = "SELECT * FROM tb_users WHERE email = '$email' ";
            $result=  mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if($rowCount > 0){
                array_push($errors, "البريد الالكتروني مستخدم بالفعل");
            }

            if(count($errors) > 0){
                foreach($errors as $error){
                    echo "<div class = 'alert alert-danger'>$error</div>";
                }
            }else{
                $sql="INSERT INTO tb_users (full_name, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt,$sql);
                if($preparestmt){
                    mysqli_stmt_bind_param($stmt, "sss", $FullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class = 'alert alert-success'>تم انشاء حساب بنجاح</div>";
                }else{
                    die("حدث خطأ");
                }
            }
        }

    ?>

    <form action="SignUp.php" method="POST">

    <div class="form-group">
    <input class="form-control" type="text" name="fullname" placeholder="اسم المستخدم"> 
    </div>

    <div class="form-group">
    <input class="form-control" type="email" name="email" placeholder="البريد الالكتروني"> 
    </div>

    <div class="form-group">
    <input class="form-control" type="password" name="password" placeholder="كلمة المرور"> 
    </div>

    <div class="form-group">
    <input class="form-control" type="password" name="r_password" placeholder="تأكيد كلمة المرور "> 
    </div>

    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="submit" value="انشاء حساب"> <br> <br> 
    </div>

    </form>

    <p>لدي حساب بالفعل .. <a href="Login.php"><span class="text-login">تسجيل الدخول</span></a></p>

</div>



</body>
</html>