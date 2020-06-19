<br>
<h2 align="center">DATA LAGU</h2>

<center><button><a href="dashboard.php?page=track_input" class="btn">Tambah Data</a></button></center>

<br>
<br>

<?php

$trc = new App\Track();
$rows = $trc->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: black; color: white; font-weight: bold;">
		<td>#</td>
		<td>JUDUL</td>
		<td>ALBUM</td>
		<td>WAKTU</td>
		<td>PUTAR</td>
		<td>OPTION</td>
	</tr>

	<?php foreach ($rows as $row) { ?>

	<tr align="center">
		<td><?php echo $row['track_id']; ?></td>
		<td><?php echo $row['track_name']; ?></td>
		<td><?php echo $row['ALB'] . " - " . $row['ART']; ?></td>
		<td><?php echo $row['track_time']; ?></td>
		<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
					</audio>					
				<?php } ?>
		</td>
		<td>
			<button><a href="dashboard.php?page=track_edit&id=<?php echo $row['track_id']; ?>" class="btn">Edit</a></button>
			<button><a href="dashboard.php?page=track_proses&delete-id=<?php echo $row['track_id']; ?>" class="btn">Delete</a></button>
		</td>
	</tr>

	<?php } ?>

</table>

<br>
<br>