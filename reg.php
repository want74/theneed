<!doctype html>
<html lang="кг">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Войти</title>

    <style>
        /*Стили для правой первой колонки1*/
        .bg-color {
            background: #2F2FA2;
            background-image: url(img/Cells.svg);
        }

        .rightbg {
            background: #F3F1FF;
            height: 100vh;
        }

        body {
            background: white;
        }

        h1 {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 34px;
            line-height: 46px;
            /* or 135% */
            text-align: center;
            color: #FFFFFF;
        }

        .slogan {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 30px;
            color: #FFFFFF;
            text-align: center;
        }

        input {

            /* Neutral/300 */
            box-sizing: border-box;
            /* Input/Default */

            box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);
            height: 80px !important;
            font-weight: 400 !important;
            font-size: 18px !important;
            line-height: 20px !important;
            color: #6F6C90 !important;
            background: #FFFFFF;
            border: 1px solid #EFF0F7;
            /* Input/Default */
            border-radius: 15px !important;
        }

        .man {
            background-image: url("./img/man.svg");
            background-repeat: no-repeat;
            /*Убираем повтор изображения*/
            background-position: 95%;
            /*Позиционируем*/
        }
        .phone {
            background-image: url("./img/phone.svg");
            background-repeat: no-repeat;
            /*Убираем повтор изображения*/
            background-position: 95%;
            /*Позиционируем*/
        }

        .lock {
            background-image: url("./img/lock.svg");
            background-repeat: no-repeat;
            /*Убираем повтор изображения*/
            background-position: 95%;
            /*Позиционируем*/
        }

        button {
            width: 500px;
            height: 45px;
            color: white !important;
            background: #F64C72 !important;
            border-radius: 15px !important;
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 700 !important;
            font-size: 18px;
            line-height: 20px;
            /* identical to box height, or 111% */

            text-align: center;

            color: #FFFFFF;
        }

        .btn1 {
            background: #FFFFFF !important;
            border-radius: 15px !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;

            text-align: center !important;
            color: #BDBDBD !important;



        }

        hr {
            border: none;
            /* Убираем границу */
            background-color: #FFFFFF;
            /* Цвет линии */
            color: #FFFFFF;
            /* Цвет линии для IE6-7 */
            height: 2px;
            /* Толщина линии */
        }

        .bg-icon2 {
            background-image: url(img/z2.svg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 90% 100%;
            height: 600px;

        }
    </style>
</head>

<body class="bg-color">
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-5 d-flex mx-auto">
                <div class="row my-auto" style="width:50vw;">
                    <div class="col-9" style="margin-left:100px;">
                        <!--Первая строка с заголовком-->
                        <div class="row ">
                            <div class="col-8 mx-auto ">
                                <h1 class="">
                                    Регистрация
                                </h1>
                            </div>

                        </div>
                        <div class="row" style="margin-top:1vh;">
                            <div class="col-8 mx-auto ">
                                <p class="slogan">
                                    Создай свой личный кабинет для легкой работы
                                </p>
                            </div>

                        </div>
                        <div class="row">
                            <form action="insert.php" method="POST" class="d-flex w-75 mx-auto">
                                <div class="col">
                                    <div class="row mb-4">
                                        <input type="number" name="phone" class="form-control phone "
                                            placeholder="Введите номер телефона">
                                    </div>
                                    <div class="row mb-4">
                                        <input type="" name="name" class="form-control w-100 man"
                                            placeholder="Логин">
                                    </div>
                                    <div class="row my-2">
                                        <input type="password" name="password" class="form-control w-100 lock"
                                            placeholder="Пароль">
                                    </div>
                                    <div class="row mt-5">
                                        <button class="btn">
                                            ЗАГЕРИСТРИРОВАТЬСЯ 
                                        </button>
                                    </div>
                                    <!--<div class="row mt-5">
                                        <p class="slogan text-center w-100">
                                            Забыли пароль?
                                        </p>
                                    </div>
                                    -->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>