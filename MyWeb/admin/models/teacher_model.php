<?php
    class Teacher_Model extends Model
    {
        function showTypeTeacher() {
			return $this->GetList("SELECT * FROM Note");
        }

        function showOneTeacher($id) {
			return $this->GetRow("SELECT tea.*, lg.USERNAME FROM Teacher tea, Login lg WHERE tea.ID_LOGIN = lg.ID AND tea.ID = " . $id);
		}
    }
    
?>