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


?>