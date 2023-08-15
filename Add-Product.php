<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YETRADING | اضافة منتج</title>

    <link rel="stylesheet" href="Css/Add-Product.css">

    <!--رابط الخط-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <!--رابط الايكون-->

    <link href="https://fonts.googleapis.com/css2?family=Edu+QLD+Beginner:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--رابط بوت ستراب-->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/jquery.bxslider.css">
    <script type="text/javascript" src="Js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Js/jquery.bxslider.js"></script>

</head>

<body>

<center>

    <div class="container">

    <img src="Icon/Logo1.png" alt="" class = "logo">

    <h3 class = "title">اضافة منتج</h3>

    <form action="Insert.php" method="POST" enctype="multipart/form-data">

    <div class="input-field input-1">
    <img src="Icon/products_new_cube_product_design_icon_153845.png" class="Search_img">
        <input type="text" name = "name" placeholder = "ادخل اسم المنتج" required="required">
    </div>

    <div class="input-field input-1">

    <img src="Icon/file_type_bazel_icon_130724.png" class="Search_img">
    <select name = "section" id="section">
        <option value="ملابس">ملابس</option>
        <option value="ادوات الطاقة البديلة">ادوات الطاقة البديلة</option>
        <option value="اجهزة منزلية">اجهزة منزلية</option>
        <option value="ديكور">ديكور</option>
        <option value="خطوط انتاج">خطوط انتاج</option>
        <option value="ادوات يدوية">ادوات يدوية</option>
        <option value="ادوات كهربائية">ادوات كهربائية</option>
        <option value="العاب اطفال">العاب اطفال</option>
        <option value="مواد مكتبية">مواد مكتبية</option>
        <option value="طابعات">طابعات</option>
        <option value="اوراق تصوير">اوراق تصوير</option>
        <option value="كاميرات مراقبة">كاميرات مراقبة</option>
        <option value="كاميرات تصوير">كاميرات تصوير</option>
        <option value="غرف نوم">غرف نوم</option>
    </select>

    </div>

    <input type="file" id = "file" name = "image" required="required">
    <div class="cover_lb">
    <label for="file" class = "lb_add_img"><img src="Icon/image-add-button_icon-icons.com_71462.png" class="Search_img">اضافة صورة</label>
    </div>

    <br>   
    <br>

    <button name = "upload" class = "btn_add">رفع المنتج</button>

    <br>

    <a href = "Sections.php" class="btn_all_pro">-- عرض جميع المنتجات --</a>

    </form>

</div>

</center>

</body>

</html>