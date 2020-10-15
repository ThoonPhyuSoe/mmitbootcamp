<?php
	
	$humberger=4.95;
	$chocolate_milkshake=1.95;
	$cola =0.85;
	$tax_rate=0.075;
	$tip_rate=0.16;
		
		
		
		$sum = ($humberger)*2+$chocolate_milkshake+$cola;
		$total=$sum+$tax_rate+$tip_rate;
		
		


		echo 'Price of humberger :'.$humberger.'<br>';
		echo 'Price of chocolate_milkshake :'.$chocolate_milkshake.'<br>';
		echo 'Price of cola :'.$cola.'<br>';
		echo 'Total bill  :'.$sum.'<br>';
		echo 'Total bill with tax and tip  :'.$total.'<br>';

	



?>

