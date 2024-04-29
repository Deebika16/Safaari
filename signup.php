<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pasword=$_POST['pasword'];
    $c_pasword=$_POST['c_pasword'];
    
    
    $con=mysqli_connect('127.0.0.1','root','','safaari');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else
    {
        $select="SELECT * FROM `signup` WHERE `email`='$email'";
        $result=mysqli_query($con,$select);
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            ?>
            <script> alert("Emailid already exists! Register with different email");
            window.open('signup.html','_self');</script>
            <?php
            
        }
        else{
            $insert="INSERT INTO `customers`(`name`, `email`, `pasword`, `c_pasword`) VALUES ('$name','$email','$pasword','$c_pasword')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script> alert("Regitered Successfully");
                window.open('book.html','_self');</script>
            <?php
            }
            else{
                echo "error";
            }
        }
    }
        
}
?>