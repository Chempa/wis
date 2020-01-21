<?php 
	class Admin
	{
		
		function __construct()
		{
			$this->id = "";
			$this->pass = "";
		}

		public function auth($con,$id, $pass)
		{
			$ret = $this->get($con, $id);
			if($ret == NULL){
				return 0;
			}else{
				if($ret->pass == $pass){
					return 1;
				}
				return 0;
			}
		}

		public function setUser($con,$pid,$id,$pass){
			$query = "
				Update admins
				SET id = '$id', pass = '$pass'
				where id = '$pid'
				";
			$result = mysqli_query($con,$query) or die(mysqli_error());
			if($result){
				return 1;
			}else{
				return 0;
			}
		}

		public function get($con, $id)
		{
			$query = "
				select * from admins
				where id = '$id'";
			$result = mysqli_query($con,$query) or die(mysqli_error());
			$rows = mysqli_num_rows($result);
			$u = new Admin();
			if($row = mysqli_fetch_assoc($result)){
                $u->id = $row['id'];
                $u->pass = $row['pass'];
			}else{
				return NULL;
			}
			return $u;

		}
	}
?>