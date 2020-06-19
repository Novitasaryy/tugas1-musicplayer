<h2 align="center">Played List</h2>

<?php

$played = new App\Played();
$rows = $played->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: black; color: white; font-weight: bold;">
		<td>#</td>
		<td>ARTIST</td>
		<td>ALBUM</td>
		<td>TRACK</td>
		<td>PLAYED</td>
		<td>OPTION</td>
	</tr>

	<?php foreach ($rows as $row) { ?>

	<tr align="center">
		<td><?php echo $row['played_id']; ?></td>
		<td><?php echo $row['artist_name']; ?></td>
		<td><?php echo $row['album_name']; ?></td>
		<td><?php echo $row['track_name']; ?></td>
		<td><?php echo $row['played']; ?></td>
		<td>
			<button><a href="index.php?page=played_edit&id=<?php echo $row['played_id']; ?>">Edit</a></button>
			<button><a href="index.php?page=played_proses&delete-id=<?php echo $row['played_id']; ?>">Delete</a></button>
		</td>
	</tr>

	<?php } ?>

</table>

<br>
<center><button><a href="index.php?page=played_input">Add Played</a></button></center>