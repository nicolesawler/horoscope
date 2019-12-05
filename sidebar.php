<div class="sidebar">
<?php
//Object
$strJsonZodiacName = file_get_contents("zodiacs.json");
//Decode JSON
$names = json_decode($strJsonZodiacName);

foreach ($names as $n) {
    echo "<a href='zodiac.php?".$n->zodiac_name."'>".$n->zodiac_symbol." ".$n->zodiac_name."</a>";
}
?>
<a href="index.php">Find your Zodiac</a>
</div>