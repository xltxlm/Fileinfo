<?php

namespace xltxlm\fileinfo\Plus;

use xltxlm\fileinfo\Features\Fileinfo_Read_Lines;
use xltxlm\fileinfo\Fileinfo;

/**
 * 在文件类之间随意转换的基础类;
 */
Trait __to
{
    use __to\__to_implements;


    public function __construct(string $Filepath = null)
    {
        if ($Filepath != null) {
            $this->setFilepath($Filepath);
        }
    }

    public function __Fileinfo_Read_Lines(): \xltxlm\fileinfo\Features\Fileinfo_Read_Lines
    {
        return new Fileinfo_Read_Lines($this->getFilepath());
    }

    public function __Fileinfo(): \xltxlm\fileinfo\Fileinfo
    {
        return new Fileinfo($this->getFilepath());
    }


}