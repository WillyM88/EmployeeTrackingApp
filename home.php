<?php

$birthday = "1989-08-10";

$myDate = DateTime::createFromFormat('Y-m-d', $birthday);

echo $myDate->format('l, F jS, Y');
