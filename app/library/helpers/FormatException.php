<?php

namespace app\library\helpers;

class FormatException
{
  public static function throw($throw)
  {
    $environment = strtolower($_ENV['ENVIRONMENT']);

    return view('error.'.$environment, [
      'throw' => $throw
    ]);
  }
}