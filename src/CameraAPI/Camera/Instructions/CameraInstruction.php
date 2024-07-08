<?php

namespace CameraAPI\Camera\Instructions;

use pocketmine\player\Player;

abstract class CameraInstruction
{
    abstract public function send(Player $player): void;
}
