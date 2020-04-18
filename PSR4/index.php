<?php
require_once __DIR__ ."/app/autoload.php";

use Thanapol\User;

$user = new User(); //สร้างObject ขึ้นมา

$user->first_name = "Thanapol";
$user->last_name = "Sommanapan";
$user->email = "Thanapol.ts@hotmail.com";


$user->loginprocess();