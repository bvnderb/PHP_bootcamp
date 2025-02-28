<?php 

$playlist = [];
$songRecommendations = ['Ocean Waves', 'City Nights', 'Rising Sun', 'Dancing Shadows', 'Eclipse'];

if (!empty($playlist)){
 echo "Your lastly added song was: '{$playlist[count($playlist)-1]}'.";
} if (count($playlist) <= 3 ) {
    $randomKey = array_rand($songRecommendations);
    array_push($playlist, $songRecommendations[$randomKey]);
    // echo "Your lastly added song was: '{$playlist[0]}'.";
} elseif (count($playlist) > 10) {
    unset($playlist[0]);
    echo "We have removed a song because your list contained more than 10 songs!";
}
