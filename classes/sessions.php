<?php 
class sessions{
public $ids;
public $id_user;
public $date_add;


public function addIds(){
$this->delSession();
$this->delIds();
Db::getInstance()->Execute("INSERT INTO sessions SET
                            ids = '".$this->ids."',
							id_user = '".$this->id_user."',
							date_add = '".$this->date_add."'");
}

public function delIds(){

$stamp = mktime(date("H")-2,date("i"),date("s"),date("m"),date("d"),date("Y"));
$date = date("Y-m-d H:i:s",$stamp);
Db::getInstance()->Execute("DELETE FROM sessions WHERE date_add <='".$date."'");
}


public function delSession(){
Db::getInstance()->Execute("DELETE FROM sessions WHERE ids <='".$this->ids."'");
}


public function lookIds(){
		$result = Db::getInstance()->getRow("SELECT * FROM sessions WHERE ids ='".$this->ids."'");
		if (!$result)
		  return false;
		
		foreach ($result AS $key => $value)
			if (key_exists($key, $this))
				$this->{$key} = $value;
		return $this;
}

}
?>