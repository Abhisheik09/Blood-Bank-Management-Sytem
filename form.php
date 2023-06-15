<html>
<head>
        <title>FEEDBACK</title>
        <style>
            body{
                background-color: lightgray; font-size: 18px;font-family: Times New Roman;
            }
        </style>
    </head>
    <body>
       Hello! <?php echo $_POST["name"];?><br>
       Your age is <?php echo $_POST["age"];?><br>
       You are a <?php echo $_POST["gender"];?><br>
       Your e-mail id is <?php echo $_POST["email"];?><br>
       <?php echo $_POST["mob"];?> is your contact number
    </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//get the data from html file
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$mobile=$_POST["mob"];

//insert data into database
$sql = "INSERT INTO userinfo (name,age,gender,email,mobileno)
VALUES ('$name', '$age','$gender','$email','$mobile')";
echo "<br>";
echo "<br>";
echo "Inserted";

if ($conn->query($sql) === TRUE) {
    echo "<br>";
    echo "New record created successfully";
    echo "<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



   $sql = "select * from userinfo";
   $result = ($conn->query($sql));
   //declare array to store the data of database
   $row = []; 
 
   if ($result->num_rows > 0) 
   {
       // fetch all data from db into array 
       $row = $result->fetch_all(MYSQLI_ASSOC);  
   }   
?>
<html>
<style>
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
  
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Mobile No</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
  
                <td><?php echo $rows['Name']; ?></td>
                <td><?php echo $rows['Age']; ?></td>
                <td><?php echo $rows['Gender']; ?></td>
                <td><?php echo $rows['Email']; ?></td>
                <td><?php echo $rows['MobileNo']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
  
<?php   
    mysqli_close($conn);
   
   //mysql_close($conn);
//$conn->close();
?>