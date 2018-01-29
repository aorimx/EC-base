<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<link rel="stylesheet" href="{snippet:template_path}css/font-awesome.min.css">
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/styles/main.css">
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/slick/slick.css"/>
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/slick/slick-theme.css"/>
</head>
<body data-size="A4">

<?php if (isset($_GET['media']) && $_GET['media'] == 'print') { ?>
<button name="print"><?php echo functions::draw_fonticon('fa-print'); ?> <?php echo language::translate('title_print', 'Print'); ?></button>
<?php } ?>

{snippet:content}

{snippet:foot_tags}
{snippet:javascript}
<?php if (isset($_GET['media']) && $_GET['media'] == 'print') { ?>
<script>
  $('button[name="print"]').click(function(){
    window.print();
  });
</script>
<?php } ?>
</body>
</html>
