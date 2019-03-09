<?php

namespace UnknownOre\Pen15;

use pocketmine\event\inventory\CraftItemEvent;
use pocketmine\event\Listener;

Class EventListener implements Listener{
    
    /** @var Pen15 */
    private $plugin;
    
    /**
     * EventListener constructor.
     * @param Pen15 $plugin
     */
	public function __construct(Pen15 $plugin){
		$this->plugin = $plugin;
	}
    
    /**
	 * @param CraftItemEvent $event
	 */
    public function onCraft(CraftItemEvent $event){
        $recipe = $event->getRecipe();
        if(!$recipe == $this->plugin->recipe){
        }
	//todo cancel event if he doesnt have perm
    }
}
