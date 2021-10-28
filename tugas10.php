	<?php
	$arr = array(1,3,8,2,5,7,4,0);
	
	print("Sebelum Di Sorting :<br>");
	print_r($arr);
	
	$arr = bubble_sort($arr);
	print("<br> Setelah Disorting (Buble Sort) :<br>");
	print_r($arr);
	
	function bubble_sort($arr) {
	        //Tulias Kode Kamu disini
	        for ($i=1; $i < count($arr) ; $i++) { 
	            for ($j=count($arr)-1; $j>=$i;) { 
	                if ($arr[$j] < $arr[$j-1]) {
	                    $temp = $arr[$j];
	                    $arr[$j] = $arr[$j-1];
	                    $arr[$j-1] = $temp;
	                }
	            }
	        }
	}
	?>
