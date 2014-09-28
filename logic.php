<?php

// echo "<pre>".print_r($_POST)."</pre>";

$common_words = array();

array_push($common_words, "able", "above", "across", "add", "against", "ago", "almost", "among", "animal", "answer", "became", "become", "began", "behind", "being", "better", "black", "best", "body", "book", "boy", "boy", "brought", "call", "cannot", "car", "certain", "change", "children", "city", "close", "cold", "country", "course", "cut", "didn't", "dog", "done", "door", "draw", "during", "early", "earth", "eat", "enough", "ever", "example", "eye", "face", "family", "far", "father", "feel", "feet", "fire", "fish", "five", "food", "form", "four", "front", "gave", "given", "got", "green", "ground", "group", "grow", "half", "hand", "hard", "heard", "high", "himself", "however", "I'll", "I'm", "idea", "important", "inside", "John", "keep", "kind", "knew", "known", "land", "later", "learn", "let", "letter", "life", "light", "live", "living", "making", "mean", "means", "money", "morning", "mother", "move", "Mrs.", "near", "night", "nothing", "once", "open", "order", "page", "paper", "parts", "perhaps", "picture", "play", "point", "ready", "red", "remember", "rest", "room", "run", "school", "sea", "second", "seen", "sentence", "several", "short", "shown", "since", "six", "slide", "sometime", "soon", "space", "States", "story", "sun", "sure", "table", "though", "today", "told", "took", "top", "toward", "tree", "try", "turn", "United", "until", "upon", "using", "usually", "white", "whole", "wind", "without", "yes", "yet", "young");

if(isset($_GET['number_of_words'])) {
	$number_of_words = $_GET['number_of_words'];
} else $number_of_words = 5;

$password = "";

$array_length = count($common_words)-1;

for($i = 0; $i < $number_of_words; $i++) {
	$random = rand(0, $array_length);
	$password = $password."-".$common_words[$random];
}

$password = substr($password, 1);

$number = rand(0, 9);

if (isset($_GET['add_number'])) {
	$password = $password.$number; 
}
$symbols = array();
$symbol = "";

array_push($symbols, "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "_", "+", "=", "[", "]", "{", "}", ";", ":", "?", "<", ">");

if(isset($_GET['add_symbol'])) {
	$random = rand(0, (count($symbols)-1));
	$symbol = $symbols[$random];
	$password = $password.$symbol;
}

?>