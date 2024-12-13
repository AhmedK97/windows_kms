<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FileDownload extends Component
{
    public $fileName;

    public $fileSize;

    public $releaseDate;

    public $version;

    public $filePath;

    public $fileId;

    public function __construct($fileName, $fileSize, $releaseDate, $version, $filePath, $fileId)
    {
        $this->fileId = $fileId;
        $this->fileName = $fileName;
        $this->fileSize = $fileSize;
        $this->releaseDate = $releaseDate;
        $this->version = $version;
        $this->filePath = $filePath;
    }

    public function download()
    {
        // Implement download logic if needed
    }

    public function render()
    {
        return view('components.file-download');
    }
}
