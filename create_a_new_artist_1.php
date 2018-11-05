<html>
</br>
<form action = "create_a_new_artist_1.php " method="post">
</br>

//artistID:<input type="text" id="artistId" name="Owner-Id"><br/>
First Name:<input type="text" id="name" name="Firs-Name"><br/>
Middle Name:<input type="text" id="middle_Name" name="Middle-Name"><br/>
Last Name:<input type="text" id="last_Name" name="Last-Name"><br/>
Gender:<input type="text" id="gender" name="Gender"><br/>
Email:<input type="text" id="email" name="Email-Address"><br/>
Numbers:<input type="text" id="numbers" name="Direct-Phone"><br/>
Email:<input type="text" id="email" name="Email-Address"><br/>






<input type="reset" name="reset">
<input type="submit" name="submit"></br>
</form>

<?php


$required = array(
'name',
'middle_Name',
'last_Name',
'gender',
'email',
'numbers',
);

if(isset($_POST ['submit'])){
$i = 0;
foreach($required as $field)
if(empty($_POST [$field])){
echo "{$field} is required.";}
echo "<br/>";
if($i==0) {
$q = "INSERT INTO Artist (name, middle_Name, last_Name, gender, email, numbers) VALUES (:John, :Adams, :Smith, :Male, :JSmith@gmail.com, :630 555 5555, );";
$query = $connect->prepare($q);
$results = $query->execute(array(
":John" => $_POST['name'],
":Adams" => $_POST['middle_Name'],
":Smith" => $_POST['last_Name'],
":Male" => $_POST['gender'],
":JSmith@gmail.com" => $_POST['email'],
":630 555 5555" => $_POST['numbers']
));
}}

include 'footer1.php'

?>

</html>

