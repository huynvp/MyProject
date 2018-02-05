<form action="?controller=teacher&action=add" method="POST" role="form">
    <legend>Thêm giáo viên</legend>

    <div class="form-group row">
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Tên giáo viên</label>
            <input type="text" class="form-control" name="full_name" placeholder="Họ tên">
        </div>
        
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
        </div>        
    </div>

    <div class="form-group row">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <label for="">Ngày sinh</label>
            <input type="date" class="form-control" name="birthday">
        </div>
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
            <label for="">Email</label>
            <input type="text" class="form-control" name="mail" placeholder="Email">
        </div>
        
    </div>
    <div class="form-group row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <label for="">Loại giáo viên</label>
            <select name="type" class="form-control">
                <?php
                    foreach ($this->GetType as $key => $value) {
                        echo '<option value="'.$value['ID'].'">'.$value['NAME'].'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <label for="">Tài khoản đăng nhập</label>
            <input type="text" class="form-control" name="user" placeholder="Tài khoản đăng nhập">
        </div>
    </div>
    <button type="submit" name="btn" class="btn btn-primary">Thêm</button>
    <a class="btn btn-warning" href="?controller=teacher" role="button">Quay về trang chủ</a>
</form>
