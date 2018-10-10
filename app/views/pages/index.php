<?php include_once APPROOT . '/views/inc/header.php'; ?>

<h1><?php echo $data['title']; ?></h1>



<?php foreach ($data['rows'] as $row) : ?>
    Title  <?= $row->title ?> <br>
<?php endforeach; ?>

<?php include_once APPROOT . '/views/inc/footer.php'; ?>