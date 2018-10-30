<?php
namespace Core;
/**
 * Core Class of te Templating Enine
 */
class TemplateEngine
{
  private $data ;
  public function e($e)
  {
    echo htmlspecialchars($e);
    return $e;
  }
  public function ei($e)
  {
    echo $e;
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
    foreach ($this->data as $key => $value) {
      $template = preg_Replace('/\{\{\!(.*)\!\}\}/','<?php $this->ei($1) ?>',$template);
    }

    //replace data with special char
    foreach ($this->data as $key => $value) {
      $template = preg_Replace('/\{\{(.*)}\}/','<?php $this->e($1) ?>',$template);
    }

    // convert from te.php to this section
    eval('$nama = " <b>m.aria bishma fauzan</b>"; ');
    eval('?>'.$template.'<?php');
  }


}


 ?>
