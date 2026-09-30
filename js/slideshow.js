//---------------------------------------------------------------------------------------------------------
// Configuration
//---------------------------------------------------------------------------------------------------------

var slsAutoStart = true;                    // start animation (true = yes, false = no)
var slsPauseTime = 5;                       // change pages every .. seconds
var slsMode = "slide";                      // mode can be "slide" or "fade"
var slsViewModeIcons = true;                // view mode icons (true = yes, false = no)
var slsFadeSpeed = 10;                      // fading speed (just for fade mode)

var slsWidth = 553;                         // content width (pixels)
var slsHeight = 290;                        // content height (pixels)
var slsColor = "#ffffff";                   // content background color
var slsOverflow = "hidden";                 // content scrollbars: "auto" or "hidden"
                                            // ("auto" may cause flickering with Gecko browsers)

var slsBorderWidth = 6;                     // border width (pixels)
var slsBorderStyle = "none";               // border style (CSS-spec, e.g. "solid", "outset", "inset", etc.)
var slsBorderColor = "#ffffff";             // border color

var slsBarHeight = 10;                      // iconbar height (pixels)
var slsBarSpace = 0;                        // space between iconbar and slideshow (pixels)
var slsBarPosition = "bottom";              // iconbar position ("top" or "bottom")

var slsImgPrev = "image/previous.gif";            // previous button: path to image
var slsImgPrevWidth = 13;                   // previous button: image width (pixels)
var slsImgNext = "image/next.gif";                // next button: path to image
var slsImgNextWidth = 13;                   // next button: image width (pixels)
var slsImgPlay = "image/play.gif";                // play button: path to image
var slsImgPlayWidth = 13;                   // play button: image width (pixels)
var slsImgStop = "image/stop.gif";                // stop button: path to image
var slsImgStopWidth = 13;                   // stop button: image width (pixels)
var slsImgSlide = "image/slide.gif";              // slide mode button: path to image
var slsImgSlideWidth = 13;                  // slide mode button: image width (pixels)
var slsImgFade = "image/fade.gif";                // fade mode button: path to image
var slsImgFadeWidth = 13;                   // fade mode button: image width (pixels)
var slsImgBlank = "image/blank.gif";              // path to blank image

var slsIndView = true;                      // view index (true = yes, false = no)
var slsIndCount = 10;                       // max. number of visible index entries
var slsIndSpace = 8;                        // space between index and iconbar
var slsIndColor = "";                       // index background color
var slsIndFont = "Arial, Helvetica";        // index font family
var slsIndFontSize = 14;                    // index font size (pixels)
var slsIndPosition = "bottom";              // index position ("top" or "bottom")

//---------------------------------------------------------------------------------------------------------
// Functions
//---------------------------------------------------------------------------------------------------------

var DOM = document.getElementById;
var OP = (window.opera || navigator.userAgent.indexOf('Opera') != -1);
var IE4 = (document.all && !OP);

var slsBord, slsCont, slsArea, slsBarArea, slsIndArea, slsIV, slsTimer, slsPrevious;
var slsIndStart = slsCurPage = 0;
var slsPages = (typeof(slsContents) != 'undefined') ? slsContents.length : 0;
var slsAnimation = false;

var slsW = slsWidth + slsBorderWidth * 2;
var slsH = slsHeight + slsBorderWidth * 2 + slsBarSpace + slsBarHeight;
if(slsIndView) slsH += slsIndSpace + slsIndFontSize;

function slsObject(id) {
  this.elem = DOM ? document.getElementById(id) : document.all[id];
  this.css = this.elem.style;
  this.width = this.elem.offsetWidth;
  this.left = this.elem.offsetLeft;
  return this;
}

function slsSetMode(type) {
  type = type.toLowerCase();

  if(type == 'slide') {
    if(document.images.slsFade) {
      document.images.slsFade.style.backgroundColor = '#666666';
    }
    if(document.images.slsSlide) {
      document.images.slsSlide.style.backgroundColor = '#FF0000';
    }
  }
  else if(type == 'fade') {
    if(document.images.slsSlide) {
      document.images.slsSlide.style.backgroundColor = '#666666';
    }
    if(document.images.slsFade) {
      document.images.slsFade.style.backgroundColor = '#FF0000';
    }
  }
  else {
    alert('Wrong type: ' + type);
    return false;
  }
  slsPrevious = null;
  slsMode = type;
  slsJump(slsCurPage);
  if(slsPauseTime && slsAutoStart) slsStartAnimation();
}

function slsPrevPage() {
  if(!slsAnimation && slsCurPage > 0) {
    slsJump(slsCurPage - 1);
  }
}

function slsNextPage() {
  if(!slsAnimation && slsCurPage < slsPages - 1) {
    slsJump(slsCurPage + 1);
  }
}

function slsJump(page) {
  if(!slsAnimation) {
    var newPage = new slsObject('slsPage' + page);

    if(page != slsCurPage) {
      slsPrevious = new slsObject('slsPage' + slsCurPage);
      slsPrevious.css.zIndex = 1;

      if(slsMode == 'fade') {
        newPage.css.left = '0px';
        slsOpacity = 0;
        slsSetOpacity(newPage);
        newPage.css.display = 'block';
        newPage.css.zIndex = 2;
        slsIV = setInterval('slsFader(' + page + ')', 1);
      }
      else {
        var offset = (page > slsCurPage) ? slsWidth : -slsWidth;
        newPage.css.left = offset + 'px';
        newPage.css.display = 'block';
        newPage.css.zIndex = 2;
        slsIV = setInterval('slsSlider(' + page + ', ' + slsCurPage + ')', 1);
      }
      slsCurPage = page;
    }
    else newPage.css.display = 'block';
  }
}

function slsCheckImg() {
  var iconbar = 0;
  var img = document.images['slsLeft'];
  if(slsCurPage <= 0) img.src = slsImgBlank;
  else img.src = iconbar = slsImgPrev;
  img = document.images['slsRight'];
  if(slsCurPage >= slsPages - 1) img.src = slsImgBlank;
  else img.src = iconbar = slsImgNext;
  if(!iconbar) slsBarArea.css.visibility = slsIndArea.css.visibility = 'hidden';
}

function slsGetIndStart() {
  var start = 0;
  if(slsCurPage % slsIndCount == 0) {
    start = slsCurPage + 1;
  }
  else if(slsCurPage % slsIndCount == slsIndCount - 1) {
    start = slsCurPage - slsIndCount + 2;
  }
  return start;
}

function slsSetIndex(start) {
  if(!slsAnimation) {
    if(start) slsIndStart = start - 1;
    var html = link = '';
    for(var i = slsIndStart; i < slsPages && i < slsIndStart + slsIndCount; i++) {
      if(i && html) html += ' &middot; ';
     // if(i == slsCurPage) html += '<b>' + (i+1) + '</b>';
      else {
        link = 'javascript:slsStopAnimation(); slsJump(' + i + ')';
        html += '<a style="visibility:hidden" href="' + link + '" style="text-decoration:none">' + (i+1) + '</a>';
      }
    }
    if(slsIndStart) {
      link = 'javascript:slsSetIndex(' + (slsIndStart - slsIndCount+1) + ')';
      html += ' &middot; <a style="visibility:hidden" href="' + link + '" style="text-decoration:none">&lt;&lt;</a> ';
    }
    if(i < slsPages) {
      link = 'javascript:slsSetIndex(' + (i+1) + ')';
      html += ' &middot; <a style="visibility:hidden" href="' + link + '" style="text-decoration:none">&gt;&gt;</a>';
    }
    slsIndArea.elem.innerHTML = html;
  }
}

function slsDoAnimation() {
  if(slsCurPage >= slsPages - 1) slsJump(0);
  else slsNextPage();
}

function slsStopAnimation() {
  if(slsAutoStart) {
    if(slsTimer) clearInterval(slsTimer);
    var img = document.images['slsPlayStop'];
    img.src = slsImgPlay;
    img.width = slsImgPlayWidth;
    img.onclick = function() { slsStartAnimation(true); this.blur(); }
    slsAutoStart = false;
  }
}

function slsStartAnimation(showNext) {
  slsStopAnimation();
  slsTimer = setInterval('slsDoAnimation()', slsPauseTime * 1000);
  var img = document.images['slsPlayStop'];
  img.src = slsImgStop;
  img.width = slsImgStopWidth;
  img.onclick = function() { slsStopAnimation(); this.blur(); }
  slsAutoStart = true;
  if(showNext) slsDoAnimation();
}

function slsInit() {
  if(DOM || IE4) {
    if(!slsPages) {

      return false;
    }
    slsBord = new slsObject('slsBorder');
    slsCont = new slsObject('slsContainer');
    slsArea = new slsObject('slsSlider');
    slsBarArea = new slsObject('slsBar');
    if(slsIndView) slsIndArea = new slsObject('slsInd');

    if(slsColor) slsCont.css.backgroundColor = slsColor;
    if(slsIndColor) slsIndArea.css.backgroundColor = slsIndColor;

    if(slsBorderWidth) slsBord.css.borderWidth = slsBorderWidth + 'px';
    if(slsBorderStyle) slsBord.css.borderStyle = slsBorderStyle;
    if(slsBorderColor) slsBord.css.borderColor = slsBorderColor;

    var bordTop = 0;
    if(slsBarPosition == 'top') bordTop += (slsBarHeight + slsBarSpace);
    if(slsIndView && slsIndPosition == 'top') bordTop += (slsIndFontSize + slsIndSpace);

    slsBord.css.top = bordTop + 'px';
    slsBord.css.width = slsWidth + 'px';
    slsBord.css.height = slsHeight + 'px';

    slsArea.width = slsWidth;
    slsArea.css.width = slsArea.width + 'px';
    slsArea.css.position = 'absolute';

    slsCont.css.width = slsWidth + 'px';
    slsCont.css.height = slsHeight + 'px';
    slsCont.css.visibility = 'visible';

    var content = '<img style="visibility:hidden" src="' + slsImgPrev + '" name="slsLeft" height="' + slsBarHeight + '"' +
                  ' width="' + slsImgPrevWidth + '" style="margin:0px 5px; cursor:pointer"' +
                  ' onClick="slsStopAnimation(); slsPrevPage(); this.blur()">' +
                  '<img style="visibility:hidden" src="' + slsImgPlay + '" name="slsPlayStop" height="' + slsBarHeight + '"' +
                  ' width="' + slsImgPlayWidth + '" style="margin:0px 5px; cursor:pointer"' +
                  ' onClick="slsStartAnimation(true); this.blur()">' +
                  '<img style="visibility:hidden" src="' + slsImgNext + '" name="slsRight" height="' + slsBarHeight + '"' +
                  ' width="' + slsImgNextWidth + '" style="margin:0px 5px; cursor:pointer"' +
                  ' onClick="slsStopAnimation(); slsNextPage(); this.blur()">';

    if(slsViewModeIcons) {
      content += '<img style="visibility:hidden" src="' + slsImgSlide + '" name="slsSlide" height="' + slsBarHeight + '"' +
                 ' width="' + slsImgSlideWidth + '" style="margin:0px 5px 0px 25px; cursor:pointer"' +
                 ' onClick="slsSetMode(\'slide\')">' +
                 '<img style="visibility:hidden" src="' + slsImgFade + '" name="slsFade" height="' + slsBarHeight + '"' +
                 ' width="' + slsImgFadeWidth + '" style="margin:0px 5px; cursor:pointer"' +
                 ' onClick="slsSetMode(\'fade\')">';
    }
    var barTop = 0;
    if(slsBarPosition != 'top') barTop += slsHeight + slsBorderWidth*2 + slsBarSpace;
    if(slsIndView && slsIndPosition == 'top') barTop += slsIndFontSize + slsIndSpace;
    slsBarArea.elem.innerHTML = content;
    slsBarArea.css.top = barTop + 'px';
    slsBarArea.css.width = slsW + 'px';
    slsBarArea.css.height = slsBarHeight + 'px';
    slsBarArea.css.textAlign = 'center';

    if(slsIndView) {
      var indTop = (slsIndPosition == 'top') ? 0 : slsHeight + slsBorderWidth*2 + slsBarSpace + slsBarHeight + slsIndSpace;
      slsIndArea.css.top = indTop + 'px';
      slsIndArea.css.height = slsIndFontSize + 'px';
      slsIndArea.css.width = slsW + 'px';
      slsIndArea.css.textAlign = 'center';
      if(slsIndFont) slsIndArea.css.fontFamily = slsIndFont;
      if(slsIndFontSize) slsIndArea.css.fontSize = slsIndFontSize + 'px';
      slsSetIndex();
    }
    var obj;

    for(var i = 0; i < slsPages; i++) {
      obj = new slsObject('slsPage' + i);
      obj.css.position = 'absolute';
      obj.css.display = 'none';
      obj.css.zIndex = 1;
    }
    setTimeout('slsCheckImg()', 100);
    slsSetMode(slsMode);
  }
  else alert("Sorry, this script doesn't work with your browser.");
}

//---------------------------------------------------------------------------------------------------------
// Page slider
//---------------------------------------------------------------------------------------------------------

function slsSlider(nextPage, prevPage) {
  var nextObj = new slsObject('slsPage' + nextPage);
  var prevObj = new slsObject('slsPage' + prevPage);

  if(prevObj && nextObj && nextObj.left != 0) {
    slsAnimation = true;
    var pixel = 0.1 * nextObj.left;
    if(pixel > 0) pixel = Math.ceil(pixel);
    else pixel = Math.floor(pixel);
    prevObj.css.left = (prevObj.left - pixel) + 'px';
    nextObj.css.left = (nextObj.left - pixel) + 'px';
  }
  else {
    slsAnimation = false;
    if(slsIV) clearInterval(slsIV);
    slsCheckImg();
    if(slsIndView) slsSetIndex(slsGetIndStart());
  }
}

//---------------------------------------------------------------------------------------------------------
// Page fader
//---------------------------------------------------------------------------------------------------------

var slsOpacity = 0;

function slsSetOpacity(obj) {
  if(obj) {
    obj.css.opacity = slsOpacity / 100;
    obj.css.MozOpacity = slsOpacity / 100;
    obj.css.KhtmlOpacity = slsOpacity / 100;
    obj.css.filter = 'alpha(opacity=' + slsOpacity + ')';
  }
}

function slsFader(page) {
  if(obj = new slsObject('slsPage' + page)) {
    slsAnimation = true;
    if(slsFadeSpeed && slsOpacity < 100) {
      slsOpacity += slsFadeSpeed;
      if(slsOpacity > 100) slsOpacity = 100;
      slsSetOpacity(obj);
    }
    else {
      slsAnimation = false;
      slsOpacity = 0;
      if(slsIV) clearInterval(slsIV);
      slsCheckImg();
      if(slsIndView) slsSetIndex(slsGetIndStart());
      if(slsPrevious && slsPrevious != obj) {
        slsPrevious.css.display = 'none';
      }
    }
  }
}

//---------------------------------------------------------------------------------------------------------
// Create slideshow
//---------------------------------------------------------------------------------------------------------

function slsBuildContainers() {
  document.write('<div id="slideShow" style="position:relative; width:' + slsW + 'px; height:' + slsH + 'px">');
  if(slsIndView) document.write('<div id="slsInd" style="position:absolute; z-index:69"></div>');
  document.write('<div id="slsBar" style="position:absolute; z-index:69"></div>');
  document.write('<div id="slsBorder" style="position:absolute">');
  document.write('<div id="slsContainer" style="position:absolute; z-index:0; overflow:hidden;');
  document.write(' clip:rect(0,' + slsWidth + ',' + slsHeight + ',0); visibility:hidden">');
  document.write('<div id="slsSlider">');

  for(var i = 0; i < slsPages; i++) {
    document.write('<div id="slsPage' + i + '" style="width:' + slsWidth + 'px;');
    document.write(' height:' + slsHeight + 'px; overflow:' + slsOverflow + '; background-color:' + slsColor + '">');
    document.write(slsContents[i] + '</div>');
  }
  document.write('</div></div></div></div>');
}

slsBuildContainers();
window.onload = slsInit;
