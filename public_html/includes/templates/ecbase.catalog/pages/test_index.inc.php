<div> <!-- Esta etiqueta solo es para la previsualizaciòn del HTML, hay que eliminarla -->
    <?php
        //echo 'Some extra var 1: ' . $some_extra_var_1 . '<br>';
        //echo 'Some extra var 2: ' . $some_extra_var_2 . '<br>';
        // '<hr>';
        echo ( $page );
        //echo htmlspecialchars( $page );
    ?>
      <div style="background-color: #e6e6e6; width:100%; display: inline-flex;">
        <div style="width:40%; text-align: center; display: flex; flex-direction: column; justify-content: center; text-align: center;">
          <h1>Nuestros <br>clientes _<h1/>
        </div>
        <div style="width: 60%;">
          <?php include vmod::check(FS_DIR_HTTP_ROOT . '/EC-base/public_html/components/Componente6.inc.php'); ?>
      </div>
      </div>

		  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/menu.inc.php'); ?>
</div>
