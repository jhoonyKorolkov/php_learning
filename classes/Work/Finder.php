<?php
namespace Classes\Work;

class Finder extends Worker
{
  static public function find($email): mixed
  {
    $worker = null;

    foreach (self::$workers as $key => $value) {
      if ($value['email'] === $email) {
        $worker = $value;
      }
    }

    if (!isset($worker)) {
      echo 'no worker';
      return false;
    }
    return $worker;
  }
}