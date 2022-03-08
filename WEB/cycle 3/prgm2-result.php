<?php
$n=$_POST['n']; 
$s=0;
for($i=$n;$i!=0;$i=$i/10)
{
$r=$i%10;
$s=$s+$r;
}
echo "result=$s";
?>