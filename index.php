<?php
require ('Utility/DirectoryLoader.php');

\Utility\DirectoryLoader::includeAllInPath('Strings');
\Utility\DirectoryLoader::includeAllInPath('Math');

run();

function run(): void
{
    addBinaries();
    climbStairs();
}

/**
 * Sum two binary numbers given as strings and
 * output the results.
 * @return void
 */
function addBinaries(): void
{
    printTitle();

    $a = "1010";
    $b = "1011";
    echo \Strings\Binary::add($a, $b) . PHP_EOL;

    $a = "1101101101101101101101101101101101101101101101101
          1011011011011011011011011011011011011011011011011
          0110110110110110110110110110110110110110110110110
          1101101101101101101101101101101";
    $b = "1101101101101101101101101101101101101101101101101
          1011011011011011011011011011011011011011011011011
          0110110110110110110110110110110110110110110110110
          110110110110110110110110110";
    echo \Strings\Binary::add($a, $b);
}

/**
 * @return void
 */
function climbStairs(): void
{
    printTitle();
    $solutions = [];
    for ($i = 1; $i <= 23; $i++) {
         $solutions[] = \Math\Stairs::climb($i);
    }
    echo implode(', ', $solutions);
}

/**
 * Prints the title of the function being demoed.
 * NOTE: Since this is just a demo, we're echoing HTML
 * directly from PHP. We wouldn't do it this way in
 * production code.
 *
 * @return void
 */
function printTitle() : void
{
    echo '<br />';
    echo '<hr />';
    echo debug_backtrace()[1]['function'];
    echo '<br /><br />';
}
