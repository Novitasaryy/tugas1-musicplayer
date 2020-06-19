<?php

namespace App;

class Index extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function track()
	{
		$sql = "SELECT tr.*, al.album_name as ALB, ar.artist_name as ART
		FROM track tr 
		INNER JOIN album al ON tr.album_id=al.album_id
		LEFT JOIN artist ar ON al.artist_id=ar.artist_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function album()
	{
		$sql = "SELECT tr.*, al.album_name as ALB, ar.artist_name as ART
		FROM track tr 
		INNER JOIN album al ON tr.album_id=al.album_id
		LEFT JOIN artist ar ON al.artist_id=ar.artist_id ORDER BY ALB";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function login()
    {
    	$user_name = $_POST['user_name'];
    	$user_password = $_POST['user_password'];

    	$sql = "SELECT * FROM user WHERE user_name=:user_name AND user_password=:user_password";
    	$stmt = $this->db->prepare($sql);
    	$stmt->bindParam(":user_name", $user_name);
    	$stmt->bindParam(":user_password", $user_password);
    	$stmt->execute();

    	$data = $stmt->fetch();

    	if ($stmt->rowCount() > 0) {
    		$_SESSION['user_name'] = $user_name;
    		header("location:dashboard.php");
    	} else {
    		echo "Gagal Masuk";
    	}
    }
}