<!doctype html>
<html lang="кг">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Регистрация</title>

    <style>
        /*Стили для правой первой колонки1*/
        .bg-color {
            background: #2F2FA2;
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


            /* Neutral/800 */

            color: #FFFFFF;
        }

        .slogan {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 30px;
            color: #FFFFFF;
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
    <div class="col ">
        <div class="row">
            <div class="col-5">
                <div class="row">
                    <div class="col-9" style="margin-left:100px;">
                        <!--Первая строка с заголовком-->
                        <div class="row" style="margin-top:10vh; ">
                            <h1>
                                Регистрация
                            </h1>
                        </div>
                        <div class="row" style="margin-top:1vh;">
                            <p class="slogan">
                                Создай свой личный кабинет для легкой работы
                            </p>
                        </div>
                        <div class="row">
                            <form action="" class="d-flex w-75">
                                <div class="col">
                                    <div class="row mb-4">
                                        <input type="number" name="number" class="form-control man "
                                            placeholder="Введите номер телефона">
                                    </div>
                                    <div class="row my-2">
                                        <input type="password" name="password" class="form-control w-100 lock"
                                            placeholder="Пароль">
                                    </div>
                                    <div class="row mt-5">
                                        <button class="btn">
                                            ВОЙТИ
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>