<?php 
class Book_Model{
	
	private static function getDB(){
		$db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
		if(mysqli_connect_errno()){
			die('Не смогу подключится к серверу');
		}
				
		$db->set_charset("utf8");
		$db->query("SET SQL_MODE = ''");
				
		return $db;
	}
	
	public static function getBook($id = ''){
		$db = Book_Model::getDB();
	
		$sql = "select p.title as 'publisher', p.id as 'publisher_id', " . 
				"b.title as 'title', " .
				"CONCAT(a.first_name, ' ', a.last_name) as 'author', a.id as 'auth_id', " .
				"b.publish_year as 'pub_year' " .
				"from  book as b JOIN author as a on b.author_id = a.id " .
				"JOIN publisher as p on b.publisher_id = p.id " .
				"ORDER BY publisher";
		
		$res = $db->query($sql);
		$to_ret = [];
		
		if (!$db->errno) {
			if($res instanceof mysqli_result){
				
				while(($curr_res = $res->fetch_assoc())){
					$to_ret[] = $curr_res;
				}
				
				$res->close();						
			}
		}else {
			echo $db->error;
		}
		
		return $to_ret;
	}

	
	public static function getAuthors($id = ''){
		$db = Book_Model::getDB();
		
		$sql = "select a.id, CONCAT(a.first_name, ' ', a.last_name) as 'author' from author as a";
		
		$res = $db->query($sql);
		$to_ret = [];
		
		if (!$db->errno) {
			if($res instanceof mysqli_result){
		
				while(($curr_res = $res->fetch_assoc())){
					$to_ret[] = $curr_res;
				}
		
				$res->close();
			}
		}else {
			echo $db->error;
		}
		
		return $to_ret;
	}
	
	public static function getPublishers($id = ''){
		$db = Book_Model::getDB();
		
		$sql = "select * from publisher as a";
		
		$res = $db->query($sql);
		$to_ret = [];
		
		if (!$db->errno) {
			if($res instanceof mysqli_result){
		
				while(($curr_res = $res->fetch_assoc())){
					$to_ret[] = $curr_res;
				}
		
				$res->close();
			}
		}else {
			echo $db->error;
		}
		
		return $to_ret;
	}
	
	public static function writeBook($book_nane, $quthor_id, $publisher_id, $pub_year){
	
	}
	
}
?>