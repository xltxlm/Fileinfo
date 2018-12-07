<?php

namespace xltxlm\fileinfo\test\Features\Fileinfo_Read_Lines;

use xltxlm\fileinfo\Features\Fileinfo_Read_Lines;

/**
 *
 */
class 读取远程网址的内容_177_0
{

    public function __invoke()
    {
        $lines = (new Fileinfo_Read_Lines('https://raw.githubusercontent.com/walkor/shadowsocks-php/master/MIT-LICENSE.txt'))
            ->__invoke();
        foreach ($lines as $line) {
            p($line);
        }
    }

}

