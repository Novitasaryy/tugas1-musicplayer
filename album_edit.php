<?php

$id = $_GET['id'];
$alb = new App\Album();
$row = $alb->edit($id);
$lst = $alb->listArtist();

?>

<br>
<h2 align="center">EDIT ALBUM</h2>

<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table align="center">
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>" required=""></td>
		</tr>
		<tr>
			<td>ARTIST</td>
			<td>
				<select name="artist_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['artist_id']; ?>"<?php echo $row['artist_id']==$ls['artist_id'] ? " selected" : ""; ?>><?php echo $ls['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-update" value="UPDATE"></td>
		</tr>
	</table>
</form>

<br>
<br>