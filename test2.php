
//Ask user to enter name and age of ten people, store them in array. print oldest and youngest.
//Associative arrays.
<?php
$person = array();
for ($i=0; $i<4 ; $i++) {
  echo "Enter name: ";
  $name = trim(fgets(STDIN));
  echo "Enter age: ";
  $age = trim(fgets(STDIN));
  $person[$name] =$age;

  }
asort($person);

reset($person);
echo "Youngest Person is : " . key($person)."and age is : " . $person[key($person)]."\n";
end($person);
echo "Oldest Person is : " . key($person). "and age is : " . $person[key($person)];
