//Задания 58-75
//58
<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    // BEGIN (write your solution here)
    while ($firstNumber > 0)
    {
        print_r($firstNumber);
        print_r("\n");
        $firstNumber--;
    }
    print_r("finished!");
    // END
}

//59
<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN (write your solution here)
function multiplyNumbersFromRange($start, $finish)
{
    $result = $start;
    $i = $start + 1;
    while ($i <= $finish)
    {
        $result *= $i;
        $i++;
    }

    return $result;
}
// END

//60
<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN (write your solution here)
function joinNumbersFromRange($start, $finish)
{
    $result = "{$start}";
    $i = $start + 1;
    while ($i <= $finish)
    {
        $result .= "{$i}";
        $i++;
    }
    return $result;
}
// END

//61
<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN (write your solution here)
function printReversedWordBySymbol($word)
{
    $i = strlen($word) - 1;
    while ($i >= 0)
    {
        print_r($word[$i]);
        print_r("\n");
        $i--;
    }
}
// END

//62
<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN (write your solution here)
function countChars($str, $char)
{
    $str = strtolower($str);
    $char = strtolower($char); 
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            // Считаем только подходящие символы
            $count = $count + 1;
        }
        // Счетчик увеличивается в любом случае
        $i = $i + 1;
    }

    return $count;
}
// END

//63
<?php

namespace HexletBasics\Loops\ReverseString;

// BEGIN (write your solution here)
function mysubstr($str, $lenght)
{
    $result = '';
    $i = 0;
    while ($i < $lenght)
    {
        $result .= $str[$i];
        $i++;
    }
    return $result;
}
// END

//64
<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str, $index, $length)
{
    if ($length < 0 || $index < 0 || $index + $length > strlen($str) || $index >= strlen($str))
    {
        return false;
    }
    return true;
}
// END

//65
<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN (write your solution here)
function filterString($str, $chr)
{
    $result = '';
    $i = 0;
    while ($i < strlen($str))
    {
        if ($str[$i] !== $chr)
        {
            $result .= $str[$i];
        }
        $i++;
    }
    return $result;
}
// END

//66
<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN (write your solution here)
function makeItFunny($str, $num)
{
    $result = '';
    $i = 0;
    while ($i < strlen($str))
    {
        if (($i + 1) % $num === 0)
        {
            $result .= strtoupper($str[$i]);
        }
        else
        {
            $result .= $str[$i];
        }
        $i++;
    }
    return $result;
}
// END

//67
<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN (write your solution here)
function hasChar($str, $chr)
{
    $i = 0;
    while ($i < strlen($str))
    {
        if ($str[$i] === $chr)
        {
            return true;
        }
        $i++;
    }
    return false;
}
// END

//68
<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN (write your solution here)
function sumOfSeries($first, $last)
{
    $sum = 0;
    for ($i = $first; $i <= $last; $i++)
    {
        $sum += $i;
    }
    return $sum;
}
// END

//69
<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($text)
{
    // BEGIN (write your solution here)
    $result = '';
    for ($i = 0; $i < mb_strlen($text); $i++)
    {
        $char = mb_substr($text, $i, 1);
        if ($char === mb_strtoupper($char))
        {
            $result .= mb_strtolower($char);
        }
        else
        {
            $result .= mb_strtoupper($char);
        }
    }
    return $result;
    // END
}

//70
<?php

// BEGIN (write your solution here)

print_r(setlocale(LC_CTYPE, 0));
// END

//71
<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    // BEGIN (write your solution here)
    if (mb_strpos($text, $substr) === 0)
    {
        return true;
    }
    return false;
    // END
}

//72
<?php

namespace HexletBasics\Dates\Timestamp;

const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp)
{
    // BEGIN (write your solution here)
    $year = (int) floor($timestamp / SECONDS_IN_YEAR) + 1970;
    return $year;
    // END
}

//73
<?php

namespace HexletBasics\Dates\DateFunction;

function getCustomDate($timestamp)
{
    // BEGIN (write your solution here)
    $result = date('d/m/o', $timestamp);
    return $result;
    // END
}

//74
<?php

namespace HexletBasics\Dates\Mkdtime;

// BEGIN (write your solution here)
function getHexletBirthday()
{
    return mktime(0, 0, 0, 1, 1, 2012);
}
// END

//75
<?php

// BEGIN (write your solution here)
print_r(date_default_timezone_get());
// END

