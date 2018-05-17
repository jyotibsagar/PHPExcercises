<?php
echo "Enter a Sentence: ";
$sentence = trim(fgets(STDIN));
$sentenceWords = explode(" ", $sentence);

for($i= sizeof($sentenceWords) - 1; $i>= 0; $i--){
  echo $sentenceWords[$i]." ";
}

?>
