<?php
// โดยที่ $ชื่อตัวแปร = new mysqli($servername, $username, $password, $dbname)
$connect = new mysqli('localhost', 'root', '', 'topup');

// ทำการ check connection ว่าถูกต้องหรือไม่
if ($connect->connect_error) {
    die("Something wrong.: " . $connect->connect_error);
}

$sql = "SELECT * FROM topup_database";
$result = $connect->query($sql);
?>











<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Boostrap *ยังใช้cdnอยู่-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!---Jquery *ยังใช้cdnอยู่-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <!--img logo-->
    <link rel="shortcut icon" href="pic/logo.png">
    <title>IMMORTAL CITY | Join to the best society.</title>

    <style>
        
        }

        body {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #F2F3F4;
            color: #273746;
        }

        .container-fiuld {
            margin: 20px auto;
            padding: 0;
            width: 980px;
        }

        h1 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            /* ผสาน border ระหว่าง table กับ td  */
            border-collapse: collapse;
        }

        table,
        td {
            border: 1px solid #5D6D7E;
            text-align: center;
        }

        thead {
            background-color: #273746;
            color: #BDC3C7;
        }

        /* Striped Tables: ทำไฮไล์ในการแบ่ง row  */
        tr:nth-child(even) {
            background-color: #BDC3C7;
        }

        td {
            height: 30px;
            vertical-align: center;
        }

        .name {
            text-align: left;
            padding-left: 16px;
        }
    </style>

</head>

<body>
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
                                        <a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light" type="button" href="admin_topup.php" style="color: honeydew; background-color:#964800; margin: 10px;">
                                            Topup list
                                        </a>

                                        <a class="ht-tm-element btn btn-shadow text-mono btn-outline-warning active waves-effect waves-light" type="button" href="admin_market.php" style="color: honeydew; background-color:#964800; margin: 10px;">
                                            Market list
                                        </a>
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
    <div class="container-fiuld">
        <h1>Topup List</h1>
        <table>
            <thead>
                <tr>
                    <td width="5%">#</td>
                    <td width="25%">Date</td>
                    <td width="25%">Name_id</td>
                    <td width="25%">Topup</td>
                    <td width="25%">Bill</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['No.']; ?></td>
                        <td><?php echo $row['Numbers']; ?></td>
                        <td><?php echo $row['Name_id']; ?></td>
                        <td><?php echo $row['topup']; ?></td>
                        <td><?php echo $row['bill']; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>

    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>