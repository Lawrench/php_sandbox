<?php

require('Strings/AddBinaries.php');

run();

function run(): void
{
    runAddBinaries();
    addSeparator();
}

/**
 * Add a Horizontal Rule element
 * NOTE: since this is just code exercises, I'm writing HTML
 * directly in the PHP code via echos or springf.
 * @return void
 */
function addSeparator(): void
{
    echo sprintf("<hr>%s", PHP_EOL);
}

/**
 * @return void
 */
function runAddBinaries(): void
{
    $a = "1010";
    $b = "1011";
    echo \Strings\AddBinaries::addBinary($a, $b) . PHP_EOL;

    $a = "1101101101101101101101101101101101101101101101101
          1011011011011011011011011011011011011011011011011
          0110110110110110110110110110110110110110110110110
          1101101101101101101101101101101";
    $b = "1101101101101101101101101101101101101101101101101
          1011011011011011011011011011011011011011011011011
          0110110110110110110110110110110110110110110110110
          110110110110110110110110110";
    echo \Strings\AddBinaries::addBinary($a, $b);
}
