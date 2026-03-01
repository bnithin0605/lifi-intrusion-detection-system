<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-black">

  <a class="navbar-brand" href="/security/welcome.php">PFC System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link"href="/security/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>'
    ;

      if(!$loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/security/login.php">Login</a>
      </li>
      ';
      echo '<li class="nav-item">
      <a class="nav-link" href="/security/register.php">Register</a>
    </li>
    ';
      }
  
    
  if($loggedin){
    echo '  <li class="nav-item">
      <a class="nav-link" href="/security/logout.php">Logout</a>
    </li>';}
       
      
    echo '</ul>
    
  </div>
</nav>';
?>
