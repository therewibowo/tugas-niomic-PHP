	<?php 
	 function print_deret($jumlah){
	
	    $angka_sebelumnya=0;
	    $angka_sekarang =1;
	    $hasil = "$angka_sebelumnya $angka_sekarang";
	
	    for ($i=0; $i < $jumlah-2 ; $i++) { 
	        $output = $angka_sekarang + $angka_sebelumnya;
	
	        $hasil = $hasil. " $output ";
	        $angka_sebelumnya = $angka_sekarang;
	        $angka_sekarang = $output;
	    }
	    return $hasil;
	 }
	
	 
	 
	
	?>
	
	<?php 
	    echo print_deret(20) . '<br>';
	
	?>
