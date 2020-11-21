<!doctype html>
<?php
ob_start();
?>
<html lang="en">

<head>
    <title>Du An Mau</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .wrapper {
            float: left;
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .top-nav {
            box-shadow: 0 2px 4px 0 rgba(17, 17, 17, 0.1);
            min-height: 71px;
            display: flex;
        }

        .logo {
            float: left;
            line-height: 30px;
            min-height: 30px;
            padding: 20px;
            width: 18.6%;
            background-color: #263544;
            box-shadow: 0 2px 4px 0 rgba(17, 17, 17, 0.1);
        }

        .logo a {
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 15pt;
        }

        .right {
            float: left;
            line-height: 30px;
            min-height: 30px;
            padding: 16px;
            width: 76.4%;
        }

        .search {
            float: left;
            width: 40%;
            padding-left: 40px;
        }

        .search input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
            width: 90%;
            padding-left: 10px;
        }

        .login {
            float: right;
            margin-right: 100px;
        }

        .login a {
            text-decoration: none;
            font-size: 13pt;
            text-transform: uppercase;
            color: black;
        }

       

        ul {
            list-style-type: none;
            margin: 0;
            padding: 10px;
            background-color: #263544;
            height: 100%;
        }

        li a,
        .dropdown-btn {
            padding: 15px 8px 15px 20px;
            text-decoration: none;
            font-size: 15pt;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            font-family: 'Courier New', Courier, monospace;
            color: rgb(204, 201, 201);
        }

        li:hover {
            background-color: black;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #324355;
        }

        .dropdown-container a:hover {
            color: black;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 15px;
            color: white;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: black;
            color: white;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="fix">
            <div class="top-nav">
                <div class="logo"><a href="index2.php"> Admin Management</a></div>
                <div class="right">
                    <div class="search">
                        <i class="fa fa-search"></i><input type="text" placeholder="Search..">
                    </div>
                    <div class="login">
                        <i class="fa fa-user-circle" style="font-size: 25px;"></i> <a href="#"> Login </a>
                    </div>
                </div>
            </div>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-home"></i> Trang Chủ </a>
                    </li>
                    <li>
                        <a href="index.php?ctrl=catalog"><i class="fa fa-bars"></i> Danh mục </a>
                    </li>
                    <li> <button class="dropdown-btn"><i class="fa fa-archive"></i> Sản phẩm <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="index.php?ctrl=product&action=addnew"><i class="fa fa-plus-square"></i> Thêm sản phẩm </a>
                            <a href="index.php?ctrl=product"><i class="fa fa-television"></i> Quản lý sản phẩm </a>

                        </div>
                    <li>
                    <a href="index.php?ctrl=cart"><i class="fa fa-address-card-o"></i> Quản lý đơn hàng </a>
                    </li>

                        <script>
                            /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                            var dropdown = document.getElementsByClassName("dropdown-btn");
                            var i;

                            for (i = 0; i < dropdown.length; i++) {
                                dropdown[i].addEventListener("click", function() {
                                    this.classList.toggle("active");
                                    var dropdownContent = this.nextElementSibling;
                                    if (dropdownContent.style.display === "block") {
                                        dropdownContent.style.display = "none";
                                    } else {
                                        dropdownContent.style.display = "block";
                                    }
                                });
                            }
                        </script>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?ctrl=customer"><i class="fa fa-user"></i> Khách hàng </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-comments"></i> Bình luận </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php?ctrl=thongke"><i class="fa fa-pie-chart"></i> Thống kê </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <?php
            $ctrl = 'home';
            if (isset($_GET['ctrl'])) {
                $ctrl = $_GET['ctrl'];
            }
            include 'controller/'.$ctrl.'.php';
            ?>
        </div><!-- end container -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
ob_flush();
?>