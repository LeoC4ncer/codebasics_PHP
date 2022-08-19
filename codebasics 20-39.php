//Задания 20-39
//20
<?php

// BEGIN (write your solution here)
$motto = 'What Is Dead May Never Die!';
print_r($motto);
// END

//21
<?php

$name = 'Brienna';

// BEGIN (write your solution here)
$name = 'anneirB';
// END

print_r($name);

//22
<?php

// BEGIN (write your solution here)
$numOfMyBrothers = 2;
print_r($numOfMyBrothers);
// END

//23
<?php

$family = 'Targaryen';

// BEGIN (write your solution here)
$pet = 'Dragon';
// END

print_r($family);
print_r(' and ');
print_r($pet);

//24
<?php

$eurosCount = 100;

// BEGIN (write your solution here)
$dollarsCount = $eurosCount * 1.25;
print_r($dollarsCount . "\n");
$roublesCount = $dollarsCount * 60;
print_r($roublesCount);
// END

//25
<?php

$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";

$firstName = 'Joffrey';
$greeting = 'Hello';

// BEGIN (write your solution here)
print_r($greeting . ", " . $firstName . "!");
print_r($intro . "\n" . $info);
// END

//26
<?php

// BEGIN (write your solution here)
$firstNumber = 1.10;
$secondNumber = -100;
print_r($firstNumber * $secondNumber);
// END

//27
<?php

$king = 'King Balon the 6th';

// BEGIN (write your solution here)
$roomsInCastleCount = 17;
$castleCount = 6;

print_r($king . ' has ' . ($castleCount * $roomsInCastleCount) . ' rooms.');
// END

//28
<?php

// BEGIN (write your solution here)
const DRAGONS_BORN_COUNT = 3;
// END

//29
<?php

// BEGIN (write your solution here)
print_r(__DIR__);
// END

//30
<?php

$stark = 'Arya';

// BEGIN (write your solution here)
print_r("Do you want to eat, {$stark}?");
// END

//31
<?php

$one = 'Naharis';
$two = 'Mormont';
$three = 'Sand';

// BEGIN (write your solution here)
print_r("{$one[2]}{$two[1]}{$three[3]}{$two[4]}{$two[2]}");
// END

//32
<?php

// BEGIN (write your solution here)
$str = <<<NAMESTR
Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
NAMESTR;
// END

print_r($str);

//33
<?php

$company1 = 'Apple';
$company2 = 'Samsung';

// BEGIN (write your solution here)
$company1NameLength = strlen($company1);
$company2NameLength = strlen($company2);
$sumCompanyNameLength = $company1NameLength + $company2NameLength;

print_r($sumCompanyNameLength);
// END

//34
<?php

$text = 'mount';

// BEGIN (write your solution here)
$text = ucfirst($text);
print_r($text);
// END

//35
<?php

$number = 10.1234;

// BEGIN (write your solution here)
print_r(round($number, 2));
// END

//36
<?php

$text = 'Never forget what you are, for surely the world will not';

// BEGIN (write your solution here)
$message = "First: {$text[0]}\nLast: {$text[strlen($text) -1]}";
print_r($message);
// END

//37
<?php

// BEGIN (write your solution here)
print_r(min(3, 10, 22, -3, 0));
// END

//38
<?php

// BEGIN (write your solution here)
print_r(rand(1,6));
// END

//39
<?php

$motto = 'Family, Duty, Honor';

// BEGIN (write your solution here)
print_r(gettype($motto));
// END
