<?php

namespace xltxlm\fileinfo\test\Fileinfo;

use xltxlm\fileinfo\Fileinfo;

/**
 *
 */
class Touch_51
{

    public function __invoke()
    {
        $filepath_dir = "/var/www/html/";
        $filepath = $filepath_dir . "/x.php";
        $setFilepath = (new Fileinfo())
            ->setFilepath($filepath);
        \xltxlm\helper\Util::d($setFilepath);
        $setFilepath->Touch_this()->Reload();
        \xltxlm\helper\Util::d($setFilepath);
    }

}

