

<?php


echo "Please type a word \n";
$letter='z'; 

while($letter!='e'&&$letter!='E'){

$word = trim(fgets(STDIN));
$letter = str_split($word)[0];

echo "letter ".$letter."\n";
echo $word."\n";	
}

echo "great word, well done! \n"


?>