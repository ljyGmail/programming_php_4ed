<style>
    h1 {
        background: orange;
    }

    h2 {
        background: olivedrab;
        color: white;
        padding: 3px;
    }

    h3 {
        background: indigo;
        color: white;
        padding: 2px;
    }
</style>
<?php echo '<a href="index.html">Index</a><br><br>'; ?>
<h1>Lexical Structure</h1>

<h2>Case Sensitivity</h2>
<?php
echo ("hello, world<br>");
echo ("hello, world<br>");
echo ("hello, world<br>");
?>

<h2>Statements and Semicolons</h2>
<?php
echo "hello world<br>";
// myFunction(); // function call
$a = 1;
$name = "Elphaba";
$b = $a / 25.0;
if ($a == $b) {
    echo "Rhyme? And Reason?"; // semicolon required here
} // no semicolon required here after the brace

echo "Hello World<br>" // no semicolon required before closing tag
    ?>

<h2>Whitespace and Line Breaks</h2>

<h2>Comment</h2>

<h3>Shell-style comments</h3>
<?php
######################
## Cookie functions
######################
$doubleCheck = true;
if ($doubleCheck) {
    # create an HTML from requesting that the user confirm the action
    # echo confirmationForm();
}

# $value = $p * exp($r * $t); # calculate compounded intertest
?>
<?php $d = 4; # Set $d to 4. ?> Then another
<?php echo $d ?>

<h3>C++ comments</h3>
<?php
//////////////////////
// Cookie functions
//////////////////////

if ($doubleCheck) {
    // create an HTML form requesting that the user confirm the action 
    // echo confirmationForm();
}

// $value = $p * exp($r * $t); // calculate compounded interest
?>
<?php $d = 4; // Set $d to 4. ?> The another
<?php echo $d; ?>

<h3>C comments</h3>
<?php
/* In this section, we take a bunch of variables and
  assign numbers to them. There is no real reason to 
  do this, we're just having fun.
*/
$a = 1;
$b = 2;
$c = 3;
$d = 4;

/* These comments can be mixed with code too,
see? */$e = 5; /* This works just fine. */

$l = 12;
$m = 13;
/* A comment begins here
?>
<p>Some stuff you want to be HTML.</p>
<?= $n = 14; ?>
*/
echo ("l=$l m=$m n=$n\n");
?>
<p>Now <b>this</b> is regular HTML...</p>

<h2>Literals</h2>
<?php
echo 2001 . '<br>';
echo 0xFE . '<br>';
echo 1.4142 . '<br>';
echo "Hello World" . '<br>';
echo 'Hi' . '<br>';
echo true . '<br>';
echo null . '<br>';
?>

<h2>Identifier</h2>

<h3>Variable names</h3>
<h3>Function names</h3>
<h3>Class names</h3>
<h3>Constants</h3>
<?php
define('PUBLISHER', "O'Reilly Media");
echo PUBLISHER;
?>

<h2>Keywords</h2>