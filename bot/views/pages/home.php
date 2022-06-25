<?php
use App\Services\Page;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/assets/css/style.css" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">



    <link rel="stylesheet" href="../../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/style.css">




    <title></title>

</head>
<body>
    <header>
      <div class="subheader">
        <div class="container">
          <div class="row">
            <div class="col-md-3 offset-md-1">

              <div class="navbar-header prive">
                <button type="button" class="navbar-toggle" data-toggle="colapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a href="/login" class="navbar-brand" color= #fff;  >ChatBot</a>
              </div>

            </div>

            </div>
            <div class="col-md-4 offset-md-1 ">

            </div>
          </div>
        </div>
      </div>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <h1 class="title_two_section">Добро пожаловать </h1>
              <a href="/login" class="button_aplication" >Начать общение!</a>
            </div>
          </div>
        </div>
      </section>
    </header>

    <reasons>
        <div class="container">
          <h5 class="title_black">Возможности</h5>

            <div class="row">

              <div class="col-md-6">
                <div class="reason">
                  <div class="reason_img">
                  <img src="../../uploads/avatars/552-5520930_check-mark-clipart-black-and-white-png-download.png" height="50px" width="50px" alt="logo" class="reason_logo">
                  </div>
                  <div class="description">
                    <div class="description_title">Понимает человеческую речь</div>
                    <div class="description_text">Бот распознает человеческую речь и отвечает вам на них.</div>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="reason">
                  <div class="reason_img">
                  <img src="../../uploads/avatars/552-5520930_check-mark-clipart-black-and-white-png-download.png" height="50px" width="50px" alt="logo" class="reason_logo">
                  </div>
                  <div class="description">
                    <div class="description_title">Возможность обучения</div>
                    <div class="description_text">Бот развивается за счет условий определённых запросов о пользователя.</div>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="reason">
                  <div class="reason_img">
                  <img src="../../uploads/avatars/552-5520930_check-mark-clipart-black-and-white-png-download.png" height="50px" width="50px" alt="logo" class="reason_logo">
                  </div>
                  <div class="description">
                    <div class="description_title">Понимает множество языков</div>
                    <div class="description_text">Бот может общатся на других языках за счет встроенных расширений для перевода.</div>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="reason">
                  <div class="reason_img">
                  <img src="../../uploads/avatars/552-5520930_check-mark-clipart-black-and-white-png-download.png" height="50px" width="50px" alt="logo" class="reason_logo">
                  </div>
                  <div class="description">
                    <div class="description_title">Легко интегрируется в систему</div>
                    <div class="description_text">Может интегрироватся в большинство систем такие как: Facebook, Telegram, Line, Kik, Skype, Twitter, Viber, Spark</div>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="reason">
                  <div class="reason_img">
                  <img src="../../uploads/avatars/552-5520930_check-mark-clipart-black-and-white-png-download.png" height="50px" width="50px" alt="logo" class="reason_logo">
                  </div>
                  <div class="description">
                    <div class="description_title">Есть бесплатные лимиты использования</div>
                    <div class="description_text">У бота есть ограниченое количество запросов на общения.</div>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="reason">
                  <div class="reason_img">
                  <img src="../../uploads/avatars/552-5520930_check-mark-clipart-black-and-white-png-download.png" height="50px" width="50px" alt="logo" class="reason_logo">
                  </div>
                  <div class="description">
                    <div class="description_title">Возможности распознавания человеческий голос</div>
                    <div class="description_text">Бот может распознавать человеческий голос при помощи встроеных в него библиотек.</div>
                    </div>
                </div>
              </div>



              <div class="col-md-6">
                <div class="reason">
                  <div class="reason_img">
                  <img src="../../uploads/avatars/552-5520930_check-mark-clipart-black-and-white-png-download.png" height="50px" width="50px" alt="logo" class="reason_logo">
                  </div>
                  <div class="description">
                    <div class="description_title">Понимает множество языков</div>
                    <div class="description_text">Бот может общатся на других языках за счет встроенных расширений для перевода.</div>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="reason">
                  <div class="reason_img">
                  <img src="../../uploads/avatars/552-5520930_check-mark-clipart-black-and-white-png-download.png" height="50px" width="50px" alt="logo" class="reason_logo">
                  </div>
                  <div class="description">
                    <div class="description_title">Легко интегрируется в систему</div>
                    <div class="description_text">Может интегрироватся в большинство систем такие как: Facebook, Telegram, Line, Kik, Skype, Twitter, Viber, Spark</div>
                    </div>
                </div>
              </div>


            </div>
        </div>
    </reasons>


    <possibility>
  <div class="container">

        <div class="title_black">Функционал</div>
        <div class="mobile_app">    У данного сайта пририсуствуют данный функционал</div>
        <div class="row">
          <div class="col-sm">
            <img src="../../uploads/avatars/kisspng-computer-icons-file-system-permissions-clip-art-permission-5b170cd0ee7f29_4700903615282372649769-photoroom.X0vtT (1).png" alt="">
            <div class="possibility_text">Регистрация</div>
          </div>
          <div class="col-sm">
            <img src="../../uploads/avatars/position1.g48Kb.png" alt="">
            <div class="possibility_text">Авторизация</div>
          </div>

          <div class="col-sm">
            <img src="../../uploads/avatars/istockphoto-924845580-612x612_cut-photo_ru-photoroom__1_.H1tBG.png" alt="">
            <div class="possibility_text">ChatBot</div>

          </div>

        </div>
</possibility>

    <use>
      <div class="container">
        <div class="title_black_use">Как пользоватся</div>

        <div class="employ">
          <div>
            <details open>
                <summary>
                    Первый шаг
                </summary>
                <div>
                  Для общение с ботом нужно в первую очередь зарегистрироватся.
                </div>
            </details>
            <details>
                <summary>
                    Второй шаг
                </summary>
                <div>
                  После успешной регистрации, вам нужно будет войти в систему.
                </div>
            </details>
            <details>
                <summary>
                    Третий шаг
                </summary>
                <div>
                  После того как вы войдете в систему вам будет доступен диалог.
                </div>
            </details>
            <details>
                <summary>
                    Четвертый шаг
                </summary>
                <div>
                    Начать общение.
                </div>
            </details>
        </div>
        </div>
        </div>
      </div>
    </use>


    <about_me>
      <div class="container">

        <div class="title_black_use">Обо мене</div>
        <h5>Здравствуйте, уважаемый председатель и члены государственной аттеста-ционной комиссии, меня завут Данилин Максим из группы ИС18-2к хочу продеманстрировать вам мой дипломный проект по теме "Разработка и проектирование чат бота на базе искуственного интеллектанадеюсь она вам понравилась"</h5>
      </div>
    </about_me>





<footer>
  <div class="container"></div>
</footer>

</body>
</html>