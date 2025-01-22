<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Telephone Directory Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="td.css" rel="stylesheet" type="text/css">

<link rel="shortcut icon" type=image/x-icon href="images/favicon.ico">



<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

<script language="JavaScript">
/*
	function doClock() {

		window.setTimeout( "doClock()", 1000 );

		today = new Date();

		self.status = today.toString();

    }
doClock();*/
</script>


<style type="text/css">
<!--
.style1 {color: #00FFFF}
-->
</style>
<div id="Layer1" style="position:absolute; left:501px; top:106px; width:450px; height:24px; z-index:3"><strong><font size="2" color ="red" face="Bookman Old Style">Date 
  : 
  <?Php  print date('l, d F  Y');?>,
 
  <?php
  /* 
// Servar Date tag
date_default_timezone_set('Asia/Calcutta');

       $thetimeis = getdate(time()); 
            $thehour = $thetimeis['hours']; 
            $theminute = $thetimeis['minutes']; 
            $thesecond = $thetimeis['seconds']; 
        if($thehour > 12){ 
            $thehour = $thehour - 12; 
            $dn = "PM"; 
        }else{ 
            $dn = "AM"; 
        } 
        
echo "$thehour:$theminute:$thesecond $dn"; */
?>  


  <span id="clock"> 
<SCRIPT LANGUAGE="JavaScript"> 
 
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

</SCRIPT> 
</span> 
  </font></strong></div>


</head>

<body bgcolor="#99FF99" class="bodyback">




<div id="Layer2" style="position:absolute; left:256px; top:411px; width:410px; height:111px; z-index:2; overflow: visible;" class="layerbor">
  <table width="96%" height="97" border="0">
    <form name="form3" method="post" action="auth.php">
      <tr>
        <td width="198" height="30" class="txt"><font color="#000033"> ENTER USERNAME</font></td>
        <td width="206"> <input name="un" type="text" class="txtbox" id="un" title="Enter Username" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" onFocus="if(this.value=='Enter Username') this.value='';" onBlur="if(this.value=='') this.value='Enter Username';" value="Enter Username" msgInfo="* required,,Please enter valid email id">

        </td>
      </tr>
      <tr>
        <td width="158" height="28" class="txt"><font color="#000033"> ENTER PASSWORD</font></td>
        <td> <input name="pwd" type="password" class="txtbox" id="pwd" title="Enter Password" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" onFocus="if(this.value=='Enter') this.value='';" onBlur="if(this.value=='') this.value='Enter';" value="Enter">
        </td>
      </tr>
      <tr>
        <td width="198" height="28">&nbsp;</td>
        <td> <input name="login" type="submit" id="login" value="Login" class="printbutton" title="Click here to Login" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'">
        </td>
      </tr>
    </form>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:258px; top:178px; width:392px; height:224px; z-index:2"><img src="images/raj1.jpg" alt="Rajniwas main Enterence" width="392" height="221" border="0"></div>

 
<p class="bodyback"><font color="#FF0000" size="2"></font> 
  
   <img src="images/tel.jpg" alt="Telephone Directory">
  </td>
  
   <strong></strong></p>
<p> <strong></strong></p>
  
    <marquee behavior="alternate" bgcolor="#000033" title="Telephone Directory"
    onmouseover='this.stop()'  onMouseOut='this.start()'>
      <font color="#FF00FF"> Welcome to Telephone Directory </font></marquee>
<table width="201" border="0" cellspacing="0" cellpadding="0">
<FONT SIZE='3' FACE=bookman old style color="#FFFF33">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="Rajan/Home.htm" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Internet Display  Page</a></td>
  </tr>
  <tr>
    <td><a href="search4mhome.php" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Search Phone Numbers</a></td>
  </tr>
  <tr>
    <td><a href="chess/" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Play Chess</a></td>
  </tr>
  <tr>
    <td><a href="games/mario.html" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Play Super Mario</a></td>
  </tr>
  <tr>
    <td><a href="games/pg.html" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Palisade Guardian</a></td>
  </tr>
  <tr>
    <td><a href="games/heli.html" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Play Heli Strike </a></td>
  </tr>
  <tr>
    <td><a href="games/bs.html" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Play Bubble Shooter</a></td>
  </tr>
  <tr>
    <td><a href="games/ab.html" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Play Aqua Bubble</a></td>
  </tr>
 
  <tr>
    <td><a href="../it/index.php" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Election Site</a></td>
  </tr>
  </font>
<tr>
    <td><a href="../tour/tour/" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Tour Site</a></td>
  </tr>
<FONT SIZE='3' FACE=bookman old style color="#FFFF33">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
 </font>
  <tr>
    <td>&nbsp; <marquee behavior="alternate" width="150" title="Developed by K Rajan, CA" onMouseOver='this.stop()'  onMouseOut='this.start()'>
    <font color="#FF00FF">
	<script language="JavaScript1.2">

                      var message="Dev. by Rajan, CA"						  					  
					  var neonbasecolor="yellow"
                      var neontextcolor="red"
                      var flashspeed=100  //in milliseconds

                      var n=0
                      if (document.all||document.getElementById){
                          document.write('')
						  
                          for (m=0;m<message.length;m++)
							{						  
                              document.write('<span id="neonlight'+m+'" style="font-family:ariel;text-decoration:none;font-size:12px;">'+message.charAt(m)+'</span>')	
							if(m >= 36)
								{
							document.write('<br>')
						 for (m=37;m<message.length;m++)													  
                              document.write('<span id="neonlight'+m+'" style="font-family:ariel;text-decoration:none;font-size:12px;">'+message.charAt(m)+'</span>')	
							}  
                          document.write('')
                      }
					  }
                      else
                         {
						  document.write(message)
					     
						  }

                      function crossref(number){
                          var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
                          return crossobj
                      }

                      function neon(){

                          //Change all letters to base color
                          if (n==0){
                              for (m=0;m<message.length;m++)

                              crossref(m).style.color=neonbasecolor
                      }
                      //cycle through and change individual letters to neon color
                      crossref(n).style.color=neontextcolor

                      if (n<message.length-1)
                          n++
                      else{
                          n=0
                          clearInterval(flashing)
                          setTimeout("beginneon()",1500)
                          return
                      }
                  }

                  function beginneon(){
                      if (document.all||document.getElementById)
                          flashing=setInterval("neon()",flashspeed)
                  }
                  beginneon()


														</script>
	</font><span class="style1"></span>	
    </marquee>    </td>
  </tr>
</table>


</body>
</html>
