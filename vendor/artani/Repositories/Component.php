<?php

class Component {
/**@param $component name to be rendered 
  *Components searched on /views/components/ 
  *@param $style false by default, true looks for .css with componet name
  *@param $script false by default, true looks for .js with componet name
  *.css e .js will be searched in CSS_DIR and JS_DIR         */

  public static function render(
    string $component,
    //array $class = [], 
    //bool $style = false, 
    //bool $script = false,
    array $data = [] ): void   {
      
      //if ($class){}

      if(($cssComponentDir=searchFile(CSS_DIR, "$component.css"))){
        echo '<link rel="stylesheet" type="text/css" href="'."$cssComponentDir>"; }

      $ArtaniComponentDir = searchFile(ARTANI_COMPONENTS_DIR, "$component.php");
      require $ArtaniComponentDir;

      if(($jsComponentDir=searchFile(JS_DIR, "$component.js"))){ 
        layout::jsPush($jsComponentDir); }
        
        

      if($data){
        extract($data); }            
    }   
   
} ?>