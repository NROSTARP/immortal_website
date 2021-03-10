<!doctype html>
<?php
require('steamauth/steamauth.php');
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Boostrap *ยังใช้cdnอยู่-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!---Jquery *ยังใช้cdnอยู่-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&family=Roboto&family=Sriracha&family=Truculenta&display=swap" rel="stylesheet">

    <!--img logo-->
    <link rel="shortcut icon" href="pic/logo.png">
    <title>IMMORTAL CITY | Join to the best society.</title>

    <style>
        .carousel {
            padding-top: 50px;
        }

        .modal-header{
            background-color: #ff8000;
            
        }

        .col-lg-8 {
            margin-left: 75px;
            
             width: 650px;
             height: 500px;
        }

        .col-lg-4 {
            margin-left: 80px;
            padding-top: 30px;
        }
        
        .wider{
            background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Minimalist-Crumpled-Paper-Simple-Background-Image.jpg');
        }

        .zoom:hover {
                                    -ms-transform: scale(1.5);
                                    /* IE 9 */
                                    -webkit-transform: scale(1.5);
                                    /* Safari 3-8 */
                                    transform: scale(1.5);
                                }
        /*
        font-family: 'Mitr', sans-serif;
        font-family: 'Roboto', sans-serif;
        font-family: 'Truculenta', sans-serif;
        font-family: 'Sriracha', cursive;
        */
    </style>







</head>

<body id="page-top">

    <!--MENU *ขาดlogin steam & dialog & ปรับแต่งให้สวยงาม-->
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
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light btn btn-primary" type="button" style="color: honeydew; background-color:#964800; margin: 10px; font-family: 'Mitr', sans-serif;" data-toggle="modal" data-target="#howto_1">
                                            แนะนำวิธีการเล่นพื้นฐาน
                                        </a>

                                        <a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light" type="button" href="#services" style="color: honeydew; background-color:#964800; margin: 10px; font-family: 'Mitr', sans-serif;">
                                            สิ่งที่คุณควรรู้ก่อนเริ่มเล่น
                                        </a>

                                        <a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light" type="button" href="#law" style="color: honeydew; background-color:#964800; margin: 10px; font-family: 'Mitr', sans-serif;">
                                            กฏหมายภายในประเทศ
                                        </a>

                                        <!--<a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light"
                                            type="button" href="topup.php"
                                            style="color: honeydew; background-color:#964800; margin: 10px; font-family: 'Mitr', sans-serif;">
                                            ร้านค้า & เติมเงิน
                                        </a>-->

                                        <!--ปุ่มล็อกอิน-->


                                        <?php
                                        if (isset($_SESSION['steamid'])) {

                                            echo "<a class=\"ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light\"
                                                type=\"button\" href='topup.php'
                                                style=\"color: honeydew; background-color:#964800; margin: 10px; font-family: 'Mitr', sans-serif;\">
                                                ร้านค้า & เติมเงิน</a>";

                                            include('steamauth/userInfo.php');
                                        } else {
                                            echo "<a class=\"ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light\"
                                            style=\"color: honeydew; background-color:#007200; margin: 10px; font-family: 'Mitr', sans-serif;\"href='?login'>เข้าสู่ระบบ</a>";
                                        }
                                        ?>
                                        <!-- $_SESSION['steamid'] เอาไปใช้อ้างอิงใน database เพื่อเก็บยอดเงิน -->
                                        <?php
                                        if (isset($_SESSION['steamid'])) {
                                            
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
                                        < </div>
                                </div>
                        </nav>
                    </a>
                </div>
            </nav>
        </div>



    </header>

    <div class="modal fade right" id="howto_1" tabindex="-1" role="dialog" aria-labelledby="model_howto_1" style="font-family: 'Mitr', sans-serif;" aria-hidden="true" >
        <div class="modal-dialog modal-lg modal-notify modal-success text-white" role="document" >
            <div class="modal-content" style="color:black;">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="model_howto_1"style="color:white;" >แนะนำวิธีการเล่นขั้นพื้นฐาน</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="white-text">×</span></button>
                </div>
                <div class="modal-body">
                    
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mb-4">

                                <!-- Grid row -->
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 mb-4">

                                        <div class="card wider mb-4">
                                            <div class="row">
                                                <div class="col">
                                                    <!--Card content-->

                                                    <div class="card-body">

                                                        <!--Title-->
                                                        <h4 class="card-title text-dark">เข้าประเทศครั้งแรก</h4>

                                                        <!--Text-->
                                                        <p  class="card-text">
                                                            เข้าประเทศมาครั้งแรกให้ใส่ ชื่อ นามสกุล เป็นตัวภาษาอังกฤษตัวแรกตัวใหญ่ทั้งชื่อและนามสกุล หลังจากนั้นให้ทำการระบุ วัน/เดือน/ปีเกิด ส่วนสูง และ เพศ ให้ถูกต้อง
                                                        </p>
                                                        <img src="pic/dialog1_img/register.png" width="100%"><br><br>
                                                        <p  class="card-text">
                                                            หลังจากนั้นจะเข้าตรง Job Center ประชาชนที่เข้าครั้งแรกจะแต่งตัวฟรี ในการเข้าครั้งแรกเท่านั้น หลังจากแต่งเสร็จเเล้วให้กด <kbd>Enter</kbd>
                                                        </p>
                                                        <img src="pic/dialog1_img/costume.png" width="100%"><br><br>
                                                        <p  class="card-text">
                                                            ทางประเทศของเราจะแจกรถให้ประชาชนฟรี คันแรก 40 KG โดยวิธีการกดรับไอเทมรายวันจะอยู่ตรงมุมขวาบนของบนของหน้าจอ ให้ประชาชนกด <kbd>F11</kbd> เพื่อรับไอเทม และ สามารถไปรับรถได้ที่การาจฟ้าในเมือง
                                                        </p>
                                                        <img src="pic/dialog1_img/carfd.png" width="100%"><br><br>
                                                        <p class="card-text">
                                                            สถานที่ต่างๆในแผนที่มีจุดอยู่มากมายในไปลองค้นหากด <kbd>P</kbd> เพื่อเข้าไปยังแผนที่ หากไม่มีไอคอนทางขวามือแสดงรายชื่อไอคอนให้กด <kbd>TAB</kbd> และใช้ลูกศรขึ้นลงเพื่อเลือกดูชื่อไอคอน แต่ถ้าไอคอนนั้นมีหลายจุดให้ใช้ลูกศรซ้ายขวา เพื่อเลือนไปตำแหน่งถัดไปของไอคอนรูปแบบเดียวกัน
                                                        </p>

                                                        <img src="pic/dialog1_img/map.png" width="100%"><br><br>
                                                        <p class="card-text">
                                                            ผู้เล่นจะต้องพึ่งพาอาศัยกันในแต่ละสายอาชีพ เช่นคุณจะต้องซื้ออาหารจากคนส่งอาหาร ซื้ออาวุธหนักจากคนขายปืนเถือน หรือรักษาตัวเองโดยผู้ที่เป็นหมอ ซึ่งเงินจะถูกหมุนเวียนใช้กันในผู้เล่นเอง และในบางครั้งบางอาชีพ จะมีภารกิจขึ้นให้ไปส่งสินค้าตามที่ได้กำหนดเอาไว้ แลกกับเงินจำนวนหนึ่ง
                                                        </p>
                                                        <p class="card-text">
                                                            รายได้ในแต่ละอาชีพจะขึ้นอยู่กับจำนวนประชากรในเมืองที่มากจะยิงได้กำไรมาก แต่หากในประชากรเหล่านั้นทำอาชีพเดียวกันซ้ำๆ รายได้นั้นจะถูกแบ่งลดลงไปอีกด้วย ซึ่งเราสามารถดูอัตรารายได้จากการกด <kbd>F10</kbd>
                                                        </p>
                                                        <img src="pic/dialog1_img/market.png" width="100%"><br><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 mb-4">
                                        <div class="card wider mb-4">
                                            <div class="row">
                                                <div class="col">
                                                    <!--Card content-->
                                                    <div class="card-body">

                                                        <!--Title-->
                                                        <h4 class="card-title text-dark">ปุ่มต่างๆในประเทศ</h4>

                                                        <!--Text-->
                                                        <p class="card-text">
                                                            ประชากรใหม่ที่เข้ามาในเมืองจะเกิดในโรงพยาบาลหลักภายในตัวเมือง ผู้เล่นสามารถกด <kbd>G</kbd> เพื่อเปิดเมนูหลักของเกมสำหรับใช้งานการดำเนินชีวิต และสามารถดูปุ่มต่างๆได้ที่หน้า Setting
                                                        </p>
                                                        <img src="pic/dialog1_img/console.png" width="100%"><br><br>

                                                        <p class="card-text">
                                                            การเปิดโทรศัพท์ การที่จะเปิดโทรศัพท์จำเป็นต้องซื้อโทรศัพท์ที่ร้านค้าก่อน (แนะนำให้ซื้อเป็นอันดับแรก)
                                                            วิธีเปิดโทรศัพท์นั้น ให้กด <kbd>G</kbd> ค้างไว้ แล้วเรื่อยเมาส์ไปทางโทรศัพท์เเล้วคลิกหนึ่งครั้ง
                                                        </p>
                                                        <img src="pic/dialog1_img/mobile.png" width="100%"><br><br>

                                                        <p class="card-text">
                                                        การเปิดระบบควบคุมโทรศัพท์ด้วยเมาส์ (ตามความถนัดของแต่ละบุคคล) ให้ไปที่ตั้งค่าในโทรศัพท์ จากนั้นให้ไปที่เมนู การควบคุมด้วยเมาส์ แล้วเลือกไปที่ <kbd>Yes</kbd> เป็นอันเสร็จสิ้น ก็จะได้การควบคุมด้วยเมาส์มาเเล้ว
                                                        </p>
                                                        <img src="pic/dialog1_img/control.png" width="100%"><br><br>

                                                        <p class="card-text">
                                                        การชำระบิล ให้กด <kbd>G</kbd> ค้างเเล้วเลื่อนเมาส์ไปที่บิลเพื่อแสดงบิล เมื่อเข้ามาเเล้วจะแสดงที่เราได้รับมา เช่น ตำรวจ หมอ และ ช่าง กดชำระบิลโดยการ กด <kbd>Enter</kbd> ที่บิลที่เราต้องการจะชำระ
                                                        </p>
                                                        <img src="pic/dialog1_img/showbill.png" width="100%"><br><br>

                                                        <p class="card-text">
                                                        การเปิดดูบัตรประจำตัว กด <kbd>G</kbd> ค้าง เเล้วเลื่อนเมาส์ไปที่บัตร แล้วกดคลิกหนึ่งครั้ง จากนั้นสามารถเลือกไปที่บัตรต่างๆ เพื่อแสดงบัตรดังรูป

                                                        </p>
                                                        <img src="pic/dialog1_img/id-console.png" width="100%"><br><br>
                                                        <img src="pic/dialog1_img/showid.png" width="100%"><br><br>


                                                        <p class="card-text">
                                                        การอุ้ม กด <kbd>G</kbd> ค้าง เเล้วเลื่อนเมาส์ไปที่อื่นๆ จากนั้น ไปที่อุ้ม แล้วกดคลิกหนึ่งครั้ง จากนั้นจะแสดงเมนู การอุ้ม ขึ้นมาดังรูป (การอุ้มจำเป็นให้ผ่ายที่ถูกอุ้มกดยอมรับในกรณีที่ผู้เล่นคนนั้นยังไม่โคม่าหรือสลบ)
                                                        </p>
                                                        <img src="pic/dialog1_img/picking.png" width="100%"><br><br>

                                                        <p class="card-text">
                                                        การเรียกช่าง กด <kbd>G</kbd> ค้าง เเล้วเลื่อนเมาส์ไปที่เรียกช่าง จะส่งGps ไปให้ช่างอัตโนมัติ
                                                        </p>
                                                        <img src="pic/dialog1_img/call.png" width="100%"><br><br>

                                                        <p class="card-text">
                                                        การแสดงท่าทางอื่นๆ กด <kbd>G</kbd> ค้าง เเล้วเลื่อนเมาส์ไปที่อื่นๆ จากนั้น ไปที่ท่าทางต่างๆ แล้วกดคลิกหนึ่งครั้ง

                                                        </p>
                                                        <img src="pic/dialog1_img/goemote.png" width="100%"><br><br>

                                                        <p class="card-text">
                                                        จากนั้นจะสามารถเลือกใช้ท่าทางต่างๆ เช่น เต้น ปรบมือ เป็นต้น
                                                        </p>
                                                        <img src="pic/dialog1_img/emote.png" width="100%"><br><br>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 mb-4">
                                        <div class="card wider mb-4">
                                            <div class="row">
                                                <div class="col">
                                                    <!--Card content-->
                                                    <div class="card-body">

                                                        <!--Title-->
                                                        <h4 class="card-title text-dark">การใช้ไมค์ในเกม</h4>

                                                        <!--Text-->
                                                        <p class="card-text">
                                                            โดยปกติดแล้วเริ่มต้นเมื่อเข้าเล่นเกมไมโครโฟนจะถูกปิดเอาไว้
                                                            ดังนั้นผู้เล่นจึงจำเป็นต้องไปเปิดระบบการสื่อสารด้วยเสียงด้วยตนเอง
                                                            โดยปรับทุกอย่างให้เหมือนตามภาพทั้งหมด
                                                            เมื่อตั้งค่าเรียบร้อยให้กด <kbd>N</kbd> เพื่อสนทนาด้วยเสียงกด <kbd>Z</kbd> เพื่อปรับระยะการได้ยิน
                                                        </p>
                                                        <img src="pic/dialog1_img/mic.png" width="100%"><br><br>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 mb-4">
                                        <div class="card wider mb-4">
                                            <div class="row">
                                                <div class="col">
                                                    <!--Card content-->
                                                    <div class="card-body">

                                                        <!--Title-->
                                                        <h4 class="card-title text-dark">การควบคุมพาหนะเบื้องต้น</h4>

                                                        <!--Text-->
                                                        <p class="card-text">
                                                        รัดเข็มขัด กด <kbd>K</kbd> ขณะอยู่ในรถเท่านั้นล็อกรถ/ปลดล็อกรถ กด <kbd>L</kbd> เปิดหลังรถ/ที่เก็บของ กด <kbd>M</kbd> (รถต้องไม่ทำการล็อคอยู่) การควบคุมส่วนอื่นๆ  กด <kbd>G</kbd> ค้าง เเล้วเลื่อนเมาส์ไปที่อื่นๆ จากนั้น ไปที่ควบคุมรถ แล้วกดคลิกหนึ่งครั้ง
                                                        </p>
                                                        <img src="pic/dialog1_img/gocontrolcar.png" width="100%"><br><br>

                                                        <p class="card-text">
                                                        จากนั้นสามารถเปิดทุดส่วนที่รถสามารถเปิดได้ผ่านทางเมนูนี้
                                                        </p>
                                                        <img src="pic/dialog1_img/controlcar.png" width="100%"><br><br>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- Grid row -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 
   <div class="modal fade bd-example-modal-xl" abindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="font-family: 'Mitr', sans-serif; ">
   <div class="modal-dialog modal-xl">
    <div class="modal-content" style="background-image: url('https://images.pexels.com/photos/3824262/pexels-photo-3824262.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">>
      <center><br><h1 style="font-family: 'Sriracha', cursive;">แนะนำวิธีการเล่นขั้นพื้นฐาน</h1><br></center>
      <h3>&nbsp;เข้าประเทศครั้งแรก</h3><br>
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;เข้าประเทศมาครั้งแรกให้ใส่ ชื่อ นามสกุล เป็นตัวภาษาอังกฤษตัวแรกตัวใหญ่ทั้งชื่อและนามสกุล หลังจากนั้นให้ทำการระบุ วัน/เดือน/ปีเกิด ส่วนสูง และ เพศ ให้ถูกต้อง</h5><br>
      <img src="pic/dialog1_img/register.png"><br>
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;หลังจากนั้นจะเข้าตรง Job Center ประชาชนที่เข้าครั้งแรกจะแต่งตัวฟรี ในการเข้าครั้งแรกเท่านั้น หลังจากแต่งเสร็จเเล้วให้กด Enter เพื่อเสร็จสิ้น</h5><br>
      <img src="pic/dialog1_img/costume.png"><br>
    </div>
    </div>
    </div>-->



    <!--Carousel & NEW-->
    <header>
        <!--หน้าปก-->
        <section class="bg-light page-section" id="new">



            <br>
            <br>
            <br>

            <img src="pic/web_wallpeper.png" width="1920" height="1080">
            
            <div class="container">

                <div class="text-mono">

                </div>
                <!--Carousel-->
                <br>
                <br>
                <center>
                    <h1 style="font-family: 'Sriracha', cursive;">Welcome to IMMORTALCITY THAILAND</h1>
                    <br>
                    <br>
                </center>


        <div class="card wider mb-4 cloudy-knoxville-gradient">
                <div class="row">
					<div class="col-lg-8 col-md-8 mb-4 " >		
						<div id="carousel-thumb" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="carousel-inner" role="listbox" >
																<div class="carousel-item">
									<img class="d-block w-100" src="pic/carousel_img/unknown1.png" width="450px" height="400px">
								</div>
																<div class="carousel-item active">
									<img class="d-block w-100" src="pic/carousel_img/unknown2.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown3.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown4.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown5.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown6.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown7.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown8.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown9.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown10.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown11.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown12.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown13.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown14.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown15.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown16.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown17.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown18.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown19.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown20.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown21.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown22.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown23.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown24.png"width="450px" height="400px">
								</div>
																<div class="carousel-item ">
									<img class="d-block w-100" src="pic/carousel_img/unknown25.png"width="450px" height="400px">
								</div>
															</div>
							<a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							<ol class="carousel-indicators">
																	<li data-target="#carousel-thumb" data-slide-to="0" class="">
										<img src="pic/carousel_img/unknown1.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="1" class="active">
										<img src="pic/carousel_img/unknown2.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="2" class="">
										<img src="pic/carousel_img/unknown3.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="3" class="">
										<img src="pic/carousel_img/unknown4.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="4" class="">
										<img src="pic/carousel_img/unknown5.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="5" class="">
										<img src="pic/carousel_img/unknown6.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="6" class="">
										<img src="pic/carousel_img/unknown7.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="7" class="">
										<img src="pic/carousel_img/unknown8.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="8" class="">
										<img src="pic/carousel_img/unknown9.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="9" class="">
										<img src="pic/carousel_img/unknown10.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="10" class="">
										<img src="pic/carousel_img/unknown11.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="11" class="">
										<img src="pic/carousel_img/unknown12.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="12" class="">
										<img src="pic/carousel_img/unknown13.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="13" class="">
										<img src="pic/carousel_img/unknown14.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="14" class="">
										<img src="pic/carousel_img/unknown15.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="15" class="">
										<img src="pic/carousel_img/unknown16.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="16" class="">
										<img src="pic/carousel_img/unknown17.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="17" class="">
										<img src="pic/carousel_img/unknown18.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="18" class="">
										<img src="pic/carousel_img/unknown19.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="19" class="">
										<img src="pic/carousel_img/unknown20.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="20" class="">
										<img src="pic/carousel_img/unknown21.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="21" class="">
										<img src="pic/carousel_img/unknown22.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="22" class="">
										<img src="pic/carousel_img/unknown23.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="23" class="">
										<img src="pic/carousel_img/unknown24.png" width="100">
									</li>
																	<li data-target="#carousel-thumb" data-slide-to="24" class="">
										<img src="pic/carousel_img/unknown25.png" width="100">
									</li>
								</ol>
                                <br><br>
						</div>
					</div>
                                        
					<div class="col-lg-4 col-md-4 ">		
						<div class="card-body card-body-cascade" style="font-family: 'Mitr', sans-serif;">
							<h3 class="card-title">RolePlay?</h3>
							<p class="card-text text-dark">เล่นจำลองเป็นมนุษย์ ต้องมีความคิดการกระทำตอบสนองต่อสิ่งต่างๆโดยยึดหลักความเป็นจริงเช่น กลัวปืน อยากรวย อยากมีอำนาจ ชื่อเสียง และอื่นๆ คุณสามารถเป็นอะไรก็ได้ที่คนเขาเป็น เช่น มาเฟียร์ ตำรวจ หมอ คนธรรมดา โดยวิธีการเข้าก็ขึ้นอยู่กับหลีดเดอร์ของอาชีพนั้นๆ</p>
						</div>
                        <br>
                        
						<div class="card-body card-body-cascade">
							<a type="button" class="btn btn-outline-danger btn-lg text-lg btn-block waves-effect waves-light" id="download" href="https://runtime.fivem.net/client/FiveM.exe"><i class="fas fa-download" style="font-family: 'Sriracha', cursive;"></i> <b>ดาวน์โหลดเกม<br><span style="color:gray">Download</span></b></a><b>
														
							<a type="button" class="btn btn-outline-success btn-lg text-lg btn-block waves-effect waves-light" href="fivem://connect/immortalcity-rpth.com"><i class="fas fa-sign-in-alt" style="font-family: 'Sriracha', cursive;"></i>PLAY GAME</a>
						</b></div><b>
					</b></div><b>
				</b></div> 

        </div>



                <!--NEW-->
                <Center>
                    <br>
                    <br>
                    <h1 style="font-family: 'Sriracha', cursive;">--NEWS & UPDATE--</h1>
                    <br>
                    <br>



                    <div style="overflow-x: auto; width: 100%;" id="news"></div>


                    <div class="card" style="display: inline-block; width: 18rem;"><img src="Update Server/14-01-63/14-01-2563.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Sriracha', cursive;">
                                UPDATE 14/01/2563</h5>
                            <p class="card-text" style="text-overflow: ellipsis; font-family: 'Mitr', sans-serif;">
                                ระบบการเงิน ธนาคาร คริปโต และคาสิโน คือการหาเงินนอกจากทำอาชีพ</p>
                            <a href="https://www.facebook.com/104573434940788/posts/106827221382076/?d=n" class="btn btn-primary stretched-link" style="font-family: 'Mitr', sans-serif;">
                                คลิก! อ่านต่อ</a>
                        </div>
                    </div>

                    <div class="card" style="display: inline-block; width: 18rem;"><img src="Update Server/14-01-63/14-01-2563-2.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Sriracha', cursive;">
                                UPDATE 14/01/2563</h5>
                            <p class="card-text" style="text-overflow: ellipsis; font-family: 'Mitr', sans-serif;">
                                ระบบการาจ พาวด์ และ Valet อยากโชว์รถตัวเองหลายๆ คัน</p>
                            <a href="https://www.facebook.com/104573434940788/posts/106734184724713/?d=n" class="btn btn-primary stretched-link" style="font-family: 'Mitr', sans-serif;">
                                คลิก! อ่านต่อ</a>
                        </div>
                    </div>

                    <div class="card" style="display: inline-block; width: 18rem;"><img src="Update Server/14-01-63/14-01-2563-3.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Sriracha', cursive;">
                                UPDATE 14/01/2563</h5>
                            <p class="card-text" style="text-overflow: ellipsis; font-family: 'Mitr', sans-serif;">
                                ระบบอาชีพฤดูกาล ระบบใหม่ที่ยังไม่มีใครเคยทำ</p>
                            <a href="https://www.facebook.com/104573434940788/posts/106662284731903/?d=n" class="btn btn-primary stretched-link" style="font-family: 'Mitr', sans-serif;">
                                คลิก! อ่านต่อ</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </Center>
        </section>
    </header>




    <!--สิ่งที่ควรรู้ *ขาดimgรอออกแบบเเละปรับfont-->
    <dev class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1 class="section-heading text-uppercase" style="font-family: 'Mitr', sans-serif;">
                        สิ่งที่คุณควรรู้ก่อนเริ่มเล่น !</h1>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">
                        Roleplay เป็นการจำลองบทบาทสมมติให้กับตัวละครในเกม ให้รู้สึกว่าตัวละครในเกมมีชีวิตจริง ๆ
                        ในบทบาทที่คุณเป็นคนกำหนด มีความรู้สึก มีความกลัวต่อสิ่งต่าง ๆ เช่น กลัวตาย กลัวมีด กลัวปืน
                        และมีความอยากจะเป็นในสิ่งต่าง ๆ เหมือนดั่งในชีวิตจริงที่คุณอยากจะเป็น
                        คุณเองก็ต้องมีความพยายามที่อยากจะเป็นมัน
                        เมื่อคุณได้รับการแต่งตั้งให้เป็นในบทบาทนั้นๆ
                        คุณก็ต้องปฏิบัติตนให้เหมาะสมกับบทบาทที่คุณได้รับ เช่น
                        ถ้าหากตัวละครในเกมของคุณได้รับบทบาทในการเป็นหมอ
                        คุณจะต้องปฏิบัติตนในเกมให้มีคุณสมบัติเหมือนกับคุณเป็นหมอจริง ๆ คือการรักษาชีวิต และ สุขภาพ
                        ของประชาชนอย่างดีที่สุด สิ่งที่สำคัญที่สุดไม่ว่าคุณจะได้รับบทบาทเป็นอะไร
                        คุณเองก็ต้องให้เกียรติและเคารพในสิทธิของผู้อื่นด้วย
                    </p>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-md-4">

                    <img src="pic/ic.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">In Character (IC)</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">การพูดคุยของตัวละครในบทบาท
                        จะไม่พูดคุยเกี่ยวกับชีวิตจริง
                        เป็นการพูดคุยของตัวละครในเกม
                    </p>
                </div>
                <div class="col-md-4">

                    <img src="pic/oc.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">Out Of Character (OOC)</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">
                        การพูดคุยนอกบทบาทหรือการพูดคุยในชีวิตจริงๆของเรานั้นเอง
                        ซื่งต่างจากการคุยแบบ IC อย่างตรงข้าม</p>
                </div>
                <div class="col-md-4">

                    <img src="pic/mg.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">Metagaming (MG)</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">การนำเอาเรื่อง OOC
                        (เรื่องของชีวิตจริง) มาปนกับ IC (เรื่องของในเกม) เช่น
                        การพูดคุยนัดแนะกันใน Discord, TS3 หรือช่องทางอื่น ๆ นอกเหนือจากในเกม หรือ
                        การเอาเรื่องในชีวิตจริงของเรามาพูดคุยในเกม เป็นต้น
                        ซึ่งหากคุณกระทำการดังตัวอย่างที่กล่าวมาข้างต้น คุณจะถูกลงโทษทันที
                        การที่เราอยู่ภายในเกมเราควรใช้ช่องทางการสื่อสารในเกมเท่านั้น เช่น โทรศัพท์, พูดคุยภายในเกม
                    </p>
                </div>
                <div class="col-md-4">

                    <img src="pic/pg.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">Powergaming (PG)</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">การกระทำที่เกินคน หรือเหนือมนุษย์
                        ปกติในชีวิตจริงเขาทำไม่ได้หรือเขาไม่ทำกัน เช่น ไม่กลัวรถชน,
                        วิ่งอย่างไม่เหนื่อยกระโดดอย่างไม่เหนื่อยกระโดดลงมา, กระโดดลงรถเมื่อขับรถด้วยความเร็ว,
                        ขับรถพุ่งลงน้ำ, คุยโทรศัพท์ในน้ำ, ขับรถที่ไม่ใช่แนว Off road ขึ้นเขา เป็นต้น </p>
                </div>
                <div class="col-md-4">

                    <img src="pic/avatar.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">Deathmatch (DM)</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">เป็นการฆ่าคน หรือต่อยคน
                        โดยที่เราไม่มีบทบาท หรือพูดเป็นภาษาง่าย ๆ คือ
                        เราไปต่อยหรือฆ่าคนอื่นทั้ง ๆ ที่ยังไม่มีเรื่องราวกันมาก่อน การที่จะไปต่อยหรือฆ่าใคร
                        คุณควรมีเรื่องกับเค้ามาก่อน มิเช่นนั้นคุณจะถูกมองว่าคุณ DM (ฆ่ามั่วต่อยมั่ว)
                        และโดนลงโทษทันที
                    </p>
                </div>
                <div class="col-md-4">

                    <img src="pic/avatar.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">Quit Game (QG)</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">
                        การออกเกมขณะที่เรายังดำเนินสตอรี่ไม่จบ หรือยังมีเรื่องที่ค้างคาอยู่ในเกม
                        เช่น เราหนีตำรวจอยู่แล้วเราออกเกมเพื่อหนี คุณจะถูกมองว่าคุณผิดกฎ QG (ออกเกมหนีบทบาท)
                        และจะถูกลงโทษทันที ถ้าหากเป็นกรณีที่เรามีธุระเร่งด้วยหรือเหตุสุดวิสัยจริง ๆ ที่ต้องออกเกม
                        เราต้องแจ้งกับคนที่กำลังดำเนินสตอรี่กับเราให้ทราบทุกครั้ง
                    </p>
                </div>
                <div class="col-md-4">

                    <img src="pic/db.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">Drive By (DB)</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">
                        การขับรถชน หรือ การขับรถทับผู้เล่น โดยเจตนาจนผู้อื่นเสียชีวิตหรือไม่ก็ตาม
                        นั่นเป็นสิ่งที่คุณไม่ควรกระทำเป็นอย่างยิ่ง แต่ถ้าหากคุณไม่ได้ตั้งใจที่จะขับรถชน
                        คุณควรที่จะกล่าวคำว่าขอโทษและรับผิดชอบค่าเสียหายให้แก่คู่กรณีทันที
                    </p>
                </div>
                <div class="col-md-4">

                    <img src="pic/RK.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">Revenge Kill (RK) สำคัญ !</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">กฎข้อนี้สำหรับ FreeLife City คือ
                        คุณจะต้องลืมเรื่องราวที่เกิดขึ้นในระหว่างที่คุณสลบ ถึงแม้ว่าหน้าจอคุณจะเห็นว่า
                        ใครเป็นคนมาอุ้มคุณไปที่ใหนหรือทำอะไรกับคุณ เมื่อคุณตื่นมาคุณต้องลืมเรื่องราวระหว่างที่คุณสลบ
                        แต่คุณยังสามารถจำได้ว่า ก่อนหน้าที่คุณสลบใครมาทำอะไรคุณ และในการสลบบางกรณีเช่น
                        คุณสลบด้วยเหตุการณ์ที่ไม่ร้ายแรง(โดนต่อย) คุณสามารถพูดได้
                        แต่จะต้องพูดในน้ำเสียงที่มีความเจ็บปวด แต่ถ้าหากเป็นเหตุการณ์ที่ร้ายแรง คุณไม่ควรพูด
                        คุณต้องทำเหมือนคุณสลบไปจริง ๆ แต่ทั้งนี้ทั้งนั้น
                        ขึ้นอยู่กับคุณจะแสดงมันออกมาอย่างไรให้สมกับบทบาทที่คุณเป็น ณ เวลานั้น อยู่ที่จิตสำนึกของคุณ
                    </p>
                </div>
                <div class="col-md-4">

                    <img src="pic/avatar.png" alt="" width="300" height="300">
                    <h1> </h1><br>
                    <h4 class="service-heading" style="font-family: 'Sriracha', cursive;">Value of life (VoL)</h4>
                    <p class="text-muted" style="font-family: 'Mitr', sans-serif;">การเห็นความสำคัญของชีวิต
                        รักชีวิตตัวเองมากกว่าสิ่งอื่นใด
                        ในสถานการณ์ที่คุณอยู่ตัวคนเดียวแล้วโดนข่มขู่จากคนที่มีจำนวนมากกว่า
                        คุณควรจะกลัวและรักชีวิตตัวเอง เพราะคุณไม่รู้เลยว่าเค้ามีอาวุธพร้อมที่จะทำร้ายคุณหรือไม่
                    </p>
                </div>
            </div>
            <br><br>

            <!--ช่องทางการติดต่อ-->
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase" style="font-family: 'Sriracha', cursive;">คุณสามารถติดต่อฟรี
                    ! ได้ที่ Facebook Discord</h2>
                <p class="text-muted" style="font-family: 'Mitr', sans-serif;">
                    ดูรายละเอียดช่องทาง Facebook Discord ได้ทางข้อมูลเชิฟเวอร์ด้านล่าง
                    <br>
                <div style="overflow-x: auto; width: 100%; " id="contact">
                    <a style="text-decoration:none" href="https://www.facebook.com/ImmortalRPTH">
                        <img src="pic/facebook.png" alt="" style="width:100px;height:100px; margin: 50px;">
                    </a>
                    <a href="https://discord.gg/ygEesG8s">
                        <img src="pic/discord.png" alt="" style="width:100px;height:100px; margin: 50px;">
                    </a>
                </div>


                </p>


            </div>
        </div>
    </dev>

    <!--Rlue *เหลือแค่ปรับfont-->
    <div>
        <section class="bg-light page-section" id="law">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 class="section-heading text-uppercase" style="font-family: 'Sriracha', cursive;">
                            กฎต่างๆของเซิฟเวอร์ </h2>
                        <h3 class="section-subheading text-muted" style="font-family: 'Sriracha', cursive;">Server Rules
                        </h3>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="font-family: 'Sriracha', cursive;">
                                    หมวด 1 ความผิดเกี่ยวกับจราจร ( ผู้บังคับใช้หมวด 1 - <a style="color: cornflowerblue;"> หน่วยงานตำรวจ <a> )
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">มาตรา 101 -
                                    การฝ่าฝืนสัญญาณไฟจราจร มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 3,000-5,000
                                        เหรียญ </a><br>

                                    มาตรา 102 - การขับรถเร็วเกินกว่าที่กฏหมายกำหนด มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 5,000-10,000 เหรียญ </a><br>

                                    มาตรา 103 - การจอดรถในที่ห้ามจอด <a style="color:#590808	;">
                                        กรณีที่มีเจ้าของรถอยู่ด้วย</a> มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 5,000
                                        เหรียญ</a><br>

                                    มาตรา 104 - การจอดรถในที่ห้ามจอด <a style="color:#058c46	;">
                                        กรณีที่ไม่มีเจ้าของรถอยู่ด้วย</a> มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        5,000
                                        เหรียญ</a> และ<a style="color:#5f00bf;"> &nbsp;ยึดรถของกลาง</a><br>

                                    มาตรา 105 - การขับรถโดยประมาท ขับขี่หวาดเสียว
                                    ขับผิดเลนหรือกินเลนไม่สวมหมวกนิรภัยหรือคาดเข็มขัดนิรภัย
                                    มีโทษ<a style="color:#FF9966;"> &nbsp;ปรับ 2,000-3,000 เหรียญ</a><br>

                                    มาตรา 106 - การขับรถโดยประมาท ทำให้ทรัพย์สินเสียหาย มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 3,000-10,000 เหรียญ</a>
                                    หรือ <a style="color:#bf0000;"> &nbsp;จำคุก 10 นาที</a><br>

                                    มาตรา 107 - การขับรถโดยประมาท ทำให้ผู้อื่นถึงแก่ความตาย มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 50,000 เหรียญ</a> หรือ
                                    <a style="color:#bf0000;"> &nbsp;จำคุก 15-20 นาที</a><br>

                                    มาตรา 108 - การขับรถกีดขวางรถราชการหรือรถพยาบาลที่เปิดไซเรนฉุกเฉิน มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ5,000-10,000 เหรียญ</a><br>

                                    มาตรา 109 - การขัดขวางการปฏิบัติหน้าที่ของเจ้าหน้าที่
                                    การไม่ยอมหยุดรถให้เจ้าหน้าที่ตรวจค้นหรือการหลบหนีการจับกุม มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 10,000-50,000
                                        เหรียญ</a>
                                    หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 15-20 นาที</a><br>

                                    มาตรา 110 - การแข่งรถในที่สาธารณะโดยที่ไม่ได้รับอนุญาตจากทางราชการ ถือเป็นความผิด
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        10,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 10 นาที</a><br>

                                    มาตรา 111 - การขับขี่ยานพาหนะโดยไม่มีใบอนุญาตของยานพาหนะประเภทนั้นๆ มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 10,000
                                        เหรียญ</a><br>
                                    มาตรา 112 - การดูหมิ่นเจ้าพนักงานปฏิบัติหน้าที่อย่างร้ายแรง โดยไม่มีมูลเหตุอันควร
                                    มีโทษ<a style="color:#bf0000	;"> &nbsp;จำคุก
                                        5-15 นาที</a><br>
                                    มาตรา 113 - การเสพของมึนเมาทุกชนิดขณะขับรถ มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 20,000-30,000 เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก
                                        10-20 นาที</a>
                                    หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="font-family: 'Sriracha', cursive;">
                                    หมวด 2 ความผิดเกี่ยวกับอาวุธ ( ผู้บังคับใช้หมวด 2 - <a style="color: cornflowerblue;"> &nbsp;หน่วยงานตำรวจ <a> )
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">มาตรา 201 -
                                    การสำแดงหรือโชว์อาวุธทุกชนิดในที่สาธารณะโดยไม่มีเหตุอันควร มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 10,000-50,000
                                        เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก 5-30 นาที</a> <a style="color:#5f00bf	;"> &nbsp;หากเป็นอาวุธผิดกฏหมาย ให้ยึดอาวุธ</a><br>
                                    มาตรา 202 - การครอบครองอาวุธสงครามผิดกฏหมาย มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 50,000-200,000 เหรียญ</a> หรือ
                                    <a style="color:#bf0000	;"> &nbsp;จำคุก 20-60
                                        นาที</a> และ <a style="color:#5f00bf	;"> &nbsp;ยึดอาวุธชนิดนั้นๆ</a><br>
                                    มาตรา 203 - การจำหน่ายอาวุธสงครามผิดกฏหมาย มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 30,000-150,000 เหรียญ</a> หรือ
                                    <a style="color:#bf0000	;"> &nbsp;จำคุก 15-45 นาที</a>
                                    และ <a style="color:#5f00bf	;"> &nbsp;ยึดอาวุธชนิดนั้นๆ</a><br>
                                    มาตรา 204 - การใช้อาวุธโดยประมาทหรือเจตนาในที่ชุมชนหรือที่ที่มีบุคคลอื่นอยู่ใกล้
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        30,000-100,000 เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก 15-30
                                        นาที</a> <a style="color:#5f00bf	;"> &nbsp;หากเป็นอาวุธผิดกฏหมาย
                                        ให้ยึดอาวุธ</a><br>
                                    มาตรา 205 - การทำร้ายผู้เล่นอื่นด้วยอาวุธใดๆ ทำให้ผู้อื่นบาดเจ็บโดยประมาทหรือเจตนา
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        50,000-300,000 เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก 20-75
                                        นาที</a> <a style="color:#5f00bf	;"> &nbsp;หากเป็นอาวุธผิดกฏหมาย
                                        ให้ยึดอาวุธ</a><br>
                                    มาตรา 206 - การพกพาอาวุธโดยไม่มีใบอนุญาตพกพาอาวุธ ทั้งแบบสามัญหรือเฉพาะชนิด
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        30,000-100,000 เหรียญ</a> และ<a style="color:#5f00bf	;">
                                        &nbsp;ยึดอาวุธชนิดนั้นๆ</a><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="font-family: 'Sriracha', cursive;">
                                    หมวด 3 ความผิดเกี่ยวกับยาเสพติด ( ยึดของผิดกฏหมายทุกกรณี ) ( ผู้บังคับใช้หมวด 3 - <a style="color: cornflowerblue;"> &nbsp;หน่วยงานตำรวจ <a>)
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">มาตรา 301 -
                                    ครอบครองสารเสพติด เช่น<a style="color:#058c46	;"> &nbsp;กัญชา โคเคน สารตั้งต้น
                                        หรือยาเสพติดอื่นใดที่เกี่ยวข้องกัน
                                        รวมแล้วเกิน 4 ชิ้นขึ้นไป</a> มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        100,000-500,000 เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก 20-90
                                        นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ
                                        โทษเพิ่มขึ้นตามปริมาณที่ครอบครอง</a><br>

                                    มาตรา 302 - การใช้สารเสพติดผิดกฏหมาย มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        20,000 เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก 10 นาที</a><br>
                                    มาตรา 303 - จำหน่ายสารเสพติด สารตั้งต้น และอุปกรณ์เกี่ยวข้องกับยาเสพติดทุกชนิด
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        50,000-150,000 เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก 15-30
                                        นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 304 - เป็นผู้ผลิตสารเสพติดชนิดใดๆ มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        50,000-200,000 เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก
                                        15-40 นาที</a>
                                    หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br></div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour" style="font-family: 'Sriracha', cursive;">
                                    หมวด 4 ความผิดเกี่ยวกับทรัพย์สิน (
                                    หากถูกดำเนินคดีก่อนหมดเวลาสตอรี่ริบทรัพย์คืนให้แก่เจ้าทุกข์ทุกกรณี ) (
                                    ผู้บังคับใช้หมวด 4 - <a style="color: cornflowerblue;"> &nbsp;หน่วยงานตำรวจ <a>)
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">มาตรา 401 -
                                    การกรรโชกทรัพย์ ขู่เข็ญ ข่มขู่
                                    หรือสร้างความหวาดกลัวต่อผู้เล่นอื่น
                                    เพื่อหมายในทรัพย์สินของผู้เล่นนั้น มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        20,000-50,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 10-20
                                        นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a>
                                    <br>
                                    มาตรา 402 -
                                    การลักทรัพย์หรือชิงทรัพย์จากผู้เล่นอื่นโดยไม่ได้รับความยินยอมจากบุคคลนั้น
                                    โดยกระทำการเพียงคนเดียว มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 50,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 20 นาที</a>
                                    หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 403 -
                                    การลักทรัพย์หรือชิงทรัพย์จากผู้เล่นอื่นโดยไม่ได้รับความยินยอมจากบุคคลนั้น
                                    โดยร่วมกันกระทำ 2-3 คน มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 75,000 เหรียญ</a>
                                    หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 30 นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ ต่อบุคคล</a>
                                    <br>
                                    มาตรา 404 -
                                    การลักทรัพย์หรือชิงทรัพย์จากผู้เล่นอื่นโดยไม่ได้รับความยินยอมจากบุคคลนั้น
                                    โดยร่วมกันกระทำ<a style="color:#058c46	;"> &nbsp;4 คนขึ้นไป</a> มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 100,000 เหรียญ</a> หรือ <a style="color:#bf0000	;"> &nbsp;จำคุก 40 นาที</a>
                                    หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับต่อบุคคล</a>
                                    <br>
                                    มาตรา 405 - การร่วมกันปล้นสถานที่ทางการเพื่อประสงค์ต่อทรัพย์หรือสิ่งอื่นใด เช่น
                                    ปล้นธนาคาร
                                    หรือเรือบรรทุกเครื่องบิน มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        500,000-1,000,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 60-120
                                        นาที</a>
                                    หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ ต่อบุคคล</a><br>
                                    มาตรา 406 - การรับซื้อของโจร การได้ทรัพย์ใดๆ มาจากการกระทำความผิด
                                    ถึงแม้มิได้เป็นผู้กระทำความผิดนั้น ให้ถือว่าตกเป็นจำเลยร่วม มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 20,000-50,000
                                        เหรียญ</a> หรือ
                                    <a style="color:#bf0000	;"> &nbsp;จำคุก 10-20 นาที</a> และ<a style="color:#5f00bf	;"> &nbsp;ยึดทรัพย์สินที่ได้นั้นมาด้วย</a><br>
                                    มาตรา 407 - การทำให้ทรัพย์สินมีค่าของผู้อื่นเสียหาย สูญหาย หรือมีความบกพร่องไป
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        30,000-50,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 10-20
                                        นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 408 - การขโมยยานพาหนะใดๆ ของผู้อื่นโดยเจ้าทรัพย์ไม่ยินยอม มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        50,000-100,000 เหรียญ</a>
                                    หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 15-30 นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 409 - การแจ้งความเท็จในเรื่องเกี่ยวกับทรัพย์สิน
                                    โดยไม่มีหลักฐานหรือประจักษ์พยาน
                                    หากทำการสืบสวนสอบสวนแล้วเป็นเท็จ มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 100,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 30 นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 410 - เจ้าทุกข์ผู้เสียหาย
                                    สามารถฟ้องร้องทางแพ่งเรียกค่าเสียหายจากจำเลยได้เป็นมูลค่าไม่เกิน<a style="color:#bf0000	;"> &nbsp;1.5 เท่า</a>
                                    จากมูลค่าที่ทรัพย์ที่ถูกชิงไปหรือทำให้เสียหาย
                                    นอกเหนือจากการริบทรัพย์คืนแก่เจ้าทุกข์นั้นแล้ว
                                    ทั้งนี้อยู่ที่ดุลยพินิจของเจ้าพนักงานบังคับคดี<br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive" style="font-family: 'Sriracha', cursive;">
                                    หมวด 5 ความผิดเกี่ยวกับร่างกายและชีวิต ( ผู้บังคับใช้หมวด 5 - <a style="color: cornflowerblue;"> &nbsp;หน่วยงานตำรวจ <a>)
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">มาตรา 501 -
                                    การทำร้ายร่างกายผู้อื่น มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 20,000-30,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 10 นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a>
                                    หากมีการใช้อาวุธทำร้ายร่างกาย ให้ผิดมาตรา 205 ร่วมด้วย<br>
                                    มาตรา 502 - การทรมานผู้อื่นจนบาดเจ็บสาหัส มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 50,000-100,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก
                                        15-30 นาที</a>
                                    หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 503 - กระทำการโดยประมาท เป็นเหตุให้ผู้อื่นถึงแก่ความตาย มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        50,000-100,000 เหรียญ</a>
                                    หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 15-30 นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a> หากเกิดจากการขับขี่ยานพาหนะ
                                    ให้ผิดมาตรา 107
                                    ร่วมด้วย<br>
                                    มาตรา 504 - พยายามฆ่าผู้อื่น มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        150,000-200,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 40-50
                                        นาที</a>
                                    หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 505 - ฆ่าผู้อื่นโดยเจตนา มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        200,000-300,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 45-60
                                        นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a>
                                    <br>
                                    มาตรา 506 - การลักพาตัวโดยผู้เล่นอื่นไม่ยินยอม การกักขังหน่วงเหนียว
                                    การบังคับจับตัวประกัน
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 50,000-100,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 15-30 นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 507 - การเจตนาทำร้ายร่างกายเจ้าหน้าที่รัฐทุกหน่วยงาน มีโทษ<a style="color:#bf0000	;"> &nbsp;จำคุกทันที 15-30
                                        นาที</a><br>
                                    มาตรา 508 - สังหารเจ้าหน้าที่รัฐทุกหน่วยงาน มีโทษ<a style="color:#bf0000	;">
                                        &nbsp;จำคุกทันที 60 นาที</a><br>
                                    มาตรา 509 - กระทำความผิดโดยเจตนาทำร้ายหรือทำให้เสียชีวิตต่อประชาชนคนเดิมเกิน <a style="color:#058c46	;"> &nbsp;2 ครั้ง ใน 24
                                        ชั่วโมง</a>
                                    เจ้าหน้าที่สามารถรับทำคดีได้ทันทีโดยที่เจ้าทุกข์ไม่จำเป็นต้องแจ้งความ
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        200,000-500,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 45-90
                                        นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix" style="font-family: 'Sriracha', cursive;">
                                    หมวด 6 ความผิดเกี่ยวกับการจับกุม ( ผู้บังคับใช้หมวด 6 - <a style="color: cornflowerblue;"> &nbsp;หน่วยงานตำรวจ <a> )
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">มาตรา 601 -
                                    การขัดขวางการทำงานของเจ้าหน้าที่
                                    ไม่ให้ความร่วมมือ
                                    ไม่ปฏิบัติตามคำสั่งเฉพาะหน้าของเจ้าหน้าที่ จงใจก่อกวน สร้างความลำบากให้เจ้าหน้าที่
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        30,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 15 นาที</a><br>
                                    มาตรา 602 - ขัดขืนการจับกุมของเจ้าหน้าที่ มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 50,000 เหรียญ</a> และ<a style="color:#bf0000	;"> &nbsp;จำคุก 20
                                        นาที</a><br>
                                    มาตรา 603 - การติดสินบนเจ้าหน้าที่ เพื่อประโยชน์ส่วนตน ผู้เล่น มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 100,000
                                        เหรียญ</a> และ<a style="color:#bf0000	;"> &nbsp;จำคุก 30 นาที</a>
                                    <br>
                                    มาตรา 604 - แจ้งความเท็จ มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 100,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 30 นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a>
                                    หากเป็นเรื่องเกี่ยวกับทรัพย์สิน ให้ใช้มาตรา 409 แทน<br>

                                    มาตรา 605 - หลบหนีการจับกุมไปยังที่พักอาศัย ทั้งของตนเองและผู้อื่น มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 50,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 20 นาที</a>
                                    <br>
                                    มาตรา 606 - ให้การช่วยเหลือผู้ต้องหาด้วยวิธีต่างๆ ให้ที่หลบซ่อนหรือที่พักพิง
                                    พาผู้ต้องหาหลบหนี
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 50,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 20 นาที</a><br>

                                    มาตรา 607 - ผู้ใดทำการชิงตัวผู้ต้องหาที่ยังไม่ได้รับการตัดสินความผิด
                                    ไปจากการควบคุมตัวของเจ้าหน้าที่ มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 200,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 30 นาที</a>
                                    หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>

                                    มาตรา 608 - ผู้ใดทำการชิงตัวนักโทษที่ได้รับการตัดสินว่ามีความผิด
                                    ไปจากการควบคุมตัวของเจ้าหน้าที่
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 400,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 50 นาที</a> หรือ<a style="color:#5f00bf	;">
                                        &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 609 - ทำลายทรัพย์สินของทางราชการ ทรัพย์สินเจ้าหน้าที่หน่วยงานรัฐทุกหน่วยงาน
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        30,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 15 นาที</a><br>
                                    มาตรา 610 - ใช้เป็นภาคผนวกกับมาตราอื่นๆ
                                    หากผู้กระทำความผิดมีความสำนึกผิดและเข้ามอบตัวกับเจ้าหน้าที่ตำรวจด้วยตนเอง<a style="color:#058c46	;">
                                        &nbsp;เมื่อผู้ต้องหาให้การรับสารภาพต้องระวางโทษกึ่งหนึ่งของฐานความผิดนั้นๆ</a><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven" style="font-family: 'Sriracha', cursive;">
                                    หมวด 7 ความผิดทั่วไป ( ผู้บังคับใช้หมวด 7 - <a style="color: cornflowerblue;">
                                        &nbsp;หน่วยงานตำรวจ <a>)
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">มาตรา 701 -
                                    การรบกวนความสงบเรียบร้อย
                                    การส่งเสียงดังรบกวนผู้อื่น การด่าทอ หมิ่นประมาท
                                    บูลลี่ผู้อื่นใน IC มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 10,000-100,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 10-30 นาที</a><br>
                                    มาตรา 702 - การปกปิดรูปพรรณสันฐาน สวมหน้ากากปิดบังใบหน้า ปกปิดชื่อตนเอง
                                    เจตนาเพื่อก่ออาชญากรรมหรือไม่ก็ตาม มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        10,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 10 นาที</a><br>
                                    มาตรา 703 - การทะเลาะวิวาทในที่สาธารณะโดยปราศจากอาวุธ มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 20,000-30,000 เหรียญ</a>
                                    หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก
                                        10 นาที</a><br>
                                    มาตรา 704 - การกระทำการลามกอนาจารต่อหน้าสาธารณชน มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 10,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก
                                        5-10
                                        นาที</a><br>
                                    มาตรา 705 - การค้าประเวณีทุกกรณี มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 15,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 10 นาที</a><br>
                                    มาตรา 706 - มีสัตว์สงวนหรือชิ้นส่วนสัตว์คุ้มครองไว้ในครอบครอง มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 150,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 30 นาที</a>
                                    และ<a style="color:#5f00bf	;"> &nbsp;ยึดของกลางทั้งหมด</a><br>
                                    มาตรา 707 - แต่งกายเลียนแบบเจ้าหนักงานตำรวจ แพทย์ หน่วยข่าวกรอง
                                    เพื่อให้ผู้อื่นเข้าใจว่าตนเป็นเจ้าหน้าที่ของหน่วยงานนั้น ไม่ว่ากรณีใดๆ มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        100,000
                                        เหรียญ</a>หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 30 นาที</a> หรือ<a style="color:#5f00bf	;"> &nbsp;ทั้งจำและปรับ</a><br>
                                    มาตรา 708 - มีเงินผิดกฏหมายไวในครอบครอง มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        10,000-1,000,000 เหรียญ</a>
                                    โดยค่าปรับจะคิดเป็น 2
                                    เท่าของเงินผิดกฏหมายที่ครอบครองไว้ ต่ำสุดที่ 10,000 เหรียญสูงสุดที่ 1,000,000
                                    เหรียญ<br>
                                    มาตรา 709 - การจับกลุ่มเกิน 4 คนและก่อความวุ่นวายขึ้นในประเทศ
                                    ให้ถือว่าเป็นแก๊งเถื่อน มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ
                                        50,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 20 นาที</a><br>
                                    มาตรา 710 - มีของแดงผิดกฏหมายไว้ในครอบครอง มีโทษ<a style="color:#FF9966	;">
                                        &nbsp;ปรับ 30,000 เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 15
                                        นาที ต่อของ 1
                                        ชิ้น</a> และ<a style="color:#5f00bf	;"> &nbsp;ยึดของกลางทั้งหมด</a><br>
                                    มาตรา 711 - การเป็นแก๊งที่ลงทะเบียน แต่ไม่มีที่ทำการแก๊ง เมื่อก่อความวุ่นวาย
                                    มีโทษ<a style="color:#FF9966	;"> &nbsp;ปรับ 200,000
                                        เหรียญ</a> หรือ<a style="color:#bf0000	;"> &nbsp;จำคุก 30 นาที</a><br>
                                    มาตรา 712 - เมื่อตำรวจตรวจค้นตามอำนาจหน้าที่แล้วพบบิลค้างจ่ายเกิน 100,000$
                                    มีโทษ<a style="color:#bf0000	;"> &nbsp;จำคุก 20 นาที</a> (
                                    ยกเว้นบิลศัลยกรรม )<br></div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight" style="font-family: 'Sriracha', cursive;">
                                    หมวด 8 ความผิดสำหรับหน่วยงานของรัฐ ( ผู้บังคับใช้หมวด 8 - <a style="color: sienna;">
                                        &nbsp;ประธานาธิบดี <a>)
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">----
                                    กำลังดำเนินการออกกฏหมายให้ครอบคลุมกับทุกหน่วยงาน เร็วๆ
                                    นี้ ----<br></div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine" style="font-family: 'Sriracha', cursive;">
                                    หมวด 9 ความผิดร้ายแรงเกี่ยวกับประเทศ ( ผู้บังคับใช้หมวด 9 - <a style="color: sienna;"> &nbsp;ประธานาธิบดี <a> )
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family: 'Mitr', sans-serif;">
                                    ในเนื้อหาความผิดของหมวด 9 ค่อนข้างร้ายแรง
                                    <a>
                                        <h6> </h6>ทางผู้ตัดสินความผิดจึงต้องใช้ความรัดกุมที่สุดในการตัดสินความผิด
                                        ถึงแม้สิทธิ์ขาดการตัดสินใจจะอยู่ที่แอดมิน
                                        แต่เพื่อให้ไม่เกิดความผิดพลาด ทางผู้ร้องต้องมีหลักฐานที่รัดกุม
                                        แจ้งรายละเอียดการทำผิดให้ครบถ้วนที่สุด
                                        ต่อมาในการตัดสินทุกเคสจะต้องได้รับความเห็นชอบจาก ผู้บัญชาการหน่วยงาน 3 ท่าน จาก
                                        6
                                        หน่วยงานเสียก่อน จากนั้นจะสุ่มคัดเลือกคณะลูกขุนจากผู้เล่นทั่วไป 5 คน
                                        หากตัดสินว่าผิดเกินกึ่งหนึ่ง จะตัดสินให้ผู้นั้นผิดจริง
                                        หากผู้เล่นแจ้งเท็จโดยไม่มีมูลและไม่มีหลักฐานจะได้รับโทษ
                                        แต่หากเป็นการตรวจสอบเองโดยตรงจากประธานาธิบดีหรือแอดมิน
                                        หรือหน่วยงานข่าวกรองที่มีหน้าที่โดยตรง
                                        สิทธิ์ในการวิเคราะห์หลักฐานและการตัดสินใจ จะขึ้นอยู่กับแอดมินแต่เพียงผู้เดียว
                                        คำตัดสินจากแอดมินถือเป็นที่สิ้นสุด
                                    </a><br>

                                    <br>

                                    <h6>มาตรา 901 - การกระทำความผิดเกี่ยวกับ IC และ OC การด่าทอทุกกรณี
                                        การบูลลี่การเหยียดหยามกันนอกบนบาทในเกม</h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 60 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 120 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a><br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    <br>
                                    <h6>มาตรา 902 - การกระทำความผิดเกี่ยวกับ PG การเล่นบทบาทที่เหนือมนุษย์</h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 120 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 240 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a><br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    <br>
                                    <h6>มาตรา 903 - การกระทำความผิดเกี่ยวกับ DM การยิงผู้เล่นอื่นมั่วๆ</h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 150 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 300 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a> <br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    <br>
                                    <h6>มาตรา 904 - การกระทำความผิดเกี่ยวกับ SK การดักยิงที่จุดเกิด</h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 120 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 240 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a><br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    <br>
                                    <h6>มาตรา 905 - การกระทำความผิดเกี่ยวกับ DB การจงใจวิ่งตัดหน้ารถ</h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 90 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 180 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a><br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br><br>
                                    <br>
                                    <br>
                                    <h6>มาตรา 906 - การกระทำความผิดเกี่ยวกับ CK การฆ่าตัวตายเพื่อหนีบทบาท</h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 120 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 240 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a><br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    <br>
                                    <h6>มาตรา 907 - การกระทำความผิดเกี่ยวกับ NL การแก้แค้นโดยไม่ลืมเรื่องราวก่อนหน้า
                                    </h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 60 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 120นาที</a><br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;จำคุก 180 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a><br>
                                    กระทำผิดครั้งที่ 4 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    <br>
                                    <h6>มาตรา 908 - การกระทำความผิดเกี่ยวกับ QG การหนีออกจากบทบาทตัวละครที่เล่น</h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 60 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 300 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a><br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    -------------------------------------------------------------------------
                                    <br>
                                    <h5>มาตรา 909 - การกระทำความผิดเกี่ยวกับ CC แบ่งออกเป็น 2 วรรค</h5><br>
                                    <br>
                                    <h6>วรรค 1 - การใช้บัคของประเทศเพื่อหาผลประโยชน์ หากแจ้งบัคกับประธานาธิบดี
                                        จะไม่ได้รับโทษใดๆ</h6>
                                    <br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 60 นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 120นาที</a><br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;จำคุก 180 นาที</a> และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a><br>
                                    กระทำผิดครั้งที่ 3 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    <h6>วรรค 2 - การทุจริต โกงผู้เล่นอื่นๆ ( ไอเทมหรือเงินใน IC )</h6><br>
                                    กระทำผิดครั้งที่ 1 - <a style="color:#bf0000	;"> &nbsp;จำคุก 240 นาที</a> และ
                                    ยึดของที่โกงคืนให้ผู้เสียหาย และ<a style="color:#FF9966	;"> &nbsp;แจกใบเหลือง</a>
                                    <br>
                                    กระทำผิดครั้งที่ 2 - <a style="color:#bf0000	;"> &nbsp;แจกใบแดง</a>
                                    เชิญออกจากประเทศ<br>
                                    <br>
                                    <h6>วรรค 3 - การทุจริต โกงผู้เล่นอื่นๆ ( ไอเทมหรือเงินใน OC )</h6><br>
                                    กระทำผิดครั้งเดียว - เชิญออกจากประเทศ และ<a style="color:#bf0000	;">
                                        &nbsp;ส่งข้อมูลที่มีทั้งหมดของผู้เล่นที่กระทำผิดให้ผู้เสียหายดำเนินคดีตามกฏหมาย</a>
                                    <br>
                                    <br>
                                    <h6>วรรค 4 - การใช้โปรแกรมโกงและใช้โปร</h6><br>
                                    กระทำผิดครั้งเดียว - <a style="color:#bf0000	;"> &nbsp;เชิญออกจากประเทศ และ
                                        ส่งข้อมูลสตรีมผู้เล่นที่กระทำผิดเข้าระบบ
                                        Global Ban
                                        เพื่อให้เข้าเล่นในเซิฟอื่นๆ ไม่ได้อีก</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </scetion>
                </div>
            </div>


            <!--discord *เสร็จแล้ว-->
            <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
                new Crate({
                    server: '772054063399305236',
                    channel: '772085739110268948'
                })
            </script>


</body>

</html>