<!-- PHP string and strings function -->

<!-- Q1 -->

<!-- A -->
<?php
$sentence = 'hello world';
$uppersentence=strtoupper($sentence);
echo $uppersentence . "<br>";
?>

<!-- B -->
<?php
$lowersentence = strtolower($sentence);
echo $lowersentence . "<br>";
?>

<!-- C -->
<?php
$FLsentence=ucfirst($sentence);
echo $FLsentence . "<br>";
?>

<!-- D -->
<?php
$EFLsentence=ucwords($sentence);
echo $EFLsentence . "<br>";
?>

<!-- Q2 -->
<?php
$num = "085119";
$year = substr($num,0 ,2);
$month = substr($num ,2,2);
$day = substr($num,4,2);
$FormattedDate = $year . ":" . $month . ":" . $day;
echo $FormattedDate . "<br>";
?>

<!-- Q3 -->
<?php
$sentence = "i am a full stack developer at orange coding academey";
$check = strpos($sentence,"orange");
if($check>0){
    echo "world found" ."<br>"; 
}
?>

<!-- Q4 -->
<?php
$sentence = "www.orange.com/index.php";
$slicedSentence = substr($sentence,15,9);
echo $slicedSentence . "<br>"
?>

<!-- Q5 -->
<?php
$email = "info@orange.com";
$findname = strpos($email,'@');
$username = substr($email,0,$findname);
echo $username . "<br>"
?>

<!-- Q6 -->
<?php
$email = "info@orange.com";
$TheLast3 = substr($email,-3,3);
echo $TheLast3 . "<br>";
?>

<!-- <?php
$sentence = "That new trainee is so genius";

$NewSentence = str_replace("That" , "Our" , $sentence);
echo $NewSentence . "<br>" ;
?> -->

<!-- Q8 -->
<?php
$sentence = "That new trainee is so genius";
$FirstWord = strpos ($sentence  , " ");
$removeFirstWord = substr($sentence,$FirstWord);
$NewSentence = "our".$removeFirstWord;
echo $NewSentence . "<br>" ;
?>

<!-- Q9 -->
<?php
$word1 = "dragonball";
$word2 = "dragonboll";
for ($i = 0; $i < 10; $i++) {
    if ($word1[$i] != $word2[$i]) {
        echo "First difference between two strings at position " . $i . ": " . $word1[$i] . " vs " . $word2[$i] . "<br>";
        break; 
    }
}
?>

<!-- Q10 -->
<?php
$sentence = "Twinkle, twinkle, little star";
$updatedSentence = explode(",", $sentence); 
var_dump($updatedSentence) . "<br>" ;
echo "<br>" ;
?>

<!-- Q11 -->
<?php
$letter1 = "A";
$letter2 = "C";
$ord1=ord($letter1);
$ord2=ord($letter2);
$N1=$ord1+1;
$N2=$ord2+1;
$nextletter1=chr($N1);
$nextletter2=chr($N2);
echo $nextletter1 . "<br>";
echo $nextletter2 . "<br>";
?>
<!-- ord:convert letter to number _____ chr:convert number to letter -->

<!-- Q12 -->
<?php
$sentence="The brown fox";
$pos = strpos($sentence, " " );
$firstsplit = substr($sentence,0,$pos);
$secondsplit = substr($sentence,$pos);
$NewSentence = $firstsplit . " ". "quick" . $secondsplit;
echo $NewSentence . "<br>";

echo $firstsplit;
?>

<!-- Q13 -->
<?php
$number = "0000657022.24";
$numberWithout0 = str_replace(0,"", $number);
echo $numberWithout0 . "<br>";
?>

<!-- Q14 -->
<?php
$sentence = "The duck brown fox jumps over the lazy dog";
$updatedSentence = str_replace("fox" , "" , $sentence);
echo $updatedSentence . "<br>" ;
?>

<!-- Q15 -->
<?php
$sentence = "The duck brown fox jumps over the lazy dog---";
$updatedSentence = str_replace("-" , "" , $sentence);
echo $updatedSentence . "<br>" ; 
?>

<!-- Q16 -->
<?php
$sentence = '/"1+2/3*2:2-3/4*3';
$updatedSentence = preg_replace("/[^a-zA-Z0-9\s]/" , " " , $sentence);
echo $updatedSentence . "<br>" ;
?>

<!-- Q17 -->
<?php
$sentence = "The duck brown fox jumps over the lazy dog";         
$converttoarray = explode( " " , $sentence);
$select5words = array_slice ($converttoarray , 0 , 5);
$updatedSentence = implode ( " " , $select5words);
echo $updatedSentence . "<br>" ;
?>
<!--explode:convert string to array ______ implode:convert array to string -->

<!-- Q18 -->
<?php
$number = "2,543.12";
$updatedNumber = str_replace("," , "" , $number);
echo $updatedNumber . "<br>" ; 
?>

<!-- Q19 -->
<?php
for($i=97 ; $i<123 ; $i++ ){
    $number = $i ;
    $letter = chr($number);
    echo $letter . " "  ;
}
echo "<br>"
?>


























 














