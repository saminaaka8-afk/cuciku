<?php
// konfigurasi database
// $host       =   "localhost";
//$user       =   "id18260713_stones321";
//$password   =   "Sgl2/*vF7&o?4I|U";
//$database   =   "id18260713_latihanedm";

// perintah php untuk akses ke database
//$koneksi = mysqli_connect($host, $user, $password, $database);


$host = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$user = "2qyJkJVVwMRHLtJ.root";
$pass = "JJ39tOyl9t1moPXr";
$db   = "coba";
$port = 4000;

$koneksi = mysqli_init();

mysqli_ssl_set(
    $koneksi,
    NULL,
    NULL,
    __DIR__ . "/cert/isrgrootx1.pem",
    NULL,
    NULL
);

if (!mysqli_real_connect(
    $koneksi,
    $host,
    $user,
    $pass,
    $db,
    $port,
    NULL,
    MYSQLI_CLIENT_SSL
)) {
    die("Koneksi gagal : " . mysqli_connect_error());
}

// db : latihanedm
// user : stones321
// pw : Sgl2/*vF7&o?4I|U
?>

<h2>List Mahasiswa</h2>
<table border="1">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th></tr>
    <?php
//    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mst_barang");
    $no=1;
    foreach ($mahasiswa as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['kode']."</td>
            <td>".$row['kode']."</td>
			            <td>".$row['kode']."</td>
            <td>".$row['kode']."</td>

              </tr>";
        $no++;
    }
    ?>
</table>
