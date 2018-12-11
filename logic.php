<?php 

	$count_to = 100;

	for ($i=1;$i<=$count_to;$i++){
		if(by_three($i)){
			if(by_five($i)){
				echo "foobar \n";
			} else {
				echo "foo \n";
			}
		} else {
			if(by_five($i)){
				echo "bar \n";
			} else {
				echo $i." \n";
			}
		} 
	}

	function by_three($number){
		if($number%3===0){
			return true;
		} else {
			return false;
		}
	}

	function by_five($number){
		if($number%5===0){
			return true;
		} else {
			return false;
		}
	}

?>