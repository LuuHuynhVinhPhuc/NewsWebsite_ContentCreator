<?php
$link = mysqli_connect("localhost", "root") or die(mysqli_error($link));
mysqli_select_db($link, "newswebsite") or die(mysqli_error($link));
if (!$link) {
    die("Wrong shit");
}