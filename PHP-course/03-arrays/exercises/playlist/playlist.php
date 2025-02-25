<?php

$playlist = ['Lunar Echoes', 'Solar Whispers', 'Sunny Days', 'Aurora'];
$num = count($playlist);

if (!isset($playlist) || empty($playlist)) {
    echo "Your playlist needs an update. Time to discover more music!";
} if (in_array("Sunny Days", $playlist)) {
    echo "You have great taste! 'Sunny Days' always lifts the mood!";
} elseif ($num -1 >= 2) {
    $playlist[1] = "Solar Whispers";
    echo "We have added {$playlist[1]} to your list!";
} 