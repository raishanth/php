<?Php session_start (); ?>

<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>TOP</title>
<base target="contents">
<link href="td.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#99FF99" class="bodyback">
<table width="100%" border="0">
  <tr> 
    <td colspan="2"><img src="images/tel.jpg" alt="Telephone Directory"> </td>
  </tr>
  <tr> 
    <td width="66%"> 
      <?Php 
		$_SESSION['name']=$name;
		$strname=$_SESSION['name'];
		
		
		$strdesig=$_SESSION['desig'];
		$strinit=$_SESSION['init'];

		print " <font size=3 color ='red' face='Bookman Old Style'> Welcome, ".$strinit;
		print $strname. ", "; print $strdesig;

		?>

    </td>
    <td width="34%"><div id="Layer1" style="position:absolute; left:501px; top:106px; width:449px; height:24px; z-index:3"><strong><font size="2" color ="red" face="Bookman Old Style">Date 
  : 
  <?Php  print date('l, d F  Y');?>,
  
  <span id="clock"> 
<SCRIPT LANGUAGE="JavaScript"> 
<!-- Begin 
    function getthedate(){ 
        var mydate=new Date(); 
        var hours=mydate.getHours(); 
        var minutes=mydate.getMinutes(); 
        var seconds=mydate.getSeconds(); 
        var dn="AM"; 
        if (hours>=12) dn="PM"; 
        if (hours>12) hours=hours-12;        
        if (hours==0) hours=12; 
        if (minutes<=9) minutes="0"+minutes; 
        if (seconds<=9)    seconds="0"+seconds; 
        
        var cdate=+hours+":"+minutes+":"+seconds+" "+dn+"<BR>"; 
        if (document.all) 
            document.all.clock.innerHTML=cdate; 
        else if (document.getElementById) 
            document.getElementById("clock").innerHTML=cdate; 
        else 
            document.write(cdate); 
    } 
    if (!document.all&&!document.getElementById) getthedate(); 

    function goforit(){ 
        if (document.all||document.getElementById) setInterval("getthedate()",1000); 
    } 
    window.onload=goforit; 
// End --> 
</SCRIPT> 
</span>
  
  </font></strong></div></td>
  </tr>
  <tr> 
    <td colspan="2"> <p>
        <marquee behavior="alternate" bgcolor="#000033" title="Welcome to Telephone Directory" >
        <font color="#FF00FF"> Welcome to Telephone Directory </font>
        </marquee>
      </p></td>
  </tr>
</table>
</body>

</html>
