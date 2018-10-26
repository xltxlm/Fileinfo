<?php

namespace xltxlm\fileinfo\test\Fileinfo;

use xltxlm\fileinfo\Fileinfo;

/**
 *
 */
class Basicinfo_84_0
{

    /** @var Fileinfo */
    private $setFilepath;

    public function __invoke()
    {
        $this->setFilepath = (new Fileinfo())
            ->setFilepath(__FILE__);

        \xltxlm\helper\Util::d($this->setFilepath);

        $this->测试文件夹名称是否正常();

    }

    private function 测试文件夹名称是否正常()
    {

        $Dirname = $this->setFilepath
            ->getDirname();

        if ($Dirname != dirname(__FILE__)) {
            throw new \Exception(__FUNCTION__);
        }
    }

}

