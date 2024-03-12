<?php echo $this->extend('model/layout');?>
<?php echo $this->section('content');?>

    <h2>Products Detail <?php echo $product->name; ?></h2>

<?php echo $this->endSection();?>
