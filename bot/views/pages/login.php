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
    <h2 class="mt-4 text-center ">Войти</h2>
    <form class="mt-4" action="/auth/login" method="post">
        <div class="form-group col-md-6 offset-md-3">
            <label for="email">Почта</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Введите почту">
        </div>
        <div class="form-group col-md-6 offset-md-3">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
        </div>
        <div class="d-flex justify-content-center m-3 p-20">
            <button type="submit" class="btn btn-primary center">Войти</button>
        </div>
    </div>
</form>
</div>

</body>
</html>