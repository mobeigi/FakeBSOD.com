<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FakeBSOD.com - Prank your Friends, Family and Coworkers!</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css"></style>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"> 
<meta name="description" content="Prank your friends, family and co-workers with this Fake Blue Screen of Death (BSOD) simulator and check out their reactions!" />
<meta name="keywords" content="bsod, fakebsod, blue screen of death, simulator, online, prank, trick" />
<link rel="canonical" href="http://fakebsod.com/" />
<?php include 'inserts.php'; ?>
<script type="text/javascript">
function blinkFont()
{
  document.getElementById("blink").style.color="blue"
  setTimeout("setblinkFont()",800)
}
function setblinkFont()
{
  document.getElementById("blink").style.color=""
  setTimeout("blinkFont()",800)
}
function toggleFullScreen(elem) {
    <!-- code from http://stackoverflow.com/questions/7179535/set-window-to-fullscreen-real-fullscreen-f11-functionality-by-javascript -->
    // ## The below if statement seems to work better ## if ((document.fullScreenElement && document.fullScreenElement !== null) || (document.msfullscreenElement && document.msfullscreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
        if (elem.requestFullScreen) {
            elem.requestFullScreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullScreen) {
            elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }
}
</script>
</head>
<body>
<b>
<h1>Welcome to FakeBSOD.com</h1>
<span class="neg">About</span>
<p>
Prank your friends, family and coworkers into beleiving their workstation has crashed!
<br/>Simply follow the instructions below!<br />
<center>
<style type="text/css">
	dl.image_map {display:block; width:700px; height:250px; background:url(/images/instructions.png); position:relative; margin:2px auto 2px auto;}
  a.LINK0 {left:10px; top:7px; background:transparent;}
	a.LINK0 {display:block; width:220px; height:0; padding-top:232px; overflow:hidden; position:absolute;}
	a.LINK0:hover  {background:transparent; border:1px dashed white; color:black;}
	a.LINK1 {left:235px; top:7px; background:transparent;}
	a.LINK1 {display:block; width:220px; height:0; padding-top:232px; overflow:hidden; position:absolute;}
	a.LINK1:hover  {background:transparent; border:1px dashed white; color:black;}
	a.BLINK {left:698px; top:248px; background:transparent;}
	a.BLINK {display:block; width:202px; height:17px; overflow:hidden; position:absolute; font-size:0px;}
	a.BLINK:hover  {background:black; border:1px dashed white; color:white; font-size:9px;}
</style>
<dl class="image_map">
  <dd><a class="LINK0" title="Click here to go fullscreen!" onClick="toggleFullScreen(document.body)" ></a></dd>
	<dd><a class="LINK1" title="Generic BSOD Page" href="http://www.fakebsod.com/generic/"></a></dd>
</dl>
</center>
<br /><center>Created by <a href="http://mohammadg.com">MohammadG</a>.</center>
</p>
</b>
</body>
</html>