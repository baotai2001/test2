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

    table {
      border-collapse: collapse;
      border: 1px solid;
    }

    table,
    th,
    td {
      padding: 10px;
      border: 1px solid;
    }
    .tenloai{
      width: 55%;
      padding-left: 4%;
    }
    table tr:nth-child(even){
        background-color: lightpink;
    }
    th{
      background-color: lightcoral;
    }
    .sua{
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
    #sua{
      width: 25%;
      padding-left: 37px;
    }
    .themmoi, .chonall{
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
      float:left;
    }
  </style>
</head>
<div class="iconhome">
  <a href="index.php?ctrl=catalog"><i class="fa fa-bars" style="font-size: 30px;"></i> Danh Mục </a>
</div>

<form action="index.php?ctrl=catalog&action=deleteCheckbox" method="post">
  <div class="">
    <div class="container-table">
      <div class="tieude">
        QUẢN LÝ LOẠI HÀNG
      </div>
      <table class="">
        <thead>
          <tr class="">
            <th></th>
            <th>Mã loại</th>
            <th class="tenloai">Tên loại</th>
            <th>Form</th>
            <th id="sua"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($showCatalogs as $value) {
            echo '<tr>
                  <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$value['maLoai'].'"></td>
                  <td>'.$value['maLoai'].'</td>
                  <td class="tenloai">'.$value['tenLoai'].'</td>
                  <td> '.$value['form'].'</td>
                  <td id="sua">
                    <a href="index.php?ctrl=catalog&action=delete&id='.$value['maLoai'].'" class="sua">Xoá</a>
                    <a href="index.php?ctrl=catalog&action=edit&id='.$value['maLoai'].'" class="sua">Sửa</a>
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
        <a href="index.php?ctrl=catalog&action=addnew" class="themmoi">Thêm mới</a>
      </div>
    </div>
  </div>

</form>

</html>