<?php
  $folder = '/Bootstrap-Studio-Design/';
  $arr = ['index.php', 'about.php', 'contact.php'];
  $arr2 = ['home', 'table', 'image'];
  $withOutParams = explode('?', $_SERVER['REQUEST_URI'], 2);

  for ($i = 0; $i < count($arr); $i++) {
    $fontAwesomeIMG = '<li class="nav-item';
    $fontAwesomeIMG .= (($folder . $arr[$i]) === $withOutParams[0]) ? ' active' : '';
    $fontAwesomeIMG .= '"><a class="nav-link" href="' . $folder . $arr[$i] . '"><i class="fa';
    $fontAwesomeIMG .= ($arr2 == 'home') ? 's' : '';
    $fontAwesomeIMG .= ' fa-' . $arr2[$i] . '"></i> ';
    $fontAwesomeIMG .= (($folder . $arr[$i]) === $withOutParams[0]) ? '<span class="sr-only">(current)</span>' : '';
    $fontAwesomeIMG .= '</a></li>';
    echo $fontAwesomeIMG;
  }

?>
