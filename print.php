<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ADD TELEPHONE NUMBERS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="td.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#99FF99" class="bodyback">

<form name="form1" method="post" action="printveri.php">
  <div id="Layer2" style="position:absolute; left:11px; top:51px; width:537px; height:83px; z-index:2" class="layerbor">
    <table height="77" border="0">
      <tr> 
        <td width="100"> <font color="#000033" face="Bookman Old Style"><strong>Select 
          :&nbsp;</td>
        <td width="209"><select name="sersel" class="txtbox" id="search1" onMouseOver="this.style.borderColor='#ff0000'" onmouseout="this.style.borderColor='blue'">
            <option <?php if ($_POST['sersel'] == 'all') { ?>selected="true" <?php }; ?>value="all">All</option>
            <option <?php if ($_POST['sersel'] == 'name') { ?>selected="true" <?php }; ?>value="name" selected="selected">By Name</option>
            <option <?php if ($_POST['sersel'] == 'desig') { ?>selected="true" <?php }; ?>value="desig">By Designation</option>
            <option <?php if ($_POST['sersel'] == 'add') { ?>selected="true" <?php }; ?>value="add">By Department</option>
          </select></td>
        <td width="210"><input type="text" name="stxt" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" value="<?Php print $stxt;?>"> </td>
      </tr>
      <tr> 
        <td height="28">&nbsp;</td>
        <td><input type="Submit" name="submit" value="SUBMIT" class="printbutton" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'"></td>
        <td>&nbsp;</td>
      </tr>
    </table>
</div>
</form>
<div id="Layer2" style="position:absolute; left:59px; top:9px; width:399px; height:24px; z-index:2"><font color="#000066" size="4" face="Bookman Old Style"><u> PRINT 
  TELEPHONE NUMBERS </u> </font> </div>
</body>
</html>
