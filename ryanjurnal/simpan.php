<?php 
/**
 * 
 */
class oop
{
	private $user;
	private $pass;
	private $email;
	private $que;
	private $connn;
	function __construct($user1,$pass2,$repas3,$email4)
	{
		include 'koneksi.php';
		
		if (!is_numeric($user1)) {
			$this->user = $user1;
		}
		if ($pass2==$repas3|| strlen($pass2)<=6) {
			$this->pass = $pass2;
		}else{
			echo "Pass anda tidak sama dengan yang sebelumnya";
		}
		if (substr($email4,-10)=="@gmail.com") {
			$this->email = $email4;
		}
		if (isset($this->user)&&isset($this->pass)&&isset($this->email)) {
			$this->connn = $conn;
			$this->que = mysqli_query($this->connn,"INSERT INTO user(id, name, email, pass) VALUES ('','$this->user','$this->email','$this->pass')");
			if (!$this->que) {
				die("GAGAL");
			}else{
				echo "Berhasil";
				header("Location:index.php");
			}
		}
	
	}
}
if (isset($_POST['send'])) {
$c = new oop($_POST['user'],$_POST['pass'],$_POST['repas'],$_POST['email']);
}
 ?>