<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Studi Kasus 1</title>
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	 Pilihan Buku
	 <select name="Buku">
		<option value="PKN"
		<?php
		if($_POST['Buku'] == 'PKN'){
		echo 'selected="seleted"';
	}
	?>
	/>PKN
		<option value="Bahasa Indonesia"
		<?php
		if($_POST['Buku'] == 'Bahasa Indonesia'){
		echo 'selected="seleted"';
	}
	?>
	/>Bahasa Indonesia
		<option value="Matematika"
		<?php
		if($_POST['Buku'] == 'Matematika'){
		echo 'selected="seleted"';
	}
	?>
	/>Matematika
	 </select>
	 <input type="submit" name='submit' value="OK" />
</form>

<?php
	if(isset($_POST['Buku']))
	{
		echo $_POST['Buku'];
	}
?>

</body>
</html>