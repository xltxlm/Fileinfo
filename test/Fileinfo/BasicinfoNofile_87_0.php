<?php

namespace xltxlm\fileinfo\test\Fileinfo;

use xltxlm\fileinfo\Fileinfo;

/**
 *
 */
class BasicinfoNofile_87_0
{

    private $setFilepath;

    public function __invoke()
    {
        $this->setFilepath = (new Fileinfo())
            ->setFilepath("http://xx.com/xxx/a.php");

        \xltxlm\helper\Util::d($this->setFilepath);

        $this->setFilepath = (new Fileinfo())
            ->setFilepath("http://xx.com/xxx/a.cc.php");

        \xltxlm\helper\Util::d($this->setFilepath);
    }

}

