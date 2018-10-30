<?php


require_once 'core/TemplateEngine.php';

use Core\TemplateEngine;

$te = new TemplateEngine;
$data = $te->data([
  'nama' => 'm.aria bishma fauzan',
  'kelas' => '11 RPL 1',
  ])->render('test');


  //
  // spl_autoload_register(function($class){
  //   echo $class."a</br>";
  // });
  //
  //
  // echo "string";
?>
