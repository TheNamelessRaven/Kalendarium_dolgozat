<?php 
$menu=(isset ($_GET['menu']))?$_GET['menu']:NULL;
    switch ($menu) {
        case 'kalendar':
            require_once 'kalendarium.php';
            break;
        case 'tetelek':
            require_once 'tetelek.php';
            break;
        case NULL: 
            require_once 'kalendarium.php';
            break;
        default:
            require_once'404.php';
            break;
    } 
    ?>