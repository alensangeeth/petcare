<?php
session_start();
$con=new mysqli("localhost","root","","petcare");

$email=$_POST['email'];

$ps=$_POST['password'];
$query="select * from register where email='$email' and password='$ps'";

$result=mysqli_query($con,$query);
if($row=(mysqli_fetch_array($result)))
{
$_SESSION['logged']=$email;
    ?>
<script language="javascript">alert('Login success');window.location.replace('home.php');</script>

<?php
}

else
{
    ?>

<script language="javascript">alert('Login Failed');window.location.replace('login.html');</script>


<?php
}
?>