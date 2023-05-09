<?php 

$menuHTML = '<!--noindex--><div class="robots-noindex"> <nav class="navbar ">   <div class="navbar-brand">';
if (!empty($mmHeaderIcon)) {
    $menuHTML .= '<a class="navbar-item" href="' . $mmHeaderIconLink . '"><img src="' .
	$mmHeaderIcon . '" alt="Salebot Wiki" width="112" height="28"></a>';
}
$menuHTML .= '<div class="navbar-burger burger" data-target="navMenubd-example"><span></span><span></span><span></span></div></div>'
			.'<div id="navMenubd-example" class="navbar-menu"><div class="navbar-start"><div class="navbar-item has-dropdown is-hoverable">';
$navlink = '<a class="navbar-link  is-active"';
if (!empty($mmH1MenuItemLink)) {
	$menuHTML .= $navlink . ' href="' . $mmH1MenuItemLink. '">';
	} else {
	$menuHTML .= $navlink . '>';
}
$menuHTML .= $mmH1MenuItem . '</a><div class="navbar-dropdown ">';

for ($i = 1;$i <= 12;$i++) {
	$mmElement       = "mm_h1i" . $i;
	$mmElementLink   = "mm_h1i" . $i. "_link";
	$isActive = (
		is_array($mm_h1items_active) && in_array($i, $mm_h1items_active)
	) ? 'is-active' : '';	
	if (!empty($$mmElement)) {
		$menuHTML .= ($$mmElement==='-') ? '<hr class="navbar-divider">' : '<a class="navbar-item '
				  . $isActive . '" href="' . $$mmElementLink . '">' . $$mmElement . '</a>';
	}
}
$menuHTML .= '<hr class="navbar-divider"><div class="navbar-item"><div> <p class="is-size-6-desktop">'
			. '<strong class="has-text-info">' . $mmHasText;
if ($isAuthUser) { $menuHTML .= $mmHasHiddenInfoAU; }
$menuHTML .= '</strong>';
if (!$isAuthUser) { $menuHTML .= '<small>' . $mmHasHiddenInfoNA . '</small>'; }
$menuHTML .= '</p><small>';

if (!empty($mmHasTextInfo)) {
	if (!empty($mmHasTextLink)) {
		$menuHTML .= '<a class="bd-view-all-versions" href="' . $mmHasTextLink . '">' . $mmHasTextInfo . '</a>';
		} else {
		$menuHTML .= $mmHasTextInfo;
	}
}
$menuHTML .= '</small></div></div></div></div>';


// Mega Menu Start -->
if (!empty($mmH2MenuItemMega)) {
	$menuHTML .=
	  '<div class="navbar-item has-dropdown is-hoverable is-mega">'
	  . '<div class="navbar-link flex">'.$mmH2MenuItemMega;
	if (!empty($mmH2MenuItemMegaTag)) {
	  $menuHTML .= '<span class="tag is-info ml-2">'.$mmH2MenuItemMegaTag.'</span>';
	}
	$menuHTML .=
	  '</div>'
	  . '<div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">';

// Start Columns -->
	$menuHTML .=
	  '<div class="container is-fluid">'
	  . '<div class="columns">';
	for ($i = 1; $i <= 10; $i++) {
		$column = 'mm_h2Column' . $i;
		if (!empty($$column)) {
			$menuHTML .=
				  '<div class="column">'
				  . '<h1 class="title is-6 is-mega-menu-title">'.$$column.'</h1>';
			for ($j = 1; $j <= 12; $j++) {
				$item = $column . 'i' . $j;
				$sup  = $column . 'i' . $j . '_sup';
				$link = $column . 'i' . $j . '_link';
				if (!empty($$item)) {
					if ($$item==='-') { $menuHTML .= '<hr class="navbar-divider">'; } else
					{
						$menuHTML .= '<a class="navbar-item" href="' . $$link . '">'
									. '<div class="navbar-content">';
						if (!empty($$sup)) {
							$menuHTML .= '<p><small class="has-text-info">' . $$sup
										. '</small></p>';
						}
						$menuHTML .= '<p>' . $$item . '</p></div></a>';
					}
				}
			}
			$menuHTML .= '</div>';
		}
	}
	$menuHTML .= '</div></div>';

// End Columns ----
$menuHTML .= '<hr class="navbar-divider"><div class="navbar-item"><div class="navbar-content">'
          . '<div class="level is-mobile"><div class="level-left">';
if (!empty($mmH2MenuItemMegaText)) {
    $menuHTML .= '<div class="level-item"><strong>' . $mmH2MenuItemMegaText . '</strong></div>';
}
$menuHTML .= '</div><div class="level-right">';
if (!empty($mmH2MenuItemMegaButton)) {
    $menuHTML .= '<div class="level-item"><a class="button is-small" href="'
              . $mmH2MenuItemMegaButtonLink . '"><span class="icon is-small">'
              . '<i class="fa fa-file-import fa-lg" style="color:#db1b1b;"></i></span>'
              . '<span>' . $mmH2MenuItemMegaButton . '</span>'
			  . '</a></div>';
}
$menuHTML .= '</div></div></div></div></div></div>';
}
// Mega Menu End ----

// Dropdown menu Start ---->
if (!empty($mmH3MenuItemExt)) {
    $menuHTML .= '<div class="navbar-item has-dropdown is-hoverable"><div class="navbar-link">'
              . $mmH3MenuItemExt . '</div><div id="moreDropdown" class="navbar-dropdown ">';
	for ($i = 1;$i <= 12;$i++) {
		$h3mitem      = "mm_h3MenuItem" . $i;
		$h3mitem_sub  = "mm_h3MenuItem" . $i . "_sub";
		$h3mitem_link = "mm_h3MenuItem" . $i . "_link";
		$h3mitem_icon = "mm_h3MenuItem" . $i . "_icon";
		$inNewWindow  = (
							is_array($mm_h3items_new) && in_array($i, $mm_h3items_new)
						) ? ' target="_blank" rel="noopener noreferrer"' : '';
		if (!empty($$h3mitem)) {
			if ($$h3mitem === '-') {
				$menuHTML .= '<hr class="navbar-divider">';
			} else {
				$menuHTML .= '<a class="navbar-item " href="' . $$h3mitem_link . '"' . $inNewWindow . '>'
						  . '<div class="level is-mobile"> <div class="level-left"> <div class="level-item">'
						  . '<p> <strong>' . $$h3mitem . '</strong><br>';
				if (!empty($$h3mitem_sub)) {
					$menuHTML .= '<small>' . $$h3mitem_sub . '</small>';
				}
				$menuHTML .= '</p></div></div>'
						  . '<div class="level-right"> <div class="level-item">'
						  . '<span class="icon has-text-info"> <i class="fa fa-none">'
						  . $$h3mitem_icon . '</i> </span> </div> </div> </div> </a>';
			}
		}
	}
	$menuHTML .= '</div></div>';
}
// Dropdown menu End ----

// Main Menu Button Items Start
for ($i = 1;$i <= 10;$i++) {
	$mmButton       = "mmHButton" . $i;
	$mmButton_link  = "mmHButton" . $i . "_link";
	$mmButton_emoji = "mmHButton" . $i . "_emoji";

	if (!empty($$mmButton)) {
		$menuHTML .= '<a class="navbar-item " href="' . $$mmButton_link . '">'
        		  . '<span class="bd-emoji">' . $$mmButton_emoji . '</span> &nbsp;' . $$mmButton . '</a>';
	}
}
// Main Menu Button Items End
$menuHTML .= '</div><div class="navbar-end"></div></div></nav></div><!--/noindex-->';

?>