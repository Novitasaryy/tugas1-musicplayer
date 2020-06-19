CREATE TABLE user (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(100) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	user_email VARCHAR(100) NOT NULL,
	user_nama_lengkap VARCHAR(100) NOT NULL,
	user_role CHAR(2) DEFAULT '2',
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name, user_email)
);

CREATE TABLE artist (
	artist_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	artist_name VARCHAR(100) NOT NULL,
	PRIMARY KEY(artist_id)
);

CREATE TABLE album (
	album_id INT(11) NOT NULL AUTO_INCREMENT,
	album_name VARCHAR(100) NOT NULL,
	artist_id TINYINT(3) NOT NULL,
	PRIMARY KEY(album_id),
	UNIQUE KEY(album_name),
	FOREIGN KEY (artist_id) REFERENCES artist (artist_id) ON DELETE CASCADE
);

CREATE TABLE track (
	track_id INT(11) NOT NULL AUTO_INCREMENT,
	track_name VARCHAR(256) NOT NULL,
	album_id INT(11) NOT NULL,
	track_time VARCHAR(10) NOT NULL DEFAULT '00:00',
	track_file VARCHAR(256) DEFAULT NULL,
	PRIMARY KEY(track_id),
	UNIQUE KEY(track_name),
	FOREIGN KEY (album_id) REFERENCES album (album_id) ON DELETE CASCADE
);

CREATE TABLE played (
	play_id INT(11) NOT NULL AUTO_INCREMENT,
	track_id INT(11) NOT NULL,
	play_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(play_id),
	FOREIGN KEY (track_id) REFERENCES track (track_id) ON DELETE CASCADE
);