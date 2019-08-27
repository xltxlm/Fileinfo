<?php
namespace xltxlm\fileinfo\Features\Fileinfo_Proxy_Ips;

use \xltxlm\fileinfo\Plus\__to;
/**
 * 代理ip存在一个文件内,然后顺序读取出来作为代理,每次返回一个ip地址.顺序读取为了防止某个ip过载;
*/
abstract class Fileinfo_Proxy_Ips_implements
{

    use __to;


    /* @var \xltxlm\redis\Config\RedisConfig ip超时锁,保护每个ip的请求频率 */
        protected $RedisCacheConfig;
    

    /**
     * @return \xltxlm\redis\Config\RedisConfig;
     */
    public function getRedisCacheConfig():\xltxlm\redis\Config\RedisConfig    {
        return $this->RedisCacheConfig;
    }

    /**
     * @param \xltxlm\redis\Config\RedisConfig $RedisCacheConfig;
     * @return $this
     */
    public function setRedisCacheConfig(\xltxlm\redis\Config\RedisConfig $RedisCacheConfig)
    {
        $this->RedisCacheConfig = $RedisCacheConfig;
        return $this;
    }

    /* @var int ip保护的的间隔,默认1秒 */
        protected $Protect_Second = 1;
    

    /**
     * @return int;
     */
    public function getProtect_Second():int    {
        return $this->Protect_Second;
    }

    /**
     * @param int $Protect_Second;
     * @return $this
     */
    public function setProtect_Second(int $Protect_Second)
    {
        $this->Protect_Second = $Protect_Second;
        return $this;
    }

    /**
     *   ;
     *   @return :string;
    */
    abstract public function __invoke():string;

}