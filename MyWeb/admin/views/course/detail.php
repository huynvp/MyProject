<?php 
    echo '<pre>';
    print_r($this);
    echo '</pre>';
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
        <h3>Có <?php echo $this->course['NUM_COLUMNS']?> cột điểm</h3><hr>
        <a class="btn btn-sm btn-success" href="#" role="button">Thêm cột điểm</a>
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
