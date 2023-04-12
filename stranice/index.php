<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
  <?php
  $ime = $jmbg1 = "";
  $imeErr = $jmbgErr = "";
  $i=0;
  $j=0;
  $servername = "sql307.epizy.com";
  $username = "epiz_33177876";
  $password = "xBgLnmYdLsxJXnT";
  $dbname = "epiz_33177876_glasanje";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
    /*if(isset($_POST["submit"]))
    {
        $ime = $_POST["ime"];
        $jmbg = $_POST["jmbg"];
    }*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (empty($_POST["ime"])) 
      {
        echo '<script>alert("Ime je obavezno!")</script>';
      } 
      else 
      {
        $ime1 = $_POST["ime"];
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$ime1)) 
        {
          echo '<script>alert("Neispravno ime!")</script>';
        }
        else
        {
          $i++;
        }
      }
      if (empty($_POST["jmbg"])) 
      {
        echo '<script>alert("JMBG je obavezan!")</script>';
      }
      else
      {
        $jmbg1=$_POST["jmbg"];
        if(strlen($jmbg1)!=13)
        {
          echo '<script>alert("JMBG je neispravan!")</script>';
        }
        else
        {
          $i++;
        }
      }
    }
    /*function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }*/
    $sql = "SELECT jmbg FROM myguests";
    $result = mysqli_query($conn, $sql);
    //$i checks if there are any errors
    if($i==2)
    {
      $select = mysqli_query($conn, "SELECT jmbg FROM myguests WHERE jmbg = '".$_POST['jmbg']."'") or exit(mysqli_error($conn));
      if(mysqli_num_rows($select)) 
      {
        echo '<script>alert("Glasac sa ovim jmbg-om je vec glasao!")</script>';
      }
      else
      {
        $_SESSION["ime"]=$ime1;
        $_SESSION["jmbg"]=$jmbg1;
        
        header("Location: glasanje.php");
        exit();
      }
    }
  ?>
<div class="wrapper">
  <div id="formContent">

    <div>
      <img src="https://us.123rf.com/450wm/nabiev7art/nabiev7art2104/nabiev7art210400090/168216740-blue-flat-checkmark-icon-vector-badge-of-ok-warranty-approved-accept-checked-and-quality-.jpg?ver=6" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="text" name="ime" placeholder="Ime i prezime">
      <input type="text" name="jmbg"  placeholder="JMBG">
      <input type="submit" value="Log In">
</form>
  </div>
</div>
</body>
</html>
