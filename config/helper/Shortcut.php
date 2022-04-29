<?php 

class Shortcut {

private $HTML_SHORTCUT;


public function getHTML() {
  return $this->HTML_SHORTCUT;  }

public function setHTML(array | String $array) {
  if (getType($array) == 'string'){
    $this->HTML_SHORTCUT = $array;
    return;
  }  
  $this->HTML_SHORTCUT = searchFile(...$array);
  return $this;  } 
}