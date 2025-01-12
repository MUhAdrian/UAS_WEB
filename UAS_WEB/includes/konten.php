<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include "view/home.php";
            break;
        case 'about':
            include "view/about.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;
        case 'makanan':
            include "view/makananView.php";
            break;
        case 'makananAdd':
            include "modul/makananAdd.php";
            break;
        case 'makananAddProses':
            include "modul/makananAddProses.php";
            break;
        case 'makananDelete':
            include "modul/makananDelete.php";
            break;
        case 'makananUpdate':
            include "modul/makananUpdate.php";
            break;
        case 'makananUpdateProses':
            include "modul/makananUpdateProses.php";
            break;
        case 'minuman':
            include "view/minumanView.php";
            break;
        case 'minumanAdd':
            include "modul/minumanAdd.php";
            break;
        case 'minumanAddProses':
            include "modul/minumanAddProses.php";
            break;
        case 'minumanDelete':
            include "modul/minumanDelete.php";
            break;
        case 'minumanUpdate':
            include "modul/minumanUpdate.php";
            break;
        case 'minumanUpdateProses':
            include "modul/minumanUpdateProses.php";
            break;
        case 'lihat-semua-kuliner':
            include "view/makananView.php";
            break;

        default:
            include "views/404.php";
    }
} else {
    include "views/home.php";
}