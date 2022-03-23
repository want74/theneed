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
        .rightbg {
            background: #F3F1FF;
            height: 100vh;
        }

        body {
            background: white;
        }

        h1 {
            font-style: normal;
            font-weight: 700;
            font-size: 34px;
            line-height: 46px;
            /* or 135% */


            /* Neutral/800 */

            color: #170F49;
        }

        .slogan {
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 30px;
            /* or 167% */


            /* Neutral/600 */

            color: #6F6C90;
        }

        input {
            background: #FFFFFF;
            /* Neutral/300 */

            border: 1px solid #EFF0F7;
            box-sizing: border-box;
            /* Input/Default */

            box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);
            border-radius: 50px !important;
            height: 55px !important;
            font-weight: 400!important;
            font-size: 18px!important;
            line-height: 20px!important;
            color: #6F6C90 !important;
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
            height: 50px;
            color: white !important;
            background: #BDBDBD !important;
            border-radius: 20px !important;
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 700 !important;
            font-size: 18px;
            line-height: 20px;
            /* identical to box height, or 111% */

            text-align: center;

            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="col">
        <div class="row">
            <div class="col-5">
                <div class="row">
                    <div class="col-9" style="margin-left:100px;">
                        <!--Первая строка с заголовком-->
                        <div class="row" style="margin-top:25vh;">
                            <h1>
                                Войти
                            </h1>
                        </div>
                        <div class="row" style="margin-top:1vh;">
                            <p class="slogan">
                                Выполните вход в свой личный кабинет
                            </p>
                        </div>
                        <div class="row">
                            <form action="" class="d-flex w-75">
                                <div class="col">
                                    <div class="row mb-4">
                                        <input type="number" name="number" class="form-control w-100 man"
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
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col rightbg">

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