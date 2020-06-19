<br>
<h2 align="center">DATA USER</h2>

<center><button><a href="dashboard.php?page=user_input" class="btn">Tambah Data</a></button></center>

<br>
<br>

<?php 

$usr = new App\User();
$rows = $usr->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: black; color: white; font-weight: bold;">
		<th>#</th>
		<th>USERNAME</th>
		<th>EMAIL</th>
		<th>NAMA LENGKAP</th>
		<th>ROLE</th>
		<th>OPTION</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr align="center">
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['user_email']; ?></td>
			<td><?php echo $row['user_nama_lengkap']; ?></td>
			<td>
				<?php 
				if($row['user_role'] == 1) {
					echo "Administrator";
				} else {
					echo "Operator";
				}
				?>				
			</td>
			<td><button><a href="dashboard.php?page=user_edit&id=<?php echo $row['user_id']; ?>" class="btn">Edit</a></button></td>
		</tr>
	<?php } ?>
</table>

<br>
<br>