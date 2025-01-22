<?Php session_start (); ?>

<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>User Page</title>



</head>

<frameset rows="145,*" border="0">
  <frame name="banner" scrolling="no" noresize target="contents" src="top.php">
  <frameset cols="190,*">
    <frame name="contents" target="main" src="userleft.php">
    <frame name="main" src="search.php">
  </frameset>
  <noframes>
  <body>
  <?Php print $strname ?>
<form name="frame" method="get">
  <p>This page uses frames, but your browser doesn't support them.</p>
</form>
  </body>
  </noframes>
</frameset>

</html>