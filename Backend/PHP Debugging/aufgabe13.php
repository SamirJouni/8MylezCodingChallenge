<?php
function findUniqueWords($text) { $words = explode(" ", $text);
$result = [];
foreach ($count as $word => $occurrences) {
if ($occurrences === 1) { $result[] = $word;
} }
return $result; }
$text = "The quick brown fox jumps over the lazy dog"; $uniqueWords = findUniqueWords($text);
echo "Unique words: ";
foreach ($uniqueWords as $word) {
echo $word . " "; }?>