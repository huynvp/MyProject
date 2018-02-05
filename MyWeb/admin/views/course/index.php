<h3>Quản lí môn học</h3>
<a class="btn btn-lg btn-info" href="#" role="button">Thêm môn học mới</a>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã môn học</th>
                <th>Tên môn học</th>
                <th>Giáo viên</th>
                <th>Số học sinh</th>
                <th>Số học sinh tối đa</th>
                <th>Học kì mở</th>
                <th>Năm học</th>
                <a href=""></a>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($this->data as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$value['ID']."</td>";
                    echo "<td><a href='?controller=course&action=detail&id=".$value['ID']."'>".$value['NAME']."</a></td>";
                    echo "<td>".$value['FULL_NAME']."</td>";
                    echo "<td>".$value['STUDENTS']."</td>";
                    echo "<td>".$value['MAX_STUDENT']."</td>";
                    echo "<td>".$value['SEMESTER']."</td>";
                    echo "<td>".$value['START_YEAR']. " - " . $value['END_YEAR'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>