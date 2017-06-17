<?php
	define("YEAR"," 1994");
	echo YEAR."<br>"
?>
<?php
	define("NAME", "hải");
	echo NAME."<br>"
?>
<?php
	for ($i = 1; $i <= 100; $i++) { 
		if($i % 2 == 0){
			echo "Hải<br>";
		}
		else{
			echo "Lưu Văn<br>";
		}
	}
	echo strlen("Lưu Văn Hải");
	echo str_replace("Hai", "Peter", "Luu Van Hai"); 
?>
<?php
 function youname($yeah){
 	if($yeah % 9 == 0){
 		echo "99<br>";;
 	}
 	else{
 		echo "66<br>";
 	}
 }
youname(1994)
?>
<?php
	echo str_word_count("Luu Van Hai");
?>
