<?php

$isRed = false;

?>

<?php if (!empty($isRed)): ?>
    <h1 style="color: red;">PHP is amazing!</h1>
<?php else: ?>
    <h1>PHP is amazing!</h1>
<?php endif; ?>


<h1 <?php if (!empty($isRed)): ?>style="color: red;"<?php endif; ?>>PHP is amazing!</h1>

    <?php 
// exercise: => check if empty and use if else endif 
// we want the page name to be displayed in the browser (on the tab itself) and if no name can't be found, set a default (use the $pageTitle in header.inc) 
// provide a default background img in case the header inc doesn't work for some reason (use the $headImg for this)
// indicate which page is active (highlight with css class="active") use the $pageKey for this


