<?php 

// provided info
$waitingList = [
'Elliot Ford', 'Ian Cloud', 'Jenny Light', 'Kyle Rain', 'Lara Snow', 'Penny River', 'Zara Cliff'
];

$priorityParticipants = [
    'Gina Bloom', 'Henry Cole', 'Jenny Light', 'Kyle Rain', 'Lara Snow', 'Nina Spark'
];

$individualName = 'Alex Reed';

// my code
$finalAttendees = [];
$backupCandidates = [];


foreach ($priorityParticipants AS $participant) {
   echo "Checking priority participant: $participant<br>"; // debugging
    if (count($finalAttendees) < 5) {
        if (!in_array($participant, $finalAttendees)) {
            $finalAttendees[] = $participant;
           echo "Adding to finalAttendees: $participant<br>"; // debugging
        } else {
            if (!in_array($participant, $backupCandidates) && (!in_array($participant, $finalAttendees))) {
                $backupCandidates[] = $participant;
                // echo "Adding to backupCandidates: $participant\n";
            }
            
        }
    } 
}  

foreach ($waitingList AS $waiting) {
    // echo "Checking waiting participant: $waiting\n"; // debugging
    if (count($finalAttendees) < 5) {
        if (!in_array($waiting, $finalAttendees)) {
            // echo "Adding to finalAttendees: $waiting\n"; // debugging
            $finalAttendees[] = $waiting;
        }
    } else {
        if (!in_array($waiting, $backupCandidates) && (!in_array($waiting, $finalAttendees))) {
            // echo "Adding to backupCandidates: $waiting\n";
            $backupCandidates[] = $waiting;
        }
        print_r($waiting);
    }
}

$backup = array_slice($backupCandidates, 0, 3);
print_r($backup);
foreach ($backup AS $candidate) {
    $individualName = $candidate;
    echo "Hey {$individualName}, we want to inform you that you are one of our backup candidates. 🥳<br>";
}

sort($finalAttendees);
sort($backupCandidates);

// testing the code
echo "Final Attendees:<br>";
print_r($finalAttendees);

echo "Backup Attendees:<br>";
print_r($backupCandidates);