<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur rerum temporibus assumenda iusto cumque amet modi sunt quisquam quas ut, reiciendis natus impedit. Nulla reiciendis voluptatem aliquam sed rerum illum?";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>