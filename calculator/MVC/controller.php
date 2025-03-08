<?php
// Memuat model
require 'model.php';

// Inisialisasi variabel
$result = '';

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Memanggil fungsi calculate dari model
    $result = calculate($num1, $num2, $operation);
}
?>