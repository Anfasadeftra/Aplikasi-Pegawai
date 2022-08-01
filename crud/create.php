<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Memeriksa data Post
if (!empty($_POST)) {
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'id' ? $_POST['id'] :"";
    // Untuk Memeriksa "nama" variabel POST ada, jika tidak default nilainya kosong
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $pekerjaan = isset($_POST['alamat']) ? $_POST['alamat'] : '';

    if ($id=="" && $nama==""  && $email==""  && $notelp==""  && $pekerjaan==""){
        $msg = "Semua data Kosong";
    }
    elseif($nama==""){
        $msg = 'Nama kosong';
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $msg = 'Email invalid format';
    }
    elseif($notelp==""){
        $msg = 'Nomor Telepon Kosong';
    }
    elseif($pekerjaan==""){
        $msg = 'Alamat Kososng';
    }
    else {
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $email, $notelp, $pekerjaan]);
    // pesan output
    $msg = 'Data Berhasil Ditambahkan!';
    }
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Tambah Data Pegawai</h2>
    <form action="create.php" method="post">
        <label for="id">No</label>
        <input type="text" name="id" Disabled />
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="notelp">No. Telp</label>
        <input type="number" name="notelp" id="notelp">
        <label for="pekerjaan">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <input type="submit" value="Create">
        <a href="read.php" class="kembali">Kembali</a>
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>