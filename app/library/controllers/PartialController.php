<?php

namespace app\library\controllers;

abstract class PartialController 
{
  protected array $data = [];

  public function getData(): array
  {
    return $this->data;
  }
}
