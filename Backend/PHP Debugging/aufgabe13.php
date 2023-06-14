<?php
function findUniqueWords($text) { $words = explode(" ", $text);
$result = [];
foreach ($words as $word) {
$occurrences = count(array_keys($words, $word));
if ($occurrences === 1) { $result[] = $word;
} }
return $result; }
$text = "The quick brown fox jumps over the lazy dog"; $uniqueWords = findUniqueWords($text);
echo "Unique words: ";
foreach ($uniqueWords as $word) {
echo $word . " "; }

// I'm going with the understanding that you want the words which are unique as in not repeated, if the idea was to
// remove duplicates I could do that also, but it seemed more likely to me from the code provided in the challenge
// that the attempt was to find unrepeated words, so this is what I fixed the code to do. To remove duplicates I would 
// add each word to the $result array if it is not already present in that array.
?>

