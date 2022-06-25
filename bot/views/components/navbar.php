<nav>
  <div class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="btn btn-default" href="/">Главная </a>
                <a class="btn btn-default" href="/">Связатся с нами </a>
            </li>
    </div>
    <div class="btn_nav">
        <?php
        if (!$_SESSION["user"]){
        ?>
        <a class="btn btn-default" href="/login">Войти</a>
        <a class="btn btn-default" href="/register">Регистрация</a>
        <?php
        }else{
            ?>
        <a class="nav-link active" href="/profile">Профиль</a>
            <form action="/auth/logout" method="post">
                <button type="submit" class="btn-danger">Выйти</button>
            </form>
        <?php
        }
        ?>
    </div>
</div>
</nav>