<?php
include "koneksi.php"

//if(isset($_POST[SAVE])) {

    $nama = $_POST[NAMA];
    $email = $_POST[EMAIL];
    $pesan = $_POST[PESAN];

   // print_r($_POST);

    $sql = "INSERT INTO kontak SET NAMA = '$nama',
                                EMAIL = '$email',
                                PESAN = '$pesan'";

    echo $sql;

    $hasil = mysqli_query($mysqli, $sql);

    if ($hasil) {

        echo "<script>";
        echo "alert('Data Berhasil Di Save, Kami akan menghubungi anda secepatnya.');
                  window.location='index.php'";

        echo "</script>";

    } else {

        echo "<script>";
        echo "alert('Data Gagal Di Save, Mohon Coba Lagi.');
        window.location='index.php'";
        echo "</script>";

    }
//}
?>




