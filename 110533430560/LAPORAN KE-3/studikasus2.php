<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Studi Kasus 2</title> 
</head>

<body>

	<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	 Pilihan Buku = 
	 <input type="checkbox" name="Buku[]" value="Matematika"
	 <option value="Matematika"
		<?php
		if($_POST['Buku'] == 'Matematika'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Matematika
	 
	 <input type="checkbox" name="Buku[]" value="PKN"
	 <option value="PKN"
		<?php
		if($_POST['Buku'] == 'PKN'){
		echo 'selected="seleted"';
		}
	 ?>
	 />PKN
	 
	 <input type="checkbox" name="Buku[]" value="Bahasa Indonesia"
	 <option value="Bahasa Indonesia"
		<?php
		if($_POST['Buku'] == 'Bahasa Indonesia'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Bahasa Indonesia	 
	 <input type="submit" value="OK" >
</form>

<?php 
// Ekstraksi nilai 
if (isset($_POST['Buku'])) { 
  foreach ($_POST['Buku'] as $key => $val) { 
    echo $key . ' = ' .$val . '<br />'; 
  } 
} 
?> 
 
</body> 
 
</html> 