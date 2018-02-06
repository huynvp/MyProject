<?php
	class Model
	{
		private $_conn = null;
		
		function __construct() {
			$this->Open();
		}

		function __destruct() {
			$this->Close();
		}
		
		public function GetError() {
			return $this->_conn->error;
		}
		
		private function Open() {
			if($this->_conn == null) {
				$this->_conn = new mysqli(ROOT_HOST, ROOT_USER, ROOT_PASS, ROOT_DB);
				if($this->_conn->connect_errno)
					die('<h1>Fail connect to Database: ' . $this->_conn->connect_errno . ', please try agin :p</h1>');
				mysqli_set_charset($this->_conn,"utf8");
			}
		}

		private function Close() {
			if($this->_conn != null) {
				$this->_conn->close();
			}
		}

		public function Insert($table, $column, $values) {
			$sql = "INSERT INTO " . $table . " (" . $column . ") VALUES (" . $values . ");";
			return $this->_conn->query($sql);
		}

		public function Update($table, $data, $where) {
			$sql = "UPDATE " . $table . " SET " . $data . " WHERE " . $where;
			$this->_conn->query($sql);
		}

		public function Delete($table, $where) {
			$sql = "DELETE FROM ". $table . " WHERE ". $where;
			return $this->_conn->query($sql);
		}

		public function GetList($sql) {
			$result = $this->_conn->query($sql);
			if(!$result) {
				die ("Câu truy vấn bị sai");
			}			
			$return = array();
			while($row = $result->fetch_assoc()) {
				$return[] = $row;
			}
			$result->close();
			return $return;
		}

		public function GetRow($sql) {
			$result = $this->_conn->query($sql);
			if(!$result) {
				echo "<b>Câu truy vấn bị sai: </b>" . $this->_conn->error;
            } else {
                $row = $result->fetch_assoc();
			    $result->close();
            }
			if($row) {
				return $row;
			} else {
				return false;
			} 
		}

		public function GetNumRow($sql) {
			$result = $this->_conn->query($sql);
			if(!$result) {
				die("<b>Câu truy vấn bị sai: </b>" . $this->_conn->error);
			}
			$row = $result->num_rows;
			$result->close();
			if($row) {
				return $row;
			} else {
				return false;
			} 
        }
        
        public function GetMaxId($colum, $table, $where = 1) {
            $sql = "SELECT Max(". $column .") AS MaxId FROM ". $table ." WHERE " . $where;
            $result = $this->_conn->query($sql);
            if(!$result) {
				die("<b>Câu truy vấn bị sai: </b>" . $this->_conn->error);
			}
            $row = $result->fetch_assoc();
            $result->close();
            if($row) {
				return $row['MaxId'];
			} else {
				return -1;
			}
        }

        public function RealEscapeString($string) {
        	return $this->_conn->real_escape_string($string);
        }
	}
?>