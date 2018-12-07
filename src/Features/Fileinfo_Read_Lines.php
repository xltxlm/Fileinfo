<?php

namespace xltxlm\fileinfo\Features;

/**
 * yield方式返回每一行,空行不返回;
 */
class Fileinfo_Read_Lines extends Fileinfo_Read_Lines\Fileinfo_Read_Lines_implements
{
    public function __invoke()
    {
        if (strpos($this->getFilepath(), 'http') === 0) {
            $file_get_contents = file_get_contents($this->getFilepath());
            $tempnam = tempnam('/tmp/', 'url');
            file_put_contents($tempnam, $file_get_contents);
            $this->setFilepath($tempnam);
        }
        if (!file_exists($this->getFilepath()) || !is_readable($this->getFilepath())) {
            throw new \Exception("文件不存在,或者没有读取权限.[{$this->getFilepath()}]");
        }
        $handle = fopen($this->getFilepath(), 'r');
        if ($handle) {
            while (($buffer = fgets($handle, 4096)) !== false) {
                $buffer = trim($buffer);
                if (empty($buffer)) {
                    continue;
                }
                yield $buffer;
            }
            fclose($handle);
        } else {
            throw new \Exception("文件打开失败:[{$this->getFilepath()}]");
        }

    }


}