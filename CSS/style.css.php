<?php
include('../PHP/codeBridge.php');

header("Content-type: text/css");
?>

body
{
    background-color: <?php 
        echo $Background;
    ?>;
}


.col-sm-4
 {
margin: 15px;
font-family: Verdana;

background-color: <?php
echo $SubBackground;
?>;

color: <?php
echo $colorText1;
?>;
 }

.col-sm-12
 {
margin: 15px;
font-family: Verdana;

background-color: <?php
echo $SubBackground;
?>;


color: <?php
echo $colorText1;
?>;
 }

.page-header
{
background-color: <?php 
echo $HeaderBackground;
?>;

color: <?php 
echo $colorText1;
?>;

}
