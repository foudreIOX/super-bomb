<?php

namespace foudreIOX;

use foudreIOX\Events\Bomb;
use pocketmine\plugin\PluginBase;

class super extends PluginBase
{
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents(new Bomb(), $this);
    }
}