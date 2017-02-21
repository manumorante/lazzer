<?php

  switch ($pagename) {
    case 'actividad':
      $slides = 6;
      $section = 'actividad';
      break;

    case 'servicios':
      $slides = 6;
      $section = 'servicios';
      break;

    case 'contacto':
      $slides = 4;
      $section = 'contacto';
      break;

    case 'trabajos':
      $slides = 6;
      $section = 'trabajos';
      break;

    case '':
    case 'lazzer':
      $slides = 5;
      $section = 'lazzer';
      break;
  }
?>

<!--ASIDE-->
<aside class="aside">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <!--<ol class="carousel-indicators">-->
    <!--<li data-target="#carousel" data-slide-to="0" class="active"></li>-->
    <!--<li data-target="#carousel" data-slide-to="1" class=""></li>-->
    <!--<li data-target="#carousel" data-slide-to="2" class=""></li>-->
    <!--</ol>-->
    <div class="carousel-inner" role="listbox">
      <?php  for ($i = 1; $i <= $slides; $i++) { ?>
      <div class="item <?php if ($i == 1) { ?>active<?php } ?>">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/headers/<?php echo $section?>/<?php echo $i ?>.jpg" />
      </div>
      <?php } ?>
    </div>
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</aside>