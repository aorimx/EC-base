<?php

  $app_config = array(
    'name' =>'AORI-CMS',
    'default' => 'pagelist',
    'theme' => array(
      'color' => '#ff311a',
      'icon' => 'fa-anchor',
    ),
    'menu' => array(
      array(
        'title' => 'Page list',
        'doc' => 'pagelist',
        'params' => array()
      ),
    ),
    'docs' => array(
      'template' => 'template.inc.php',
      'pagelist' => 'pagelist.inc.php',
      'pagesection' => 'pagesection.inc.php',
      'sectiondetail' => 'sectiondetail.inc.php',



      'hero' => 'component/hero.inc.php',
      'contact' => 'component/contact.inc.php',
      'Componente1' => 'component/Componente1.inc.php',
      'Componente2' => 'component/Componente2.inc.php',
      'Componente3' => 'component/Componente3.inc.php',
      'Componente4' => 'component/Componente4.inc.php',
      'Componente5' => 'component/Componente5.inc.php',
      'Componente6' => 'component/Componente6.inc.php',
      'template_settings' => 'template_settings.inc.php',
    ),
  );
