<?php
$conn = pg_connect("postgresql://pemweb_owner:NqwDdb7QH8Kv@ep-weathered-leaf-a1at0cot-pooler.ap-southeast-1.aws.neon.tech/pemweb?sslmode=require");

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
echo "Koneksi berhasil!";
?>
