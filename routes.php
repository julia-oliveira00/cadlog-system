<?php

//Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php';//Instancia controlador de autenticação
require 'controllers/DashboardController.php';//Instancia controlador de dashboard
require 'controllers/UserController.php';//Intancia o controlador de usuário

//Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController();
$dashboardController = new DashboardController();
$userController = new UserController();

?>