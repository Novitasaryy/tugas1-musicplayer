<?php

$artist = new App\Artist();
$rowArtist = $artist->tampil();

$album = new App\Album();
$rowAlbum = $album->tampil();

$track = new App\Track();
$rowTrack = $track->tampil();
?>

<h2 align="center">Add Played</h2>
<form method="POST" action="played_proses.php">
	<table align="center">
		<tr>
			<td>ARTIST</td>
			<td>
				<select class="nama" name="artist_id">
            		<?php foreach($rowArtist as $row) { ?>
            			<option value="<?php echo $row['artist_id'] ?>"><?php echo $row['artist_name'] ?></option>
            		<?php } ?>
          		</select>
			</td>
		</tr>
		<tr>
			<td>ALBUM</td>
			<td>
				<select class="nama" name="album_id">
            		<?php foreach($rowAlbum as $row) { ?>
            			<option value="<?php echo $row['album_id'] ?>"><?php echo $row['album_name'] ?></option>
            		<?php } ?>
          		</select>
			</td>
		</tr>
		<tr>
			<td>TRACK</td>
			<td>
				<select class="nama" name="track_id">
            		<?php foreach($rowTrack as $row) { ?>
            			<option value="<?php echo $row['track_id'] ?>"><?php echo $row['track_name'] ?></option>
            		<?php } ?>
          		</select>
			</td>
		</tr>
		<tr>
			<td>PLAYED</td>
			<td><input type="date" name="played"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="Save"></td>
		</tr>
	</table>
</form>