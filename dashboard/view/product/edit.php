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
    <form action="index.php?ctrl=product&action=update" method="post" enctype="multipart/form-data" onsubmit="return validateform()" >
      <div class="form-group">
        <label>Mã SP</label>
        <input type="text" readonly name="id" value="<?php echo $id ?>" class="form-control" placeholder="Mã SP tự phát sinh">
      </div>
      <div class="form-group">
        <tr class="form-group">
          <td><label class="ten">Tên Sản Phẩm</label></td>

          <td> <input type="text" name="nameProduct" class="form-control" value="<?php echo $product['tenSP'] ?>" placeholder=" Tên sản phẩm ">
          </td>
        </tr>
        <tr class="form-group">
          <td> <label class="ten"> Loại Sản Phẩm </label></td>
          <td> <select name="catalogId" class="chon">
              <?php
              foreach ($catalogs as $cate) {
                echo '<option value="' . $cate['maLoai'] . '"> ' . $cate['tenLoai'] . '-' . $cate['form'] . ' </option>';
              }
              ?>
            </select></td>
        </tr>
        <tr class="form-group">
          <td><label class="ten">Hình ảnh</label></td>
          <td> <input type="file" name="imageProduct" class="form-control" value="<?php echo $product['img'] ?> "></td>
        </tr>
        <tr class="form-group">
          <td> <label class="ten">Số lượng</label>
          <div id="loisoluong"></div></td>
          <td> <input type="text" name="quantity" class="form-control" value="<?php echo $product['soLuong'] ?> " id="quantity"></td>
            
        </tr>
        <tr class="form-group">
          <td><label class="ten">Giá</label> <div id="loigia"></div></td>
          <td><input type="text" name="price" class="form-control" value="<?php echo $product['donGia'] ?> " id="price"></td>
          
        </tr>
        <tr class="form-group">
          <td> <label class="ten">Giảm giá</label> <div id="loidiscount"></div></td>
          <td> <input type="text" name="discount" class="form-control" value="<?php echo $product['giamGia'] ?> " id="discount"></td>
          
        </tr>
        <tr class="form-group">
          <td> <label class="ten">Thương hiệu</label></td>
          <td> <input type="text" name="brand" class="form-control" value="<?php echo $product['brand'] ?> " ></td>
        </tr>
        <tr class="form-group">
          <td><label class="ten">Mô tả</label>
          </td>
          <td> <textarea id="moTa" name="moTa" rows="4" cols="50" value="<?php echo $product['moTa'] ?> "></textarea></td>
        </tr>
        <tr class="form-group">
          <td> <label class="ten">Ngày nhập</label></td>
          <td> <input type="date" name="date" class="form-control" value="<?php echo $product['ngayNhap'] ?> "></td>
        </tr>
        <tr class="form-group">
          <td> <label class="ten">Đặc Biệt</label> <span id="loidacbiet"></span></td>
          <td> <input type="text" name="special" class="form-control" min=0, max="1" value="<?php echo $product['dacBiet'] ?> " id="special"></td>
          
        </tr>
        <tr class="form-group">
          <td> <label class="ten">Trạng Thái</label>
          <span id="loistatus"></span></td>
          <td> <input type="text" name="status" class="form-control" min=0, max="1" value="<?php echo $product['trangThai'] ?> " id="status"></td>
         
        </tr>
        <tr class="form-group">
          <td> <button type="submit" class="luu" onclick="validateform()">Lưu</button>
            <a href="#" class="danhsach">Danh sách</a></td>
        </tr>

    </form>
  </table>
  <script>
    function validateform(){
      count=0;
      num = parseFloat(document.getElementById("quantity").value);
      if(isNaN(num)== true){
        document.getElementById("loisoluong").innerText="Vui lòng nhập số";
        count++;
        return false;
      } 
      num1 =parseFloat(document.getElementById("price").value);
      if(isNaN(num1)== true){
        document.getElementById("loigia").innerText="Vui lòng nhập số";
        //count++;
        return false;
      } 
      num2 =parseFloat(document.getElementById("discount").value);
      if(isNaN(num2)== true){
        document.getElementById("loidiscount").innerText="Vui lòng nhập số";
        count++;
        return false;
      } 
      num3 = parseInt(document.getElementById("special").value);
      if(isNaN(num3)==true){
        document.getElementById("loidacbiet").innerText="Vui lòng nhập số ";
        count++;
        return false;
      }
      else if(num3 !=1 && num3 !=0){
        document.getElementById("loidacbiet").innerText="Vui lòng nhập 1 hoặc 0";
        count++;
        return false;
      }
      num4 = parseInt(document.getElementById("status").value);
      if(isNaN(num4)==true){
        document.getElementById("loistatus").innerText="Vui lòng nhập số ";
        count++;
        return false;
      }
      else if(num4 !=1 && num4 !=0){
        document.getElementById("loistatus").innerText="Vui lòng nhập số 1 hoặc 0 ";
        count++;
        return false;
      }
      if(count==0){ 
        return true;}
    }
  </script>
</div>