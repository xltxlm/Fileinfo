<?php
namespace xltxlm\fileinfo\Features\Fileinfo_tmp;

/**
 * 根据当前的文件路径,返回相同目录下,带有当前文件名作为前缀的另外一个路径;
*/
abstract class Fileinfo_tmp_implements
{



    /* @var string 文件路径 */
        protected $FielPath = '';
    
    /**
     * @return string;
     */
    public function getFielPath():string    {
        return $this->FielPath;
    }

    /**
     * @param string $FielPath;
     * @return $this
     */
    public function setFielPath(string $FielPath)
    {
        $this->FielPath = $FielPath;
        return $this;
    }

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