<?php
	class User
	{
		function __construct()
		{
			$this->firstname = "";
			$this->lastname = "";
			$this->othername = "";
			$this->email = "";
			$this->phone = "";
			$this->category = "";
			$this->ismajor = "";
			$this->institution = "";
			$this->program = "";
		}
		public function insert($con,$obj)
		{
			if($this->get($con,$obj) == NULL){
				$query = "
				INSERT INTO 
				users (firstname, lastname, othername, email, phone, category, ismajor, institution, program) 
				VALUES ('{$obj['firstname']}', '{$obj['lastname']}', '{$obj['othername']}', '{$obj['email']}', '{$obj['phone']}', '{$obj['category']}', '{$obj['ismajor']}', '{$obj['institution']}', '{$obj['program']}');";
				$result = mysqli_query($con,$query) or die(mysql_error());
				if($result){
					$this->firstname = $obj['firstname'];
					$this->lastname = $obj['lastname'];
					$this->othername = $obj['othername'];
					$this->email = $obj['email'];
					$this->phone = $obj['phone'];
					$this->category = $obj['category'];
					$this->ismajor = $obj['ismajor'];
					$this->institution = $obj['institution'];
					$this->program = $obj['program'];
					return 1;
				}
				return -1;
			}else{
				return 0;
			}
		}
		public function all($con)
		{
			$query = "select * from users";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			$all_users = array(); 
			while($row = mysqli_fetch_assoc($result)){
				$u = new User();
				$u->firstname = $row['firstname'];
				$u->lastname = $row['lastname'];
				$u->othername = $row['othername'];
				$u->email = $row['email'];
				$u->phone = $row['phone'];
				$u->category = $row['category'];
				$u->ismajor = $row['ismajor'];
				$u->institution = $row['institution']; 
				$u->program = $row['program']; 
				array_push($all_users, $u);
			} 
			return $all_users;
		}
		public function get($con,$obj){
			$query = "
				select * from users
				where email = '{$obj['email']}'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			$u = new User();
			if($row = mysqli_fetch_assoc($result)){
                $u->firstname = $row['firstname'];
				$u->lastname = $row['lastname'];
				$u->othername = $row['othername'];
				$u->email = $row['email'];
				$u->phone = $row['phone'];
				$u->category = $row['category'];
				$u->ismajor = $row['ismajor'];
				$u->institution = $row['institution'];
				$u->program = $row['program'];
			}else{
				return NULL;
			}
			return $u;
		}
		public function getall($con,$query)
		{ 
			$result = mysqli_query($con,$query) or die(mysqli_error($con));
			$rows = mysqli_num_rows($result);
			$all_users = array(); 
			while($row = mysqli_fetch_assoc($result)){
				$u = new User();
				$u->firstname = $row['firstname'];
				$u->lastname = $row['lastname'];
				$u->othername = $row['othername'];
				$u->email = $row['email'];
				$u->phone = $row['phone'];
				$u->category = $row['category'];
				$u->ismajor = $row['ismajor'];
				$u->institution = $row['institution']; 
				$u->program = $row['program']; 
				array_push($all_users, $u);
			} 
			return $all_users;
		}
	}
?>