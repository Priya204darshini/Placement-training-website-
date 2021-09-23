<?php
include("connection.php");
error_reporting(0);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bionic Website</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=
        Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
        <link rel="stylesheet" href="userinfo.php">
        <style>
        td{
            color: white;
        }
        table
{
color:white;
background-color: rgba(0,0,0,0.4);
border-radius:20px;
}


        </style>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="index.php"><img src="images/Bionic Engineers Logo - White1.jpg" width="125px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about.php">ABOUT US</a></li>
                            <li><a href="index.php">GALLERY</a></li>
                            <li><a href="testimonials.php">TESTIMONIAL</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                        </ul>
                    </nav>
                    <img src="images/menu.png" class="menu-icon" 
                    onclick="menutoggle()">
                </div>
            </div>
        </div>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-1f124847-ba6f-4ef8-90d4-49c86178b3d9"></div>
<!--------------Contact us----------------->
<!-- <section>
    <div class="contact">
        <h2>CONTACT US</h2>
    
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="firstname" required="required">
                    <span class="text">First Name</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="lastname" required="required">
                    <span class="text">Last Name</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span class="text">Email</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="mobile" required="required">
                    <span class="text">Mobile</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <div class="inputBox textarea">
                    <textarea name="massage" required="required"></textarea>
                    <span class="text">Type Your Message Here...</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <button> <input type="submit"  name="submit"> Submit</button>
                 <input type="submit" value="send"> 
            </div>
        </div>
    </div>
</section> -->

<center>
<form> 
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<?php
//<td>Student Id</td>
//<td><input type="text" placeholder="Student Id" required name  = "student_id" ></td>
//</tr>
?>
<tr>
<td>First Name</td>
<td><input type="text" placeholder="First Name" required name  = "firstname"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" placeholder="Last Name" required name  = "lastname"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="int" placeholder="email" required name ="email" ></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="int" placeholder="mobile" required name ="mobile" ></td>
</tr>

<tr>
<td>Massage</td>
<td> <textarea placeholder="Massage" required name  = "massage" rows="5" cols="20"></textarea>  </td>
</tr>
<tr>
<td colspan="2" align="center"><a href ="contact.html"><input type="submit" name="submit" id="button"></a></td>
</tr>
<br></br>

</table>
</form>
</center>

<?php
$query ="SELECT * from userinfodata ORDER BY ID";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);

if($total!=0)
{
	
    while($result=mysqli_fetch_assoc($data))
    {
	    $nn=$result['ID'];
	}
	$nn=$nn+1;
	
}
	
else 
{
	$nn=1;
}


?>
<?php
if($_GET['submit'])
	{
        $rn = $nn;
$mn = $_GET['firstname'];
$cn = $_GET['lastname'];
$gn = $_GET['email'];
$sn = $_GET['mobile'];
$an = $_GET['massage'];



$query= "INSERT INTO userinfodata values ('$rn','$mn','$cn','$gn','$sn','$an')";
$data = mysqli_query($con,$query);

if($data)
{
    echo '<script>alert("Mail is sent")</script>';
}

else
{
    echo '<script>alert("Mail not sent")</script>';
}
}
?>


<?php
//$firstname = $_POST['firstname'];
//$lastname = $_POST['lastname'];
//$email = $_POST["email"];
//$mobile = $_POST["mobile"];
//$massage = $_POST["massage"];
//$to = "babypoojab@gmail.com";
//$subject = "Mail From codeconia";
//$txt = "firstname = " . $firstname . "\r\nlastname = " . $lastname . "\r\n email  =" . $email. "\r\n mobile  =" . $mobile."\r\n massage  =" . $massage;
//$headers = "From: noreply@Learner.com" . "\r\n" . "CC: somebodyelse@example.com";
//if($Email!=NULL){
  //  mail($to,$subject,$txt,$headers);
//}
//header("Location:thankyou.html);")
?>







<div class="page-content1">
    <h4><center><strong><span>Thank </span>You</strong></center></h4><br>
</div>
    
<br>
<br>    
<!----------Footer---------->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="center box">
                    <h2>Address</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Mysore, Karnataka </span>

                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+91---------</span>

                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">123@gmail.com </span>

                        </div>
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/Bionic Engineers Logo - White1.jpg">
                    <p>"Live as if you were to die tomorrow. Learn as if you 
                        were live forever.."
                    </p>
                </div>
                <div class="left box">
                    <h2>Touch with us</h2>
                    <div class="content">

                        <div class="social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-instagram"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021 - prposi </p>
        </div>
    </div>
</footer>    
<!-------Js for Toggle menu------->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>   
</body>
</html>
