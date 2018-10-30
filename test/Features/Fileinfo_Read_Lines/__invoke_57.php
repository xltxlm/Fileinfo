<?php

namespace xltxlm\fileinfo\test\Features\Fileinfo_Read_Lines;

use xltxlm\fileinfo\Features\Fileinfo_Read_Lines;

/**
 *
 */
class __invoke_57
{

    public function __invoke()
    {
        $Fileinfo_Read_Lines = (new Fileinfo_Read_Lines(__DIR__ . '/a.txt'))
            ->__invoke();
        $lines = [];
        foreach ($Fileinfo_Read_Lines as $fileinfo_Read_Line) {
            \xltxlm\helper\Util::d($fileinfo_Read_Line);
            $lines[] = $fileinfo_Read_Line;
        }
        assert($lines==[1,2,3,4,5,'c']);
    }

}

