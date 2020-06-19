<br>
<h2 align="center">DATA ALBUM</h2>

<center><button><a href="dashboard.php?page=album_input" class="btn">Tambah Data</a></button></center>

<br>
<br>

<?php

$alb = new App\Album();
$rows = $alb->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: black; color: white; font-weight: bold;">
		<td>#</td>
		<td>NAMA</td>
		<td>ARTIST</td>
		<td>OPTION</td>
	</tr>

	<?php $no=0; foreach ($rows as $row) { $no++;?>

	<tr align="center">
		<td><?php echo $no; ?></td>
		<td><?php echo $row['album_name']; ?></td>
		<td><?php echo $row['ART']; ?></td>
		<td>
			<button><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">Edit</a></button>
			<button><a href="dashboard.php?page=album_proses&delete-id=<?php echo $row['album_id']; ?>" class="btn">Delete</a></button>
		</td>
	</tr>

	<?php } ?>

</table>

<br>
<br>