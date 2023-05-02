<?php
/* LOGO */
  $mmHeaderIcon = "$IP/w/resources/url_to_logo.svg";
  $mmHeaderIconLink = "link_to_logo";
/* START MENU 1 */
  $mmH1MenuItem = "FirstMenu";								// if empty the menu is able, but no caption
  $mmH1MenuItemLink = "";									// link (empty: no link)
	$mm_h1i1 = "Item1_in_FirstMenu";	$mm_h1i1_link = "";
	$mm_h1i2 = "Item2_in_FirstMenu";	$mm_h1i2_link = "";
	$mm_h1i3 = "-";	$mm_h1i3_link = "";						// devider line here
	$mm_h1i4 = "4";	$mm_h1i4_link = "";
	$mm_h1i5 = "";	$mm_h1i5_link = "";						// if empty no one
	$mm_h1i6 = "";	$mm_h1i6_link = "";
	$mm_h1i7 = "";	$mm_h1i7_link = "";
	$mm_h1i8 = "";	$mm_h1i8_link = "";
	// max to 12 items there
	$mm_h1items_active = [1,2,5,9];					// set color `is-active` class
	$mmHasText			= "Short_Text";				// tag inside the first menu
	 $mmHasHiddenInfoNA	= "You`re not logged in";	// short text for non-users
	 $mmHasHiddenInfoAU	= "Hello user!";			// short text for user
	 $mmHasTextInfo		= "Description";			// description with link
	 $mmHasTextLink		= "";						// description & link for the tag
/* START MENU 2 */
  $mmH2MenuItemMega = "SecondMenu";			// Menu caption (if empty no one)
  $mmH2MenuItemMegaTag = "Tag";				// tag in menu
  $mmH2MenuItemMegaText = "";				// text in the bottom
  $mmH2MenuItemMegaButton = "";				// button in the bottom
  $mmH2MenuItemMegaButtonLink = "";			// link for the button
    $mm_h2Column1 = "Column 1";				// Colunm caption (if empty no one) (max: 10 columns)
	  $mm_h2Column1i1 = "Item 1 in Column 1";	$mm_h2Column1i1_link = "#";	$mm_h2Column1i1_sup = "#";
	  $mm_h2Column1i2 = "Item 2";		$mm_h2Column1i2_link = "";	$mm_h2Column1i2_sup = "inside the Column 2";
	  $mm_h2Column1i3 = "Item 3";		$mm_h2Column1i3_link = "";	$mm_h2Column1i3_sup = "";
	  $mm_h2Column1i4 = "-";			$mm_h2Column1i4_link = "";	$mm_h2Column1i4_sup = "";	// devider is here
	  $mm_h2Column1i5 = "Item 5";		$mm_h2Column1i5_link = "";	$mm_h2Column1i5_sup = "";
	  $mm_h2Column1i6 = "Item 6";		$mm_h2Column1i6_link = "";	$mm_h2Column1i6_sup = "";
	  $mm_h2Column1i7 = "";				$mm_h2Column1i7_link = "";	$mm_h2Column1i7_sup = "";	// no item
	  //...add more if needed (max: 12 items)
    $mm_h2Column2 = "Column 2";				// will be disabled if empty
	  $mm_h2Column2i1 = "Item 1";	$mm_h2Column2i1_link = "";	$mm_h2Column2i1_sup = "";
	  $mm_h2Column2i2 = "-";		$mm_h2Column2i2_link = "";	$mm_h2Column2i2_sup = "";
	  $mm_h2Column2i3 = "Item 3";	$mm_h2Column2i3_link = "";	$mm_h2Column2i3_sup = "";
	  $mm_h2Column2i4 = "Item 4";	$mm_h2Column2i4_link = "";	$mm_h2Column2i4_sup = "in Column 2";
	  $mm_h2Column2i5 = "";			$mm_h2Column2i5_link = "";	$mm_h2Column2i5_sup = "";
	  $mm_h2Column2i6 = "";			$mm_h2Column2i6_link = "";	$mm_h2Column2i6_sup = "";
	  $mm_h2Column2i7 = "";			$mm_h2Column2i7_link = "";	$mm_h2Column2i7_sup = "";
	  //...add more
    $mm_h2Column3 = "Column 3";
	  $mm_h2Column3i1 = "Item 1";	$mm_h2Column3i1_link = "";	$mm_h2Column3i1_sup = "";
	  $mm_h2Column3i2 = "Item 2";	$mm_h2Column3i2_link = "";	$mm_h2Column3i2_sup = "";
	  $mm_h2Column3i3 = "Item 3";	$mm_h2Column3i3_link = "";	$mm_h2Column3i3_sup = "";
	  $mm_h2Column3i4 = "Item 4";	$mm_h2Column3i4_link = "";	$mm_h2Column3i4_sup = "";
	  $mm_h2Column3i5 = "Item 5";	$mm_h2Column3i5_link = "";	$mm_h2Column3i5_sup = "";
	  $mm_h2Column3i6 = "Item 6";	$mm_h2Column3i6_link = "";	$mm_h2Column3i6_sup = "";
	  $mm_h2Column3i7 = "Item 7";	$mm_h2Column3i7_link = "";	$mm_h2Column3i7_sup = "";
	  //...add more
	$mm_h2Column4 = "Column 4";
	  $mm_h2Column4i1 = "Item_1";	$mm_h2Column4i1_link = "link1";	$mm_h2Column4i1_sup = "s";
	  $mm_h2Column4i2 = "Item_2";	$mm_h2Column4i2_link = "link1";	$mm_h2Column4i2_sup = "s";
	  //...h2..5
	  //...h2..6
	// max to 10 columns and 12 items at each
/* START MENU 3 */
  $mmH3MenuItemExt = "Links here";
  $mm_h3items_new  = [1,2,3,4,5,6,7,8,9,10]; // open in a new window
	$mm_h3MenuItem1 = "salebot.wiki";		$mm_h3MenuItem1_sub = "Visit to Salebot.Wiki";
	$mm_h3MenuItem1_icon = "🧾";			$mm_h3MenuItem1_link = "https://salebot.wiki/";
	
	$mm_h3MenuItem2 = "-";					$mm_h3MenuItem2_sub = "";	// devider here
	$mm_h3MenuItem2_icon = "";				$mm_h3MenuItem2_link = "";
	
	$mm_h3MenuItem3 = "bulma.io";			$mm_h3MenuItem3_sub = "documentation";
	$mm_h3MenuItem3_icon = "#";				$mm_h3MenuItem3_link = "https://bulma.io/documentation/";
	
	$mm_h3MenuItem4 = "";					$mm_h3MenuItem4_sub = "";
	$mm_h3MenuItem4_icon = "";				$mm_h3MenuItem4_link = "";
/* START BUTTONS */
  $mmHButton1 = "Bulma";		$mmHButton1_emoji = "📚";	$mmHButton1_link = "https://bulma.io/";
  $mmHButton2 = "Docs";			$mmHButton2_emoji = "📝";	$mmHButton2_link = "https://bulma.io/documentation/";
  $mmHButton3 = "Donate";		$mmHButton3_emoji = "❤️";	$mmHButton3_link = "https://salebot.wiki/";
  //...add more if needed (max: 10 buttons)
?>
