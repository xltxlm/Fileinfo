<?php

namespace xltxlm\fileinfo\test\Fileinfo;

use xltxlm\fileinfo\Fileinfo;

/**
 *
 */
class Unlink_66
{

    public function __invoke()
    {
        $filepath = __DIR__ . '/a';
        file_put_contents($filepath, 'xx');
        \xltxlm\helper\Util::d(is_file($filepath));
        (new Fileinfo($filepath))
            ->Unlink();
        \xltxlm\helper\Util::d(is_file($filepath));
        assert(is_file($filepath) == false);
    }

}

