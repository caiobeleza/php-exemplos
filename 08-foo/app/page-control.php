<?php

require "../boot.php";

$todos = isset($_SESSION['todos']) ? $_SESSION['todos'] : [];

require 'page-view.php';