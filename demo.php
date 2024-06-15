<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css", integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65", crossorigin="anonymous">

    <style>
        .head{
            margin-top: 15px;
            font-size: 15px ;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }
        /* fieldset{
            background-color:wheat;
        } */
        .application{
            padding: 60px;
            background-color: wheat;
            margin-top: 80px;
            margin-bottom: 80px;
            font-size: 16px;
            margin-left: 300px;
            margin-right: 350px;
            color:black;
            text-transform: uppercase; 

        }
        button{
            border-radius: 50px;
            color: black;
             margin-left: 240px;
        }
      
    </style>
</head>
<script>
   function validationForm() {
    if (document.appform.mobile.value.length!=10){
        alert("please enter your 10 digit mobile number");
        document.appform.mobile.focus();
        return false;
    }
    if (document.appform.aadhar.value.length!=12){
        alert("please enter your valid aahar no");
        document.appform.aadhar.focus();
        return false;
    }
    if (document.appform.marks.value >600 ){
        alert("please enter your correct marks");
        document.appform.marks.focus();
        return false;
    }
    setTimeout(() => {
        alert("thank you! your application has siccessfully submitted");
    }, 2000);
    return false;
    
    }
 </script>
<body>
   <fieldset>
    <div class="head">
        <h3>application form</h3>
    </div>
    <form  name="appform" class="application"action="demo.php"  onsubmit="return validationForm()"   method="post">
        <label>first name:</label><br>
        <input type="text" name="a" placeholder="first name" required><br>
        <br>
        <label>last name:</label><br>
        <input type="text" name="b" placeholder="last name" required><br>
        <br>
        <label>dateofbirth:</label><br>
        <input type="date"  name="dob"  required><br>
        <br>
        <lebel>gender</lebel><br>
       <input type="radio" name="gender" id="male"  value="male"> <lebel>male</lebel>
        <input type="radio" name="gender" id="female" value="female"> <lebel>female</lebel>
        <br>
        <br>
        <label>mobile no:</label><br>
        <input type="number" name="mobile" id="no" placeholder="mobilenumber"><br>
        <br>
        <label>emailid:</label><br>
        <input type="email" name="mail" id="eid" placeholder="emailid" ><br>
        <br>
        <label>aadhar no:</label><br>
        <input type="text" name="aadhar" id="ano" placeholder="aadharno"><br>
        <br>
        <label>language</label><br>
        <input type="checkbox" name="language" id="language" value="tamil &english "><label>tamil&english</label>
        <input type="checkbox" name="language" id="language" value="hindi"><label>hindi</label>
        <br>
        <br>
        <label>state</label><br>
        <select name="state" id="state" required>
            <option value="tamilnadu">tamilnadu</option>
            <option value="kerala">kerala</option>
            <option value="andrapradesh">andrapradesh</option>
        </select><br>
        <br>
        <label>city</label><br>
        <select name="city" id="city" required>
            <option value="theni">theni</option>
            <option value="maduarai">madurai</option>
            <option value="dindugal">dindugal</option>
            <option value="covai">covai</option>
            <option value="chennai">chennai</option>
        </select><br>
        <br>
        <label>pincode</label><br>
        <input type="number" name="pin" id="code" placeholder="pincode number"><br>
        <br>
        <lebel>hss marks:</lebel><br>
        <input type="number" name="marks" id="hss" placeholder="enter marks"><br>
        <br>
        <label>education board</label><br>
        <input type="radio" name="board" id="education" value="state"><label>state</label>
        <input type="radio" name="board" id="education" value="cbse"><label>cbse</label>
        <br>
        <br>
        <label>select course</label><br>
        <select name="course" id="course" required>
            <option value="B.E Aeronautical Engineering">B.E Aeronautical Engineering</option>
            <option value="B.E Aerospace Engineering">B.E Aerospace Engineering</option>
            <option value="B.E Biomedical Engineering">B.E Biomedical Engineering</option>
            <option value="B.E Civil Engineering">B.E Civil Engineering</option>
            <option value="B.E Mechanical Engineering">B.E Mechanical Engineering</option>
            <option value="B.E Electrical engineering">B.E Electrical engineering</option>
            <option value="B.E Electronics and Communicaton">B.E Electronics and Communicaton</option>
            <option value="B.TECH Information Technology">B.TECH Information Technology</option>
            <option value="B.TECH Textile Technology">B.TECH Textile Technology</option>
            <option value="MBA">MBA</option>
            <option value="MCA">MCA</option>   
        </select><br>
        <br>
        <br>
        <button name="submit" value="submit">submit</button>
    </form>
   </fieldset>
</body>
</html>
<?php
$con=new mysqli("localhost","root","","suntharesh");
if ($con->connect_error) {
    echo $con->connect_error;
    die("connection field");
}
else{
    echo("connection successfully");
}
// $sql="CREATE DATABASE suntharesh";
// if($con->query($sql)===TRUE){
//     echo "database created successfully";
// }
// else{
//     echo "Error creating database:".$con->error;
// }
// $sql="CREATE TABLE admission(id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(40) NOT NULL,lastname VARCHAR(20) NOT NULL, dateofbirth DATE NOT NULL,gender VARCHAR(30),mobilenumber INT(20),emailid VARCHAR(40),aadharnumber VARCHAR(40) ,languages VARCHAR(30),state VARCHAR(40) NOT NULL,city VARCHAR(40),pincode INT(6),hssmarks INT(5),educationboard VARCHAR(40) NOT NULL,selectcourse VARCHAR(50) NOT NULL)";
// if($con->query($sql)===TRUE){
//     echo "table admission created successfully";
// }
// else{
//     echo"error in table:".$con->error;
// }
// $con->close();
if(isset($_POST['submit'])){
    $firstname=$_POST['a'];
    $lastname=$_POST['b'];
    $dateofbirth=$_POST['dob'];
    $gender=$_POST['gender'];
    $mobilenumber=$_POST['mobile'];
    $emailid=$_POST['mail'];
    $aadharnumber=$_POST['aadhar'];
    $languages=$_POST['language'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $pincode=$_POST['pin'];
    $hssmarks=$_POST['marks'];
    $educationboard=$_POST['board'];
    $selectcourse=$_POST['course'];
    $sql="INSERT INTO admission(firstname,lastname,dateofbirth,gender,mobilenumber,emailid,aadharnumber,languages,state,city,pincode,hssmarks,educationboard,selectcourse) VALUES ('$firstname','$lastname','$dateofbirth','$gender',$mobilenumber,'$emailid',$aadharnumber,'$languages','$state','$city',$pincode,$hssmarks,'$educationboard','$selectcourse')";
    if($con->query($sql)===TRUE){
        echo "data inserted successfully";
     }
     else{
        echo "error in datas:". $con->error;
     }
     $con->close();
    //  $sql="SELECT id,firstname,lastname FROM admission";
    //  $result = $con->query($sql);
    //  if($result->num_row > 0){
    // while($row = $result->fetch_assoc()){
    //        echo "id:".$row["id"]."<br>"."firstname:".$row["firstname"]."<br>"."lasttname:".$row["lastname"]."<br>"."dateofbirth:".$row["dateofbirth"]."<br>"."gender:".$row["gender"]."<br>"."mobilenumber:".$row["mobilenumber"]."<br>"."emailid:".$row["emailid"]."<br>"."aadharnumber:".$row["aadharnumber"]."<br>"."languages:".$row["languages"]."<br>"."state:".$row["state"]."<br>"."city:".$row["city"]."<br>"."pincode:".$row["pincode"]."<br>"."hssmarks:".$row["hssmarks"]."<br>"."educationboard:".$row["educationboard"]."<br>"."selectcourse:".$row["selectcourse"]."<br>";
    //  }
    //  } else{
    //     echo "no results";
    // }
    // $con->close();
}
?>