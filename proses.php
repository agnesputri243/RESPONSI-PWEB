<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $buku = $_POST['buku']; // Ini sekarang adalah array
    $nomor = $_POST['nomor'];

    // Tampilkan data yang diterima (untuk keperluan debugging)
    echo "<h2>Data yang Diterima:</h2>";
    echo "Nama: $nama<br>";
    echo "Alamat: $alamat<br>";
    echo "Email: $email<br>";
    echo "Buku: $buku<br>";
    foreach ($buku as $b) {
        echo $b . ", "; // Tampilkan setiap buku yang dipilih
    }
    echo "<br>";
    echo "Nomor HP: $nomor<br>";

    // Di sini Anda dapat menambahkan kode untuk menyimpan data ke database,
    // mengirim email, atau tindakan lain yang sesuai.
}
?>
