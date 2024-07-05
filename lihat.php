<?php 
echo "<head><title>My Guest Book</title></head>";

$fp = fopen("guestbook.txt", "r");
echo "<table border='0'>";

while ($isi = fgets($fp, 80)) {
    $pisah = explode('|', $isi);

    if (isset($pisah[0])) {
        echo "<tr><td>Nama</td><td>$pisah[0]</td></td>";
    }
    if (isset($pisah[1])) {
        echo "<tr><td>Alamat</td><td>$pisah[1]</td></td>";
    }
    if (isset($pisah[2])) {
        echo "<tr><td>Email</td><td>$pisah[2]</td></td>";
    }
    if (isset($pisah[3])) {
        echo "<tr><td>Buku</td><td>$pisah[3]</td></td>";
    }
    if (isset($pisah[4])) {
        echo "<tr><td>Nomor</td><td>$pisah[4]</td></td>";
    }
    echo "<tr><td>&nbsp<hr></td><td>&nbsp;<hr>[4]</td></td>"
}

echo "</table>";
echo "<a href='index.html'>Klick Disini</a> untuk Isi Form Buku Peminjam";
fclose($fp);

?>
