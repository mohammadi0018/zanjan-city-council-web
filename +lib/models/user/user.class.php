<?php

class USER {
	public $id;
	public $group;
	public $logedin;
	public $time;
	public $browser;
	public $ip;
	public $error;
	public $info;
	
	//### user function
	public function __construct()
	{
		$this->ip = $_SERVER['REMOTE_ADDR'];
		$this->browser = $_SERVER['HTTP_USER_AGENT'];
		$this->prepare();
	}
	
	public function __destruct()
	{}

	// add user
	function add($input, $user_type='admin')
	{
		global $db, $userconfig;
		$this->error = NULL;
		$username  = @trim($input['user_name']);
		$password = @$input['password'];
		
		
		
		
		$sql = "INSERT INTO tbl_username
				SET user_name='$input[user_name]',
					password='$password',
					user_type='$user_type'";
		$db->link->query($sql);
		
			
		////.................permission set.............
//
//		$last_user_code=$db->lastId();
//		foreach($input['permission'] as $key => $value)
//		{
//			list($page,$cmd)=explode(",",$value);
//			$access=1;
//			$sql = "INSERT INTO tbl_permission
//				SET  user_code='$last_user_code',
//					page='$page',
//					cmd='$cmd',
//					access='$access',
//					createDate=now()";
//					//echo $sql;
//			$db->link->query($sql);
//		}

	}//eofn

	public function prepare()
	{
		global $db;
		if(isset($_SESSION['id']) and isset($_SESSION['token'])) {
			$this->id = $_SESSION['id'];
			if($_SESSION['token']!=sha1($this->ip.$this->id)) {
				$this->id = 0;
			}else {
				$sql = "SELECT *
						FROM tbl_username
						WHERE id='$this->id'";
				$this->info = $db->getRow($sql);
			}	
		}
	}//eofn

	public function login($username, $password , $user_type)
	{
		global $db;
		//echo $username;
		$sql = "SELECT id 
				FROM tbl_username
				WHERE password='$password'
				AND user_name='$username'
				AND user_type='$user_type'";
			//echo $sql;
		$this->id = $db->getOne($sql);
		if($this->id){
			$_SESSION['token'] = sha1($this->ip.$this->id);
			$_SESSION['id'] = $this->id;
			$this->prepare();
			$this->logedin = 1;
			$this->time = date("Y-m-d H:i:s");
			return $this->id;
		}else{
			$this->logout();
			return 0;
		}
	}//eofn
	
	// user change password
	public function changePass($userid, $oldpassword, $password, $repassword, $admin=0)
	{
		global $db, $userconfig, $msg, $flag;
		$userid = @intval($userid);
		$password  = @(trim($password));
		$repassword = @(trim($repassword));
		$oldpassword = @sha1(trim($oldpassword));
		if($password==$repassword) {
			if(strlen($password) > 5 and strlen($password) <13 ) { 
				$sql = "SELECT password
						FROM tbl_username
						WHERE id='$userid'";
				$userpass=$db->getOne($sql);
				if($oldpassword==$userpass) {
					$sql = "UPDATE tbl_username
							SET password=sha1('$password')
							WHERE id='$userid'";
					if($db->link->query($sql)) {
						$msg='رمز عبور شما تغییر کرد.';
						$flag=0;
					}else {
						$msg='مشکلی در تغییر رمزعبور بوجود امده . لطفا دوباره تلاش کنید.';
					}
				}else {
					$msg='رمز عبور قبلی را اشتباه وارد کرده اید.';
				}
			}else {
				$msg='طول رمز عبور باید بین 6 تا 12 حرف یا عدد باشد.';
			}
		}else {
			$msg='تکرار رمز عبور جدید صحیح نیست.';
		}
		return $msg;

	}//eofn
	
	public function logout($redirect=NULL)
	{
		$_SESSION['id'] = NULL;
		session_unset();
		@session_destroy();
		if(!empty($redirect)){ 
			redirect($redirect);
		}
		$this->logedin = 0;
		return true;
	}

	public function getUserId($username)
	{
		global $db;
		$sql = "SELECT id
				FROM tbl_username
				WHERE userName='".$db->escapeSimple(strtolower(trim($username)))."'";
		$res = $db->getOne($sql);
		return $res;
	}
	
	public function getAll($params = '*', $order='createDate', $numPerPage='', $offset=0,$sql_where)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$limit = '';
		$userList = array();

		if(is_array($params))
			$params = implode(',', $params);

		if(!empty($numPerPage) and is_numeric($numPerPage)) {
			$limit = "LIMIT $offset, $numPerPage";
		}

		$sql = "SELECT *
				FROM tbl_username  
				where 1=1 $sql_where
				ORDER BY $order desc
				$limit";
				//echo $sql;
		$userList = $db->getAll($sql);
		if($userList and is_array($userList))
			return $userList;
	}
	
	
	public function checkPermission($user_code)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$limit = '';

		$sql = "SELECT *
				FROM tbl_permission 
				where id='$user_code'";
				//echo $sql;
		$userList = $db->getAll($sql);
		if($userList and is_array($userList))
			return $userList;
	}
	
	
	
	public function remove($user_code)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$limit = '';

		$sql = "delete
				FROM tbl_username 
				where id='$user_code'";
				//echo $sql;
		 $db->query($sql);
		 
		// $sql = "delete
//				FROM tbl_permission
//				where user_code='$user_code'";
//				//echo $sql;
//		 $db->query($sql);
		
	}
	

}

?>