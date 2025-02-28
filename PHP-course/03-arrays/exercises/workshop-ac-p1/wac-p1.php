<?php 

// provided info
$waitingList = ['Dawn White', 'Frank Smith', 'Bob Carter', 'Charlie Davis', 'Eve Black', 'Alice Brown', 'Alice Brown', 'Charlie Davis', 'Grace Jones', 'Hank Green', 'Eve Black', 'Dawn White'];
$removeFromList = ['Dawn White', 'Charlie Davis'];


// my code
$filteredWaitingList = array_unique($waitingList);
$cleanedWaitingList = array_diff($filteredWaitingList, $removeFromList);
sort($cleanedWaitingList); // this does not return a new array, but modifies the original one! 
$selectedParticipants = array_slice($cleanedWaitingList, 0, 5);
$remainingParticipant = array_diff($cleanedWaitingList, $selectedParticipants);
?>

<ul>
<?php foreach ($selectedParticipants AS $participant): ?>
    <li><?php echo $participant . " ✅"; ?></li>
<?php endforeach; ?>
<?php foreach ($remainingParticipant as $remaining): ?>
    <li><?php echo $remaining . " ❌"; ?></li>
<?php endforeach; ?>
</ul>