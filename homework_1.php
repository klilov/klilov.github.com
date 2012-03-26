<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HOMEWORK 1 by K.Lilov</title>
    </head>
    <body>
     <?php
        $num=$_GET["number"];
        
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
        
        If(is_numeric($num)){
            if(in_array($num,range(0,1999))){    
            }
        else  echo  '<font color="red">' . "The parameter is NOT within range [0,19999]" . '</font><br>';
        
       if(IsPrime($num)){
           echo "The Number ".$num." IS prime!";
       }
       else echo  '<font color="blue">' . "The number ".$num. " Is not PRIME" . '</font><br>';
        }
       else echo  '<font color="red">' . "The parameter is NOT a Number!" . '</font><br>'; 
        
     ?>
       
    </body>
</html>


