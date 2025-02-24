<?php

$selectedCoffee = 'drip';

if (empty($selectedCoffee)) {
    $selectedCoffee = 'drip';
}
?>
<?php if ($selectedCoffee == 'drip'): ?>
    <div class="coffee-info">
        <div id="drip-coffee-info">
        <h1>Drip Coffee ☕</h1>
        <p>Drip coffee, a staple in many routines, is known for its straightforward brewing process and comforting, familiar taste. Perfect for starting your morning or as a midday pick-me-up. ☕️🌅</p>
        </div>
    </div>
<?php endif; ?>
<?php if ($selectedCoffee == 'espresso'): ?>
    <div class="coffee-info">
    <div id="espresso-info">
        <h1>Espresso ☕</h1>
        <p>Espresso is a concentrated coffee drink with a bold flavor. It pairs perfectly with a chocolate croissant. 🍫🥐</p>
    </div>
</div>
<?php endif; ?>