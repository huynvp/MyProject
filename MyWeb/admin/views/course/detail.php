<?php
    $col_json_decode = json_decode($this->course['COLUMNS']); //columns is decode to json
?>
<h3>Chi tiết môn học</h3>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#infomation">Thông báo</a></li>
        <li><a data-toggle="tab" href="#score">Bảng điểm</a></li>
        <li><a data-toggle="tab" href="#columns">Cột điểm</a></li>
    </ul>

    <div class="tab-content">
        <div id="infomation" class="tab-pane fade in active">
            <h3>Thông báo</h3>
            
            <div class="panel panel-success">
                <div class="panel-heading">
                        <h3 class="panel-title">Thông báo 1</h3>
                </div>
                <div class="panel-body">
                        Công việc
                </div>
            </div>
            
        </div>

        <div id="score" class="tab-pane fade">
            <h3>Bảng điểm</h3>
            <a class="btn btn-success btn-sm" href="?controller=course&action=report" role="button">In bảng điểm</a>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Họ tên</th>
                            <th>Điểm trung bình</th>
                            <th>Kết quả</th>
                            <th>Chi tiết điểm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div id="columns" class="tab-pane fade">
            <h3>Cập nhật tên cột điểm</h3>
            <form action="" method="POST" role="form">            
                <div class="form-group row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 1</label>
                        <input type="hidden" name="id" value="<?php echo $this->course['ID'];?>">
                        <input type="text" class="form-control" name="col1" placeholder="Cột 1" value="<?php echo $col_json_decode->col1?>">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 2</label>
                        <input type="text" class="form-control" name="col2" placeholder="Cột 2" value="<?php echo $col_json_decode->col2?>">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 3</label>
                        <input type="text" class="form-control" name="col3" placeholder="Cột 3" value="<?php echo $col_json_decode->col3?>">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 4</label>
                        <input type="text" class="form-control" name="col4" placeholder="Cột 4" value="<?php echo $col_json_decode->col4?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 5</label>
                        <input type="text" class="form-control" name="col5" placeholder="Cột 5" value="<?php echo $col_json_decode->col5?>">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 6</label>
                        <input type="text" class="form-control" name="col6" placeholder="Cột 6" value="<?php echo $col_json_decode->col6?>">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 7</label>
                        <input type="text" class="form-control" name="col7" placeholder="Cột 7" value="<?php echo $col_json_decode->col7?>">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 8</label>
                        <input type="text" class="form-control" name="col8" placeholder="Cột 8" value="<?php echo $col_json_decode->col8?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 9</label>
                        <input type="text" class="form-control" name="col9" placeholder="Cột 9" value="<?php echo $col_json_decode->col9?>">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tên cột điểm 10</label>
                        <input type="text" class="form-control" name="col10" placeholder="Cột 10" value="<?php echo $col_json_decode->col10?>">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for=""></label><br>
                        <button type="submit" class="btn btn-primary btn-block" name="btn_columns">Thay đổi</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    
    <div class="row">
        <ul lass="list-group">
            <li class="list-group-item active"><?php echo 'Môn học: ' . $this->course['NAME'] ?></li>
            <li class="list-group-item"><?php echo 'Giáo viên phụ trách: ' . $this->course['FULL_NAME'] ?></li>
            <li class="list-group-item">
                <?php echo 'Học kì: ' . $this->course['SEMESTER'] . '. ';?>
                <?php echo 'Năm học: ' . $this->course['START_YEAR'] . ' - ' . $this->course['END_YEAR']?>
            </li>
        </ul>
    </div>
    
    
    <div class="row">
        <ul lass="list-group">
            <li class="list-group-item active">Thông báo mới nhất</li>
            <?php 
                for ($i=0; $i < 5; $i++) { 
                    echo '<li class="list-group-item">Thông báo '.($i+1).'</li>';
                }
            ?>
        </ul>
    </div>

    <div class="row">
        <ul lass="list-group">
            <li class="list-group-item active">Học sinh cao điểm nhất</li>
            <?php 
                for ($i=0; $i < 10; $i++) { 
                    echo '<li class="list-group-item">Học sinh '.($i+1).'</li>';
                }
            ?>
        </ul>
    </div>
</div>
