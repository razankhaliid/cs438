<?php 
// you can write the variable name same as input in form element.


session_start(); 
//Get username from the session to use in the queries
$username = $_SESSION["username"];
//Login to database
$servername = "localhost:3307";
$dbusername = "root";
$dbpassword = "";
$dbname = "player";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

//check if connected or not
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

if($_POST) {

   //store the data
   $scorre = mysqli_real_escape_string($conn,$_POST['scores']);
  //check if the data exist, and they match the found data 
   $sql = "SELECT * FROM user WHERE full_name = '$username'";
   //performe the query
   $result = mysqli_query($conn,$sql);
   //check the number of rows in the table, if zero, the data is not registerd    
   $count = mysqli_num_rows($result);
   
   $rrow = mysqli_fetch_assoc($result);
   
   $old_score = $rrow['score'];
   $player_name = $rrow['full_name'];
  
  
//if correct direct the user to the home page, if not send an error message     
   if($count == 1) 
   $rrow = mysqli_fetch_assoc($result);
   {     
         $sql = "UPDATE user SET score = '$scorre' WHERE full_name= '$username'";
         if(mysqli_query($conn, $sql))
         {
      
       }else
       {
      echo '<script>alert("Invalid info");</script>';

       }

      
   }
}
//get the scores and the usernames from highest score to lowest and display the leaderboared

$sql = "SELECT full_name, score FROM user ORDER BY score DESC";
$result = mysqli_query($conn,$sql);
$rank = 1;
$count = mysqli_num_rows($result);


if (mysqli_num_rows($result)) {
?>
<html>

<head>
    <style>
body{
       margin:  0 ; 
       padding: 0;
       background-image: url('farm.jpg');
       background-repeat: no-repeat;
       background-size: cover;
    
    }
    div{
        width: 400px;
        height: 550px;
        padding: 40px;
        position: absolute;
        top: 20%;
        left: 40%;
        background: #70b769a3 ;
        text-align: center;
        border-radius: 30px;
        border: 2px;
        
    }
    table, th, td {
  border: 2.5px solid rgb(87, 48, 23);
  width: 350px;
  text-align: center;
  font-size: 20px ;
  border-collapse: collapse;
  background-color: white;
 
}
button{
    height: 30px;
    width: 70px;
    text-align: center;
    background-color: rgb(147, 78, 31);
    font-size: 1.1rem;
    color: rgb(0, 0, 0);
    border-radius: 10px;
}
h1 ,h2 , table{
margin-bottom: 0%;
margin-top: 0%;
color: rgb(87, 48, 23);

}
    </style>
</head>
<body>
<form action="Game.html">
    <div >
        <?php
         echo"<h2 align ='center'; style= 'color:(87, 48, 23) '> the plyer : {$rrow['full_name']} , old score is :{$old_score} and the new score is :{$scorre}</h2><br>";
        ?>
    <h1>the highest player Score :</h1>
    <br>
    <br>
      <table align="center";>
            <tr>
            <th>NO.</th>
            <th>Player Name</th>
            <th>Score</th>
            </tr>


<?php
while ($row = mysqli_fetch_assoc($result) ) {
    if( $rank <= 10){
    echo "<tr>
         <td>{$rank}</td>
          <td>{$row['full_name']}</td>
         <td>{$row['score']}</td></tr>
         ";

    $rank++;
}}
?>
     </table>
      <br>
      <button value="game" type="submit">game</button>
      </form>
      </div>
</body>
</html>

<?php
}
?>



