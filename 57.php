<?php
$con = mysqli_connect("localhost","root","password","mydb");
mysqli_query($con, "CREATE TABLE myplayers(ID INT, First_Name VARCHAR(255), Last_Name
VARCHAR(255), Place_Of_Birth VARCHAR(255), Country VARCHAR(255))");
print("Table Created.......\n");
mysqli_query($con, "INSERT INTO myplayers values(1, 'Sikhar', 'Dhawan', 'Delhi', 'India')");
mysqli_query($con, "INSERT INTO myplayers values(2, 'Jonathan', 'Trott', 'CapeTown',
'SouthAfrica')");
mysqli_query($con, "INSERT INTO myplayers values(3, 'Kumara', 'Sangakkara', 'Matale',
'Srilanka')");

print("Record Inserted...... \n");
//Retrieving the contents of the table
$res = mysqli_query($con, "SELECT * FROM myplayers");
//Fetching all the rows as objects
while($obj = mysqli_fetch_object($res)){
print("ID: ".$obj->ID."\n");
print("First_Name: ".$obj->First_Name."\n");
print("Last_Name: ".$obj->Last_Name."\n");
print("Place_Of_Birth: ".$obj->Place_Of_Birth."\n");
print("Country: ".$obj->Country."\n");
}
//Closing the statement
mysqli_free_result($res);
//Closing the connection
mysqli_close($con);?>
