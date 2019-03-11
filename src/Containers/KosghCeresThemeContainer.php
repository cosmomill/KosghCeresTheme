<?php
 
namespace KosghCeresTheme\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class KosghCeresThemeContainer {
	public function call(Twig $twig):string {
		return $twig->render('KosghCeresTheme::content.Theme');
	}
}
