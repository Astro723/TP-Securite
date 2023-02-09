
<?php
include('connexion.php');

?> 

<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="" method="POST">
 <h1>sign in</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <button type="submit" name="submit"  id='submit'  >submit</button>

 </form>
 </div>
 <?php
 if(isset($_POST['submit'])){
    
     $username = $_POST['username']; 
     $password = $_POST['password'];
     
      $userc = $pdo->query("INSERT INTO users_list (user_name, user_password)
        VALUES ('".$username."', '".$password."')");
      $_SESSION["user"]= $username;
      header('Location:  homepage.php'); 
      
     
      
                
              

     
     
     
 }
 
 
 
 ?>  
    
 </body>
</html>