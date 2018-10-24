<?php
$post_data = array();
$err = array();
if (isset($_POST['submit'])) {
    $err_mess['empty'] = "Form Harus Diisi";
    $err_mess['choose'] = "Pilih salah satu";

    $post_pair = array(
        'NPM' => 'npm',
        'Nama' => 'nama',
        'Alamat' => 'alamat',
        'Tgl Lahir' => 'tgl_lahir',
        'J/K' => 'jenis_kelamin',
        'Hobi' => 'hobi',
        );

    $post_data = $_POST;

    foreach ($post_pair as $field) {
        if (empty($post_data[$field])) {
            $err[$field] = $err_mess['empty'];
        }
    }

    if (empty($post_data['jenis_kelamin'])) {
        $err['jenis_kelamin'] = $err_mess['choose'];
    }

    if (empty($err)) {
        header('Location: http://localhost/Tugas 5/confirm.php?'.http_build_query($post_data));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Isian</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Form Isian</h2>
            </div>
        </div>
        <?php if (isset($_GET['success'])): ?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="alert alert-success">Selesai</div>
                </div>
            </div>
        <?php endif ?>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="http://localhost/Tugas 5/index.php" class="form-horizontal" method="POST">
                    <div class="form-group <?php echo isset($err['npm']) ? 'has-error' : ''?>">
                        <label for="inputNPM" class="col-sm-2 control-label">NPM</label>
                        <div class="col-sm-10">
                            <input name="npm" type="text" class="form-control" id="inputNPM" placeholder="NPM" value="<?php echo isset($post_data['npm']) ? $post_data['npm'] : '' ?>">
                            <span class="help-block"><?php echo isset($err['npm']) ? $err['npm'] : ''?></span>
                        </div>
                    </div>
                    <div class="form-group <?php echo isset($err['nama']) ? 'has-error' : ''?>">
                        <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama" value="<?php echo isset($post_data['npm']) ? $post_data['nama'] : '' ?>">
                            <span class="help-block"><?php echo isset($err['nama']) ? $err['nama'] : ''?></span>
                        </div>
                    </div>
                    <div class="form-group <?php echo isset($err['alamat']) ? 'has-error' : ''?>">
                        <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat" id="inputAlamat" cols="30" rows="10"><?php echo isset($post_data['npm']) ? $post_data['alamat'] : '' ?></textarea>
                            <span class="help-block"><?php echo isset($err['alamat']) ? $err['alamat'] : ''?></span>
                        </div>
                    </div>
                    <div class="form-group <?php echo isset($err['tgl_lahir']) ? 'has-error' : ''?>">
                        <label for="inputTglLahir" class="col-sm-2 control-label">Tgl Lahir</label>
                        <div class="col-sm-10">
                            <input name="tgl_lahir" type="date" class="form-control" id="inputTglLahir" placeholder="Tanggal Lahir" value="<?php echo isset($post_data['npm']) ? $post_data['tgl_lahir'] : '' ?>">
                            <span class="help-block"><?php echo isset($err['tgl_lahir']) ? $err['tgl_lahir'] : ''?></span>
                        </div>
                    </div>
                    <div class="form-group <?php echo isset($err['jenis_kelamin']) ? 'has-error' : ''?>">
                        <label for="inputTglLahir" class="col-sm-2 control-label">J/K</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="jenis_kelamin" id="laki" value="Laki-Laki"> Laki-Laki
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan"> Perempuan
                            </label>
                            <span class="help-block"><?php echo isset($err['jenis_kelamin']) ? $err['jenis_kelamin'] : ''?></span>
                        </div>
                    </div>
                    <div class="form-group <?php echo isset($err['hobi']) ? 'has-error' : ''?>">
                        <label for="inputTglLahir" class="col-sm-2 control-label">Hobi</label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="hobi[]" value="Coding">
                                    Makan
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="hobi[]" value="Game">
                                  Membaca
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="hobi[]" value="Movie">
                                    Olahraga
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="hobi[]" value="Anime">
                                    Berenang
                                </label>
                            </div>
                            <span class="help-block"><?php echo isset($err['hobi']) ? $err['hobi'] : ''?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success" name="submit">Sign Up</button>
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
