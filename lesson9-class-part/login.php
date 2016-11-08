<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.10.2016
 * Time: 19:43
 */

    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    $loginErrors = [];
    $userValid = $passwordValid = false;
    if (!empty($_POST)) {
        if (!empty($_POST['login'])) {
            if ($_POST['login'] !== 'admin') {
                $loginErrors[] = 'Wrong login!';
            } else {
                $userValid = true;
            }
        } else {
            $loginErrors[] = 'Login can`t be empty!';
        }
        if (!empty($_POST['password'])) {
            if ($_POST['password'] !== 'test1') {
                $loginErrors[] = 'Wrong password!';
            } else {
                $passwordValid = true;
            }
        } else {
            $loginErrors[] = 'Password can`t be empty!';
        }
    }
    if ($userValid && $passwordValid) {
        setcookie('User', 'admin');
        $_SESSION['user'] = 'admin';
        header('Location: index.php?page=home');
    }
    $errorMsg = '';
    if (!empty($loginErrors)) {
        $errorMsg .= 'Login errors:' . '<br>';
        foreach ($loginErrors as $msg) {
            $errorMsg .= $msg . '<br>';
        }
    }
?>

<?php if(!defined('BASE_PATH')) {include_once 'config.php';} ?>
<?php include "templates/header.php"; ?>

<div class="row">
    <div class="col-lg-offset-3" >
        <div class="well col-lg-7">
            <div class="panel panel-default">
                <?php if(!empty($errorMsg)) { ?>
                    <div class="alert alert-warning fade in">
                        <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                        <strong><?=$errorMsg?></strong>
                    </div>
                <?php } ?>
                <div  class="panel-heading">
                    <h1 style="text-align: center;">Регистрация в системе</h1>
                </div>

                <div  class="panel-body">
                    <form id="reg_form" name="reg_form" action="" method="post">
                        <div class="form-group">
                            <label for="login">Имя:</label>
                            <input class="form-control" type="text" name="login" id="login" value="">
                        </div>

                        <div class="form-group">
                            <label for="password">Пароль:</label>
                            <input class="form-control" type="password" name="password" id="password" value="">
                        </div>

                        <input form="reg_form" class="btn btn-success" type="submit" value="Регистрация">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "templates/footer.php";
