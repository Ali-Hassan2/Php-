<!-- This is about the string functions -->
<?php
$name = "thealihassanwaris";
echo "The name is: $name <br>" ;

// 1. Length of String strlen(string)
echo "The length of name is: ".strlen($name);
echo "<br>";
//  2. word count
echo "The words in name are: ".str_word_count($name);
echo "<br>";
// 3. strrev -> reversing the string
echo "The string in reverse is: ".strrev($name);
echo "<br>";
// 4. strpos finding in the string
echo "The position of ss in name is: ".strpos($name,"ss");
// 5. str_replace() in the string

$rank = "I'm a hul Advisor.";
echo "<br>";
echo "The string after replacing is: ".str_replace("hul","Full",$rank) ;
// 6. str_repeat() in the string
echo "String after reapting the line is: ".str_repeat($rank,10);

echo "<pre>";
echo rtrim("   Hello g kese ho saare.");
echo "<br>";
echo ltrim("   hellg g left pr hn.  ");
echo "</pre>";



?>