<!DOCTYPE html>
<html>
<head>
    <title>Data pegawai </title>
</head>

<body>
    <header>
        <h3>Data pegawai </h3>
        <h1>kantor </h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Data pegawai </a></li>
            <li><a href="list-pegawai.php">semua pegawai terdaftar</a></li>
        </ul>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran pegawai baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </nav>


    </body>
</html>