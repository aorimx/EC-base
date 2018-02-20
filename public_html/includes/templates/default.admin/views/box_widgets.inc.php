<div id="box-widgets-wrapper" class="main-admin">
  <ul id="box-widgets" class="ul-admin">
    <?php foreach ($widgets as $widget) { ?>
    <li id="widget-<?php echo $widget['code']; ?>">
      <?php echo $widget['content']; ?>
    </li>
    <?php } ?>
  </ul>
</div>
