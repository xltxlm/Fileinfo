<?php
namespace xltxlm\fileinfo\Features\Fileinfo_tmp;

use \xltxlm\fileinfo\Plus\__to;
/**
 * 根据当前的文件路径,返回相同目录下,带有当前文件名作为前缀的另外一个路径;
*/
abstract class Fileinfo_tmp_implements
{

    use __to;


    /**
     *   返回新的文件路径;
     *   @return :string;
    */
    abstract public function __invoke():string;
    /**
     * @return $this
     */
    function __invoke_this()
    {
        $this->__invoke();
        return $this;
    }

}