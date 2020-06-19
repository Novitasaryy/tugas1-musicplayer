<?php

namespace App;

class Played extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input() {

		$trackid = $_POST['track_id'];
		$play_date = $_POST['play_date'];

		$sql = "INSERT INTO played (track_id, play_date) VALUES
								   (:track_id, :play_date)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_id", $trackid);
		$stmt->bindParam(":play_date", $play_date);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM played JOIN track ON played.track_id = track.track_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function listTrack()
	{
		$sql = "SELECT * FROM track";
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
		$sql = "SELECT * FROM played WHERE play_id=:play_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":play_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$trackid = $_POST['track_id'];
		$play_date = $_POST['play_date'];
		$id = $_POST['play_id'];

		$sql = "UPDATE played SET track_id=:track_id, play_date=:play_date WHERE play_id=:play_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_id", $trackid);
		$stmt->bindParam(":play_date", $play_date);
		$stmt->bindParam(":play_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM played WHERE play_id=:play_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":play_id", $id);
		$stmt->execute();

		return false;
	}
}