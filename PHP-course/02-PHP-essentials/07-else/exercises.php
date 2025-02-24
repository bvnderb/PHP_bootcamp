Excercise 1:
<br>
    <?php

    $loyaltyPoints = 6000;

    if ($loyaltyPoints < 3000) {
        echo "You have fewer than 3000 Loyalty Points. No discount is available.";
    } else if ($loyaltyPoints >= 3000 && $loyaltyPoints <= 6000) {
        echo "You can spend 3000 Loyalty Points for a discount of 5%.";
    } else {
        echo "You can spend 6000 Loyalty Points for a discount of 15%.";
    }
    ?>
<hr>
Excercise 2:
<br>
<?php 

// initial cost
$totalCost = 20;
// initial loyalty points
$loyaltyPoints = 7000;
// calculate 8% tax
$taxRate = 0.08;

// no discount
if ($loyaltyPoints < 3000) { // no discount
    $taxAmount = $totalCost * $taxRate;
    $finalCost = $totalCost + $taxAmount;
    $newLoyaltyBalance = $loyaltyPoints + ($finalCost * 100);
    echo 
    "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be \${$finalCost}. Your new Loyalty Balance would be: {$newLoyaltyBalance}.";
} else if ($loyaltyPoints >= 3000 && $loyaltyPoints < 6000) { // 3000 LP discount
    $discount5Amount = $totalCost * 0.05;
    $discount5Cost = $totalCost - $discount5Amount;
    $taxAmount = $discount5Cost * $taxRate;
    $finalCost = $discount5Cost + $taxAmount;
    $newLoyaltyBalance = ($loyaltyPoints - 3000) + ($finalCost * 100);
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$finalCost}. Your new Loyalty Balance would be: {$newLoyaltyBalance}.";
} else if ($loyaltyPoints >= 6000 ) { // > 6000 LP discount
    $discount15Amount = $totalCost * 0.15;
    $discount15Cost = $totalCost - $discount15Amount;
    $taxAmount = $discount15Cost * $taxRate;
    $finalCost = $discount15Cost + $taxAmount;
    $newLoyaltyBalance = ($loyaltyPoints - 6000) + ($finalCost * 100);
    echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be \${$finalCost}. Your new Loyalty Balance would be: {$newLoyaltyBalance}.";
    $discount5Amount = $totalCost * 0.05;
    $discount5Cost = $totalCost - $discount5Amount;
    $taxAmount = $discount5Cost * $taxRate;
    $finalCost = $discount5Cost + $taxAmount;
    $newLoyaltyBalance = ($loyaltyPoints - 3000) + ($finalCost * 100);
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$finalCost}. Your new Loyalty Balance would be: {$newLoyaltyBalance}.";
}

