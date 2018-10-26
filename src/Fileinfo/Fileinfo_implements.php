<?php
namespace xltxlm\fileinfo\Fileinfo;

/**
 * 文件的基本操作方式;
*/
abstract class Fileinfo_implements
{



    /* @var string 扩展名,不带点的 */
        protected $Extension = '';
    
    /**
     * @return string;
     */
    public function getExtension():string    {
        return $this->Extension;
    }

    /**
     * @param string $Extension;
     * @return $this
     */
    protected function setExtension(string $Extension)
    {
        $this->Extension = $Extension;
        return $this;
    }

    /* @var string 设置文件的路径 */
        protected $Filepath = '';
    
    /**
     * @return string;
     */
    public function getFilepath():string    {
        return $this->Filepath;
    }

    /**
     * @param string $Filepath;
     * @return $this
     */
    public function setFilepath(string $Filepath)
    {
        $this->Filepath = $Filepath;
        return $this;
    }

    /* @var string 获取文件名,带后缀 */
        protected $Filename_and_Extension = '';
    
    /**
     * @return string;
     */
    public function getFilename_and_Extension():string    {
        return $this->Filename_and_Extension;
    }

    /**
     * @param string $Filename_and_Extension;
     * @return $this
     */
    protected function setFilename_and_Extension(string $Filename_and_Extension)
    {
        $this->Filename_and_Extension = $Filename_and_Extension;
        return $this;
    }

    /* @var string 获取文件名,不带后缀 */
        protected $Filename_no_Extension = '';
    
    /**
     * @return string;
     */
    public function getFilename_no_Extension():string    {
        return $this->Filename_no_Extension;
    }

    /**
     * @param string $Filename_no_Extension;
     * @return $this
     */
    protected function setFilename_no_Extension(string $Filename_no_Extension)
    {
        $this->Filename_no_Extension = $Filename_no_Extension;
        return $this;
    }

    /* @var string 文件全路径 */
        protected $Realpath = '';
    
    /**
     * @return string;
     */
    public function getRealpath():string    {
        return $this->Realpath;
    }

    /**
     * @param string $Realpath;
     * @return $this
     */
    protected function setRealpath(string $Realpath)
    {
        $this->Realpath = $Realpath;
        return $this;
    }

    /* @var int 文件大小 */
        protected $Filesize = 0;
    
    /**
     * @return int;
     */
    public function getFilesize():int    {
        return $this->Filesize;
    }

    /**
     * @param int $Filesize;
     * @return $this
     */
    protected function setFilesize(int $Filesize)
    {
        $this->Filesize = $Filesize;
        return $this;
    }

    /* @var string 文件夹 */
        protected $Dirname = '';
    
    /**
     * @return string;
     */
    public function getDirname():string    {
        return $this->Dirname;
    }

    /**
     * @param string $Dirname;
     * @return $this
     */
    protected function setDirname(string $Dirname)
    {
        $this->Dirname = $Dirname;
        return $this;
    }

    /* @var bool 文件是否存在 */
        protected $Exists = false;
    
    /**
     * @return bool;
     */
    public function getExists():bool    {
        return $this->Exists;
    }

    /**
     * @param bool $Exists;
     * @return $this
     */
    protected function setExists(bool $Exists)
    {
        $this->Exists = $Exists;
        return $this;
    }

    /* @var bool 文件存在,但是内容为空 */
        protected $ExistsEmpty = false;
    
    /**
     * @return bool;
     */
    public function getExistsEmpty():bool    {
        return $this->ExistsEmpty;
    }

    /**
     * @param bool $ExistsEmpty;
     * @return $this
     */
    protected function setExistsEmpty(bool $ExistsEmpty)
    {
        $this->ExistsEmpty = $ExistsEmpty;
        return $this;
    }

    /* @var string 文件创建时间 */
        protected $Filemtime = '';
    
    /**
     * @return string;
     */
    public function getFilemtime():string    {
        return $this->Filemtime;
    }

    /**
     * @param string $Filemtime;
     * @return $this
     */
    protected function setFilemtime(string $Filemtime)
    {
        $this->Filemtime = $Filemtime;
        return $this;
    }

    /**
     *   确保文件存在;
     *   @return ;
    */
    abstract public function Touch();
    /**
     * @return $this
     */
    function Touch_this()
    {
        $this->Touch();
        return $this;
    }

    /**
     *   重新获取文件的信息;
     *   @return ;
    */
    abstract public function Reload();
    /**
     * @return $this
     */
    function Reload_this()
    {
        $this->Reload();
        return $this;
    }

}