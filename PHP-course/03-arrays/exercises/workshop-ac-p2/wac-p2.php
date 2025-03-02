<?php 

// provided info
$waitingList = [
    'Alex Reed',
    'Blake Jordan',
    'Casey Smith',
    'Drew Alex',
    'Elliot Ford',
    'Finley Harper',
    'Jordan Kay',
    'Kim Lee',
    'Liam Park',
    'Morgan Drew'
];

$priorityParticipants = [
    'Jordan Kay', // In the waiting list and has priority
    'Sam Taylor', // Not in the waiting list but has priority
    'Zane Pryor'  // Not in the waiting list but has priority
];

$individualName = 'Alex Reed';

// my code
// $finalAttendees = [];
// if (count($finalAttendees) < 5) {
//     $mergedArray = array_merge($priorityParticipants, $waitingList);
//     // var_dump($mergedArray);
//     $uniqueArray = array_unique($mergedArray);
//     // var_dump($uniqueArray);
//     $participants = array_merge($finalAttendees, $uniqueArray);
//     sort($participants);
//     var_dump($participants);
    
//     // if ($finalAttendees >= 5) {

//     // }
// }

// $finalAttendees = [];
// $backupCandidates = [];

//  foreach ($priorityParticipants AS $priority) {
//     if (!in_array($priority, $finalAttendees)) {
//         $finalAttendees[] = $priority;
//         sort($finalAttendees);
//     }
//  }

//  foreach ($waitingList as $waiting) {
//     if (!in_array($waiting, $finalAttendees)) {
//         if (count($finalAttendees) != 5) {
//             $finalAttendees[] = $waiting;
//             sort($finalAttendees);
//     } elseif (count($backupCandidates) != 3) {
//             $backupCandidates[] = $waiting;

//     } else {
//         break;
//     }
//     }
// }

// // test results
// echo "Final Attendees\n";
//  print_r($finalAttendees);

//  echo "\nBackup Candidates:\n";
//  print_r($backupCandidates);

