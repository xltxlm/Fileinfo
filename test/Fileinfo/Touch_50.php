<?php

namespace xltxlm\fileinfo\test\Fileinfo;

use xltxlm\fileinfo\Fileinfo;

/**
 *
 */
class Touch_50
{

    public function __invoke()
    {
        $filepath = "/temp/xxx.cc/xx/dd/x.php";
        unlink($filepath);
        assert(!is_file($filepath),"文件不存在");
        $setFilepath = (new Fileinfo())
            ->setFilepath($filepath)
            ->Touch_this();
        assert(is_file($filepath),"文件不存在");
        \xltxlm\helper\Util::d($setFilepath);

        $setFilepath->reload();

        \xltxlm\helper\Util::d($setFilepath);

    }

}

