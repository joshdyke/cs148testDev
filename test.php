<?php

function getGreeting($hrOfDay){
    
    $hrOfDay = (int) $hrOfDay;
    switch ($hrOfDay){
        case $hrOfDay >= 6 && $hrOfDay <= 11:
            $greeting = "Good morning!";
            break;
        case $hrOfDay >= 12 && $hrOfDay <= 17:
            $greeting = "Good afternoon!";
            break;
        case $hrOfDay >= 18 && $hrOfDay <= 20:
            $greeting = "Good evening!";
            break;
        case $hrOfDay >= 21 || $hrOfDay <= 5:
            $greeting = "Good night!";
            break;
        
    }
    
    return $greeting;
}

print '<p>START';

print '<p>Passing 8AM: Greeting = ' . getGreeting(8);
print '<p>Passing 12PM: Greeting = ' . getGreeting(12);
print '<p>Passing 5PM: Greeting = ' . getGreeting(18);
print '<p>Passing 10PM: Greeting = ' . getGreeting(22);

print '<p>END';

?>