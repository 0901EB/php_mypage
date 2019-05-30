<?php
require_once 'helper.php';

require_once 'components/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : false;
switch ($page){
    case(1);
    require_once 'pages/page1.php';
    break;
    case(2);
    require_once 'pages/page2.php';
    break;
    case('registration');
    require_once 'pages/registration.php';
    break;
    // case(4);
    // require_once 'pages/page4.php';
    // break;
    case(5);
    require_once 'pages/page5.php';
    break;
    case(6);
    require_once 'pages/page6.php';
    break;
    case(7);
    require_once 'pages/page7.php';
    break;
    case(8);
    require_once 'pages/page8.php';
    break;
    case(9);
    require_once 'pages/page9.php';
    break;
    case(10);
    require_once 'pages/page10.php';
    break;
    case(11);
    require_once 'pages/page11.php';
    break;
    case(12);
    require_once 'pages/page12.php';
    break;
    default:
    require_once 'pages/landing.php';
}

require_once 'components/footer.php';