   <?PHP
if($action == "view") {
$main_content .= '<br><h2><center><a href="?subtopic=shopadmin&offer_type=item">ADD SHOP OFFER</a><br><br>
<a href="?subtopic=shopadmin&action=delete">DELETE SHOP OFFER</a></center>';
}

if($_REQUEST['offer_type']){
$shop_points = stripslashes(ucwords(strtolower(trim($_REQUEST['shop_points']))));
$shop_offer_type = stripslashes(trim($_REQUEST['offer_type']));
if($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
if(empty($shop_points)) {
$main_content .= '<table border="0"><tr><td  align="center">
<b>Select offer type:</b></td><td><table border="0" ><tr bgcolor="#505050">
<td><font color="white">Item</td><td><font color="white">Container</td><td><font color="white">Pacc</td><td><font color="white">Redskull</td><td><font color="white">Unban</td><td><font color="white">Changename</td></tr>
<tr bgcolor="#D4C0A1">
<td align="center"><a href="?subtopic=shopadmin&offer_type=item"><input type="radio" name="offer_type" value="item"></a></td>
<td align="center"><a href="?subtopic=shopadmin&offer_type=container"><input type="radio" name="offer_type" value="container" ></a></td>
<td align="center"><a href="?subtopic=shopadmin&offer_type=pacc"><input type="radio" name="offer_type" value="pacc" ></a></td>
<td align="center"><a href="?subtopic=shopadmin&offer_type=redskull"><input type="radio" name="offer_type" value="redskull" ></a></td>
<td align="center"><a href="?subtopic=shopadmin&offer_type=unban"><input type="radio" name="offer_type" value="unban" ></a></td>
<td align="center"><a href="?subtopic=shopadmin&offer_type=changename"><input type="radio" name="offer_type" value="changename" ></a></td>
</tr></table></td></tr><form action="?subtopic=shopadmin&offer_type='.$shop_offer_type.'&check" method="post" ><table border="0">';
if ($_REQUEST['offer_type'] == 'item'){
$main_content .= '
<tr><td align="center"><b>Points:</b></td>
<td><input type="textbox" name="shop_points" maxlenght="7" style="width: 70px"></td></tr>
<tr><td align="center"><b>Item ID:</b></td>
<td><input type="text" name="shop_itemid1" maxlenght="7" style="width: 70px" ></td></tr>
<tr><td align="center"><b>Item Count:</b></td>
<td><input type="text" name="shop_count1" maxlenght="7" style="width: 70px" ></td></tr>
<tr><td align="center"><b>Offer Description:</b></td>
<td ><textarea name="shop_offer_description" rows="2" cols="35"></textarea></td></tr>
<tr><td align="center"><b>Offer Name:</b></td>
<td><input type="text" name="shop_offer_name" maxlenght="40" style="width: 200px" ></td></tr>
<tr><td><input name="submit" type="submit" value="Submit" /></form>
<form action="?subtopic=shopadmin&offer_type=item" method="post" >
<input name="submit" type="submit" value="Reset"/></form></td></tr></table>';
}
if ($_REQUEST['offer_type'] == 'container'){
$main_content .= '
<tr><td align="center" ><b>Points:</b></td>
<td><input type="textbox" name="shop_points" maxlenght="7" style="width: 70px"></td></tr>
<tr><td align="center" ><b>Container ID:</b></td>
<td><input type="text" name="shop_itemid1" maxlenght="7" style="width: 70px" ></td></tr>
<tr><td align="center" ><b>Count Container:</b></td>
<td><input type="text" name="shop_count1" maxlenght="7" style="width: 70px" ></td></tr>
<tr><td align="center" ><b>Item ID:</b></td>
<td><input type="text" name="shop_itemid2" maxlenght="7" style="width: 70px" ></td></tr>
<tr><td align="center" ><b>Count Item:</b></td>
<td><input type="text" name="shop_count2" maxlenght="7" style="width: 70px" ></td></tr>
<tr><td align="center" ><b>Offer Description:</b></td>
<td ><textarea name="shop_offer_description" rows="2" cols="35"></textarea></td></tr>
<tr><td align="center" ><b>Offer Name:</b></td>
<td><input type="text" name="shop_offer_name" maxlenght="40" style="width: 200px" ></td></tr>
<tr><td><input name="submit" type="submit" value="Submit" /></form>
<form action="?subtopic=shopadmin&offer_type=container" method="post" >
<input name="submit" type="submit" value="Reset" /></form></td></tr></table>';
}
if ($_REQUEST['offer_type'] == 'pacc'){
$main_content .= '
<tr><td align="center" ><b>Points:</b></td>
<td><input type="textbox" name="shop_points" maxlenght="7" style="width: 70px"></td></tr>
<tr><td align="center" ><b>Days:</b></td>
<td><input type="text" name="shop_count1" maxlenght="7" style="width: 70px" ></td></tr>
<tr><td align="center" ><b>Offer Description:</b></td>
<td ><textarea name="shop_offer_description" rows="2" cols="35"></textarea></td></tr>
<tr><td align="center" ><b>Offer Name:</b></td>
<td><input type="text" name="shop_offer_name" maxlenght="40" style="width: 200px" ></td></tr>
<tr><td><input name="submit" type="submit" value="Submit" /></form>
<form action="?subtopic=shopadmin&offer_type=pacc" method="post" >
<input name="submit" type="submit" value="Reset" /></form></td></tr></table>';
}
if ($_REQUEST['offer_type'] == 'unban'){
$main_content .= '
<tr><td align="center" ><b>Points:</b></td>
<td><input type="textbox" name="shop_points" maxlenght="7" style="width: 70px"></td></tr>
<tr><td align="center" ><b>Offer Description:</b></td>
<td ><textarea name="shop_offer_description" rows="2" cols="35"></textarea></td></tr>
<tr><td align="center" ><b>Offer Name:</b></td>
<td><input type="text" name="shop_offer_name" maxlenght="40" style="width: 200px" ></td></tr>
<tr><td><input name="submit" type="submit" value="Submit" /></form>
<form action="?subtopic=shopadmin&offer_type=unban" method="post" >
<input name="submit" type="submit" value="Reset" /></form></td></tr></table>';
}
if ($_REQUEST['offer_type'] == 'redskull'){
$main_content .= '
<tr><td align="center" ><b>Points:</b></td>
<td><input type="textbox" name="shop_points" maxlenght="7" style="width: 70px"></td></tr>
<tr><td align="center" ><b>Offer Description:</b></td>
<td ><textarea name="shop_offer_description" rows="2" cols="35"></textarea></td></tr>
<tr><td align="center" ><b>Offer Name:</b></td>
<td><input type="text" name="shop_offer_name" maxlenght="40" style="width: 200px" ></td></tr>
<tr><td><input name="submit" type="submit" value="Submit" /></form>
<form action="?subtopic=shopadmin&offer_type=redskull" method="post" >
<input name="submit" type="submit" value="Reset" /></form></td></tr></table>';
}
if ($_REQUEST['offer_type'] == 'changename'){
$main_content .= '
<tr><td align="center" ><b>Points:</b></td>
<td><input type="textbox" name="shop_points" maxlenght="7" style="width: 70px"></td></tr>
<tr><td align="center" ><b>Offer Description:</b></td>
<td ><textarea name="shop_offer_description" rows="2" cols="35"></textarea></td></tr>
<tr><td align="center" ><b>Offer Name:</b></td>
<td><input type="text" name="shop_offer_name" maxlenght="40" style="width: 200px" ></td></tr>
<tr><td><input name="submit" type="submit" value="Submit" /></form>
<form action="?subtopic=shopadmin&offer_type=changename" method="post" >
<input name="submit" type="submit" value="Reset" /></form></td></tr></table>';
}
  $main_content .= '<form action="?subtopic=shopadmin&action=view" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form>';
}
else
{
$shop_points = stripslashes(trim($_POST['shop_points']));
$shop_offer_type = stripslashes(trim($_REQUEST['offer_type']));
$shop_itemid1 = stripslashes(trim($_POST['shop_itemid1']));
$shop_count1 = stripslashes(trim($_POST['shop_count1']));
$shop_itemid2 = stripslashes(trim($_POST['shop_itemid2']));
$shop_count2 = stripslashes(trim($_POST['shop_count2']));
$shop_offer_description = stripslashes(trim($_POST['shop_offer_description']));
$shop_offer_name = stripslashes(trim($_POST['shop_offer_name']));
$SQL->query('INSERT INTO `z_shop_offer` (id, points, itemid1, count1, itemid2, count2, offer_type, offer_description, offer_name, pid) VALUES (NULL, '.$SQL->quote($shop_points).', '.$SQL->quote($shop_itemid1).', '.$SQL->quote($shop_count1).', '.$SQL->quote($shop_itemid2).', '.$SQL->quote($shop_count2).', '.$SQL->quote($shop_offer_type).', '.$SQL->quote($shop_offer_description).', '.$SQL->quote($shop_offer_name).', 0)');
if ($shop_offer_type == 'container'){
$main_content .= '<center><h2><font color="red">Added to Shop:</font></h2></center><hr/>
<tr><td align="center" ><b>Points:</b></td>
<td>'.$shop_points.'</td></tr><br>
<tr><td align="center" ><b>Container ID:</b></td>
<td>'.$shop_itemid1.'</td></tr><br>
<tr><td align="center" ><b>Count Container:</b></td>
<td>'.$shop_count1.'</td></tr><br>
<tr><td align="center" ><b> Item ID (in Container):</b></td>
<td>'.$shop_itemid2.'</td></tr><br>
<tr><td align="center" ><b>Count Item (in Container):</b></td>
<td>'.$shop_count2.'</td></tr><br>
<tr><td align="center" ><b>Offer Type:</b></td>
<td>'.$shop_offer_type.'</td></tr><br>
<tr><td align="center" ><b>Offer Description:</b></td>
<td>'.$shop_offer_description.'</td></tr><br>
<tr><td align="center" ><b>Offer Name:</b></td>
<td>'.$shop_offer_name.'</td></tr>
<br><form action="?subtopic=shopadmin&offer_type=item" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form>';
}
if ($shop_offer_type == 'pacc'){
$main_content .= '<center><h2><font color="red">Added to Shop:</font></h2></center><hr/>
<tr><td align="center" ><b>Points:</b></td>
<td>'.$shop_points.'</td></tr><br>
<tr><td align="center" ><b>Days:</b></td>
<td>'.$shop_count1.'</td></tr><br>
<tr><td align="center" ><b>Offer Type:</b></td>
<td>'.$shop_offer_type.'</td></tr><br>
<tr><td align="center" ><b>Offer Description:</b></td>
<td>'.$shop_offer_description.'</td></tr><br>
<tr><td align="center" ><b>Offer Name:</b></td>
<td>'.$shop_offer_name.'</td></tr>
<br><form action="?subtopic=shopadmin&offer_type=item" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form>';
}
if ($shop_offer_type == 'redskull'){
$main_content .= '<center><h2><font color="red">Added to Shop:</font></h2></center><hr/>
<tr><td align="center" ><b>Points:</b></td>
<td>'.$shop_points.'</td></tr><br>
<tr><td align="center" ><b>Offer Type:</b></td>
<td>'.$shop_offer_type.'</td></tr><br>
<tr><td align="center" ><b>Offer Description:</b></td>
<td>'.$shop_offer_description.'</td></tr><br>
<tr><td align="center" ><b>Offer Name:</b></td>
<td>'.$shop_offer_name.'</td></tr>
<br><form action="?subtopic=shopadmin&offer_type=item" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form>';
}
if ($shop_offer_type == 'changename'){
$main_content .= '<center><h2><font color="red">Added to Shop:</font></h2></center><hr/>
<tr><td align="center" ><b>Points:</b></td>
<td>'.$shop_points.'</td></tr><br>
<tr><td align="center" ><b>Offer Type:</b></td>
<td>'.$shop_offer_type.'</td></tr><br>
<tr><td align="center" ><b>Offer Description:</b></td>
<td>'.$shop_offer_description.'</td></tr><br>
<tr><td align="center" ><b>Offer Name:</b></td>
<td>'.$shop_offer_name.'</td></tr>
<br><form action="?subtopic=shopadmin&offer_type=item" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form>';
}
if ($shop_offer_type == 'unban'){
$main_content .= '<center><h2><font color="red">Added to Shop:</font></h2></center><hr/>
<tr><td align="center" ><b>Points:</b></td>
<td>'.$shop_points.'</td></tr><br>
<tr><td align="center" ><b>Offer Type:</b></td>
<td>'.$shop_offer_type.'</td></tr><br>
<tr><td align="center" ><b>Offer Description:</b></td>
<td>'.$shop_offer_description.'</td></tr><br>
<tr><td align="center" ><b>Offer Name:</b></td>
<td>'.$shop_offer_name.'</td></tr>
<br><form action="?subtopic=shopadmin&offer_type=item" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form>';
}
if ($shop_offer_type == 'item'){
$main_content .= '<center><h2><font color="red">Added to Shop:</font></h2></center><hr/>
<tr><td align="center" ><b>Points:</b></td>
<td>'.$shop_points.'</td></tr><br>
<tr><td align="center" ><b>Item ID:</b></td>
<td>'.$shop_itemid1.'</td></tr><br>
<tr><td align="center" ><b>Count Item:</b></td>
<td>'.$shop_count1.'</td></tr><br>
<tr><td align="center" ><b>Offer Type:</b></td>
<td>'.$shop_offer_type.'</td></tr><br>
<tr><td align="center" ><b>Offer Description:</b></td>
<td>'.$shop_offer_description.'</td></tr><br>
<tr><td align="center" ><b>Offer Name:</b></td>
<td>'.$shop_offer_name.'</td></tr>
<br><form action="?subtopic=shopadmin&offer_type=item" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form>';
}
}
}
else
{
$main_content .= 'Sorry, you have not the rights to access this page.';
}
}
	$items = simplexml_load_file($config['site']['server_path'].'/data/items/items.xml') or die('<b>Could not load items!</b>'); 
        foreach($items->item as $v)
            $itemList[(int)$v['id']] = $v['name'];
$order = array(
    "id" => "id",
    "points" => "points",
    "offer_type" => "offer_type",
    "itemid1" => "itemid1",
    "itemid2" => "itemid2",
);
if($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
if($action == "delete") {

  $main_content .= '<center><table width="550"><tr BGCOLOR="#505050"><td width="5"><font color="white"><a href="index.php?subtopic=shopadmin&action=delete&order=' . getOrder($order, 'order', 'id') . '" class=white>ID:</td><td width="5"><font color="white"><a href="index.php?subtopic=shopadmin&action=delete&order=' . getOrder($order, 'order', 'points') . '" class=white>Points:</td><td width="7"><font color="white"><a href="index.php?subtopic=shopadmin&action=delete&order=' . getOrder($order, 'order', 'itemid1') . '" class=white>Item ID:</td><td width="5"><font color="white">Count:</td><td width="7"><center><font color="white"><a href="index.php?subtopic=shopadmin&action=delete&order=' . getOrder($order, 'order', 'itemid2') . '" class=white>Container ID:</center></td><td width="5"><font color="white">Count:</td><td width="7"><font color="white"><a href="index.php?subtopic=shopadmin&action=delete&order=' . getOrder($order, 'order', 'offer_type') . '" class=white>Offer Type:</td><td width="85"><font color="white">Offer Description:</td><td width="30"><font color="white">Offer Name:</td><td width="30"></td></tr>';
$shopoffers = $SQL->query('SELECT id, points, itemid1, count1, itemid2, count2, offer_type, offer_description, offer_name, pid FROM z_shop_offer ' . makeOrder($order, 'order', 'id'));
foreach($shopoffers as $shop) {
  $main_content .= '</B><tr BGCOLOR="#D4C0A1"><td align="center">'.$shop['id'].'<td align="center">'.$shop['points'].'</td>';
if($shop['itemid1'] == "0") {
  $main_content .= '<td align="center">'.$shop['itemid1'].'<br></td>';
}
else
{
  $main_content .= '<td align="center">'.$shop['itemid1'].'<br>(' . $itemList[(int)$shop['itemid1']] . ')</td>';
}
  $main_content .= '<td align="center">'.$shop['count1'].'</td>';
if($shop['itemid2'] == "0") {
  $main_content .= '<td align="center">'.$shop['itemid2'].'</td>';
}
else
{
  $main_content .= '<td align="center">'.$shop['itemid2'].'<br>(' . $itemList[(int)$shop['itemid2']] . ')</td>';
}
  $main_content .= '<td align="center">'.$shop['count2'].'</td><td align="center">'.$shop['offer_type'].'</td><td align="left">'.$shop['offer_description'].'</td><td align="left">'.$shop['offer_name'].'</td>';
        $main_content .= '<td align="left">&nbsp;<a href="?subtopic=shopadmin&action=deleteoffer&id='.$shop['id'].'"><img src="'.$layout_name.'/images/news/delete_news.png" border="0"></a></td>';
}
  $main_content .= '</td></tr></TABLE><br><form action="?subtopic=shopadmin&action=view" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form>';
}
if($action == "deleteoffer") {
$id = (int) $_REQUEST['id'];
$SQL->query('DELETE FROM z_shop_offer WHERE id = '.$id.' LIMIT 1;');
$main_content .= '<center>Shop offer has been deleted.</center><br><center><form action="?subtopic=shopadmin&action=delete" method="post" ><input name="submit" type="submit" value="Back" title="Back"/></form></center>';
}
}
else
{
$main_content .= 'Sorry, you have not the rights to access this page.';
}
?> 