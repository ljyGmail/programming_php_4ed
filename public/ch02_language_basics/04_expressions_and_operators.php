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

<h1>Expressions and Operators</h1>

<h2>Number of Operands</h2>
<h2>Operator Precedence</h2>
<?php
echo "2 + 4 * 3 = " . (2 + 4 * 3);
echo "<br>";
echo "(2 + 4) * 3 = " . ((2 + 4) * 3);
?>
<h2>Operator Associativity</h2>
<?php
echo "2 / 2 * 2 = " . (2 / 2 * 2);
?>
<h2>Implicit Casting</h2>
<?php
echo "3 . 2.74 = " . (3 . 2.74);

// echo "9 Lives" - 1; // 8 (int)
// echo "3.14 Pies" * 2; // 6.28 (float)
// echo "9. Lives" - 1; // 8 (float / double)
// echo "1E3 Points of Light" + 1; // 1001 (float)
?>
<h2>Arithmetic Operators</h2>
<?php
$var1 = 5;
$var2 = 3;
echo "$var1 ** $var2 = " . $var1 ** $var2; // outputs 125
?>
<h2>String Concatenation Operator</h2>
<?php
$n = 5;
$s = 'There were ' . $n . ' ducks.';
echo $s;
?>
<h2>Auto-Increment and Auto-Decrement Operators</h2>
<h2>Comparison Operators</h2>
<?php
$var1 = 5;
$var2 = 65;

// Spaceship
echo "$var1 <=> $var2: " . ($var1 <=> $var2); // outputs -1
echo "<br>";
echo "$var2 <=> $var1: " . ($var2 <=> $var1); // outputs -1
echo "<br>";

// Null coalescing operator
$var1 = null;
$var2 = 31;

echo "null ?? $var2: " . ($var1 ?? $var2); // outputs 31
?>
<h2>Bitwise Operators</h2>
<h2>Logical Operators</h2>
<h2>Casting Operators</h2>
<?php
$a = "5";
$b = (int)$a;
echo $a;
echo "<br>";
$a = (int)$a;
echo $a;
echo "<br>";

class Person
{
    var $name = "Fred";
    var $age = 35;
}

$o = new Person;
$a = (array)$o;

print_r($a);
echo "<br>";

$a = array('name' => "Fred", 'age' => 5, 'wife' => "Wilma");
$o = (object)$a;
echo $o->name;
?>
<h2>Assignment Operators</h2>
<h3>Assignment</h3>
<?php
$a = 5;
$b = 10;
$c = ($a = $b);
echo "\$a: $a, \$b: $b, \$c: $c";
?>
<h3>Assignment with operation</h3>
<h2>Miscellaneous Operators</h2>
<?php
// Error suppression (@)

//  Execution (`...`)
$listing = `ls -la /tmp`;
echo $listing;

// Conditional (? :)

// Type (instanceof)
?>