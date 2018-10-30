<?php
namespace xltxlm\fileinfo\Plus\__to;

/**
 * 在文件类之间随意转换的基础类;
*/
Trait __to_implements
{



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

    /**
     *   ;
     *   @return :\xltxlm\fileinfo\Features\Fileinfo_Read_Lines;
    */
    abstract public function __Fileinfo_Read_Lines():\xltxlm\fileinfo\Features\Fileinfo_Read_Lines;

    /**
     *   ;
     *   @return :\xltxlm\fileinfo\Fileinfo;
    */
    abstract public function __Fileinfo():\xltxlm\fileinfo\Fileinfo;

}