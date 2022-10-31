<?php

namespace App\Service;
use Psr\Cache\CacheItemInterface;


class UploadHelper
{
    const IMAGE_PATH = "uploads/images/";
    const SAVE_PATH = "/public/uploads/images/";
    const DEFAULT_IMAGE = "default.png";
    private string $projectDir;
    public function __construct(string $projectDir)
    {
        $this->projectDir = $projectDir;
    }

    public function uploadImages($files): array
    {
        $fileAr = [];
        foreach ($files as $file){
            $destination = $this->projectDir . self::SAVE_PATH;
            $originalFileName = $file->getClientOriginalName();
            $baseFileName = pathinfo($originalFileName, flags: PATHINFO_FILENAME);
            $fileName= $baseFileName . "-" . uniqid() . "." . $file->guessExtension();
            $file->move ($destination, $fileName);
            $fileAr[] = $fileName;
        }
        return $fileAr;
    }
}