<html>

<head>
  <style>
    .iconhome a {
      text-transform: uppercase;
      text-decoration: none;
      color: #263544;
    }

    .container-table {
      width: 82%;
      margin-top: 30px;
      float: right;
      padding: 5px;
      box-shadow: 0 2px 8px 0 rgba(17, 17, 17, 0.1);
      margin-right: 50px;
    }

    .tieude {
      margin-bottom: 10px;
      color: #4489f5;
      font-weight: bolder;
      text-align: center;
      font-size: 15pt;
    }

    table {
      border-collapse: collapse;
      border: 1px solid;
    }

    table,
    th,
    td {
      width: auto;
      padding: 10px;
      border: 1px solid;
    }

    .tenloai {
      width: 10%;
      padding-left: 4%;
    }

    table tr:nth-child(even) {
      background-color: lightpink;
    }

    th {
      background-color: lightcoral;
    }

    .sua {
      width: 50px;
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

    #sua {
      width: 10%;
      padding-left: 37px;
    }

    .themmoi,
    .chonall {
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
  </style>
</head>
<div class="iconhome">
  <a href="index.php?ctrl=product"><i class="fa fa-bars" style="font-size: 30px;"></i> Danh Mục </a>
</div>

<form action="#" method="post">
  <div class="">
    <div class="container-table">
      <div class="tieude">
        QUẢN LÝ HÀNG HÓA
      </div>
      <table class="">
        <thead>
          <tr class="">
            <th></th>
            <th style="width: 50px;">Mã sản phẩm</th>
            <th class="tenloai">Tên sản phẩm</th>
            <th>Mã loại</th>
            <th>Form</th>
            <th>Tên loại</th>
            <th>Image</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Giảm giá</th>
            <th>Brand</th>
            <th>Mô tả</th>
            <th>Ngày nhập </th>
            <th>Số lượt xem </th>
            <th>Số lượng đã bán </th>
            <th id="sua"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($showProducts as $value) {
            echo '<tr>
                  <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="' . $value['maSP'] . '"></td>
                  <td>' . $value['maSP'] . '</td>
                  <td class="tenloai">' . $value['tenSP'] . '</td>
                  <td> ' . $value['maLoai'] . '</td>

                  <td> ' . $value['form'] . '</td>
                  <td> ' . $value['tenLoai'] . '</td>
                  <td><img src="images/' . $value['img'] . '" style="width:100px"></td>
                  <td> ' . $value['soLuong'] . '</td>
                  <td> ' . $value['donGia'] . '</td>
                  <td> ' . $value['giamGia'] . '</td>
                  <td> ' . $value['brand'] . '</td>
                  <td> ' . $value['moTa'] . '</td>
                  <td> ' . $value['ngayNhap'] . '</td>
                  <td> ' . $value['soLuotXem'] . '</td>
                  <td> ' . $value['soLuongDaBan'] . '</td>
                  
                  <td id="sua">
                    <a href="index.php?ctrl=product&action=delete&id=' . $value['maSP'] . '" class="sua">Xoá</a>
                    <a href="index.php?ctrl=product&action=edit&id=' . $value['maSP'] . '" class="sua">Sửa</a>
                  </td>
                </tr>';
          }
          ?>
        </tbody>
      </table>
      <div class="btn">
        <input type="button" class="chonall" onclick='selectAll()' value="Chọn tất cả">
        <script language="JavaScript">
          function selectAll() {
            var items = document.getElementsByName('chonX[]');
            for (var i = 0; i < items.length; i++) {
              if (items[i].type == 'checkbox')
                items[i].checked = true;
            }
          }
        </script>
        <input type="button" class="chonall" onclick='UnSelectAll()' value="Bỏ chọn">
        <script>
          function UnSelectAll() {
            var items = document.getElementsByName('chonX[]');
            for (var i = 0; i < items.length; i++) {
              if (items[i].type == 'checkbox')
                items[i].checked = false;
            }
          }
        </script>
        <button type="submit" class="chonall">Xoá danh mục đã chọn</button>
        <a href="index.php?ctrl=product&action=addnew" class="themmoi">Thêm mới</a>
      </div>
    </div>
  </div>

</form>

</html>