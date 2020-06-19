<?php

include_once "app/Controller.php";
include_once "app/Played.php";

$played = new App\Played();

if ($_POST['btn-simpan']) {
	$played->input();
	header("location:index.php?page=played_tampil");
}

if ($_POST['btn-edit']) {
	$played->update();
	header("location:index.php?page=played_tampil");
}

if ($_GET['delete-id']) {
	$played->delete($_GET['delete-id']);
	header("location:index.php?page=played_tampil");
}