<html><head>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="tan">
<center><a href ="https://sourceforge.net/projects/pollingsystem/"><img src = "images/logo.png" style ="border-radius:100%"  height = "200" width="200" alt="site logo"></a></center><br>  
<center><b><font color = "brown" size="6">Online Polling System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?
session_start();
session_destroy();
?>
You have been successfully logged out of your control panel.<br><br><br>
Return to <a href="login.html">Login</a>
<div id="footer">
<div class="bottom_addr">&copy; 2022 Online Polling System. All Rights Reserved</div>
</div>
</div>
</body></html>