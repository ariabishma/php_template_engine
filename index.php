<?php
require_once 'core/TemplateEngine.php';
use Core\TemplateEngine;

$te = new TemplateEngine;
$data = $te->data([
  'nama' => 'm.aria bishma',
  'kelas' => '11 RPL 1',
  'data' => array("nama"=>"bishma")
  ])->render('test');


?>
