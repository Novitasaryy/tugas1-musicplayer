<?php

namespace App;

class Album extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input() {

		$name = $_POST['album_name'];
		$artistid = $_POST['artist_id'];

		$sql = "INSERT INTO album (album_name, artist_id) VALUES
								   (:album_name, :artist_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $name);
		$stmt->bindParam(":artist_id", $artistid);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT album.*, artist.artist_name as ART FROM album, artist WHERE album.artist_id=artist.artist_id ORDER BY album.album_name";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function listArtist()
	{
		$sql = "SELECT * FROM artist";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$name = $_POST['album_name'];
		$artistid = $_POST['artist_id'];
		$id = $_POST['album_id'];

		$sql = "UPDATE album SET album_name=:album_name, artist_id=:artist_id WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $name);
		$stmt->bindParam(":artist_id", $artistid);
		$stmt->bindParam(":album_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;
	}
}