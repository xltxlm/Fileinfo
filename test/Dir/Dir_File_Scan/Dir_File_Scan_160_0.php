<?php

namespace xltxlm\fileinfo\test\Dir\Dir_File_Scan;

use xltxlm\fileinfo\Dir\Dir_File_Scan;

/**
 *
 */
class Dir_File_Scan_160_0
{
    public function __invoke()
    {
        $dir_File_Scan = new Dir_File_Scan(__DIR__ . '/../../');
        foreach ($dir_File_Scan->__invoke() as $item) {
            p($item->getRealPath());
        }
    }
}
