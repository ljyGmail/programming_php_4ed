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
<a href="index.html">Index</a><br><br>

<h1>Data Types</h1>

<h2>Integers</h2>
<?php
# decimal
echo 1998 . "<br>";
echo -641 . "<br>";
echo +33 . "<br>";
echo "<hr>";

# octal
echo 0755 . "<br>"; // decimal 493
echo +010 . "<br>"; // decimal 8
echo "<hr>";

# hexadecimal
echo 0xFF . "<br>"; // decimal 255
echo 0x10 . "<br>"; // decimal 16
echo -0xDAD1 . "<br>"; // decimal -56017
echo "<hr>";

# binary
echo 0b01100000 . "<br>"; // decimal 96
echo 0b00000010 . "<br>"; // decimal 2
echo -0b10 . "<br>"; // decimal -2
echo "<hr>";

$x = 1;
if (is_int($x)) {
    echo "$x is an integer";
}
?>

<h2>Floating-Point Numbers</h2>
<?php
echo 3.14 . "<br>";
echo 0.017 . "<br>";
echo -7.1 . "<br>";
echo "<hr>";

# scientific notation
echo 0.314E1 . "<br>"; // 0.314*10^1, or 3.14
echo 17.0E-3 . "<br>"; // 17.0*10^(-3), or 0.017
echo "<hr>";

$x = 3.14;
if (is_float($x)) {
    echo "$x is a floating-point number";
}
?>
<h2>Strings</h2>
<?php
echo 'big dog' . "<br>";
echo "fat dog" . "<br>";

# Variables  are expanded (interpolated) within double quotes
$name = "Guido";
echo "Hi, $name<br>";
echo 'Hi, $name<br>';
echo "<hr>";

$dosPath = 'C:\\WINDOWS\\SYSTEM';
$publisher = 'Tim O\'Reilly';
echo "$dosPath $publisher";
echo "<hr>";

$a = "one";
$b = "one";
if ($a == $b) {
    echo "a and b are equal";
}
echo "<hr>";

$x = "php";
if (is_string($x)) {
    echo "$x is a string";
}
?>

<h2>Booleans</h2>
<?php
$x = 5; // $x has a true value
$x = true; // clearer way to write it
$y = ""; // $y has a false value
$y = false; // clearer way to write it

if (is_bool($x)) {
    echo "$x is a Boolean";
} else {
    echo "$x is not a Boolean";
}
?>

<h2>Arrays</h2>
<?php
$person[0] = "Edison";
$person[1] = "Wankel";
$person[2] = "Crapper";

# associative index
$creator['Light bulb'] = "Edison";
$creator['Rotary Engine'] = "Wankel";
$creator['Toilet'] = "Crapper";

# array() constructor
$person = array("Edison", "Wankel", "Crapper");
$creator = array(
    'Light bulb' => "Edison",
    'Rotary Engine' => "Wankel",
    'Toilet' => "Crapper"
);

# foreach loop
foreach ($person as $name) {
    echo "Hello, {$name}<br>";
}
echo "<hr>";

foreach ($creator as $invention => $inventor) {
    echo "{$inventor} invented the {$invention}<br>";
}
echo "<hr>";

echo "<p style='font-weight: bold; color: red;'>After sorting: </p>";

sort($person);
// $person is now array("Crapper", "Edison", "Wankel") 

asort($creator);
// $creator is now array('Toilet' => "Crapper",
// 'Light bulb' => "Edison",
// 'Rotary Engine' => "Wankel");
foreach ($person as $name) {
    echo "Hello, {$name}<br>";
}
echo "<hr>";

foreach ($creator as $invention => $inventor) {
    echo "{$inventor} invented the {$invention}<br>";
}
echo "<hr>";

if (is_array($person)) {
    echo "\$person is an array";
}
?>

<h2>Objects</h2>
<?php
class Person
{
    public $name = '';

    function name($newname = NULL)
    {
        if (!is_null($newname)) {
            $this->name = $newname;
        }

        return $this->name;
    }
}

$ed = new Person;
$ed->name('Edison');
echo "Hello, {$ed->name}<br>";
$tc = new Person;
$tc->name('Crapper');
echo "Look out below {$tc->name}<br>";

echo "<hr>";

if (is_object($ed)) {
    echo "\$ed is an  object";
}
?>

<h2>Resources</h2>
<?php
if (is_resource($x)) {
    echo "\$x is a resource";
} else {
    echo "\$x is not a resource";
}
?>

<h2>Callbacks</h2>
<?php
$callback = function () {
    echo "callback achieved";
};

call_user_func($callback);
?>

<h2>NULL</h2>
<?php
$aleph = "beta";
$aleph = null; // variable's value is gone
$aleph = Null; // same
$aleph = NULL; // same

if (is_null($aleph)) {
    echo "\$aleph is NULL";
}
?>