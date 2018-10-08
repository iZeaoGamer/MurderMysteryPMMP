<?php
namespace jasonwynn10\murder\tasks;

use pocketmine\scheduler\Task;

use jasonwynn10\murder\Main;
use jasonwynn10\murder\MurderSession;

class CountdownTask extends Task {
    /** @var MurderSession $session */
    private $session;
    public function __construct(Main $owner, MurderSession $session) {
        $this->session = $session;
    }
    public function onRun(int $currentTick) : void{
        // TODO: Implement onRun() method.
    }
}
