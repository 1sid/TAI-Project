
<?php
 if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }

  include 'yhteys.php';



  if(isset($_POST['nappi'])){   
  
    $kayttaja = $_POST['kayttajatunnus'];
    $salasana = $_POST['salasana'];

	$kryptattu = md5($salasana);
	
	
	
	$kysely = $conn->prepare("SELECT id, username FROM $db.userinfo WHERE username = :kayttaja and password = :salasana");
	$kysely->execute(array(':kayttaja'=>$kayttaja, ':salasana'=>$kryptattu));
	$ky = $kysely->fetch(PDO::FETCH_ASSOC);
	


	if ($ky['id'] <> '')
	{ 
		$_SESSION["kt"]	= $ky['id'];
		?>

		

		<script>window.location.href = "index.html";</script>

	<?php 	
	}
	else
	{ ?>
		<script>

	
		// Faile Popup Message 
 		 alert("Failed to login. Check your username and password!");
		
			</script>
	<?php 	
	}
	
   }


    if(isset($_POST['save'])){   
  
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $salasana = $_POST['password'];
   

	$kryptattu = md5($salasana);



	

		$lisa = $conn->prepare("INSERT INTO $db.userinfo(first_name,last_name,username,email,phone,password)
			values (?,?,?,?,?,?)");
			$lisa->execute(array($firstname,$lastname,$username,$email,$phone,$kryptattu));
	
}

 



?>

<script>window.location.href = "signupafter.php";</script>

