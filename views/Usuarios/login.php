<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <html>
        <head>
        </head>
        <body>
        <form method="POST" action=app\models\valida.php>
        <label>Login:</label><input type="text" name="email" id="login"><br>
        <label>Senha:</label><input type="password" name="senha" id="senha"><br>
        <input type="submit" value="entrar" id="entrar" name="entrar"><br>
        <a href="cadastro.html">Cadastre-se</a>
        </form>
        </body>
    </html>

</div>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

