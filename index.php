
<?php
require_once('PHP/Initialize.php');



$link = isset($_GET['link']) ? $_GET['link'] : 'Landing';
include('./HTML/Sidebar.html');
include('./HTML/' . $link . '.html');

?>
