<?php

namespace Utility;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;
use RecursiveRegexIterator;

class DirectoryLoader
{
    public static function includeAllInPath(string $path) : void
    {
        $directory = new RecursiveDirectoryIterator($path);
        $iterator = new RecursiveIteratorIterator($directory);
        foreach ($iterator as $file) {
            $filename = $file->getFilename();
            if (preg_match('%\.php$%', $filename)) {
                include($file->getPathname());
            }
        }
    }
}
