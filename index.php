

<?php


echo "Please type a word \n";
$letter='z'; 

while($letter!='e'&&$letter!='E'){

$word = trim(fgets(STDIN));
$letter = str_split($word)[0];

if($letter!='e'&&$letter!='E'){
	echo "There are better words than that. Keep trying \n";
}

}

echo "great word, well done! \n"


?>