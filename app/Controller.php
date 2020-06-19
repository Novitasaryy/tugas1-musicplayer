<?php

namespace App;
use PDO;

class Controller {

	protected object $db;

	public function __construct() {

		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=dbtugas1-musicplayer", "root", "");

		} catch (Exception $e) {

			die ("error! " . $e->getMessage());

		}
	}
}