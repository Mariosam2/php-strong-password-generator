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
function generatePassword($dictionary, $length)
{
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $dictionary[rand(0, $length - 1)];
    }
    return $password;
};
