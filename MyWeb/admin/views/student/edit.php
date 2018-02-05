<form action="" method="POST" role="form">
    <legend>Chỉnh sửa thông tin học sinh</legend>

    <div class="form-group row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <label for="">Mã học sinh</label>
            <input type="text" class="form-control" value="<?php echo $this->data['ID'] ?>" readonly name="id">
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <label for="">Họ và tên</label>
            <input type="text" class="form-control" placeholder = "Họ tên" value="<?php echo $this->data['FULL_NAME'] ?>" name="full_name">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Ngày sinh</label>
            <input type="date" class="form-control" value="<?php echo $this->data['BIRTHDAY'] ?>" name="birthday">
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" placeholder = "Địa chỉ" value="<?php echo $this->data['ADDRESS'] ?>" name="address">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder = "Email" value="<?php echo $this->data['MAIL'] ?>" name="mail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Tài khoản đăng nhập</label>
            <input type="text" class="form-control" placeholder = "Tài khoản đăng nhập" value="<?php echo $this->data['USERNAME'] ?>" readonly>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Trạng thái người dùng</label>
            <select name="status" class="form-control">
            <?php 
                if($this->data['STATUS'] == 0)
                    echo '<option selected value="0">Ngưng hoạt động</option> <option value="1">Còn hoạt động</option>';
                else echo '<option selected value="1">Còn hoạt động</option> <option value="0">Ngưng hoạt động</option>';
            ?>
            </select>
        </div>
    </div>
    <button name="btn" type="submit" class="btn btn-primary">Chỉnh sửa</button>
    <a class="btn btn-warning" href="?controller=student" role="button">Quay về trang chủ</a>
</form>


