      
<html>

<head>
  <style>
    .iconhome a {
      text-transform: uppercase;
      text-decoration: none;
      color: #263544;
    }

    .container-table {
      margin-top: 30px;
      float: left;
      padding: 15px;
      box-shadow: 0 2px 8px 0 rgba(17, 17, 17, 0.1);
      margin-left: 150px;
    }

    .tieude {
      margin-bottom: 10px;
      color: #4489f5;
      font-weight: bolder;
      text-align: center;
      font-size: 15pt;
    }
    .form-control{
      height: 35px;
      width: 200px;
    }
    .ten{
      font-size: 15pt;
    }
    .luu, .danhsach{
      width: 100px;
      background-color: #d23551;
      color: white;
      text-decoration: none;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: 30px;
      border-radius: 5px;
      margin: 5px;
      float: left;
    }
    .form-group{
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>
<div class="iconhome">
  <a href="index.php?ctrl=catalog"><i class="fa fa-bars" style="font-size: 30px;"></i> Danh Mục </a>
</div>
      <div class="container-table">
        <div class="tieude">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=catalog&action=update" method="post">
            <div class="form-group">
                <label class="ten">Mã danh mục</label>
                <input type="text" value="<?php echo $id ?>" readonly name="id" class="form-control">
              </div>
              <div class="form-group">
                <label class="ten">Tên danh mục</label>
                <input type="text" value="<?php echo $cate['tenLoai'] ?>" name="nameCata" class="form-control">
              </div>
              <div class="form-group">
              <label class="ten">Form</label>
                <input type="text" value="<?php echo $cate['form'] ?>" name="form" class="form-control">
              </div>
              <div class="form-group">
                  <button type="submit" class="luu">Cập nhật</button>
                  <a href="index.php?ctrl=catalog" class="danhsach">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
</html>
