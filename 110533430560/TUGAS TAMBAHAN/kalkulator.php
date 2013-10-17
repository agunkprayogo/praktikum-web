<!DOCTYPE html>
<html>
<head>
<body bgcolor="blue">
<title>Kalkulator Sederhana</title>
</head>
<body>
<h1 align="left">Kalkulator Sederhana </h1>
<?php
$angka1=$_POST['angka1'];
$angka2=$_POST['angka2'];
$hasil=$_POST['hasil'];
$opr=$_POST['kalk'];
        
        if($opr=='+'){
                $hasil=($angka1+$angka2);
        }
        else if($opr=='-'){
                $hasil=($angka1-$angka2);
        }
        else if($opr=='x'){
                $hasil=($angka1*$angka2);
        }
        else if($opr==':'){
                $hasil=($angka1/$angka2);
        }
?>
<form name="kalkulator" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
<h2>Langkah-langkah menggunakan Kalkulator Sederhana</h2>
<ol>
<li>Masukkan Angka Pertama</li>
<li>Pilih Operator </li>
<li>Masukkan Angka Kedua</li>
<li>Klik = untuk mendapatkan hasil </li>
</ol>
<input name="angka1" type="number" id="angka1" value="<?php echo $angka1;?>"> <!--Kotak input bilangan pertama-->
<select name='kalk' id='kalk'> 
        <option value = "+" <!--Pilihan Operator-->
    <?=($_POST['kalk']=='+')? 'selected="selected"':''?>
	>+</option>
    <option value = "-"
    <?=($_POST['kalk']=='-')? 'selected="selected"':''?>
	>-</option>
    <option value = "x"
    <?=($_POST['kalk']=='x')? 'selected="selected"':''?>
    >x</option>
    <option value = ":"
    <?=($_POST['kalk']==':')? 'selected="selected"':''?>
    >:</option>
 </select>
<input name="angka2" type="number" id="angka2" value="<?php echo $angka2;?>"> <!--Kotak input bilangan kedua-->
<input name= "submit" type="submit" value="="> <!--bagian yang akan diklik untuk mendapatkan hasil-->
<input name="hasil" type="number" disabled value="<?php echo $hasil;?>"> <!--Kotak hasil tidak bisa diisi-->
</form>

</body>
</html>