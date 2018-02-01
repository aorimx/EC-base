<?php
    $Componente1 = array(
      'titulo' => "Titulo2222",
      'parrafo' => "parrafito",
      'boton' => "DFZ",
    );
 ?>
<div id="Componente1" class="container-comp1">
  <div class="img-container">
    <img src="https://dummyimage.com/500x300/000/fff"></img>
  </div>
  <div class="description">
    <h1><?php echo $Componente1['titulo'];?></h1>
    <p><?php echo $Componente1['parrafo'];?></p>
    <button><?php echo $Componente1['boton'];?></button>
  </div>
</div>