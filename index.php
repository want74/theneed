<!doctype html>
<html lang="en">

<head>
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
            background-image: url(img/z.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            height: 600px;
        }

        .h1-color {
            color: #FFFFFF;
        }

        .p-color {
            color: #C4C4C4;
        }

        .button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
            width: 303px;
            height: 45px;
            /* серый кнопка unactive */
            background: #BDBDBD;
            border-radius: 15px;
        }
    </style>
</head>


<body>
    <div class="col bg-color " style="height:1000px;">
        <div class="row">
            <div class="col-10 mx-auto border ">
                <div class="row ">
                    <div class="col-6">
                        <div class="col-10 mx-auto  bg-icon d-flex ">
                            <div class="row my-auto">
                                <div class="col">

                                    <h1 class="h1-color">
                                        The need
                                    </h1>

                                    <p class="h1-color">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 3
                                    </p>
                                    <div class="row mt-5">
                                        <form action="go.php">
                                            <button class="button">
                                                вход
                                            </button>
                                        </form>
                                        <form action="reg.php">
                                            <button class="button">
                                                регистрация
                                            </button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-10 mx-auto d-flex ">
                            <div class="row my-auto">
                                <div class="col">
                                    <img src="img/ris.png" alt="">
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