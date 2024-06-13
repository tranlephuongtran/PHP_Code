<?php

session_start();
require_once("class/clsdatabase.php");
require("layout/headeradmin.php");
if (isset($_GET["page"]))
    $page = $_GET["page"];
else
    $page = 'trangchu';
if (isset($_GET["cate"]))
    $cate = $_GET["cate"];
if (isset($_GET["search"]))
    $search = $_GET["search"];
if (file_exists("page/" . $page . "/index.php"))
    include("page/" . $page . "/index.php");
else
    include("page/404/index.php");
include("layout/footeradmin.php");