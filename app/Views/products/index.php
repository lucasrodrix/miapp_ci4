<?php echo $this->extend('model/layout');?>

<?php echo $this->section('content');?>
<h2>Products</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product):?>
                <tr>
                    <td><?php echo $product->code; ?></td>
                    <td><?php echo $product->name; ?></td>
                    <td><?php echo $product->stock; ?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>
<?php echo $this->endSection();?>