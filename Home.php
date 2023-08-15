<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YETRADING | الرئيسية</title>

    <link rel="stylesheet" href="Css/Home.css">

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

    <a href="#"> <img src="Icon/Logo.png" alt="" class="logo"> </a>
    
</div>

    <div class="">
        <ul id="navbar">
            <li><a href="Home.php" class="active">الرئيسية</a></li>
            <li><a href="Sections.php" class="a1">الاقسام</a></li>
            <li><a href="About.html" class="a2">عن الموقع</a></li>
            <li><a href="#Social_media" class="a3">تواصل</a></li>

            <select id="language-seletor">
                <option value="ar">العربية</option>
                <option value="en">English</option>
            </select>
        </ul>
    </div>

</section>

<!--About the site-->

<section id="About">

<div class="about">

    <div class="text">

    <h1 style="color: #446cad;">عن الشركة</h1>
    <p>سرنا أن نقدم لكم مصنعنا مجموعة إيسلا لايت للإنارة الحديثة التي تقع في
        قوتشن مدينة تشونغشان مقاطعة قوانغدونغ الصين. شركتنا متخصصة في تصنيع مصابيح و لمبات الليد وتيوب لايت و سبوت لايت 
        وبانل لايت و فلود لايت و جميع انواع الإضاءة الخارجية و الداخلية للمنازل و المكاتب
        و الشركات و إضاءة الطرق عالية الجودة بأسعار معقولة. منتجاتنا مصممة بحيث توفر 
        حلول إضاءة موفرة للطاقة للمنازل والمكاتب والمساحات الخارجية نحن في إيسلا لايت 
        نفخر بالتزامنا بالجودة؛ حيث تخضع منتجاتنا لاختبارات صارمة لضمان المتانة و 
        الجودة العالية. نحن نسعى جاهدين لتزويد عملائنا بأفضل قيمة مقابل أموالهم، 
        ونقدم أسعاراً تنافسية دون المساومة على الجودة لا تساعدك منتجاتنا في توفير 
        الطاقة فحسب، بل ولها تأثير إيجابي على البيئة أيضاً. نحن نؤمن في ممارسات
        التصنيع المستدامة ونحن حريصون على تقليل بصمتنا الكربونية يتكون فريقنا في 
        إيسلا لايت من محترفين مهرة متحمسين لتقديم خدمة عملاء ممتازة. نحن دائماً على
        استعداد لمساعدتكم في أي استفسارات أو أسئلة قد تكون لديكم سواء كنت تبحث 
        عن تطوير إضاءة منزلك أو تحسين مساحة عملك المكتبية أو تحسين المناطق 
        الخارجية، فإن إيسلا لايت لديها حلول الإضاءة المثالية لك. انضم إلينا في 
    </p>

    </div>

    <div class="about_img">
        <img src="Image/WhatsApp Image 2023-07-31 at 8.45.37 PM.jpeg" alt="">
    </div>

</div>

</section>

<!--Sections-->

<section id="Sections">

    <h1 class="title">الاقسام</h1>

    <div class="cover">

    <div class="sections">

        <a href="Sections-Hand.php" class="box">
            <img src="Image/Hand tools.jpg">
            <h3>عدد ادوات يدوية</h3>
        </a>

        <a href="Sections-Electrical.php" class="box">
            <img src="Image/Electrical Tools.jpg">
            <h3>عدد ادوات كهربائية</h3>
        </a>

        <a href="Sections-Appliances.php" class="box">
            <img src="Image/Appliances.jpg">
            <h3>اجهزة منزلية</h3>
        </a>

        <a href="Sections-Alternative.php" class="box">
            <img src="Image/Alternative Energy.jpg">
            <h3>اجهزة الطاقة البديلة</h3>
        </a>

        <a href="Sections-toys.php" class="box">
            <img src="Image/toys.jpg">
            <h3>العاب اطفال</h3>
        </a>

        <a href="Sections-production.php" class="box">
            <img src="Image/production lines.png">
            <h3>خطوط انتاج</h3>
        </a>

        <a href="Sections-Stationery.php" class="box">
            <img src="Image/Stationery.jpg">
            <h3>مواد مكتبية</h3>
        </a>

        <a href="Sections-Printers.php" class="box">
            <img src="Image/Printers.jpg">
            <h3>ادوات طباعة</h3>
        </a>

        <a href="Sections-security.php" class="box">
            <img src="Image/security cameras.jpg">
            <h3>كامرات مراقبة</h3>
        </a>

        <a href="Sections-Photography.php" class="box">
            <img src="Image/Photography cameras.jpg">
            <h3>كاميرات تصوير</h3>
        </a>

        <a href="Sections-bed.php" class="box">
            <img src="Image/bed room.jpg">
            <h3>غرف نوم</h3>
        </a>

        <a href="Sections-Home.php" class="box">
            <img src="Image/Home decor.jpg">
            <h3>ديكور منازل</h3>
        </a>

        <a href="Sections-clothes.php" class="box">
            <img src="Image/clothes.jpg">
            <h3>ملابس</h3>
        </a>

    </div>

    <a href="Sections.php"><button class="btn_all_sections">عرض جميع الاقسام</button></a>


    </div>

</section>

<!--Why-->

<section class="Why">

    <h1 class="title">لماذا عليك اختيارنا</h1>

    <div class="why">

        <div class="box">
            <div class="circle">
                <img src="Icon/customer-service_icon-icons.com_52843 (2).png" alt="">
            </div> 
            <h4>امتياز الخدمات</h4> 
            <p>يمكننا تسليم البضائع في الوقت المناسب وتقديم خدمات مثالية</p>
        </div>

        <div class="box">
            <div class="circle">
                <img src="Icon/4124869-badge-insignia-premium-badge-quality-star-badge_114113.png" alt="">
            </div> 
            <h4>الجودة والتكلفة</h4>
            <p>اسعار رخيصة وتنافسية مع ضمان جودة عالية للمنتجات</p>
        </div>

        <div class="box">
            <div class="circle">
                <img src="Icon/design-pencil-ruler-grid-guide_108596.png" alt="">
            </div> 
            <h4>OEM & ODM</h4>
            <p>يمكننا ان نقوم بتغليف وتعبئة المنتجات حسب متطلبات العملاء</p>
        </div>

        <div class="box">
            <div class="circle">
                <img src="Icon//factory_robot_manufacturing_industry_robotics_machine_robotic_arm_automation_industrial_production_icon_231898.png" alt="">
            </div> 
            <h4>الاحترافي</h4>
            <p>بحث وتطوير وانتاج وتصدير جميع المنتجات</p>
        </div>

    </div>

</section>

<!--Customer-->

<section class="Customer">

    <div class="customer">

        <img src="Image/our-c.jpeg" alt="">

        <div class="text">

            <h1 style="color:#446cad; font-size: 35px;">عملاؤنا</h1>

            يتم تصدير منتجاتنا إلى أوروبا وأمريكا وجنوب شرق آسيا والشرق الأوسط (خاصة المملكة العربية السعودية ودبي والعراق وقطر والكويت والبحرين والأردن ومصر وسوريا وعُمان واليمن). نحن نلتزم باستراتيجية تسويقية متمثلة في وضع مصالح العملاء أولاً، وإقامة علاقة تعاون استراتيجية قوية وطويلة الأجل مع عملائنا
            في الوقت نفسه ، نقدم للعملاء أيضاً خدمة الشباك الواحد مع الترجمة والتصميم والاستشارات والشحن من الباب إلى الباب والإقرار الجمركي وغيرها من الخدمات المثالية التي تجعل عملاءنا راضين
        </div>

    </div>

</section>

<!--Social_media-->

<section class="Social_media" id="Social_media"> 

    <h1 class="title">تواصل معنا</h1>

    <div class="social_media">

    <a href="https://www.instagram.com/ye4trading/">
    <div class="box">
    <img src="Icon/instagram_108043 (1).png" alt="" class="social_img">
    <h3>انستغرام</h3>
    </div>
    </a>

    <a href="https://www.facebook.com/profile.php?id=100094753526498">
    <div class="box">
    <img src="Icon/facebook_108044 (1).png" alt="" class="social_img">
    <h3>فيسبوك</h3>
    </div>
    </a>

    <a href="https://twitter.com/ye4trading?s=20">
    <div class="box">
    <img src="Icon/Twitter_46983.png" alt="" class="twiter">
    <h3>تويتر</h3>
    </div>
    </a>

    <a href="https://www.snapchat.com/add/yuneagle.ye?sender_web_id=f12f38dd-356d-4867-81ec-f279bbfcec04&device_type=desktop&is_copy_url=true">
    <div class="box">
    <img src="Icon/1490889713-snapchat_82531.png" alt="" class="snapchat">
    <h3>سناب شات</h3>
    </div>
    </a>

    <a href="https://www.tiktok.com/@yetrading?is_from_webapp=1&sender_device=pc">
    <div class="box">
    <img src="Icon/tiktok_logo_icon_187623.png" alt="" class="tiktok">
    <h3>تيك توك</h3>
    </div>
    </a>

    <a href="https://www.youtube.com/@yetrading/featured">
    <div class="box">
    <img src="Icon/youtube_47003.png" alt="" class="social_img">
    <h3>يوتيوب</h3>
    </div>
    </a>

    </div>

    <div class="cover-branch">

    <h1 class="title">فروعنا</h1>
    <div class="branch"><p>No.619 ZONE, Jinfuyuan B. Yiwu, China</p> <p>No.1903A, B 28, wanyi plaza Foshan, China</p></div>

    </div>

</section>

<div class="credit">Create By s3d0d | All Rights Reserved</div>

<script src="JavaScript.js"></script>

</body>
</html>