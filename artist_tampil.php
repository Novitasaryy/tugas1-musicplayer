<br>
<h2 align="center">DATA ARTIST</h2>

<center><button><a href="dashboard.php?page=artist_input" class="btn">Tambah Data</a></button></center>

<br>
<br>

<?php

$art = new App\Artist();
$rows = $art->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: black; color: white; font-weight: bold;">
		<td>#</td>
		<td>NAMA</td>
		<td>OPTION</td>
	</tr>

	<?php foreach ($rows as $row) { ?>

	<tr align="center">
		<td><?php echo $row['artist_id']; ?></td>
		<td><?php echo $row['artist_name']; ?></td>
		<td>
			<button><a href="dashboard.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>" class="btn">Edit</a></button>
			<button><a href="dashboard.php?page=artist_proses&delete-id=<?php echo $row['artist_id']; ?>" class="btn">Delete</a></button>
		</td>
	</tr>

	<?php } ?>

</table>

<br>
<br>