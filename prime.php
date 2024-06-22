<!DOCTYPE html>
<html>
<body>
<?php
function prime($a){
$val=[];
$x=2;
while($x < $a){
$y = $a%$x;
$x++;
$val[]= $y;
}

if(in_array(0,$val)){

echo "not prime number";
}else{
echo "prime number";
}

}

prime(14);
?>
 
</body>
</html>
