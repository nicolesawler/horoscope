<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ZODIACS{
    
    
    
    public function findZodiacByBirthday($birthdate)
    {
        $zodiac = '';     
        list ($year, $month, $day) = explode ('-', $birthdate); 
        $month = ltrim($month, '0');

        if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $zodiac = "Aries"; } 
        elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Taurus"; } 
        elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "Gemini"; } 
        elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Cancer"; } 
        elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Leo"; } 
        elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Virgo"; } 
        elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Libra"; } 
        elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Scorpio"; } 
        elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Sagittarius"; } 
        elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Capricorn"; } 
        elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Aquarius"; } 
        elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "Pisces"; } 

        return $zodiac; 
    } 

    
    public function dayYouWereBorn($birth){
        
            //Day you were born

            //Convert the date string into a unix timestamp.
            $unixTimestamp = strtotime($birth);
            //Get the day of the week using PHP's date function.
            $dayOfWeek = date("l", $unixTimestamp);
            //Print out the day that our date fell on.
            echo "<br>Day you were born: ".$dayOfWeek ."<br><br>";
    }
    
    
    public function getAge($birth){
        
            //Get Birth Date Info

            //day difference
            $birthdate = new \DateTime($birth);
            $today = new \DateTime;
            $diff = $today->diff($birthdate) ;
            printf('<br>You are: %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
            echo (" (". number_format($birthdate->diff($today)->days) . " days)");

    }
    
    
    
}