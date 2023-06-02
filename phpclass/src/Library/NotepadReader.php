<?php

namespace Phpclass\Library;

class NotepadReader {

    public $file;
    public $content;

    function __construct() {

       $this->file = null;
       $this->content = null;
    }

    public function reader($txtfile) 
    {
        $this->file = fopen($txtfile, 'r');
        
        if ($this->file) {

            $this->content = fread($this->file, filesize($txtfile));
            fclose($this->file);
            echo $this->content;

        } else {

            echo 'Unable to open the file.';
        }
    }
}
