<style>
    h1 {
        background: orange;
        padding: 3px;
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
<a href="index.html">Index</a><br><br>

<h1>Variables</h1>
<?php
$what = "Fred";
$what = 35;
$what = array("Fred", 35, "Wilma");

$day = 60 * 60 * 24;
echo "There are {$day} seconds in a day.";
echo "<br>";

if ($uninitializedVariable === NULL) {
    echo "Yes!";
    echo "<br>";
}
?>

<h2>Variable Variables</h2>
<?php
$foo = "bar";
$$foo = "baz";
echo "The value of variable \$bar is $bar";
?>

<h2>Variable References</h2>
<?php
$bigLongVariableName = "PHP";
$short =& $bigLongVariableName;
$bigLongVariableName .= " rocks!";
print "\$short is $short<br>";
print "Long is $bigLongVariableName<br>";

$short = "Programming $short";
print "\$short is $short<br>";
print "Long is $bigLongVariableName<br>";

$white = "snow";
$black =& $white;
unset($white);
print $black;
print "<br>";

// Functions can return values by reference
function &retRef()
{ // note the &
    $var = "PHP";
    return $var;
    ;
}

$v =& retRef(); // note the &
echo $v;
?>

<h2>Variable Scope</h2>
<h3>Local scope</h3>
<?php
function updateCounter()
{
    $counter = 1;
    $counter++;
}

$counter = 10;
updateCounter();

echo $counter;
?>

<h3>Global scope</h3>
<?php
function updateCounter2()
{
    global $counter;
    $counter++;
}

$counter = 10;
updateCounter2();
echo $counter;
echo "<br>";

// $GLOBALS array
function updateCounter3()
{
    $GLOBALS['counter']++;
}

$counter = 10;
updateCounter3();
echo $counter;
?>

<h3>Static variables</h3>
<?php
function updateCounter4()
{
    static $counter = 0;
    $counter++;

    echo "Static counter is now {$counter}<br>";
}

$counter = 10;
updateCounter4();
updateCounter4();

echo "Global counter is {$counter}";
?>

<h3>Function parameters</h3>
<?php
function greet($name)
{
    echo "Hello, {$name}";
}

greet("Janet");
?>

<h2>Garbage Collection</h2>
<?php
$worker = array("Fred", 35, "Wilma");
$other = $worker; // array isn't duplicated in memory

$worker[1] = 36; // array is copied in memory, value changed

echo $worker[1];
echo "<br>";
echo $other[1];
echo "<br>";

$s1 = isset($name); // $s1 is false

if ($s1) {
    echo "\$name is set<br>";
} else {
    echo "\$name is not set<br>";
}

$name = "Fred";
$s2 = isset($name); // $2 is true
if ($s2) {
    echo "\$name is now set<br>";
} else {
    echo "\$name is not set<br>";
}

unset($name); // $name is NULL
?>