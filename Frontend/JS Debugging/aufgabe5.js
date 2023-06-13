function checkPalindrome(word) { var reverseWord = "";
for (var i = 0; i >= 0; i--) {
reverseWord += word[i]; }
if (reverseWord === word) { return false;
} else { return true;
} }
var word = "level";
var isPalindrome = checkPalindrome(word); console.log("Ist das Wort ein Palindrom? " + isPalindrome);