<?php

$conn = new mysqli('localhost', 'root', '','sale') or die("Connect failed");
mysqli_query($conn, "set names utf8");
