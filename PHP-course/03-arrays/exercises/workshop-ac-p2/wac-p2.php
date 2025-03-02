<?php 

// provided info
$waitingList = [
'Eva Grant', 'Ian Hope', 'Olivia Jane'
];

$priorityParticipants = [
    
];

$individualName = 'Alex Reed';

// my code
$finalAttendees = [];
$backupCandidates = [];

foreach ($priorityParticipants AS $participant) {
   // echo "Checking priority participant: $participant\n"; // debugging
    if (count($finalAttendees) < 5) {
        if (!in_array($participant, $finalAttendees)) {
            $finalAttendees[] = $participant;
           // echo "Adding to finalAttendees: $participant\n"; // debugging
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
        
    }
}

$backup = array_slice($backupCandidates, 0, 3);

foreach ($backup AS $candidate) {
    $individualName = $candidate;
    echo "Hey {$individualName}, we want to inform you that you are one of our backup candidates. 🥳";
}

sort($finalAttendees);
sort($backupCandidates);

// testing the code
echo "Final Attendees:\n";
print_r($finalAttendees);

echo "Backup Attendees:\n";
print_r($backupCandidates);