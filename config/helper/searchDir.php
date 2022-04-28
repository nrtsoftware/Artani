<?php

  // mixed search_file ( $dir [Diretório a ser pesquisado], $file [Nome do arquivo]        
  function searchFile($dirName): string|bool{
    $search = './'.$dirName;
    //Verifica se o arquivo existe no diretório
    if((file_exists($search))){
      return $search;
    }        
    $scan = scandir($search);
    //Percorre todos os arquivos e diretórios
    foreach($scan as $path){
      if($path != '.' and $path != '..'){
        $newDir = $dir.$path.DIRECTORY_SEPARATOR;
          if(is_dir($newDir)){//Verifica se é diretório
            return searchFile($newDir);
          }

        }
    }//Fecha Foreach
    
    return false;//Retorna falso caso não encontre   
  } //Fecha function