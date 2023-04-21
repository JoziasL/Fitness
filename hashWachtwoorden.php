<?php
//aanmaken
$gekregenWW = "pass123";
$gehashed = password_hash($gekregenWW, null);
echo $gehashed;
echo "</br>";


//inloggen
$inlogWW = "pass123";
//ophalen uit db
$oudeHash = $gehashed;
$isCorrect = password_verify($inlogWW, $oudeHash);
if($isCorrect){
    echo "goed";
}
else{
    echo "fout";
}


    //met database opslaan/ophalen en iets doen, niet alleen goed of fout zeggen