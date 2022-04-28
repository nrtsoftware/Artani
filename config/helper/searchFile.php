<?php

  // mixed search_file ( $dir [Diretório a ser pesquisado], $file [Nome do arquivo]        
  function searchFile($dir, $file): string|bool{
    $search = $dir.$file;
    //Verifica se o arquivo existe no diretório
    if((!is_dir($search)) and (file_exists($search))){
      return $search;
    }        
    $scan = scandir($dir);
    //Percorre todos os arquivos e diretórios
    foreach($scan as $path){
      if($path != '.' and $path != '..'){
        $newDir = $dir.$path.DIRECTORY_SEPARATOR;
          if(is_dir($newDir)){//Verifica se é diretório
            return searchFile($newDir, $file);
          }

        }
    }//Fecha Foreach
    
    return false;//Retorna falso caso não encontre   
  } //Fecha function