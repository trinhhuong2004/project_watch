<?php
//  session_start();

if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
// xoa hết sp trong gio hang
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);


if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $hinhanh = $_POST['hinhanh'];
    $tensp = $_POST['tensp'];
    $giagiam = $_POST['giagiam'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];

    // kiểm tra sp có trong gio hàng k

    $fl = 0; // kiem tra sp trung
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {

        if ($_SESSION['giohang'][$i][1] == $tensp) {
            $fl = 1;
            $soluongnew = $soluong + $_SESSION['giohang'][$i][4];
            $_SESSION['giohang'][$i][4] = $soluongnew;
            break;
        }
    }

    // k trung thi them moi
    if ($fl == 0) {
        $sp = [$hinhanh, $tensp, $giagiam, $gia, $soluong];
        $_SESSION['giohang'][] = $sp;
    }
}

// Delete

if (isset($_GET['del']) && ($_GET['del'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['del'], 1);
}



?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Giỏ hàng</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.php">Trang chủ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb area End -->

<!-- Main content wrapper start -->

<div class="main-content-wrapper">
    <div class="cart-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="cart-wrapper bg--2 mb--80 mb-md--60">
                <div class="row">
                    <div class="col-12">
                        <!-- Cart Area Start -->
                        <form action="post" class="form cart-form">
                            <div class="cart-table table-content table-responsive">
                                <table class="table mb--30">
                                    <thead>
                                        <tr>
                                            <th>Xóa</th>
                                            <th>Ảnh</th>
                                            <th>Sản phẩm</th>
                                            <th>Giá giảm</th>
                                            <th>Giá gốc</th>
                                            <th>Số lượng</th>
                                            <th>Thành Tiền</th>
                                            <th></th>
                                        </tr>



                                    </thead>
                                    <tbody>

                                        <?php
                                        echo show_giohang();
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">

                                <div class="col-12 text-md-right">
                                    <div class="cart-btn-group" style="display: flex; justify-content: space-between; margin-right: 30px;">
                                        <div class="box">
                                        <a href="index.php" class="btn btn-medium btn-style-3">Thêm sản phẩm</a>

                                        <a href="app/views/Client/giohang/?redirect=delcart=1"  class="btn btn-medium btn-style-3">XÓA HẾT</a>
                                        </div>
                                       
                                        <a href="index.php?redirect=thanhtoan"  class="btn btn-medium btn-style-3">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Checkout Area End -->
</div>
    <script>
    const checkboxes = document.querySelectorAll('input[type="radio"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkboxes.forEach(function(otherCheckbox) {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });
</script>