<?php
class MainMenuHooks {
	public static function onBeforeHtmlAddedToOutput( $resourceLoader ) {
	}
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		global $wgExtensionAssetsPath, $wgRequest;
		if ($wgRequest->getVal('action') != 'edit') {
			include "ext.menu.config.php";
			echo '<div class="nav-mainmenu" style="display: table-column;">';
			include 'MainMenu.html.php';
			echo '</div>';
			$out->addModules( array( 'ext.MainMenu' ) );
		}
	}
}
