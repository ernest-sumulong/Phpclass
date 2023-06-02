<?php
namespace Phpclass;

use Phpclass\Library\NotepadReader;

class Main {
    public function __construct() {
        $this->main();
    }

    public function main() {
        $noteReader = new NotepadReader();
        $noteReader->reader('file.txt');
    }
}

$program = new Main();
