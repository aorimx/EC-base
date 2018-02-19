<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<meta name="description" content="{snippet:description}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{snippet:template_path}css/font-awesome.min.css">
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/styles/main.css">
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/slick/slick.css"/>
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/slick/slick-theme.css"/>
</head>
<body>

<div id="page">

  <header style="display: none;" id="header" class="row nowrap center">

    <div class="col-auto">
      <a class="logotype" href="<?php echo document::href_ilink(''); ?>">
        <img src="<?php echo WS_DIR_IMAGES; ?>logotype.png" style="max-width: 250px; max-height: 60px;" alt="<?php echo settings::get('store_name'); ?>" title="<?php echo settings::get('store_name'); ?>" />
      </a>
    </div>

    <div class="col-auto text-center hidden-xs">
      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_region.inc.php'); ?>
    </div>

    <div class="col-auto text-right">
      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_cart.inc.php'); ?>
    </div>
  </header>

  <?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_site_menu.inc.php'); ?>

  <main class="j-workspace ">
    <div class="top">
      {snippet:top}
    </div>
    <div class="j-wrap">
      <div class="middle-content">
        {snippet:content}
        <a href="<?php echo  document::ilink('page1'); ?>"><button style="margin-top: 150px;">Page1</button></a>
        <div style="clear: both;"></div>
      </div>
    </div>
    <div class="bottom">
      {snippet:bottom}
    </div>
  </main>

  <?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/site_cookie_notice.inc.php'); ?>

  <?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_site_footer.inc.php'); ?>
</div>

<a id="scroll-up" href="#">
  <?php echo functions::draw_fonticon('fa-chevron-circle-up fa-3x', 'style="color: #000;"'); ?>
</a>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
{snippet:foot_tags}
<script src="{snippet:template_path}js/app.min.js"></script>
<script src="{snippet:template_path}js/bootstrap.js"></script>
<script src="{snippet:template_path}Sagan-boilerplate/assets/slick/slick.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{snippet:template_path}js/mobilMenu.js"></script>
<script src="{snippet:template_path}Sagan-boilerplate/assets/scripts/checkout.js"></script>
<script src="{snippet:template_path}js/scripts.js"></script>
<script src="{snippet:template_path}js/bar-order-by.js"></script>
<script src="{snippet:template_path}Sagan-boilerplate/assets/scripts/aside-categories.js"></script>
<script src="{snippet:template_path}js/sweetalert2/dist/sweetalert2.all.min.js"></script>
{snippet:javascript}

</body>
</html>
