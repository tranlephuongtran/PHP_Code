<?php
error_reporting(1);
session_start();
require_once("class/clsdatabase.php");
require("layout/header.php");
if (isset($_GET["page"]))
    $page = $_GET["page"];
else
    $page = 'trangchu';
if (isset($_GET["cate"]))
        $cate = $_GET["cate"];
if (file_exists("page/" . $page . "/index.php"))
    include("page/" . $page . "/index.php");
else
    include("page/404/index.php");
include("layout/footer.php");