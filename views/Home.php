<?php  

?> <!--header section--> <?php  
// Novo layout na varável $Home
$Home = new Layout;
$Home::title('BLAU');
//var_dump(Layout::title('Home'));

$Home::descriptions(
 ['PRIMEIRA DESCRIÇÃO',
  'SEGUNDA DESCRIPTION',
  'TERCEIRA DESCRIPTION',
  'enéssima descrição sem noção alguma só pra testar um formato maior de informação']   );

$Home::endHead();

?> <!--body section--> <?php
$Home::config('Main');
  Component::render('Navbar');
  Component::render('Loading');

?> <!--footer section-->  <?php  
$Home::config('Footer');


$Home::config('endFooter');


$Home::endBody();
?>
