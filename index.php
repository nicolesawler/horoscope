<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php include 'sidebar.php'; ?>
<div class="content">
    
<?php
if(isset($_POST['submit'])){
    
    include 'class.zodiacs.php';
    $zObj = new ZODIACS();

    //$birth = '1989-03-12';
    $birth = $_POST['dob'];
    

    //Get Zodiac Stuff

    //Object
    $strJsonFileContents = file_get_contents("zodiacs.json");
    //Decode JSON
    $json_data = json_decode($strJsonFileContents);

    //echo $json_data[0]->zodiac_name;
    foreach ($json_data as $z) {
        if( $z->zodiac_name === $zObj->findZodiacByBirthday($birth)):
            echo '<h2>Name: ' . $z->zodiac_name . '</h2>';
            echo 'Traits: ' . $z->zodiac_traits . '<br>';
            echo 'Random: ' . $z->zodiac_random . '<br>';
            echo 'Love: ' . $z->zodiac_love . '<br>';
            echo 'Date: ' . $z->zodiac_date . '<br>';
            echo 'Planet: ' . $z->zodiac_planet . '<br>';
            echo 'Element: ' . $z->zodiac_element . '<br>';
            echo 'Animal: ' . $z->zodiac_animal . '<br>';
            echo 'Greek God: ' . $z->zodiac_greek . '<br>';
            echo 'Element: ' . $z->zodiac_element . '<br>';
            echo 'Best Allies: ' . $z->zodiac_allies . '<br>';
            echo 'Stone: ' . $z->zodiac_stone . '<br>';
            echo 'Color: ' . $z->zodiac_color . '<br>';
            echo 'Symbol: ' . $z->zodiac_symbol . '<br><br><br>';
        endif;
    }
    $zObj->dayYouWereBorn($birth);
    $zObj->getAge($birth);

    
}else{
?>
    <h2>Find Your Zodiac Information</h2>
    <form method="post">
    <input type="date" name="dob" />
    <input type="submit" name="submit" />
    </form>
<?php } ?>
</div>