<?php
session_start();
if(isset($_POST['submit']))
{
    
    $email=$_POST['email'];
    $pasword=$_POST['pasword'];
    
    $con=mysqli_connect('127.0.0.1','root','','safaari');
    if($con==false)
    {
        echo "Error in connection";
    }
    else
    {
        $select="SELECT * FROM `signup` WHERE `email`='$email'  AND `pasword`='$pasword'";
        $query=mysqli_query($con,$select);
        $row=mysqli_num_rows($query);
        if($row==1)
        {
            $data=mysqli_fetch_assoc($query);
            $_SESSION['name']=$data['name'];
            ?>
            <script>
                alert("You have successfully logged in");
                window.open('C:\Users\Dharaneesh\Downloads\Car-Rental-Website-main\Car-Rental-Website-main\book.html','_self');
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Wrong Emailid and Password!! Try Again");
                window.open('C:\Users\Dharaneesh\Downloads\Car-Rental-Website-main\Car-Rental-Website-main\login.html','_self');
            </script>
            <?php
        }
        
    }
}
?>