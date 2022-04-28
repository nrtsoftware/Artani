<?php 

class Shortcut {

private $HTML_SHORTCUT;


public function getHTML() {
  return $this->HTML_SHORTCUT;  }

public function setHTML(array $array) {
  $this->HTML_SHORTCUT = searchFile(...$array);
  return $this;  } 
}