<?php

namespace UnknownOre\Pen15;

use pocketmine\plugin\PluginBase;
use pocketmine\inventory\ShapedRecipe;
use pocketmine\item\Item;

Class Pen15 extends PluginBase{
    
    /** @var ShapedRecipe */
    public $recipe;
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        $this->RegisterPenRecipe();
    }
    
    public function RegisterPenRecipe(): void{
        $this->recipe = new ShapedRecipe(
        [" a ", " x "],
        [
        "a" => Item::get(288,0,1),
        "x" => Item::get(351,0,1)
        ],
        [Item::get(329,0,1)->setCustomName('Pen')]);
        $this->getServer()->getCraftingManager()->registerRecipe($this->recipe);
    }
}
