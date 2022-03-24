<?php
session_start();
include "connect.php";
$query1 = mysqli_query($con, "SELECT * FROM store WHERE id='".$_GET["store_id"]."'");
$query = mysqli_query($con, "SELECT * FROM tovars WHERE store_id='".$_GET["store_id"]."'");
$stroka1 = $query1->fetch_assoc();
?>


<!doctype html>
<html lang="ru">

<head>
    <!-- manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Montserrat:wght@800&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <!-- exo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@600&family=Manrope:wght@700&family=Montserrat:wght@800&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .head-color {
            background: #242582;

        }

        .card-color {
            background: rgba(237, 236, 236, 0.78);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;

        }

        body {}

        .bg {}

        .lol {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 22px;
            /* or 92% */
            letter-spacing: -0.408px;
            /* шрифт НЕ важный */
            color: #FFFFFF;
        }

        .nav {
            background: rgba(237, 236, 236, 0.78);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
        }

        h1 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 22px;
            /* identical to box height, or 92% */

            letter-spacing: -0.408px;

            /* Фирменный цвет 2 */

            color: #553D67;
        }

        h2 {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 46px;
            /* or 230% */


            /* шрифт НЕ важный */

            color: #FFFFFF;
        }

        h3 {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 700;
            font-size: 13px;
            line-height: 20px;
            /* identical to box height, or 154% */
            text-align: center;

            /* шрифт НЕ важный */

            color: #FFFFFF;
        }

        .borders {
            border: 1px solid rgba(60, 60, 67, 0.6);
            box-sizing: border-box;
            border-radius: 15px;
        }

        .p1 {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 22px;
            /* or 122% */

            letter-spacing: -0.408px;

            /* Фирменный цвет 4 */

            color: #99738E;
        }

        .p2 {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            /* identical to box height, or 418% */


            /* шрифт НЕ важный */

            color: #FFFFFF;
        }

        .p3 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 700;
            font-size: 17px;
            line-height: 20px;
            /* identical to box height, or 154% */

            text-align: center;

            /* Фирменный цвет 2 */

            color: #553D67;
        }

        .p4 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 800;
            font-size: 17px;

            /* identical to box height, or 154% */

            text-align: center;

            /* Фирменный цвет 3 АКЦЕНТ */

            color: #F64C72;
        }

        .p5 {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;

            /* identical to box height, or 154% */

            text-align: center;

            /* шрифт НЕ важный */

            color: #FFFFFF;
        }


        .cards {
            background: rgba(237, 236, 236, 0.78);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
        }

        .btn1 {
            background: #F64C72;
            border-radius: 15px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;


        }

        .btn2 {
            background: #F64C72;
            border-radius: 15px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;



        }

        .cardss {
            background: #242582;
            border-radius: 10px;

        }

        .fill {
            background: rgba(0, 203, 32, 0.59);
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="col head-color">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row" style="height:100px;">
                    <div class="col-1">
                        <div class="row" style="height: 100%;">
                            <img src="img/iconka.svg" class="my-auto">
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="row" style="height: 100%;">
                            <a class="lol text-center my-auto" href="mag.php">Магазины</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-10 mx-auto">
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <div class="col-12 cardss pt-5 pb-5 mt-5">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <h2 class="text-center"><?php echo $stroka1['title']?></h2>
                                <p class="p2 text-center">​<?php echo $stroka1['adress']?></p>
                                <p class="p2 text-center"><?php echo $stroka1['time']?></p>                                
                                <p class="p2 text-center"><?php echo $stroka1['phone']?></p>
                                <form action="dist.php">
                                    <button class="btn1 btn form-control pt-1 pb-1 mt-5">
                                        <div class="row">
                                            <div class="col-1 my-auto">
                                                <img src="img/box.svg" alt="">
                                            </div>
                                            <div class="col-8 mt-2 ">
                                                <h3>ПОСМОТРЕТЬ НА КАРТЕ</h3>
                                            </div>
                                        </div>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-9 ">

                <div class="row ">
                    <?php
                for($i=0;$i<mysqli_num_rows($query);$i++){
                $stroka = $query->fetch_assoc();
                ?>
                    <div class="col-3 cards pt-3 pb-3 card-color ml-5 mt-5">
                        <p class="text-center"><img src="<?php echo $stroka['img']?>" class="card-img-top mx-auto mt-3"
                                style="width:90%;"></p>
                        <p class="p3"><?php echo $stroka['title']; ?></p>
                        <p class="p4"><?php echo $stroka['price']; ?></p>
                        <div class="row">
                            <div class="fill col-6 mx-auto">
                                <p class="p5 text-center mt-2">
                                    В НАЛИЧИИ: <?php echo $stroka['number']?>
                                </p>
                            </div>
                        </div>

                    </div>
                    <?php } ?>

                </div>










            </div>

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>