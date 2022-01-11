<?php
if (!session()->get('user')) {
    header('Location: /Login');
    exit();
} else if (session()->get('role') == 'mahasiswa') {
    header('Location: /Mahasiswa');
    exit();
} else if (session()->get('role') == 'dosen') {
    header('Location: /Dosen');
    exit();
} else { echo 'Gagal';}
?>