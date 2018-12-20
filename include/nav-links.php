<?php
  $folder = '/Bootstrap-Studio-Design/';
  $arr = ['index.php', 'about.php', 'contact.php', 'post.php'];
  $arr2 = ['home', 'table', 'image', 'calendar-times'];
  $withOutParams = explode('?', $_SERVER['REQUEST_URI'], 2);

  for ($i = 0; $i < count($arr); $i++) {
    if ($withOutParams[0] == '/Bootstrap-Studio-Design/post.php' || $arr[$i] != 'post.php') {
      $fontAwesomeIMG = '<li class="nav-item';
      $fontAwesomeIMG .= (($folder . $arr[$i]) === $withOutParams[0]) ? ' active' : '';
      $fontAwesomeIMG .= '"><a class="nav-link" href="' . $folder . $arr[$i] . '"><i class="fa';
      $fontAwesomeIMG .= ($arr2 == 'home') ? 's' : '';
      $fontAwesomeIMG .= ' fa-' . $arr2[$i] . '"></i> ';
      $fontAwesomeIMG .= (($folder . $arr[$i]) === $withOutParams[0]) ? '<span class="sr-only">(current)</span>' : '';
      $fontAwesomeIMG .= '</a></li>';
      echo $fontAwesomeIMG;
    }
  }


?>

<style media="screen">
  .blue-highlight {
    cursor: pointer;
  }
  .blue-highlight:focus, .blue-highlight:active {
    outline: none !important;
    box-shadow: none !important;
  }
</style>
<button type="button" class="bg-transparent border-0 text-light blue-highlight" data-toggle="modal" data-target="#bootstrapModal"><i class="fa fa-wpforms"></i></button>
<button type="button" class="bg-transparent border-0 text-light blue-highlight" data-toggle="modal" data-target="#bannerModal"><i class="fa fa-comments"></i></button>
<button type="button" class="bg-transparent border-0 text-light blue-highlight" data-toggle="modal" data-target="#bannerModal-2"><i class="fa fa-bell"></i></button>
