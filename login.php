
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
 <h1>Connexion</h1>
 
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
     echo $username;
     
      $userc = $pdo->query("SELECT user_name, user_password FROM users_list where  user_name ='".$username."' and user_password = '".$password."' " );
      $userc->setFetchMode(PDO::FETCH_CLASS, 'Users');
      $res = $userc->fetch();
      if ($res == True){
          
          echo "exist";
          $_SESSION["user"]= $username;
          echo $_SESSION["user"];
          header('Location:  homepage.php'); 
          
      }else{
          header('Location:  singin.php');
      }
    }
   ?>   
 
 </body>
</html>