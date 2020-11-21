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
        QUẢN LÝ KHÁCH HÀNG
      </div>
      <table class="">
        <thead>
          <tr class="">
            <th></th>
            <th style="width: 50px;">Mã người dùng</th>
            <th class="tenloai">Tên người dùng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Username</th>
            <th>Password</th>
            <th>Vai trò</th>
            <th>Số lượt mua hàng</th>
            <th>Trạng thái</th>
            <th id="sua"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($showCustomer as $value) {
            echo '<tr>
                  <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="' . $value['maND'] . '"></td>
                  <td>' . $value['maND'] . '</td>
                  <td class="tenloai">' . $value['tenND'] . '</td>
                  <td> ' . $value['email'] . '</td>

                  <td> ' . $value['sdt'] . '</td>
                  <td> ' . $value['diaChi'] . '</td>
                  <td> ' . $value['userName'] . '</td>

                  <td> ' . $value['passWord'] . '</td>';
            if ($value['vaiTro']==1){
                echo '
                    <td>Admin</td>
                ';
            }
            else echo '<td>Customer</td>';
               echo '  
                  <td> ' . $value['soLuotMuaHang'] . '</td>
                  <td> ' . $value['trangThai'] . '</td>
                  
                  <td id="sua">
                    <a href="index.php?ctrl=product&action=delete&id=' . $value['maND'] . '" class="sua">Xoá</a>
                    <a href="index.php?ctrl=product&action=edit&id=' . $value['maND'] . '" class="sua">Sửa</a>
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