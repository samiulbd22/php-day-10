<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Series;
use App\classes\Register;
if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }
    else if ($_GET['pages']=='register')
    {
        include 'pages/register.php';
    }
}
elseif (isset($_POST['btn']))
{
    $home =new Home($_POST);
   $result = $home ->primeNumber(); //for output
    include 'pages/home.php';
}
elseif (isset($_POST['series_btn']))
{
    $series =new Series($_POST);
    $result = $series ->getSeries(); //for output
    include 'pages/series.php';
}
elseif (isset($_POST['register_btn']))
{
//    $series =new Series($_POST);
//    $result = $series ->getSeries(); //for output
//    include 'pages/series.php';

    $register = new Register($_POST);
}

else //for homepage load
{
    $home = new Home();
    $home ->index();
}
