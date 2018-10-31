<?php
namespace Core;
/**
 * Core Class of te Templating Enine
 */
class TemplateEngine
{

  private $data;

  private function e($e)
  {
    if (gettype($e) === "array") {
      print_r(json_encode($e));
    }else{
      print_r(htmlspecialchars($e));
    }
    return $e;
  }
  private function ei($e)
  {
    print_r($e);
    return $e;
  }


  public function data($key)
  {
     $this->data = $key;
     return $this;
  }


  public function render($template_name)
  {
    // get data from template
    $template = file_get_contents('template/'.$template_name.".te.php");

    $template = preg_Replace('/\@if (.*)\:/','<?php if($1): ?>',$template);
    $template = preg_Replace('/\@else\:/','<?php else: ?>',$template);
    $template = preg_Replace('/\@endif/','<?php endif; ?>',$template);

    // replace data without special char

      $template = preg_Replace('/\{\{\!([^{}]*)\!\}\}/','<?php $this->ei($1) ?>',$template);


    //replace data with special char
    // foreach ($this->data as $key => $value) {
      $template = preg_Replace('/\{\{([^{}]*)\}\}/','<?php $this->e($1) ?>',$template);
    // }

    // convert from te.php to this section
    return $this->Extractor($template);
  }

  private function Extractor($template)
  {
    // parsing data
    foreach ($this->data as $key => $value) {
      ${$key} = $value;
    }
    // echo $template;
    eval('?>'.$template.'<?php');
  }

}


 ?>
