<?php
$error = '';
if (isset($_POST['submit']) == 'Submit') {
    
    
    echo  "<pre>";
    print_r($_POST);
    echo  "</pre>";
    
   echo  "<pre>";
    print_r($_FILES);
    echo  "</pre>";
    echo $_FILE;
    
    
    
    
    if ($_POST['email'] == '') {
        $error = "Please enter email";
    } elseif ($_POST['name'] == '') {
        $error = "Please enter name";
    } elseif ($_POST['mobile'] == '') {
        $error = "Please enter mobile number";
    }  elseif ($_POST['psw'] == '') {
        $error = "Please enter password";
    } else {
        
        $error = "successfully Submit form";
        
       //header('Location: http://localhost/electricty/profile.php');
       //exit;
       
       
       
    }
}
?>


<p> <?php
    if ($error) {

        echo $error;
    }
    ?> </p>
<form action="" method="post" autcomplete="off"  enctype="multipart/form-data"   >
    <div class="container">
        <h1>Login Form</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <br/>

        <input type="hidden" placeholder="Enter Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" name="email" >
        <br/>
        <br/>
        <input type="text" placeholder="Enter name" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
        <br/>
        <br/>
        <input type="text" placeholder="Enter mobile number" name="mobile" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];} ?>" >
        <br/>
        <br/>

        <input type="text" placeholder="Enter Password" name="psw"  >

        <br/><br/>
        
        
         <br/>
        <br/>
        <input type="file" placeholder="Please choose any file from your system" name="image" value="" >
        <br/>
        <br/>



        <input type="submit" name="submit" value="Submit"/>
    </div>


</form>