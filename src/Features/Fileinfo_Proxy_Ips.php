<?php

namespace xltxlm\fileinfo\Features;

use xltxlm\redis\LockKey;

/**
 * 代理ip存在一个文件内,然后顺序读取出来作为代理,每次返回一个ip地址;
 */
class Fileinfo_Proxy_Ips extends Fileinfo_Proxy_Ips\Fileinfo_Proxy_Ips_implements
{
    private $cache_file_lines = [];

    public function __invoke(): string
    {
        if (empty($this->cache_file_lines)) {
            $ips = (new Fileinfo_Read_Lines($this->getFilepath()))
                ->__invoke();
            $proxyips = [];
            foreach ($ips as $ip) {
                if ($ip[0] == '#') {
                    continue;
                }
                $proxyips[] = $ip;
            }
            $this->cache_file_lines = $proxyips;
        }
        foreach ($this->cache_file_lines as $cache_file_line) {
            $LockKey = (new LockKey())
                ->setRedisConfig($this->getRedisCacheConfig())
                ->setKey("s{$ip}")
                ->setExpire($this->getProtect_Second())
                ->setValue($ip);
            if ($LockKey->__invoke() == false) {
                sleep($this->getProtect_Second());
            }
            return $cache_file_line;
        }
    }


}