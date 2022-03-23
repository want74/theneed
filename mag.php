<?php
session_start();
include "connect.php";
$query = mysqli_query($con, "SELECT * FROM store");
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


            /* шрифт header */

            color: rgba(60, 60, 67, 0.6);
        }


        .cards {
            background: #FFFFFF;
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
                            <p class="lol text-center my-auto">О нас</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-10 mx-auto">
        <div class="row">
            <div class="col-10 mx-auto">

                <div class="row">
                    <?php
                for($i=0;$i<mysqli_num_rows($query);$i++){
                $stroka = $query->fetch_assoc();
                ?>
                    <div class="col-3 border cards pt-3 pb-3 ml-5 mt-5">
                        <div class="pb-5 pt-5 head-color border">
                            <h2 class="text-center"><?php echo $stroka['title']; ?></h2>
                        </div>
                        <div class="">
                            <p class="p2"><?php echo $stroka['adress']; ?></p>
                            <p class="p2"><?php echo $stroka['time']; ?></p>
                            <div class="d-flex">
                                <img src="img/phone2.svg" class="mb-3" alt="">
                                <div class="">
                                    <p class="p2"><?php echo $stroka['phone']; ?></p>
                                </div>

                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="d-flex">
                                    <form class="mx-auto" action="mag2.php" method="POST">
                                        <button class="btn1 btn form-control pt-1 pb-1 ">
                                            <div class="row">
                                                <div class="col-1 my-auto">
                                                    <img src="img/poloski.svg" alt="">
                                                </div>
                                                <div class="col-8 mt-2 ">
                                                    <h3>ПОДРОБНЕЕ</h3>
                                                </div>
                                            </div>
                                            <input class="d-none" type="" name="id"
                                                value="<?php echo $stroka['id'] ;?>">
                                        </button>
                                    </form>

                                </div>
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