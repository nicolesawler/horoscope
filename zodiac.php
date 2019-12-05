<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php include 'sidebar.php'; ?>
<div class="content">
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Replacement of GET  page.php?something VS page.php?something=somethingelse
//if(isset($_GET['z']))

    $USER_ZODIAC;

    if (!strrpos($_SERVER['REQUEST_URI'], '?')) {
        $urlzodiac = (  $USER_ZODIAC != "" ? $USER_ZODIAC : "Aries"  );
    }else{
        $urlzodiac = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '?') + 1);
    }
    //Current Zodiac Selected
    //echo $urlzodiac;


    //Get Zodiac Stuff

    //Object
    $strJsonFileContents = file_get_contents("zodiacs.json");
    //var_dump($strJsonFileContents); // show contents

    //Decode JSON
    $json_data = json_decode($strJsonFileContents);

    //echo $json_data[0]->zodiac_name;

    foreach ($json_data as $z) {

        if( $z->zodiac_name === $urlzodiac ):
            echo '<h2>' . $z->zodiac_name . '</h2>';
            echo '<b>Traits:</b> ' . $z->zodiac_traits . '<br>';
            echo '<b>Random:</b> ' . $z->zodiac_random . '<br>';
            echo '<b>Love:</b> ' . $z->zodiac_love . '<br>';
            echo '<b>Date:</b> ' . $z->zodiac_date . '<br>';
            echo '<b>Planet:</b> ' . $z->zodiac_planet . '<br>';
            echo '<b>Element:</b> ' . $z->zodiac_element . '<br>';
            echo '<b>Animal:</b> ' . $z->zodiac_animal . '<br>';
            echo '<b>Greek God:</b> ' . $z->zodiac_greek . '<br>';
            echo '<b>Element:</b> ' . $z->zodiac_element . '<br>';
            echo '<b>Best Allies:</b> ' . $z->zodiac_allies . '<br>';
            echo '<b>Stone:</b> ' . $z->zodiac_stone . '<br>';
            echo '<b>Color:</b> ' . $z->zodiac_color . '<br>';
            echo '<b>Symbol:</b> ' . $z->zodiac_symbol . '<br><br><br>';
        endif;


    }



?>
    
    
    
    
</div>