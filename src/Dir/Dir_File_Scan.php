<?php

namespace xltxlm\fileinfo\Dir;

use RecursiveDirectoryIterator;

/**
 * 扫描文件夹的文件.;
 */
class Dir_File_Scan extends Dir_File_Scan\Dir_File_Scan_implements
{

    /**
     * Dir_File_Scan constructor.
     */
    public function __construct(string $dir = '')
    {
        if ($dir) {
            $this->setdir($dir);
        }
    }

    /**
     * @return \SplFileInfo[];
     */
    public function __invoke()
    {
        if (!$this->dir) {
            return [];
        }
        $Directory = (new RecursiveDirectoryIterator($this->getdir()));
        $Iterator = new \RecursiveIteratorIterator($Directory);
        if ($this->depth !== null) {
            $Iterator->setMaxDepth($this->getDepth());
        }
        /** @var \SplFileInfo $item */
        foreach ($Iterator as $item) {
            if ($item->getFilename() == '..' || $item->getRealPath() == $this->getDir()) {
                continue;
            }

            if ($item->isDir()) {
                continue;
            }
            if ($this->getPreg()) {
                $match = preg_match('#' . $this->getPreg() . '#i', basename($item->getRealPath()));
                if (!$match) {
                    continue;
                }
            }
            yield $item;
        }
    }

}
