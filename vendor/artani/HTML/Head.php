
<!DOCTYPE html>
<html lang="<?=HTML_LANGUAGE?>">

<?php $Shortcut = new Shortcut;
      $Shortcut->setHTML(HTML_SHORTCUT); ?>

  <head>
    <meta charset="utf-8">
    <base href="<?=BASE_DIR?>">
    <link rel="shortcut icon" type="imagex/png" 
    href="<?= $Shortcut->getHTML() ?>">
    <meta name="viewport" content="<?=VIEW_PORT?>">