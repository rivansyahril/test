<?php  
for($i=7;$i>=3;$i--){ 
$k = 0;
for($j=$i;$j>=1;$j--){  

 
if($k >= 2){
	echo ($i-1)." ";  
} else {
	echo ($i-3)." "; 
}
$k++;
}  
echo "<br>";  
}  
?>  