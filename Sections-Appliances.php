<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YETRADING | الاقسام</title>

    <link rel="stylesheet" href="Css/Sections.css">

    <!--رابط الخط-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <!--رابط الايكون-->

    <link href="https://fonts.googleapis.com/css2?family=Edu+QLD+Beginner:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!--رابط البوت ستراب-->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/jquery.bxslider.css">
    <script type="text/javascript" src="Js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Js/jquery.bxslider.js"></script>

</head>
<body>

<!--Header-->

<section id="Header">

    <div class="head-r">

<!--Menu--------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="menu-btn" onclick="openFunction()"><i id="menu-btn" class="fas fa-bars"></i></div>
    
    <div id="menu" class="side-menu">
    
    <button class="btn-close" onclick="closeFunction()"><img src="Icon/close.png" alt=""></button>
    
    <div class="input-field input-1" id="box_search_menu">
        <img src="Icon/Search.png" alt="" id="box_search_img">
        <input type="text" placeholder="ابحث عن ..." required="required" id="box_search_input">
        <button class="btn-search" id="box_search_btn">بحث</button>
    </div>
    
    <a href="Add-Product.php"><div class="row"> <img src="Icon/additionbutton_83823.png"> اضف منتج</div></a>
    
    <div class="btn-lest" id="btn-lest4" onclick="open_lest_4()"><img src="Icon/bazel_icon_132552.png" alt="" class="sec"><p>الاقسام</p> <i class="fas fa-angle-left fas-4"></i> </div>
    <div class="btn-lest" id="btn-lest_close4" onclick="close_lest_4()"><img src="Icon/bazel_icon_132552.png" alt="" class="sec"><p>الاقسام</p> <i class="fas fa-angle-left fas-4"></i> </div>
    
    <div id="lest_4">
        <div class="lest-content" style="width: 100%;">
        <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">عدد ادوات يدوية</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">عدد ادوات كهربائية</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">اجهزة منزلية</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">اجهزة الطاقة البديلة</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">العاب اطفال</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">خطوط انتاج</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">مواد مكتبية</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">ادوات طباعة</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">كامرات مراقبة</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">كاميرات تصوير</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">غرف نوم</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">ديكور منازل</a></div>
            <div class="row"> <i class="fa-solid fa-circle "></i> <a href="">ملابس</a></div>
        </div>
    </div>
    
    <div class="btn-lest" id="btn-lest3" onclick="open_lest_3()"><i class="fa fa-fw fa-hashtag"></i><p>تابعنا</p> <i class="fas fa-angle-left fas-3"></i> </div>
    <div class="btn-lest" id="btn-lest_close3" onclick="close_lest_3()"><i class="fa fa-fw fa-hashtag"></i><p>تابعنا</p> <i class="fas fa-angle-left fas-3"></i> </div>
    
    <div id="lest_3">
        <div class="lest-content" style="width: 100%;">

            <a href="https://www.instagram.com/ye4trading/">
            <div class="row">  <img src="Icon/instagram_108043 (1).png" class="social_img">انستغرام</div>
            </a>

            <a href="https://www.facebook.com/profile.php?id=100094753526498">
            <div class="row">  <img src="Icon/facebook_108044 (1).png"  class="social_img">فيسبوك</div>
            </a>

            <a href="https://twitter.com/ye4trading?s=20">
            <div class="row">  <img src="Icon/Twitter_46983.png" alt="" class="twiter">تويتر</div>
            </a>

            <a href="https://www.snapchat.com/add/yuneagle.ye?sender_web_id=f12f38dd-356d-4867-81ec-f279bbfcec04&device_type=desktop&is_copy_url=true">
            <div class="row">  <img src="Icon/1490889713-snapchat_82531.png" alt="" class="snapchat">سناب شات</div>
            </a>

            <a href="https://www.tiktok.com/@yetrading?is_from_webapp=1&sender_device=pc">
            <div class="row"><img src="Icon/tiktok_logo_icon_187623.png" alt="" class="tiktok">تيك توك</div>
            </a>

            <a href="https://www.youtube.com/@yetrading/featured">
            <div class="row"><img src="Icon/youtube_47003.png" alt="" class="social_img">يوتيوب</div>
            </a>

        </div>
    </div>

    <a href="Logout.php"><div class="row"> <img src="Icon/logout_icon_232169.png" alt=""> خروج</div></a>

    </div>

    <a href="Home.php"> <img src="Icon/Logo.png" alt="" class="logo"> </a>
    
</div>

    <div class="">
        <ul id="navbar">
            <li><a href="Home.php" class="a1">الرئيسية</a></li>
            <li><a href="Sections.php" class="active">الاقسام</a></li>
            <li><a href="About.html" class="a2">عن الموقع</a></li>
            <li><a href="#Social_media" class="a3">تواصل</a></li>

            <select id="language-seletor">
                <option value="ar">العربية</option>
                <option value="en">English</option>
            </select>
        </ul>
    </div>

</section>

<!--Top-->

<section class="Top" id="social_media">

    <div class="top">

    <div class="right">

    <div class="input-field input-1">
        <img src="Icon/Search.png" class="Search_img">
        <input type="text" placeholder="ابحث عن ..." required="required">
    </div>

    <div class="social_media">

        <a href="https://www.facebook.com/profile.php?id=100094753526498">
        <img src="Icon/facebook_108044 (1).png" alt="" class="social_img">
        </a>

        <a href="https://twitter.com/ye4trading?s=20">
        <img src="Icon/Twitter_46983.png" alt="" class="social_img">
        </a>

        <a href="https://www.snapchat.com/add/yuneagle.ye?sender_web_id=f12f38dd-356d-4867-81ec-f279bbfcec04&device_type=desktop&is_copy_url=true">
        <img src="Icon/1490889713-snapchat_82531.png" alt="" class="social_img">
        </a>

        <a href="https://www.tiktok.com/@yetrading?is_from_webapp=1&sender_device=pc">
        <img src="Icon/tiktok_logo_icon_187623.png" alt="" class="social_img">
        
        <a href="https://www.youtube.com/@yetrading/featured">
        <img src="Icon/youtube_47003.png" alt="" class="social_img">
        </a>

        <a href="https://www.instagram.com/ye4trading/">
        <img src="Icon/instagram_108043 (1).png" alt="" class="social_img">
        </a>
        
    </div>

    </div>

    </div>

</section>

<!--navbar-->

<div class="navbar">

    <div class="btn-lest1" id="btn-lest1" onclick="open_lest_1()"><img src="Icon/1.png"><p class = "all_sections">كل الاقسام </p><i class="fas fa-angle-left fas-1"></i> </div>
    <div class="btn-lest1" id="btn-lest_close1" onclick="close_lest_1()"><img src="Icon/1.png"><p class = "all_sections">كل الاقسام </p><i class="fas fa-angle-left fas-1"></i> </div>

    <a href="Sections-Hand.php"> <button class="nav_btn"><img src="Image/Hand tools-png.png" >عدد ادوات يدوية</button></a>
    <a href="Sections-Electrical.php"> <button class="nav_btn"><img src="Image/Electrical Tools-png.png" >عدد ادوات كهربائية</button></a>
    <a href="Sections-Appliances.php"> <button class="nav_btn" ><img src="Image/Appliances-png.png">اجهزة منزلية</button></a>
    <a href="Sections-Alternative.php"> <button class="nav_btn nav_btn_big" ><img src="Image/Alternative Energy-png.png" >اجهزة الطاقة البديلة</button></a>

</div>

<!--Slider-->

<center>
<div id="lest_1">
    <div class="lest-content-sections">
    <a href="Sections.php" class="row row_section"><img src="Image/All-sections.png">كل الاقسام</a>
        <a href="Sections-Hand.php" class="row row_section"><img src="Image/Hand tools-png.png">عدد ادوات يدوية</a>
        <a href="Sections-Electrical.php" class="row row_section"><img src="Image/Electrical Tools-png.png">عدد ادوات كهربائية</a>
        <a href="Sections-Appliances.php" class="row row_section"><img src="Image/Appliances-png.png">اجهزة منزلية</a>
        <a href="Sections-Alternative.php" class="row row_section"><img src="Image/Alternative Energy-png.png">اجهزة الطاقة البديلة</a>
        <a href="Sections-toys.php" class="row row_section"><img src="Image/toys-png.png">العاب اطفال</a>
        <a href="Sections-production.php" class="row row_section"><img src="Image/production lines-png.png">خطوط انتاج</a>
        <a href="Sections-Stationery.php" class="row row_section"><img src="Image/Stationery-png.png">مواد مكتبية</a>
        <a href="Sections-Printers.php" class="row row_section"><img src="Image/Printers-png.png">ادوات طباعة</a>
        <a href="Sections-security.php" class="row row_section"><img src="Image/security cameras-png.png">كامرات مراقبة</a>
        <a href="Sections-Photography.php" class="row row_section"><img src="Image/Photography cameras-png.png">كاميرات تصوير</a>
        <a href="Sections-bed.php" class="row row_section"><img src="Image/bed room-png.png">غرف نوم</a>
        <a href="Sections-Home.php" class="row row_section"><img src="Image/Home decor-png.png">ديكور منازل</a>
        <a href="Sections-clothes.php" class="row row_section"><img src="Image/clothes-png.png">ملابس</a>
    </div>
</div>
</center>

<div class="swiper mySwiper">
    <div class="swiper-wrapper" style="height: 400px;">

        <div class="swiper-slide"><img src="Image/Hand tools.jpg" alt=""></div>
        <div class="swiper-slide"><img src="Image/production lines.png" alt=""></div>
        <div class="swiper-slide"><img src="Image/our-c.jpeg" alt=""></div>

    </div>

    <div class="swiper-button-next" style="font-size: 25px;"></div>
    <div class="swiper-button-prev" style="font-size: 25px;"></div>
    
    <div class="swiper-pagination"></div>
    <div class="autoplay-progress">
        <svg viewBox="0 0 48 48" class="timer">
        <circle cx="24" cy="24" r="20"></circle>
        </svg>
        <span></span>

    </div>
</div>


<!--Content-->

<center>

<h3 class="t_all_pro title">جميع المنتجات</h3>

</center>

<section class='Products'>

<div class='pro-container'>
    
<?php
    
include("Conn.php");

$RESULT = mysqli_query($conn , "SELECT * FROM tb_product WHERE section = 'اجهزة منزلية'");
while($ROW = mysqli_fetch_array($RESULT)){

echo"

        <div class='pro'>

        <div class='swiper mySwiper'>

        <div class='swiper-wrapper'>
        <div class='swiper-slide img_card' > <img src='$ROW[image]'></div>
        </div>

        <div class='swiper-button-next'></div>
        <div class='swiper-button-prev'></div>
        <div class='swiper-pagination'></div>    

        </div>

        <div class='text'>
        <h3 class='card-title'>$ROW[name]</h3>
        <p class='card-text'>$ROW[section]</p>
        </div>

        <div class='btn-container'>
        <a href='Update.php? id=$ROW[id]' class='btn-edit btn'>تعديل منتج</a>
        <a href='Delete.php? id=$ROW[id]' class='btn-delete btn'>حذف منتج</a>
        </div>

        </div>

";

}

?>

</div>

</section>

<div class="credit">Create By s3d0d | All Rights Reserved</div>

<!--Swiper-Js-->

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
        delay: 2500,
        disableOnInteraction: false
        },
        pagination: {
        el: ".swiper-pagination",
        clickable: true
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
        },
        on: {
        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
        }
    });
    </script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
    });
</script>

<!--javascript-->

<script src="JavaScript.js"></script>

<script>
    function open_lest_1(){
    document.getElementById('lest_1').style.height='100%';
    document.getElementById('btn-lest1').style.display='none';
    document.getElementById('btn-lest_close1').style.display='flex';
}

function close_lest_1(){
    document.getElementById('lest_1').style.height='0px';
    document.getElementById('btn-lest1').style.display='flex';
    document.getElementById('btn-lest_close1').style.display='none';
}

window.addEventListener('mouseup' , function(event){
    var box=document.getElementById('lest_1');
    if(event.target!=box){
        box.style.height='0px';
    }
});
</script>

</body>
</html>