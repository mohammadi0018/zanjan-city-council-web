function openNewWindow(url, w, h)
{
	// open a blank window
	w = (w==null) ? 400 : w;
	h = (h==null) ? 450 : h;
	var aWindow = makePopup(url, '_blank', w, h, 'yes', 'yes');
};

function makePopup(pageURL, pageName, w, h, pageScroll, pageCenter)
{
	if(pageCenter == 'no')	{
		LeftPosition = 10;
		TopPosition = 10;
	} else {
		LeftPosition = (screen.width) ? (screen.width-w) / 2 : 0;
		TopPosition = (screen.height) ? (screen.height-h) / 2 : 0;
	};
	w = parseInt(w) + 18;
	h = parseInt(h) + 18;

	var pageConfig = 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=' + pageScroll + ', resizable=yes, width=' + w + ', height=' + h + ', left=' + LeftPosition + ', top=' + TopPosition;
	var popup = window.open(pageURL, pageName, pageConfig);
	popup.focus();
	return popup;
};