<?php

namespace app\controllers;

Use yii\web\Controller;
Class HelloController extends Controller
{
   public function actionSaySomething($message='Hello!'){
       return $this->render('say-something',[
           'message' => $message
       ]);
   }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

