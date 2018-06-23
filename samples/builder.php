<?php
require __DIR__ . '/../vendor/autoload.php';

$jak	= new JAK8583\JAK8583();

//add data
$jak->addMTI('0200');
$jak->addData(1, "F2384000008080000000000000180026"); //bitmap
$jak->addData(2, "196073930727578634032"); //19+IIN+0+AadharNumber
$jak->addData(3, "310000");
$jak->addData(4, "150000000000");
$jak->addData(7, "0613013630");
$jak->addData(11, "000071"); //System Trace Audi Number
// $jak->addData(12, "013630"); // last 6 digit of timestamp
$jak->addData(13, "0613"); //first 4 digits of timestamp
$jak->addData(18, "6012"); //Merchant Type
$jak->addData(41, "RNP00001"); //Card Acceptor Terminal Identification

//get iso string
print $jak->getISO();
