<?php
$nama = "Siti Sarah";
$kelas = "3";
$jurusan = "Computer Engineering";
$umur = 19;
$nilai = 88.5;

echo "==============================<br>";
echo "== KARTU PROFIL SISWA ==<br>";
echo "==============================<br>";
printf("Nama    : %s<br>", $nama);
printf("Kelas   : %s<br>", $kelas);
printf("Jurusan : %s<br>", $jurusan);
echo "Umur    : " . $umur . " tahun<br>";
printf("Nilai   : %.2f<br>", $nilai);

// Bonus: Status kelulusan
if ($nilai >= 75) {
    echo "Status  : LULUS<br>";
} else {
    echo "Status  : TIDAK LULUS<br>";
}
echo "==============================";
?>