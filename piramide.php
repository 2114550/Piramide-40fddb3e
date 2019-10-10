<?php
echo "Hoeveel sterretjes wil je hebben?".PHP_EOL;
$aantal = readline();
if (is_numeric($aantal)) {
    for ($lol = 1; $lol <= $aantal; $lol++)
    {
        for ($lol2 = 1; $lol2 <= $lol; $lol2++)
        {
            echo "*";
        }
        echo PHP_EOL;
    }
}
else
{
    echo "bruh".PHP_EOL;
    exit();
}