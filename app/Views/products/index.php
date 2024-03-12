<?php echo $this->extend('model/layout');?>

<?php echo $this->section('content');?>
    <table>
        <thead>
            <th>Name</th>
            <th>Stock</th>
            <th>Price</th>
        </thead>
        <tbody></tbody>
    </table>
<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>
    <script>alert("Hi JS");</script>
<?php echo $this->endSection();?>