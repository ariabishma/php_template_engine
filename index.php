<?php
require_once 'Core/TemplateEngine.php';

use Core\TemplateEngine;

// initialitaion class of TemplateEngine
$te = new TemplateEngine;

//initial data and template file
$data = $te->data([
  'nama' => 'm.aria bishma',
  'kelas' => '11 RPL 1',
  'data' => array("nama"=>"bishma")
  ])->render('test');

?>
