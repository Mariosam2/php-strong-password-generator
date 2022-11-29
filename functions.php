<?php

function generateDictionary($array, $letters, $numbers, $symbols)
{
    $tempArray = [];
    //var_dump($array);
    foreach ($array as $key => $value) {
        //var_dump($key);
        //var_dump($value);
        if ($key === 'letters' && $value === 'on') {
            $tempArray = array_merge($tempArray, $letters);
        }
        if ($key === 'nums' && $value === 'on') {
            $tempArray = array_merge($tempArray, $numbers);
        }
        if ($key === 'symbols' && $value === 'on') {
            $tempArray = array_merge($tempArray, $symbols);
        }
    };
    //var_dump($tempArray);
    return $tempArray;
};
function generatePassword($dictionary, $length, $repetition)
{
    $password = '';
    if ($repetition === 'yes') {
        for ($i = 0; $i < $length; $i++) {
            $password .= $dictionary[rand(0, $length - 1)];
        }
    } else {

        while (strlen($password) <> $length) {
            //var_dump(!str_contains($password, strval($dictionary[rand(0, $length - 1)])));
            $ran_char = strval($dictionary[rand(0, $length - 1)]);
            if (!str_contains($password, $ran_char)) {
                $password .= $ran_char;
                /* var_dump($ran_char);
                var_dump($password); */
            }
        }
    }

    return $password;
};
function toArrayString($array)
{
    foreach ($array as $element) {
        $element = strval($element);
    }
    return $array;
}
