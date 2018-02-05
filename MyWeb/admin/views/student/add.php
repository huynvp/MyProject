<form action="" method="POST" role="form">
    <legend>Thêm học sinh</legend>

    <div class="form-group row">
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" name="full_name" placeholder="Họ tên">
        </div>
        
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <label for="">Tài khoản đăng nhập</label>
            <input type="text" class="form-control" name="user" placeholder="Tài khoản đăng nhập">
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
        </div>
    </div>
    <button type="submit" name="btn" class="btn btn-primary">Thêm</button>
    <a class="btn btn-warning" href="?controller=student" role="button">Quay về trang chủ</a>
</form>
