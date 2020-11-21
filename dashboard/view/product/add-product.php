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

    .form-control {
      height: 35px;
      width: 200px;
    }

    .ten {
      font-size: 15pt;
    }

    .luu,
    .danhsach {
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

    .form-group {
      text-align: center;
      margin-bottom: 10px;
    }

    .chon {
      height: 40px;
      width: 200px;
    }
  </style>
</head>
<div class="iconhome">
  <a href="index.php?ctrl=product"><i class="fa fa-archive" style="font-size: 30px;"></i> Sản Phẩm </a>
</div>

<div class="container-table">
  <div class="tieude">
    THÊM SẢN PHẨM
  </div>
  <table class="card-body">
    <form action="index.php?ctrl=product&action=add" method="post" enctype="multipart/form-data">

      <tr class="form-group">
        <td><label class="ten">Tên Sản Phẩm</label></td>

        <td> <input type="text" name="nameProduct" class="form-control" placeholder=" Tên sản phẩm ">
        </td>
      </tr>
      <tr class="form-group">
        <td> <label class="ten"> Loại Sản Phẩm </label></td>
        <td> <select name="catalogId" class="chon">
            <?php
            foreach ($showCatalogs as $cate) {
              echo '<option value="' . $cate['maLoai'] . '"> ' . $cate['tenLoai'] . '-' . $cate['form'] . ' </option>';
            }
            ?>
          </select></td>
      </tr>
      <tr class="form-group">
        <td><label class="ten">Hình ảnh</label></td>
        <td> <input type="file" name="imageProduct" class="form-control"></td>
      </tr>
      <tr class="form-group">
        <td> <label class="ten">Số lượng</label></td>
        <td> <input type="number" name="quantity" class="form-control"></td>
      </tr>
      <tr class="form-group">
        <td><label class="ten">Giá</label></td>
        <td><input type="number" name="price" class="form-control"></td>
      </tr>
      <tr class="form-group">
        <td> <label class="ten">Giảm giá</label></td>
        <td> <input type="number" name="discount" class="form-control"></td>
      </tr>
      <tr class="form-group">
        <td> <label class="ten">Thương hiệu</label></td>
        <td> <input type="text" name="brand" class="form-control"></td>
      </tr>
      <tr class="form-group">
        <td><label class="ten">Mô tả</label>
          </td>
        <td> <textarea id="moTa" name="moTa" rows="4" cols="50"></textarea></td>
      </tr>
      <tr class="form-group">
        <td> <label class="ten">Ngày nhập</label></td>
        <td> <input type="date" name="date" class="form-control"></td>
      </tr>
      <tr class="form-group">
        <td> <label class="ten">Đặc Biệt</label></td>
        <td> <input type="number" name="special" class="form-control" min=0, max="1"></td>
      </tr>
      <tr class="form-group">
        <td> <label class="ten">Trạng Thái</label></td>
        <td> <input type="number" name="status" class="form-control" min=0, max="1"></td>
      </tr>
      <tr class="form-group">
        <td> <button type="submit" class="luu">Lưu</button>
          <a href="#" class="danhsach">Danh sách</a></td>
      </tr>

    </form>
  </table>
</div>