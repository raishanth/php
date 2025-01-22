<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SEARCH</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="td.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#99FF99" class="bodyback">

<form name="form1" method="post" action=" searchverihometest.php">

<div id="Layer2" style="position:absolute; left:11px; top:52px; width:550px; height:81px; z-index:2" class="layerbor">
    <table width="93%" height="77" border="0">
      <tr> 
        <td width="93"> <font color="#000033" face="Bookman Old Style"><strong>Select 
          :&nbsp;</td>
        <td width="222"><select name="sersel" id="search1" class="txtbox" title="Select Search Cretaria" onMouseOver="this.style.borderColor='#ff0000'" onmouseout="this.style.borderColor='blue'">
            <option <?php if ($_POST['sersel'] == 'all') { ?>selected="true" <?php }; ?>value="all">All</option>
            <option <?php if ($_POST['sersel'] == 'name') { ?>selected="true" <?php }; ?>value="name" selected="selected">By Name</option>
            <option <?php if ($_POST['sersel'] == 'desig') { ?>selected="true" <?php }; ?>value="desig">By Designation</option>
            <option <?php if ($_POST['sersel'] == 'add') { ?>selected="true" <?php }; ?>value="add">By Address</option>
          </select></td>
        <td width="219"><input type="text" name="stxt" class="txtbox" title="Type your Request" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" value="<?Php print $stxt;?>"> 
        </td>
      </tr>
      <tr> 
        <td height="28">&nbsp;</td>
        <td><input type="Submit" name="submit" value="SUBMIT" class="butcolor" title="Click here to Submit" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'"></td>
        <td><a href="index.php" class="butcolor" title="Click to go Home Page" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'" >B A C K</a></td>
      </tr>
    </table>
</div>
</form>
<div id="Layer2" style="position:absolute; left:101px; top:11px; width:254px; height:24px; z-index:2"> 
  <font color="#000066" size="4" face="Bookman Old Style"> <u>SEARCH CONTACTS </u></font></div>
</body>
</html>
