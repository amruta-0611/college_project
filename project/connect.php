<html>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){

$Name = $_POST['Name'];
$RollNumber = $_POST['RollNumber'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Semester = $_POST['Semester'];
$branch = $_POST['branch'];
}
$conn = new mysqli('localhost','root','fcrit@123','clg_project');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}




else{
    $sql2 = "INSERT INTO register  VALUES ('$Name','$RollNumber','$Phone','$Email','$branch','$Semester')";
    echo $sql2 ;
    if($result2=mysqli_query($conn,$sql2)){
        ?>
        <h2> You are Now registered for College IV</h2>
        <?php
     }
     else{
         echo "Registration failed ,not done";
     }
}
// Close connection
mysqli_close($conn);
?>

</body>
</html>