<?php include('session.php'); ?>

<?php include('header.php'); ?>
<?php include('post.php'); ?>
<?php
$post = new Post($db);

?>

<div class="container">
	<h2>Semua Postingan</h2>
	<a href="view_comment.php" style="float:right;">Komentar</a>
	
	<?php
		if(!empty($_SESSION['username'])){
			echo "Hallo, {$_SESSION['username']}";
		}else{
			echo"Login Disek!";
		}
	?>

	</h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th>Tanggal Posting</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($post->getPost() as $post){ ?>
			<tr>
				<td><?php echo $post['title']; ?></td>
				<td><?php echo substr($post['description'],0,20); ?></td>
				<td><?php echo date('Y-m-d',strtotime($post['created_at'])); ?></td>
				<td>
					<a href="view.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-success btn-sm">Lihat</button></a>
					<a href="edit.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-primary btn-sm">Ubah</button></a>
					<a href="delete.php?slug=<?php echo $post['slug'];?>"><button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button></a>
				</td>
			<?php }?>
			</tr>
		</tbody>
	</table>
</div>