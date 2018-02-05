<?php
    if(!isset($_SESSION['user']))
        header('location:?controller=user&action=login');
?>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <button type="button" class="btn btn-info btn-lg">Danh sách lớp</button>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <button type="button" class="btn btn-info btn-lg">Danh sách giáo viên</button>
    </div>
</div>

<div class="row content">
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 box">
        <h1>Nội dung</h1>
    </div>

    
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">Giáo viên tiêu biểu</a>
            <a href="#" class="list-group-item">Giáo viên 1</a>
            <a href="#" class="list-group-item">Giáo viên 2</a>
            <a href="#" class="list-group-item">Giáo viên 3</a>
            <a href="#" class="list-group-item">Giáo viên 4</a>
            <a href="#" class="list-group-item">Giáo viên 5</a>
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item active">Học sinh tiêu biểu</a>
            <a href="#" class="list-group-item">Học sinh 1</a>
            <a href="#" class="list-group-item">Học sinh 2</a>
            <a href="#" class="list-group-item">Học sinh 3</a>
            <a href="#" class="list-group-item">Học sinh 4</a>
            <a href="#" class="list-group-item">Học sinh 5</a>
        </div>                    
    </div>
</div>