<?php
/** MainMenu extension
 *
 * @addtogroup Extensions
 * @author salebot.wiki
 * @license MIT
 */

/**
 * Exit if called outside of MediaWiki
 */
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

use MediaWiki\MediaWikiServices;
use MediaWiki\Session\SessionManager;

class MainMenuHooks {
	public static function MainMenuOnPage( &$parser ) {
	#ParserFirstCallInit
		# Parses <pagemenu/> tag on the page 
		$parser->setHook( 'pagemenu', __CLASS__ . '::parserHook' );
		return true;
	}

	# Reserved to the future!
	# Enable in LocalSettings.php:
	# $wgMainMenu['pagemenu'] = true;
	public static function parserHook( $parser ) {
	#Parser
		#Looks at the '<pagemenu/>' tag on the article
		global $wgMainMenu, $isAuthUser;
		$output .= self::ConsoleLog("Page menu on");
		if ( $wgMainMenu['pagemenu'] ) {
			$output .= self::ConsoleLog("Page menu activate");
		} else {$output .= self::ConsoleLog("Page tag not found");}
		return $output;
	}

	# Reserved to the future!
	# Enable in LocalSettings.php:
	# $wgMainMenu['sidebar'] = true;
	public static function AddInSidebar( $skin, &$bar) {
	#SkinBuildSidebar
		global $wgOut, $wgMainMenu, $isAuthUser;
		if ( $wgMainMenu['sidebar'] ) {
			$bar[ 'mainmenu' ] =  array(
					array( 	'text'   => 'BD MainMenu' ,
							'id'     => 'main_menu_element',
							'active' => '' ),
			);
		}
		return true;
	}

	public static function InjectInSidebar( &$data, $skin ) {
	#SkinAfterContent
		global $wgOut, $isAuthUser;
		$data .= self::ConsoleLog("MainMenu.config.php Loading");
		require_once __DIR__ . '\..\MainMenu.config.php';
		$data .= self::ConsoleLog("MainMenu.config.php OK");
		if ( $skin->getSkinName() == 'vector' ) {
			$wgOut->addModuleStyles( 'ext.MainMenu' );
			require_once 'MainMenu.html.php';
			$data .= '<div id="exmainmenu" style="display: none;">';
			$data .= self::ConsoleLog("MainMenu'll be added");
			$data .= $menuHTML . '</div>';
			$wgOut->addModules( array( 'ext.MainMenu' ) );
			} else {
				$data .= self::ConsoleLog("Vector skin not found");
		}
		return true;
	}

	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
	#MainMenuConfig::init()
		global $wgExtensionAssetsPath, $wgRequest, $isAuthUser;
		$out->addHTML(self::ConsoleLog("Check user status"));
		$session = SessionManager::getGlobalSession();
		$user 	 = $session->getUser();
		$isAuthUser = $user->isRegistered();
	}

	# Enable in LocalSettings.php:
	# $wgMainMenu['log'] = true;
	private static function ConsoleLog ($message) {
		global $wgMainMenu;
		$cmess = $wgMainMenu['log'] ? "<script>console.log('" . addslashes($message) . "');</script>":"";
		return $cmess;
	}
}
