<?php
use App\Services\Page;

if ($_SESSION["user"]) {
    \App\Services\Router::redirect('/profile');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php
Page::part('navbar');
?>

<div class="container">
    <h2 class="mt-4 text-center ">Регистрация</h2>
    <form class="mt-4" action="/auth/register" method="post" enctype="multipart/form-data">

    <div class="form-group col-md-6 offset-md-3">
        <label for="email" class="text-center">Почта</label>
        <input type="email" name="email" class="form-control " id="email" >
    </div>

    <div class="form-group col-md-6 offset-md-3">
        <label for="username">Ник </label>
        <input type="text" name="username" class="form-control" id="username" >
    </div>

    <div class="form-group col-md-6 offset-md-3">
        <label for="full_name">Имя</label>
        <input type="text" name="full_name" class="form-control" id="full_name" >
    </div>

    <div class="form-group col-md-6 offset-md-3">
        <label for="avatar">Картинка</label>
        <input type="file" name="avatar" class="form-control" id="avatar" >
    </div>

    <div class="form-group col-md-6 offset-md-3">
        <label for="password">Пароль</label>
        <input type="password" name="password" class="form-control" id="password" >
    </div>

    <div class="form-group col-md-6 offset-md-3">
        <label for="password_confirm">Повторите пароль</label>
        <input type="password" name="password_confirm" class="form-control" id="password_confirm" >
    </div>

    <div class="d-flex justify-content-center m-3">
        <button type="submit" class="btn btn-primary center">Заригестрироватся</button>
    </div>
    </form>
</div>
</body>
</html>