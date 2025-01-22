<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ADD TELEPHONE NUMBERS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="td.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#99FF99" class="bodyback" alink="#0000FF" vlink="#FF0000">



<div id="Layer2" style="position:absolute; left:24px; top:43px; width:628px; height:40px; z-index:2" class="layerbor">
  <form name="form1" method="post" action="SerchResult.php">
    <table width="614" height="73" border="0">
      <tr> 
        <td width="64">Select : </td>
        <td width="205"><select name="sersel" id="search1" class="txtbox" onmouseover="this.style.borderColor='#ff0000'" onmouseout="this.style.borderColor='blue'" title="Select Delete by">
            <option <?php if ($_POST['sersel'] == 'all') { ?>selected="true" <?php }; ?>value="all">All</option>
            <option <?php if ($_POST['sersel'] == 'name') { ?>selected="true" <?php }; ?>value="name" selected="selected">By Name</option>
            <option <?php if ($_POST['sersel'] == 'desig') { ?>selected="true" <?php }; ?>value="desig">By Designation</option>
            <option <?php if ($_POST['sersel'] == 'add') { ?>selected="true" <?php }; ?>value="add">By Department</option>
        </select></td>
        <td width="331"><input type="text" name="stxt" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" title="Enter Search Cretaria" value="<?Php print $stxt;?>"> 
        </td>
      </tr>
      <tr> 
        <td height="28">&nbsp;</td>
        <td><input type="Submit" name="submit" value="SEARCH" class="printbutton" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'"> 
          <strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red" size="4" face="Bookman Old Style"> OR </font></strong></td>
        <td>Try another option <a href="update.php" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';">click here </a></td>
      </tr>
    </table>
  </form>
</div>
<div id="Layer2" style="position:absolute; left:77px; top:10px; width:289px; height:26px; z-index:2">
<font color="#000066" size="4" face="Bookman Old Style"> <u>UPDATE CONTACTS </u></font></div>

</body>
</html>
