$(function () {
	var mmContainer = document.getElementById('exmainmenu');
	var mmHeadId 	= document.getElementById('mw-head');
		if (mmContainer && mmHeadId) {
		mmHeadId.insertBefore(mmContainer, mmHeadId.firstChild);
		mmContainer.style.display = 'block';
	}
	const mainmenu = document.querySelector('.nav-mainmenu');
	if (mainmenu) {
		mainmenu.style.display = 'block';
		let height = parseInt(getComputedStyle(mainmenu).height);  // -1
		const mwbody = document.getElementById('content');
		if (mwbody) {
			let oldMarginTop = parseInt(getComputedStyle(mainmenu).marginTop);
			let newMarginTop = oldMarginTop - height - 1;
			mwbody.style.marginTop = newMarginTop + 'px';
		}
	}
	// Check for click events on the navbar burger icon
	$(".navbar-burger").click(function() {
	// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
		$(".navbar-burger").toggleClass("is-active");
		$(".navbar-menu").toggleClass("is-active");
		})
}());