<?php

require_once('../vendor/autoload.php');

session_start();

use app\core\App;

try
{
  require_once('../config/app.php');
  
  $app = new App();
  $app->route();
  $app->controller();
}
catch(Throwable $throw)
{
  echo formatException($throw);
}