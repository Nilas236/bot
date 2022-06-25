<?php
use App\Services\Page;

session_start();

if (!$_SESSION["user"]){
    \App\Services\Router::redirect('/login');
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

    <div class="jumbotron mt-4" >
  <h1 class="display-4">Hello, <?= $_SESSION["user"]["full_name"]?></h1>
  <img src="<?= $_SESSION["user"]["avatar"]?>" height="300" alt="">


<div class="col-md-6 offset-md-3">

        <iframe
                allow="microphone;"
                width="500"
                height="700"
                src="https://console.dialogflow.com/api-client/demo/embedded/de91a1e2-6864-4ad3-9928-84b2c7da0acf">
        </iframe>






</div>




</div>
</div>
</body>
</html>