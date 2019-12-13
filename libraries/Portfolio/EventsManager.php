<?php
namespace Brilliant\Portfolio;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class EventsManager {
	public static function addToLog($msg){
		echo "$msg\n";
	}

	public static function postUpdate(Event $event){
		self::addToLog("postUpdate called!");
		$composer = $event->getComposer();
		// do stuff
	}

	public static function postInstall(Event $event){
		self::addToLog("postInstall called!");
		$composer = $event->getComposer();
		// do stuff
	}

}
