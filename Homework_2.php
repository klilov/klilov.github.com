<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Homework 2 by K.Lilov</title> 
    </head>
    <body>
     <?php
     global $array;
     global $third;
     $third=0;
     $array=range(20,1000,37);
     
      function IsPrime($number) 
{
	if ($number < 2) { 
		return FALSE;
	}
	for ($i=2; $i<=($number / 2); $i++) {
		if($number % $i == 0) {
			return FALSE;
		}
	}
	return TRUE;
}

        foreach($array as $value){
            if(IsPrime($value)){
               $third=$third+1; 
                if($third>1){
                    echo "The 3-rd PRIME number is ".$value." :)".'<br>'.  check_exists($array); 
                    return;
                    }
               }
        }
            
        
      function check_exists($array){
         if(in_array(146,$array)){
            echo "146 is in the array".'<br>';
         }    
                 else echo "146 is NOT in the array".'<br>';
        
         if(in_array(284,$array)){
             echo "284 is in the array".'<br>'; 
           } 
                  else echo "284 is NOT in the array".'<br>';
            
           
         if(in_array(871,$array)){
            echo "871 is in the array".'<br>';    
         }
                 else echo "871 is NOT in the array".'<br>';
         
      }
        
        
        
     ?>
       
    </body>
</html>
