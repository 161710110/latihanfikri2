<?php
require_once 'robot.php';


$robot = new robot('ngek ngek ngek',80,'hijau');
echo "Bersuara...".$robot->get_suara()."<br>";
echo "Berat...".$robot->get_berat()."<br>";
echo "Berwarna...".$robot->get_warna();
?>