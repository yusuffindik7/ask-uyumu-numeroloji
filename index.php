<!DOCTYPE html>
<html>
<head>
	<title>Ask Uyumu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
<div class="formbox">
<h1>Aşk Uyumunu Gör</h1>
<form action="#" method="POST">
	<div>
		<input type="text" name="name1" placeholder="Ad">
		<i class="fa fa-heart" style="color: red;"></i>
		<input type="text" name="name2" placeholder="Ad">
	</div>
	<div>
		<input type="submit" value="Hesapla" class="btn" name="hesapla"></input>
	</div>
</form>

<?php 

	if(isset($_POST['hesapla'])){
		$name1 = $_POST['name1'];;
		$name2 = $_POST['name2'];;
		$name = $name1.$name2;
		$namearray = count_chars($name, 1);
		print_r($namearray);
		$namecount = count($namearray);

		do {
			$new = array();
			for ($i=0; $i < $namecount; $i++) { 
			$first = reset($namearray);
			$last = end($namearray);
			$total = $first+$last;
			$new[] = $total;
			array_shift($namearray);
			array_pop($namearray);
		}
			
		print_r($new);
		$namearray = array_merge($new, $namearray);
		unset($new);
		$namearray = array_diff($namearray, [0]);
		$namecount = count($namearray);
		
		print_r($namearray);
		
		} while ($namecount == 4);

		$uyum = "%".$namearray[0].$namearray[1]." uyum";
		
	}

 ?>


<div>
	<h2><?php 

	if (!empty($uyum)) {
		echo $name1." ve ".$name2." ".$uyum;
	}else{
		echo "İki isim yaz ve aşk uyumunu gör";
	}
	?></h2>
</div>
	
</div>
</body>
</html>