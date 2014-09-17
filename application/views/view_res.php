<html>
	<head><title>sql test</title></head>
	<body>
	<p>
	var_dump</br>
	<?php var_dump($data_list); ?>
	</p>
		<?php foreach($data_list as $data): 
			echo $data."<br>";
			endforeach;
		?>
		
	</body>
</html>