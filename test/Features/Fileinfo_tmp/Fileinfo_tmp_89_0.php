<?php

namespace xltxlm\fileinfo\test\Features\Fileinfo_tmp;

use xltxlm\fileinfo\Features\Fileinfo_tmp;

/**
 *
 */
class Fileinfo_tmp_89_0
{

    public function __invoke()
    {
        $newname = (new Fileinfo_tmp())
            ->setFielPath(__FILE__)
            ->__invoke();
        \xltxlm\helper\Util::d($newname);

    }

}

