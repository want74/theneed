<!doctype html>
<html lang="en">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, The Need</title>
    <style>
        .bg-color {
            background: #2F2FA2;
        }

        .bg-icon {
            background-image: url(img/z.svg);
            background-repeat: no-repeat;
            background-position: left left;
            background-size: 75% 100%;
            height: 600px;

        }

        .bg-icon2 {
            background-image: url(img/ris.svg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 90% 100%;
            height: 600px;

        }

        .h1-color {
            color: #FFFFFF;
        }

        .p-color {
            color: #FFFFFF;
        }

        .button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* серый кнопка unactive */
            background: #F64C72;
            border-radius: 15px;
            border: none;
            line-height: 24px;
        }

        .lol {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 400;
            font-size: 28px;
            line-height: 37px;
            display: flex;
            align-items: center;

            color: #C4C4C4;
        }

        h1 {
            font-weight: 800;
            font-size: 58px;
            line-height: 85px;
        }

        .s {
            font-weight: 700;
            font-size: 18px;
            line-height: 24px;
        }
    </style>
</head>


<body>
    <div class="col bg-color d-flex" style="height:100vh;">
        <div class="row my-auto" style="width: 100vw;">
            <div class="col-10 mx-auto ">
                <div class="row ">
                    <div class="col-6">
                        <div class="col-10 mx-auto  bg-icon d-flex ">
                            <div class="row my-auto mx-auto" style="width:100%;">
                                <div class="col">

                                    <h1 class="h1-color">
                                        The need
                                    </h1>

                                    <p class="p-color lol">
                                        Найдите то, что вам нужно по самой лучшей цене
                                    </p>
                                    <div class="row mt-5 pt-5 pb-5">
                                        <div class="col-6 mx-auto">
                                            <form action="go.php">
                                                <button class="button p-color form-control s">
                                                    вход
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-6 mx-auto">
                                            <form action="reg.php">
                                                <button class="button p-color form-control s">
                                                    регистрация
                                                </button>
                                            </form>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-10 mx-auto">
                            <div class="row">
                                <div class="col bg-icon2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>