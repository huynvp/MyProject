<?php
    class Course_Model extends Model
    {
        public function ShowOnceCourse($id) {
            $sql  = "SELECT course.*, teacher.FULL_NAME, school_year.* ";
            $sql .= "FROM course, teacher, school_year ";
            $sql .= "WHERE teacher.ID = course.TEACHER AND school_year.ID = course.SCHOOL_YEAR";
            return $this->GetRow($sql);
        }
    }
    
?>