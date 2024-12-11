<?=$this->section_start('css') ?>
  <link rel="stylesheet" href="<?php echo PATH['CSS']; ?>error/development.css" />
<?=$this->section_end() ?>

<div class="error-dev">
  <p><?php echo $throw->getFile(); ?></p>
  <p><?php echo $throw->getLine(); ?></p>
  <p><?php echo $throw->getMessage(); ?></p>
</div>