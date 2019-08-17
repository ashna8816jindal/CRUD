<?php 
 $randomNumber = rand(); 
      
    print_r($randomNumber); 
  
  
    print_r("<br>"); 
      
    // Generating a random number in a  
    // Specified range. 
    $randomNumber = rand(100,100); 

    for ($i=0; $i < 100; $i++) {

		    echo " <br> $randomNumber"; 
		    $randomNumber= $randomNumber+1;
    	# code...
    }
    
     ?>
