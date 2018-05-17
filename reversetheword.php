<?php
echo "Enter a string: ";
$anyString = trim(fgets(STDIN));
for($i= strlen($anyString)-1; $i>=0; $i--){
echo $anyString[$i];
}

?>
