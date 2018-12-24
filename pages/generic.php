<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="generic">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FakeBSOD.com - Generic Blue Screen of Death</title>
    <link rel="stylesheet" type="text/css" media="all" href="/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="canonical" href="http://fakebsod.com/generic/" />
    <meta name="description" content="A generic fake Blue Screen of Death page. See if your friends will fall for this prank!" />
    <meta name="keywords" content="bsod, fakebsod, blue screen of death, simulator, online, prank, trick" />
    <?php
		$path = $_SERVER['DOCUMENT_ROOT'];
		include_once($path . '/inserts.php');
	?>
    <script type="text/javascript">
		document.addEventListener('contextmenu', event => event.preventDefault()); //disable right-click!
		
		function blinkFont() {
			document.getElementById("blink").style.color = "#00A"
			setTimeout("setblinkFont()", 800)
		}

		function setblinkFont() {
			document.getElementById("blink").style.color = ""
			setTimeout("blinkFont()", 800)
		}
    </script>
</head>
<body onload="blinkFont()">
<strong>
<span class="neg">Windows</span>
<p>
A problem has been detected and windows has been shut down to prevent damage to your computer.
</p>
<p>
*** STOP: 0xFFFFFFFF (0xFFFFFFFF, 0xUUUUUUUU, 0xUUUUUUUU, 0xUUUUUUUU).<br /><br />

* Press any key to terminate the current application.<br />
* Press CTRL+ALT+DELETE again to restart your computer. You will lose any unsaved information in all applications.<br />

</p>
<center>Press any key to continue <span id="blink">_</span></center>
</strong>
</body>

</html>
