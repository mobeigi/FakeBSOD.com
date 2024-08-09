<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="home">
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
</script>
</head>
<body>
<b>
<h1>Welcome to FakeBSOD.com</h1>
<span class="neg">About</span>
<p class="center">
Prank your friends, family and co-workers into believing their workstation has crashed!
<br/>Simply follow the instructions below!<br />
<center>
<style type="text/css">
	dl.image_map {display:block; width:700px; height:250px; background:url(/images/instructions.png); position:relative; margin:2px auto 2px auto;}
	a.LINK0 {left:235px; top:7px; background:transparent;}
	a.LINK0 {display:block; width:220px; height:0; padding-top:232px; overflow:hidden; position:absolute;}
	a.LINK0:hover  {background:transparent; border:1px dashed white; color:black;}
	a.BLINK {left:698px; top:248px; background:transparent;}
	a.BLINK {display:block; width:202px; height:17px; overflow:hidden; position:absolute; font-size:0px;}
	a.BLINK:hover  {background:black; border:1px dashed white; color:white; font-size:9px;}
</style>
<dl class="image_map">
	<dd><a class="LINK0" title="Generic BSOD Page" href="<?php
    $OSList = array(
    // Match user agent string with operating systems
    'Windows 3.11' => 'Win16',
    'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)',
    'Windows 98' => '(Windows 98)|(Win98)',
    'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
    'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
    'Windows Server 2003' => '(Windows NT 5.2)',
    'Windows Vista' => '(Windows NT 6.0)',
    'Windows 7' => '(Windows NT 7.0)',
    'Windows 8' => '(Windows NT 8.0)',
    'Windows 10' => '(Windows NT 10.0)',
    'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
    'Windows ME' => 'Windows ME',
    'Open BSD' => 'OpenBSD',
    'Sun OS' => 'SunOS',
    'Linux' => '(Linux)|(X11)',
    'Mac OS' => '(Mac_PowerPC)|(Macintosh)',
    'QNX' => 'QNX',
    'BeOS' => 'BeOS',
    'OS/2' => 'OS/2',
    'Search Bot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)',
    'Unknown' => ''
    );
    
    // Loop through the array of user agents and matching operating systems
    foreach ($OSList as $CurrOS => $match) {
        // Find a match
        if (preg_match('/' . $match . '/', $_SERVER['HTTP_USER_AGENT'])) {
            // We found the correct match
            break;
        }
    }
    
    global $OS, $page_name;
    $OS = $CurrOS;
    
    if (in_array($CurrOS, array('Windows 10', 'Windows 8'))) {
      # Show windows 8/10 version
      $page_name = "Windows 8/10";
      echo "/windows-8-and-10";
    } else {
      $page_name = "Generic";
      echo "/generic";
    }
    
    
    
?>"></a></dd>
</dl>
</center>
<center style="font-size:10px;">Autodetected OS: <?php echo $OS; ?>, using: <strong><?php echo $page_name; ?></strong> page</center>
<br />
<center><a href="/generic">Generic BSOD (XP, Win7)</a> | <a href="/windows-8-and-10">Windows 8/10 BSOD</a></center>
<br />
<br />
<?php include 'footer.php'; ?>
</p>
</b>
</body>
</html>