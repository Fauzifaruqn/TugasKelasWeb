<?php
if (isset($_POST['submit'])) {
    header('Location: http://localhost/Tugas 5/index.php?success=1');
}
if (empty($_GET)) {
    die("!");
}
$post_data = $_GET;
$post_pair = array(
    'NPM' => 'npm',
    'Nama' => 'nama',
    'Alamat' => 'alamat',
    'Tgl Lahir' => 'tgl_lahir',
    'J/K' => 'jenis_kelamin',
    'Hobi' => 'hobi',
    );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Form</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="http://localhost/Tugas 5/confirm.php" method="post" class="form-horizontal">
                    <?php foreach ($post_pair as $heading => $val) : ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $heading ?></label>
                            <div class="col-sm-10">
                                <?php if (is_array($post_data[$val])) : ?>
                                    <?php foreach ($post_data[$val] as $post_value) : ?>
                                        <p class="form-control-static"><?php echo $post_value ?></p>
                                    <?php endforeach ?>
                                <?php else: ?>
                                    <p class="form-control-static"><?php echo $post_data[$val] ?></p>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success" name="submit">Konfirmasi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
