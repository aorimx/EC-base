<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">


<body>
  <!--  Header  -->
  <div class="header-container">

  </div>
  <!--  Hero -->
  <!--<div class="hero-image">
    <div class="hero-text">
      <h1 style="font-size:50px">I am John Doe</h1>
      <p>And I'm a Photographer</p>
      <button class="ripple">Hire me</button>
    </div>
  </div>-->∫
  <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente1.inc.php'); ?>
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente2.inc.php'); ?>
    </div>
  </main>
  <footer>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="assets/scripts/ripple.js"></script>
  <script src="assets/scripts/header.js"></script>

</body>
</html>
