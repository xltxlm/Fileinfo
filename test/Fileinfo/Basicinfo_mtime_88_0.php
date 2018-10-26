<?php

namespace xltxlm\fileinfo\test\Fileinfo;

use xltxlm\fileinfo\Fileinfo;

/**
 *
 */
class Basicinfo_mtime_88_0
{

    public function __invoke()
    {
        $mtime = (new Fileinfo())
            ->setFilepath(__FILE__)
            ->getFilemtime();

        \xltxlm\helper\Util::d($mtime);
    }

}

