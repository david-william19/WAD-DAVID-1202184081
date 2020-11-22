<?php 
class Connect{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "wad_modul4";
	var $connect;
 
	function __construct(){
		$this->connect = mysqli_connect($this->connect, $this->username, $this->password,$this->database);
	}
 
 
	function register($nama, $email, $no_hp, $password)
	{	
		$insert_data = mysqli_query($this->connect,"INSERT INTO user VALUES ('','$nama','$email','$no_hp', '$password')");
		return $insert_data;
	}
 
	function login($email,$password,$remember)
	{
		$query = mysqli_query($this->connect,"SELECT * FROM user WHERE email='$email'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['id'] = $data_user['id'];
			$_SESSION['no_hp'] = $data_user['no_hp'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($email)
	{
		$query = mysqli_query($this->connect,"SELECT * FROM user WHERE email='$email'");
		$data_user = $query->fetch_array();
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
     }
     
     function addBarang($id, $barang, $harga){
          $query = mysqli_query($this->connect,"INSERT INTO cart VALUES ('', '$id', '$barang', '$harga')");
	}
	
	function showBarang($id){
		$query = mysqli_query($this->connect, "SELECT * FROM cart WHERE user_id='$id'");
		return $query;
	}

	function deleteBarang($id){
		$query = mysqli_query($this->connect, "DELETE FROM cart where id='$id'");
	}

	function showProfile($id){
		$query = mysqli_query($this->connect, "SELECT * FROM user WHERE id='$id'");
		return $query;
	}

	function updateProfile($nama,$email,$phone,$pass){
		$query = mysqli_query($this->connect,"UPDATE user SET nama='$nama',no_hp='$phone',password='$pass' WHERE email='$email'");
		session_start();
		$_SESSION['nama'] = $nama;
		return $query;
	}
} 
 
 
?>