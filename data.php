<?php include "demo.php";
$sql="SELECT * FROM admission where  firstname='sundar'";
$result = $sql->query($sql);
if($result->num_row >0){
    while($row =$result->$fetch_assoc()){
        echo"<br>";
        echo "id:".$row["id"]."<br>"."firstname:".$row["firstname"]."<br>"."lasttname:".$row["lastname"]."<br>"."dateofbirth:".$row["dateofbirth"]."<br>"."gender:".$row["gender"]."<br>"."mobilenumber:".$row["mobilenumber"]."<br>"."emailid:".$row["emailid"]."<br>"."aadharnumber:".$row["aadharnumber"]."<br>"."languages:".$row["languages"]."<br>"."state:".$row["state"]."<br>"."city:".$row["city"]."<br>"."pincode:".$row["pincode"]."<br>"."hssmarks:".$row["hssmarks"]."<br>"."educationboard:".$row["educationboard"]."<br>"."selectcourse:".$row["selectcourse"]."<br>";
    }
    else{
        echo "0 results";
    }
    $con->close();
}

?>