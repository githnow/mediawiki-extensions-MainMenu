<!--noindex-->
<div class="robots-noindex">
<nav class="navbar ">
  <div class="navbar-brand">
	<?php if (!empty($mmHeaderIcon)) {
    echo '<a class="navbar-item" href="' . $mmHeaderIconLink . '">
      <img src="' . $mmHeaderIcon . '" alt="Salebot Wiki" width="112" height="28">
    </a>';}
	?>
    <div class="navbar-burger burger" data-target="navMenubd-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div id="navMenubd-example" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
	  <?php
		$navlink = '<a class="navbar-link  is-active"';
		if (!empty($mmH1MenuItemLink)) {
		  echo $navlink . ' href="' . $mmH1MenuItemLink. '">';
		  } else {
		  echo $navlink . '>';
		}
		echo $mmH1MenuItem;
		echo '</a>';
	  ?>
        <div class="navbar-dropdown ">
		<?php
			for ($i = 1;$i <= 12;$i++) {
				$mmElement       = "mm_h1i" . $i;
				$mmElementLink   = "mm_h1i" . $i. "_link";
				$isActive = (
					is_array($mm_h1items_active) && in_array($i, $mm_h1items_active)
				) ? 'is-active' : '';	
				if (!empty($$mmElement)) {
					if ($$mmElement==='-') { echo '<hr class="navbar-divider">'; } else { echo '<a class="navbar-item ' . $isActive. '" href="' .
					$$mmElementLink . '">' . $$mmElement . '</a>'; }
				}
			}
		?>
          <hr class="navbar-divider">
          <div class="navbar-item">
            <div>
              <p class="is-size-6-desktop">
				<?php
					echo '<strong class="has-text-info">' . $mmHasText;
					if ($isAuthUser) { echo $mmHasHiddenInfoAU; }
					echo '</strong>';
					if (!$isAuthUser) { echo '<small>' . $mmHasHiddenInfoNA . '</small>'; }
				?>
              </p>
              <small>
				<?php 
				if (!empty($mmHasTextInfo)) {
					if (!empty($mmHasTextLink)) {
						echo '<a class="bd-view-all-versions" href="' . $mmHasTextLink . '">' . $mmHasTextInfo . '</a>';
						} else {
						echo $mmHasTextInfo;
					}
				}?>
              </small>
            </div>
          </div>
        </div>
      </div>
<?php
// Mega Menu Start -->
	  if (!empty($mmH2MenuItemMega)) {
		echo
			'<div class="navbar-item has-dropdown is-hoverable is-mega">'.
			'<div class="navbar-link flex">'.$mmH2MenuItemMega;
		if (!empty($mmH2MenuItemMegaTag)) {
		  echo '<span class="tag is-info ml-2">'.$mmH2MenuItemMegaTag.'</span>';
		}
		echo
		  '</div>'.
		  '<div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">';


  // Start Columns -->
		echo
		  '<div class="container is-fluid">'.
		  '<div class="columns">';
		for ($i = 1; $i <= 10; $i++) {
			$column = 'mm_h2Column' . $i;
			if (!empty($$column)) {
				echo
					  '<div class="column">'.
					  '<h1 class="title is-6 is-mega-menu-title">'.$$column.'</h1>';
				for ($j = 1; $j <= 12; $j++) {
					$item = $column . 'i' . $j;
					$sup  = $column . 'i' . $j . '_sup';
					$link = $column . 'i' . $j . '_link';
					if (!empty($$item)) {
						if ($$item==='-') { echo '<hr class="navbar-divider">'; } else
						{
							echo '<a class="navbar-item" href="' . $$link . '">' .
								 '<div class="navbar-content">';
							if (!empty($$sup)) {
								echo '<p><small class="has-text-info">' . $$sup .
									 '</small></p>';
							}
							echo '<p>' . $$item . '</p></div></a>';
						}
					}
				}
				echo '</div>';
			}
		}
		  echo '</div></div>';
  // End Columns ----
	echo '<hr class="navbar-divider">
          <div class="navbar-item">
            <div class="navbar-content">
              <div class="level is-mobile">
                <div class="level-left">';
	if (!empty($mmH2MenuItemMegaText)) {
		echo '<div class="level-item"><strong>' . $mmH2MenuItemMegaText . '</strong></div>';
	}
	echo '</div><div class="level-right">';
	if (!empty($mmH2MenuItemMegaButton)) {
		echo '<div class="level-item">
                    <a class="button is-small" href="' . $mmH2MenuItemMegaButtonLink . '">
                      <span class="icon is-small">
                        <i class="fa fa-file-import fa-lg" style="color:#db1b1b;"></i>
                      </span>
                      <span>' . $mmH2MenuItemMegaButton . '</span>
                    </a>
                  </div>';
	}
	echo '</div>
              </div>
            </div>
          </div>
        </div>
      </div>';
}
// Mega Menu End ----

// Dropdown menu Start ---->
if (!empty($mmH3MenuItemExt)) {
	echo '<div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link">' . $mmH3MenuItemExt . '</div>
		<div id="moreDropdown" class="navbar-dropdown ">';
	for ($i = 1;$i <= 12;$i++) {
		$h3mitem      = "mm_h3MenuItem" . $i;
		$h3mitem_sub  = "mm_h3MenuItem" . $i . "_sub";
		$h3mitem_link = "mm_h3MenuItem" . $i . "_link";
		$h3mitem_icon = "mm_h3MenuItem" . $i . "_icon";
		$inNewWindow  = (
							is_array($mm_h3items_new) && in_array($i, $mm_h3items_new)
						) ? ' target="_blank" rel="noopener noreferrer"' : '';
		if (!empty($$h3mitem)) {
			if ($$h3mitem==='-') { echo '<hr class="navbar-divider">'; } else
			{
				echo '<a class="navbar-item " href="' . $$h3mitem_link . '"'.$inNewWindow.'>
				<div class="level is-mobile">
				  <div class="level-left">
					<div class="level-item">
					  <p>
						<strong>' . $$h3mitem . '</strong><br>';
				if (!empty($$h3mitem_sub)) {
					echo '<small>' . $$h3mitem_sub . '</small>';
				}
				echo '</p>
					</div>
				  </div>
				  <div class="level-right">
					<div class="level-item">
					  <span class="icon has-text-info">
						<i class="fa fa-none">' . $$h3mitem_icon . '</i>
					  </span>
					</div>
				  </div>
				</div>
			  </a>';
			}
		}
	}
	echo '</div>
      </div>';
}
// Dropdown menu End ----

// Main Menu Button Items Start
for ($i = 1;$i <= 10;$i++) {
	$mmButton       = "mmHButton" . $i;
	$mmButton_link  = "mmHButton" . $i . "_link";
	$mmButton_emoji = "mmHButton" . $i . "_emoji";

	if (!empty($$mmButton)) {
		echo '<a class="navbar-item " href="' . $$mmButton_link . '">
        <span class="bd-emoji">' . $$mmButton_emoji . '</span> &nbsp;' . $$mmButton . '</a>';
	}
}
// Main Menu Button Items End
?>
    </div>
    <div class="navbar-end"></div>
  </div>
</nav>
</div>
<!--/noindex-->