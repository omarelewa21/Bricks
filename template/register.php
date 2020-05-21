<?php
#database connection


if(isset($_POST['submitted'])==1){
    $q = "INSERT INTO users (first,last,email,password,status) VALUES ('$_POST[first]', '$_POST[last]', '$_POST[email]', SHA1('$_POST[password]'), '1')";
    $r = mysqli_query($db_connect,$q);
    
    if($r){
        echo 'Success';
         
    }else{
        echo 'Failed';
    }
  
}

?>
               
               
               
               <div class="form-container sign-up-container">
                <form action="index.php" role="form" method="post">

                    <h1>Create Account</h1>
                    
                    
                    <input type="text" placeholder="First Name" name="first" />
                    <input type="text" placeholder="Last Name" name="last" />
                    <input type="email" placeholder="Email" name="email"/>
                    <input type="password" placeholder="Password" name="password" />
                    <button>Sign Up</button>
                    <input type="hidden" name="submitted" value="1">
                </form>
            </div>