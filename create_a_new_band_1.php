<html>
</br>
<form action = "create_a_new_artist_1.php " method="post">
</br>

//artistID:<input type="text" id="artistId" name="Owner-Id"><br/>
Band Name:<input type="text" id="name" name="Band-Name"><br/>
Member Name:<input type="text" id="member" name="Member-Name"><br/>
Pay Rate:<input type="text" id="rate" name="Pay-Rate"><br/>
Band Leader Contact:<input type="bl_Number" id="gender" name="Leader-Number"><br/>
Agent Street:<input type="text" id="ag_Street" name="Agent-Street"><br/>
Agent City:<input type="text" id="ag_City" name="Agent-City"><br/>
Agent State:<input type="text" id="ag_State" name="Agent-State"><br/>
Agent Zip:<input type="text" id="ag_Zip" name="Agent-Zip"><br/>
Agent Email:<input type="text" id="ag_Email" name="Agent-Email"><br/>
Agent Phone:<input type="text" id="ag_Phone" name="Agent-Phone"><br/>


<input type="reset" name="reset">
<input type="submit" name="submit"></br>
</form>

<?php


$required = array(
'name',
'member',
'rate',
'bl_Number',
'ag_Street',
'ag_City',
'ag_State',
'ag_Zip',
'ag_Email',
'ag_Phone',
);


if(isset($_POST ['submit'])){
$i = 0;
foreach($required as $field)
if(empty($_POST [$field])){
echo "{$field} is required.";}
echo "<br/>";
if($i==0) {
$q = "INSERT INTO Band (name, member, rate, bl_Number, ag_Street, ag_City, ag_State, ag_Zip, ag_Email, ag_Phone) VALUES (:HERION, :Christ, :1000, :630 555 5555, :Wilson Ave, :Chicago, :Illinois, :60618, agent1@whocares.com, :630 444 4444)
$query = $connect->prepare($q);
$results = $query->execute(array(
":HERION" => $_POST['name'],
":Christ" => $_POST['member'],
":1000" => $_POST['rate'],
":630 555 5555" => $_POST['bl_Number'],
":Wilson Ave" => $_POST['ag_Street'],
":Chicago" => $_POST['ag_City'],
":Illinois" => $_POST['ag_State'],
":60618" => $_POST['ag_Zip'],
":agent1@whocares.com" => $_POST['ag_Email],
":630 444 4444" => $_POST['ag_Phone

));
}}

?>

</html>

