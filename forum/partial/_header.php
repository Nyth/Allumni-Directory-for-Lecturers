 <?php
session_start();
if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
    
}
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <button class="btn btn-dark mx-2">
        <a class="nav-link" href="http://localhost/alumn/public">Home <span class="sr-only">(current)</span></a>
      </button>
      <button class="btn btn-dark mx-2">
        <a class="nav-link" href="index.php">Forum <span class="sr-only">(current)</span></a>
      </button>
     
    </ul>
    <div class=" row mx-2">';
    if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
        echo '<form class="form-inline my-2 my-lg-0"  method="get" action="search.php">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
     <p class="text-light my-0 mx-2"> Welcome '.$_SESSION['useremail'].'  </p>
     <a href="partial/_logout.php" class="btn btn-success mx-2" >Logout</a></form>';
    }
            else{echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="btn btn-success mx-2 "data-toggle="modal" data-target="#loginModal">Login</button>
    <button class="btn btn-success"data-toggle="modal" data-target="#signupmodal">Sign Up</button>';
                 
                 
                
            }
    

   
    
 echo '</div>
</nav>';
include 'partial/loginModal.php';
    include 'partial/signupmodal.php';
    ?>
<?php
if(isset($_GET['signupsuccess'])&& $_GET['signupsuccess']=="true"){
echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>SUCCESS!</strong> You can now login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'
;
}
?>