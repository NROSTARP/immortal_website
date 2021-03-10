<!doctype html>

<?php
    require ('steamauth/steamauth.php');  
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Boostrap *ยังใช้cdnอยู่-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!---Jquery *ยังใช้cdnอยู่-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Mitr&family=Roboto&family=Sriracha&family=Truculenta&display=swap"
        rel="stylesheet">

    <!--img logo-->
    <link rel="shortcut icon" href="pic/logo.png">
    <title>IMMORTAL CITY | Join to the best society.</title>



</head>

<body
    style="background-image: url('https://wallpapermemory.com/uploads/596/grand-theft-auto-v-gta-5-background-full-hd-1080p-195112.jpg');">
    <header>

        <div class="fixed-top ">
            <nav class="navbar navbar-light bg-dark">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#">
                        <!--img logo-->
                        <img src="pic/namelogo.png" alt="" width="275" height="50" class="d-inline-block align-top">

                        <!--nav menu-->
                        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                            <div class="container">
                                <a class="navbar-brand" aria-current="page-top" href="#page-top"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">

                                        <a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light"
                                            type="button" href="index.php"
                                            style="color: honeydew; background-color:#7f0000; margin: 10px; font-family: 'Mitr', sans-serif;">
                                            หน้าหลัก
                                        </a>


                                        <a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light"
                                            type="button" href="market.php"
                                            style="color: honeydew; background-color:#964800; margin: 10px; font-family: 'Mitr', sans-serif;">
                                            ร้านค้า
                                        </a>

                                        <a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light"
                                            type="button" href="topup.php"
                                            style="color: honeydew; background-color:#964800; margin: 10px; font-family: 'Mitr', sans-serif;">
                                            เติมเงิน
                                        </a>

                                        <?php
                                            if(isset($_SESSION['steamid'])) {
                                                include ('steamauth/userInfo.php');
                                                
                                            }else{
                                                echo "<a class=\"ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light\"
                                            style=\"color: honeydew; background-color:#007200; margin: 10px; font-family: 'Mitr', sans-serif;\"href='?login'>เข้าสู่ระบบ</a>";
                                            }
                                        ?>
                                        <!-- $_SESSION['steamid'] เอาไปใช้อ้างอิงใน database เพื่อเก็บยอดเงิน -->
                                        <?php
                                            if(isset($_SESSION['steamid'])) {
                                        echo "<div class=\"dropdown\"><button class=\"ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light dropdown-toggle\"
                                            style=\"color: honeydew; background-color:#007200; margin: 10px; font-family: 'Mitr', sans-serif;\"  type=\"button\" data-toggle=\"dropdown\">";
                                        echo $steamprofile['personaname'];
                                        //ตกแต่งตัว dropdown ตรง style
                                        echo "<span class=\"caret\"></span></button><ul class=\"dropdown-menu\" style='padding:5px 7px;'>";
                                        echo "<li><img src=";
                                        echo $steamprofile['avatarmedium'];
                                        echo " width='50px' height='50px' ></li>";
                                        echo "<li><p style='color:#000;'>";
                                        echo $steamprofile['personaname'];
                                        echo "</p></li>";
                                        echo "<li><p style='color:#000;'>";
                                        echo "ยอดเงิน ";
                                        echo 0;
                                        echo "</p></li>";
                                        echo "<li><form action='' method='get'><button class=\"ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light\"
                                            style=\"color: honeydew; background-color:#007200; margin: 10px; font-family: 'Mitr', sans-serif;\" type='submit' name='logout'>ออกจากระบบ</button></form></li>";
                                        echo "</ul></div>";
                                            }
                                        ?>
                                        <
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <br>
    <br>
    <br>
    <br>

    <dev class="page-section" id="market">
        <div class="container" style="font-family: 'Mitr', sans-serif;">
            <div class="row">


                <!--limited car-->
                <h3 style="color: white; font-family: 'Sriracha', cursive;">LIMITED CAR</h3>
                <!--ตัวอย่างแสดงcomment-->
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <!--รูปไอเทม-->
                            <!--id Product ของ รูปไอเทม-->
                            <img src="car/limited/2014_BRABUS_Mercedes-Benz_B63S700_6x6.jpg" class="card-img-top"
                                id="product_image_001" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade" >
                            <!--ชื่อไอเทมแสดงบนเว็บ-->
                            <p class="card-text">
                                2014 BRABUS Mercedes-Benz B63S700 6x6 - ความจุ 150 KG<br> </p>
                            <p class="card-text">
                                <!--ไอดี-->
                                <!--ประเภทของไอเทม-->
                                <input id="product_category_001" value="limited-vehicle" hidden="">
                                <!--ราคาเก็บเป็นตัวแปร-->
                                <input id="product_price_001" value="4000" hidden="">
                                <!--ชื่อไอเทมเก็บเป็นตัวแปร-->
                                <input id="product_description_001" value="2014 BRABUS Mercedes-Benz B63S700 6x6"
                                    hidden="">
                                <!--ไอดีของปุ่มราคา/ซื้อ-->
                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_001"
                                    onclick=""> 4000 point</button>


                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/limited/2020_BRABUS_900_Mercedes-Benz_AMG-G65.jpg" class="card-img-top"
                                id="product_image_002" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2020 BRABUS 900 Mercedes-Benz AMG-G65 - ความจุ 100 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_002" value="limited-vehicle" hidden="">
                                <input id="product_price_002" value="3500" hidden="">
                                <input id="product_description_002" value="2020 BRABUS 900 Mercedes-Benz AMG-G65"
                                    hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_002">
                                    3500 point</button>

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/limited/2017_Rolls_Royce_Dawn_Mansory.jpg" class="card-img-top"
                                id="product_image_003" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2017 Rolls Royce Dawn Mansory - ความจุ 150 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_003" value="limited-vehicle" hidden="">
                                <input id="product_price_003" value="5000" hidden="">
                                <input id="product_description_003" value="2017 Rolls Royce Dawn Mansory" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_003">
                                    5000 point</button>

                            </p>
                        </div>
                    </div>
                </div>


                <!--motorcycle-->
                <h3 style="color: white; font-family: 'Sriracha', cursive;">MOTORCYCLE</h3>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/Yamaha_X-Max_400.jpg" class="card-img-top" id="product_image_004"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2020 Yamaha X-Max 400 - ความจุ 15 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_004" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_004" value="350" hidden="">
                                <input id="product_description_004" value="2020 Yamaha X-Max 400" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_004">
                                    350 point</button>

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/2021_Ducati_V4S_StreetFighter.jpg" class="card-img-top"
                                id="product_image_005" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2021 Ducati V4S StreetFighter - ความจุ 15 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_005" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_005" value="350" hidden="">
                                <input id="product_description_005" value="2021 Ducati V4S StreetFighter" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_005">
                                    350 point</button>

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/2020_Honda_CBR650R.jpg" class="card-img-top" id="product_image_006"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2020 Honda CBR650R - ความจุ 10 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_006" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_006" value="350" hidden="">
                                <input id="product_description_006" value="2020 Honda CBR650R" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_006">
                                    350 point</button>

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/Vortex-GTAO-FrontQuarter.png" class="card-img-top"
                                id="product_image_007" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Vortex - ความจุ 10 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_007" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_007" value="150" hidden="">
                                <input id="product_description_007" value="Vortex" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_007">
                                    150 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/Shotaro-GTAO-FrontQuarter.png" class="card-img-top"
                                id="product_image_008" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Shotaro - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_008" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_008" value="1000" hidden="">
                                <input id="product_description_008" value="Shotaro" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_008">
                                    1000 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/Chimera.png" class="card-img-top" id="product_image_009"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Chimera - ความจุ 10 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_009" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_009" value="200" hidden="">
                                <input id="product_description_009" value="Chimera" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_009">
                                    200 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/Vindicator.png" class="card-img-top" id="product_image_010"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Vindicator - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_010" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_010" value="150" hidden="">
                                <input id="product_description_010" value="Vindicator" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_010">
                                    150 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/Sanctus.png" class="card-img-top" id="product_image_011"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Sanctus - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_011" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_011" value="250" hidden="">
                                <input id="product_description_011" value="Sanctus" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_011">
                                    250 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/2015 BMW S1000RR .jpg" class="card-img-top" id="product_image_012"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2015 BMW S1000RR - ความจุ 10 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_012" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_012" value="400" hidden="">
                                <input id="product_description_012" value="2015 BMW S1000RR" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_012">
                                    400 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/motorcycle/Kawasaki Ninja H2R.jpg" class="card-img-top" id="product_image_013"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Kawasaki Ninja H2R - ความจุ 10 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_013" value="motorcycle-vehicle" hidden="">
                                <input id="product_price_013" value="500" hidden="">
                                <input id="product_description_013" value="Kawasaki Ninja H2R" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_013">
                                    500 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <!--car-->
                <h3 style="color: white; font-family: 'Sriracha', cursive;">MOTORCAR AND PICKUP TRUCK</h3>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2012_Lamborghini_Aventador_J-Speedster.jpg" class="card-img-top"
                                id="product_image_014" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2012 Lamborghini Aventador J-Speedster - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_014" value="car-vehicle" hidden="">
                                <input id="product_price_014" value="300" hidden="">
                                <input id="product_description_014" value="2012 Lamborghini Aventador J-Speedster"
                                    hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_014">
                                    300 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2016_Mclaren_675LT_Spider.jpg " class="card-img-top"
                                id="product_image_015" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2016 Mclaren 675LT Spider - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_015" value="car-vehicle" hidden="">
                                <input id="product_price_015" value="450" hidden="">
                                <input id="product_description_015" value="2016 Mclaren 675LT Spider" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_015">
                                    450 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Nissan_Skyline_GT-R_BNR34.jpg " class="card-img-top"
                                id="product_image_016" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                1999 Nissan Skyline GT-R (BNR34) - ความจุ 30 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_016" value="car-vehicle" hidden="">
                                <input id="product_price_016" value="400" hidden="">
                                <input id="product_description_016" value="1999 Nissan Skyline GT-R (BNR34)" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_016">
                                    400 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2019_NOVITEC_N-LARGO_Ferrari_488_GTB_Spider.jpg " class="card-img-top"
                                id="product_image_017" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2019 NOVITEC N-LARGO Ferrari 488 GTB Spider - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_017" value="car-vehicle" hidden="">
                                <input id="product_price_017" value="500" hidden="">
                                <input id="product_description_017" value="2019 NOVITEC N-LARGO Ferrari 488 GTB Spider"
                                    hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_017">
                                    500 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2018_AUDI_RS7_PERFORMANCE.jpg " class="card-img-top"
                                id="product_image_018" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2018 Audi RS7 Wide Body Performance - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_018" value="car-vehicle" hidden="">
                                <input id="product_price_018" value="300" hidden="">
                                <input id="product_description_018" value="2018 Audi RS7 Wide Body Performance"
                                    hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_018">
                                    300 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Lamborghini_Urus_2018.jpg " class="card-img-top" id="product_image_019"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2018 Lamborghini Urus - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_019" value="car-vehicle" hidden="">
                                <input id="product_price_019" value="350" hidden="">
                                <input id="product_description_019" value="2018 Lamborghini Urus" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_019">
                                    350 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2018_Jeep_Grand_Cherokee_Trackhawk_Series_IV.jpg " class="card-img-top"
                                id="product_image_020" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2018 Jeep Grand Cherokee Trackhawk Series IV - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_020" value="car-vehicle" hidden="">
                                <input id="product_price_020" value="300" hidden="">
                                <input id="product_description_020" value="2018 Lamborghini Urus" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_020">
                                    300 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2020_Brabus_800_Mercedes-Benz_AMG_GT_63S.jpg " class="card-img-top"
                                id="product_image_021" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2020 Brabus 800 Mercedes-Benz AMG GT 63S - ความจุ 30 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_021" value="car-vehicle" hidden="">
                                <input id="product_price_021" value="400" hidden="">
                                <input id="product_description_021" value="2020 Brabus 800 Mercedes-Benz AMG GT 63S"
                                    hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_021">
                                    400 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2014_BRABUS_Mercedes-Benz_AMG_A45S.jpg " class="card-img-top"
                                id="product_image_022" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2014 BRABUS Mercedes-Benz AMG A45S - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_022" value="car-vehicle" hidden="">
                                <input id="product_price_022" value="400" hidden="">
                                <input id="product_description_022" value="2014 BRABUS Mercedes-Benz AMG A45S"
                                    hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_022">
                                    400 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Raptor.png " class="card-img-top" id="product_image_023"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Raptor - ความจุ 50 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_023" value="car-vehicle" hidden="">
                                <input id="product_price_023" value="200" hidden="">
                                <input id="product_description_023" value="Raptor" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_023">
                                    200 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Tezeract.png " class="card-img-top" id="product_image_024"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Tezeract - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_024" value="car-vehicle" hidden="">
                                <input id="product_price_024" value="150" hidden="">
                                <input id="product_description_024" value="Tezeract" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_024">
                                    150 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Zentorno.png " class="card-img-top" id="product_image_025"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Zentorno - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_025" value="car-vehicle" hidden="">
                                <input id="product_price_025" value="150" hidden="">
                                <input id="product_description_025" value="Zentorno" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_025">
                                    150 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/SlamvanCustom.png " class="card-img-top" id="product_image_026"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                SlamvanCustom - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_026" value="car-vehicle" hidden="">
                                <input id="product_price_026" value="200" hidden="">
                                <input id="product_description_026" value="SlamvanCustom" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_026">
                                    200 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Rat-Truck.png " class="card-img-top" id="product_image_027"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Rat-Truck - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_027" value="car-vehicle" hidden="">
                                <input id="product_price_027" value="200" hidden="">
                                <input id="product_description_027" value="Rat-Truck" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_027">
                                    200 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/SultanRS.png " class="card-img-top" id="product_image_028"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                SultanRS - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_028" value="car-vehicle" hidden="">
                                <input id="product_price_028" value="100" hidden="">
                                <input id="product_description_028" value="SultanRS" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_028">
                                    100 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2019_Ford_Mustang_GT_Convertible.jpg " class="card-img-top"
                                id="product_image_029" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2019 Ford Mustang GT Convertible - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_029" value="car-vehicle" hidden="">
                                <input id="product_price_029" value="450" hidden="">
                                <input id="product_description_029" value="2019 Ford Mustang GT Convertible" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_029">
                                    450 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2019_Maserati_GranCabrio_MC_Stradale_Convertible.jpg "
                                class="card-img-top" id="product_image_030" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2019 Maserati GranCabrio MC Stradale Convertible - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_030" value="car-vehicle" hidden="">
                                <input id="product_price_030" value="1000" hidden="">
                                <input id="product_description_030"
                                    value="2019 Maserati GranCabrio MC Stradale Convertible" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_030">
                                    1000 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2020_All_New_D-Max.jpg " class="card-img-top" id="product_image_031"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2020 All New D-Max - ความจุ 100 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_031" value="car-vehicle" hidden="">
                                <input id="product_price_031" value="500" hidden="">
                                <input id="product_description_031" value="2020 All New D-Max" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_031">
                                    500 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2017_Ford_F150_Raptor_X-Box_1X_Edition.jpg " class="card-img-top"
                                id="product_image_032" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2017 Ford F150 Raptor X-Box 1X Edition - ความจุ 100 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_032" value="car-vehicle" hidden="">
                                <input id="product_price_032" value="500" hidden="">
                                <input id="product_description_032" value="2017 Ford F150 Raptor X-Box 1X Edition"
                                    hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_032">
                                    500 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/BMWI8.jpg " class="card-img-top" id="product_image_033"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2017 BMW I8 Roadster Liberty Walk - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_033" value="car-vehicle" hidden="">
                                <input id="product_price_033" value="350" hidden="">
                                <input id="product_description_033" value="2017 BMW I8 Roadster Liberty Walk" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_033">
                                    350 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Yosemite.png " class="card-img-top" id="product_image_034"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Yosemite - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_034" value="car-vehicle" hidden="">
                                <input id="product_price_034" value="200" hidden="">
                                <input id="product_description_034" value="Yosemite" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_034">
                                    200 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2012_Nissan_GTR-R35.jpg " class="card-img-top" id="product_image_035"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2012 Nissan GTR-R35 - ความจุ 30 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_035" value="car-vehicle" hidden="">
                                <input id="product_price_035" value="400" hidden="">
                                <input id="product_description_035" value="2012 Nissan GTR-R35" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_035">
                                    400 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2015_PORSCHE_911_Targa_4S.jpg " class="card-img-top"
                                id="product_image_036" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2015 PORSCHE 911 Targa 4S - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_036" value="car-vehicle" hidden="">
                                <input id="product_price_036" value="500" hidden="">
                                <input id="product_description_036" value="2015 PORSCHE 911 Targa 4S" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_036">
                                    500 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/2021_Bugatti_Bolide_Hypercar.jpg " class="card-img-top"
                                id="product_image_037" style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2021 Bugatti Bolide Hypercar - ความจุ 40 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_037" value="car-vehicle" hidden="">
                                <input id="product_price_037" value="1500" hidden="">
                                <input id="product_description_037" value="2021 Bugatti Bolide Hypercar" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_037">
                                    1500 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Koenigsegg_Jesko.jpeg " class="card-img-top" id="product_image_038"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                2020 Koenigsegg Jesko - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_038" value="car-vehicle" hidden="">
                                <input id="product_price_038" value="1500" hidden="">
                                <input id="product_description_038" value="2020 Koenigsegg Jesko" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_038">
                                    350 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Fr3FnkenStange.png " class="card-img-top" id="product_image_039"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Franken Stange - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_039" value="car-vehicle" hidden="">
                                <input id="product_price_039" value="300" hidden="">
                                <input id="product_description_039" value="Franken Stange" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_039">
                                    300 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/RooseveltValor.png " class="card-img-top" id="product_image_040"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Roosevelt Valor - ความจุ 70 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_040" value="car-vehicle" hidden="">
                                <input id="product_price_040" value="300" hidden="">
                                <input id="product_description_040" value="Roosevelt Valor" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_040">
                                    300 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Z-Type.png " class="card-img-top" id="product_image_041"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Z-Type - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_041" value="car-vehicle" hidden="">
                                <input id="product_price_041" value="200" hidden="">
                                <input id="product_description_041" value="Z-Type" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_041">
                                    200 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/TornadoCustom.png " class="card-img-top" id="product_image_042"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Tornado Custom - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_042" value="car-vehicle" hidden="">
                                <input id="product_price_042" value="300" hidden="">
                                <input id="product_description_042" value="Tornado Custom" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_042">
                                    300 point</button>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <img src="car/car/Mamba.jpg " class="card-img-top" id="product_image_043"
                                style="object-fit: cover; height:25vh">
                        </div>

                        <div class="card-body card-body-cascade">
                            <p class="card-text">
                                Mamba - ความจุ 20 KG<br> </p>
                            <p class="card-text">
                                <input id="product_category_043" value="car-vehicle" hidden="">
                                <input id="product_price_043" value="150" hidden="">
                                <input id="product_description_043" value="Mamba" hidden="">

                                <button class="btn btn-success btn-sm float-right waves-effect z-depth-0" id="buy_043">
                                    150 point</button>

                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

</html>