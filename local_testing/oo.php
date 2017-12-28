
<?php

//if(isset($_COOKIE['agent_id'])){
//    header('Location: dashboard.php');
//}
//?>

<?php

 require_once('config/config.php');   
 require_once('classes/user.php');

// server code

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['email'])){
      $email = $_POST['email'];   
    }
    if(isset($_POST['password'])){
      $password = $_POST['password'];  
    }

    if(!empty($email) && !empty($password)){
      $user = new User();
      $response = $user->login($email,$password);
      
      if($response['statusCode'] == 200){
        header('Location: dashboard.php');
      }
      
      else{   
       echo '<script language="javascript">';
       echo 'alert("incorrect credentials")';
       echo '</script>'; 
    
      }

    }
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HelpDesk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" href="images/icon.png" type="image/x-icon"/> 
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/login.js"></script>
  	<script src="js/jquery-3.2.1.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  </head>

<body>
<a href="dashboard.php">test dashboard link </a>
    <div class="container">
          <div class="card card-container">            
            <img id="profile-img" class="profile-img-card" src="images/agent.png" />
            <p id="profile-name" class="profile-name-card">Agent Login</p>
            <form class="form-signin" method="POST"  >
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <button class="btn-signin" type="submit">Sign in</button>
            </form>
        </div><!-- /card-container -->
    </div><!-- /container --> 
</body>


<script type="text/javascript">

</script>



</html>
