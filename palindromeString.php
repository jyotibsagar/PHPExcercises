<?php
$reverseString="";
echo "Enter a string: ";
$anyString = trim(fgets(STDIN));
for($i= strlen($anyString)-1; $i>=0; $i--){
//echo $anyString[$i];
$reverseString = $reverseString.$anyString[$i];
}
if($anyString == $reverseString){
  echo "The string is Palindrome";
}else {
  echo "The string is not Palindrome";
}

?>
