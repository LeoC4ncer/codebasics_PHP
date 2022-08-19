//Задания 40-57
//40
<?php

// Неймспейсы изучаются на Хекслете
// Здесь они нужны по техническим причинам
// Просто не обращайте внимания, они не влияют на разработку
namespace HexletBasics\DefineFunctions\Define;

// BEGIN (write your solution here)
function printMotto()
{
    $motto = "Winter is coming";
    print_r($motto);
}
// END

//41
<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

// BEGIN (write your solution here)
function sayHurrayThreeTimes()
{
    return "hurray! hurray! hurray!";
}
// END

//42
<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN (write your solution here)
function truncate($str, $count)
{
    $substr = substr($str, 0, $count);
    return "{$substr}...";
}
// END

//43
<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN (write your solution here)
function getHiddenCard($creditCard, $numOfStars = 4)
{
    $hiddenCreditCard = substr($creditCard, -4);
    $starsStr = str_repeat('*', $numOfStars);
    return "{$starsStr}{$hiddenCreditCard}";
}
// END

//44
<?php

namespace HexletBasics\DefineFunctions\ReadingDocumentation;

// BEGIN (write your solution here)
function getAge($age)
{
    return floor($age);
}
// END

//45
<?php

namespace HexletBasics\Logic\BoolType;

// BEGIN (write your solution here)
function isPensioner($age)
{
    return $age >= 60;
}
// END

//46
<?php

namespace HexletBasics\Logic\Predicates;

// BEGIN (write your solution here)
function isMister($str)
{
    return $str === 'Mister';
}
// END

//47
<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN (write your solution here)
function isInternationalPhone($number)
{
    return $number[0] === '+';
}
// END

//48
<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN (write your solution here)
function isLeapYear($year)
{
    return ($year % 400 === 0) || ($year % 4 === 0 && $year % 100 !== 0);
}
// END

//49
<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

// BEGIN (write your solution here)
function isPalindrome($word)
{
    $word = strtolower($word);
    $reversedWord = strrev($word);
    return $reversedWord === $word;
}

function isNotPalindrome($word)
{
    return !isPalindrome($word);
}
// END

//50
<?php

namespace HexletBasics\Logic\LogicalOperators2;

// BEGIN (write your solution here)
function isNeutralSoldier($armorColor, $shieldColor)
{
    return ($armorColor === "yellow" || $armorColor === "black") && $shieldColor === "black";
}
// END

//51
<?php

namespace HexletBasics\Logic\WeakTyping;

// BEGIN (write your solution here)
function isFalsy($var)
{
    return $var == false;
}
// END

//52
<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN (write your solution here)
function guessNumber($number)
{
    if ($number === 42)
    {
        return 'You win!';
    }
    return 'Try again!';
}
// END

//53
<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN (write your solution here)
function normalizeUrl($site)
{
    $http = "http://";
    $https = "https://";
    if (strpos($site, $http) === false)
    {
        $site = $https . $site;
    }
    else
    {
        $site = $https . substr($site, 7);
    }
    return $site;
}
// END

//54
<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN (write your solution here)
function whoIsThisHouseToStarks($family)
{
    
    if ($family === 'Karstark' || $family === 'Tully')
    {
        $status = 'friend';
    }
    elseif ($family === 'Lannister' || $family === 'Frey')
    {
        $status = 'enemy';
    }
    else
    {
        $status = 'neutral';
    }
    return $status;
}
// END

//55
<?php

namespace HexletBasics\Logic\TernaryOperator;

// BEGIN (write your solution here)
function flipFlop($str)
{
    return ($str === 'flip') ? "flop" : "flip";
}
// END

//56
<?php

namespace HexletBasics\Conditionals\SwitchStatement;

// BEGIN (write your solution here)
function getNumberExplanation($num)
{
    switch ($num)
    {
        case 666:
            return "devil number";
        case 42:
            return "answer for everything";
        case 7:
            return "prime number";
        default:
            return null;    
    } 
}
// END

//57
<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($productsCount, $price)
{
    $amount = $productsCount ?: $price * 3;
    return $amount;
}
// END
