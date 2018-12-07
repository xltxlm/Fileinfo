<?php
namespace xltxlm\fileinfo\Features\Fileinfo_Read_Lines;

use \xltxlm\fileinfo\Plus\__to;

/**
 * :类;
 * yield方式返回每一行,空行不返回;
*/
abstract class Fileinfo_Read_Lines_implements
{
    use __to;

    /**
    *  执行读取方法;
    *  @return ;
    */
    abstract public function __invoke();
}
