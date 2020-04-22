<?php
$error = '';
if (isset($_POST['submit']) == 'Submit') {
    if ($_POST['email'] == '') {
        $error = "Please enter email";
    } elseif ($_POST['psw'] == '') {
        $error = "Please enter password";
    } else {
        $error = "successfully Submit form";
    }
}
?>


<p> <?php
    if ($error) {

        echo $error;
    }
    ?> </p>
<form action="" method="post" autcomplete="off">
    <div class="container">
        <h1>Login Form</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <br/>

        <input type="text" placeholder="Enter Email" name="email" >
        <br/>
        <br/>


        <input type="text" placeholder="Enter Password" name="psw" >

        <br/><br/>


        <input type="submit" name="submit" value="Submit"/>
    </div>


</form>