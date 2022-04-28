<?php


class Layout {
  public static ?array $jsComponents;
  
  public function __construct()
  {
     self::$jsComponents[0] = 0;
  }

  public static function config($config){

    require  ARTANI_HTML_DIR.$config.'.php';  }

  /**@param @title Title HTML */
  public static function title(string $title){
    self::config('Head');
    echo "<title>$title</title>";   }

  /**@param $descriptions meta descriptions Array  */
  public static function descriptions(array $descriptions): void{
    foreach ($descriptions as $description){  
      echo "<meta name='description' content='$description'>";  
    } }

  /**@param $sass name with out extension, if applicable */
  public static function endHead(string $sass = null): void{
    if (CSS_FRAMEWORK_LINK == 0){
      // set reset and normalize on browser if theres no css framwork
      $reset = searchFile(CSS_DIR, 'reset.css');
      echo '<link rel="stylesheet" href="'.$reset.'">';
      $normalize = searchFile(CSS_DIR,'normalize.css');
      echo '<link rel="stylesheet" href="'.$normalize.'">';   }

    if (CSS_FRAMEWORK_LINK != 0){
      // Set css framework link
      echo CSS_FRAMEWORK_LINK;    }
    
    if (CSS_FRAMEWORK_FILE != 0){
      echo '<link href="'.searchFile(CSS_DIR, CSS_FRAMEWORK_FILE).'.css" rel="stylesheet">';
    }

    if ($sass){
      $sassCompiled = searchFile(CSS_DIR, $sass);
      echo '<link rel="stylesheet" href="'.$sassCompiled.'.css">';   }
    
    self::config('endHead');    }

  public static function endBody(): void{
    if (JS_FRAMEWORK_LINK != 0){
      // Set js framework link
      echo JS_FRAMEWORK_LINK;    }
    
    if (JS_FRAMEWORK_FILE != 0){
      echo '<link href="'.searchFile(JS_DIR, JS_FRAMEWORK_FILE).'.js" rel="stylesheet">';
    }

    if (self::$jsComponents){
      foreach(self::$jsComponents as $script){
        echo '<script type="text/javascript" href="'.$script.'"></script>';   }}
    
    self::config('endBody');  }
  
  public static function jsPush(string $jsComponentDir){
    //if (isset(self::$jsComponents)){
      array_push(self::$jsComponents, $jsComponentDir); 
    //return; }
    //self::$jsComponents = $jsComponentDir;   }
}} ?>