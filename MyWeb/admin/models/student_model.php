<?php
    class Student_Model extends Model
    {
    	function ShowOneStudent($id) {
    		return $this->GetRow("SELECT stu.*, lg.USERNAME FROM Student stu, Login lg WHERE stu.ID_LOGIN = lg.ID AND stu.ID = " . $id);
    	}
    }
    
?>