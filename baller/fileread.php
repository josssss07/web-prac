<?php
$file_path = 'words.txt';

// Check if the file exists
if (file_exists($file_path)) {
    // Read the entire file into a string
    $file_contents = file_get_contents($file_path);

    // Split the string into an array of words
    $words = str_word_count($file_contents, 1);
    $randval = rand(0, 49);
    $rightword = $words[$randval];
    $shuffleWord = str_shuffle($words[$randval]);
    //echo $shuffleWord;
} 

else {
    echo "File does not exist.";
}
?>


<!-- use include-->
