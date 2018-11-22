<?php
namespace xltxlm\fileinfo\Dir\Dir_File_Scan;

/**
 * 扫描文件夹的文件.;
*/
abstract class Dir_File_Scan_implements
{

/* @var string  只有匹配的才返回,正则表达式 */
    protected $preg = '';

    /**
    * @return string;
    */
    public function getpreg():string
    {
        return $this->preg;
    }

    /**
    * @param string $preg;
    * @return $this
    */
    public function setpreg(string $preg)
    {
        $this->preg = $preg;
        return $this;
    }
    /* @var int  文件夹深度 */
    protected $depth = null;
    
    /**
    * @return int;
    */
    public function getdepth():int
    {
        return $this->depth;
    }

    /**
    * @param int $depth;
    * @return $this
    */
    public function setdepth(int $depth)
    {
        $this->depth = $depth;
        return $this;
    }
    /* @var string  要检索的文件夹名称 */
    protected $dir = '';

    /**
    * @return string;
    */
    public function getdir():string
    {
        return $this->dir;
    }

    /**
    * @param string $dir;
    * @return $this
    */
    public function setdir(string $dir)
    {
        $this->dir = $dir;
        return $this;
    }
    /**
    *  ;
    *  @return ;
    */
    abstract public function __invoke();
}
