<?php
function getRandomImage() {
    $folder = 'randomPic/';
    $files = array_filter(scandir($folder), function($file) use ($folder) {
        // Hanya ambil file dengan ekstensi gambar
        return in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']);
    });

    if (empty($files)) {
        return ''; // Jika tidak ada file gambar, kembalikan string kosong
    }

    $random_file = $files[array_rand($files)];
    return $folder . $random_file;
}
?>
