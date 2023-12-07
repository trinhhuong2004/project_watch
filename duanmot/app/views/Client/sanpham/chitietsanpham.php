<!-- Breadcumb area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Chi tiết sản phẩm</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li class="current"><a href="">Product Detalis Tab Style One</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="single-products-area section-padding section-md-padding">
        <div class="container">
            <!-- Single Product Start -->

            <section class="mirora-single-product pb--80 pb-md--60">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Tab Content Start -->
                        <div class="tab-content product-details-thumb-large" id="myTabContent-3">
                            <div class="tab-pane fade show active" id="product-large-one">
                                <div class="product-details-img ">
                                    <?php
                                    $ctsp = all_ct_sanpham();
                                    foreach ($ctsp as $row) :
                                        extract($row);
                                    ?>
                                        <a class="popup-btn" href="public/images/<?= $hinh_anh ?>">
                                        <?php endforeach; ?>
                                        <img src="public/images/<?= $hinh_anh ?>" alt="product">
                                        </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-two">
                                <div class="product-details-img ">
                                    <a class="popup-btn" href="assets/img/products/4-900x900.jpg">
                                        <img src="assets/img/products/4-900x900.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-three">
                                <div class="product-details-img ">
                                    <a class="popup-btn" href="assets/img/products/5-900x900.jpg">
                                        <img src="assets/img/products/5-900x900.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-four">
                                <div class="product-details-img ">
                                    <a class="popup-btn" href="assets/img/products/6-900x900.jpg">
                                        <img src="assets/img/products/6-900x900.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-five">
                                <div class="product-details-img ">
                                    <a class="popup-btn" href="assets/img/products/10-900x900.jpg">
                                        <img src="assets/img/products/10-900x900.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content End -->

                        <!-- Product Thumbnail Carousel Start -->
                        <div class="product-details-thumbnail">
                            <div class="thumb-menu product-details-thumb-menu nav-vertical-center" id="thumbmenu-horizontal">
                                <div class="thumb-menu-item">
                                    <a href="#product-large-one" data-bs-toggle="tab" class="nav-link active">
                                        <img src="assets/img/products/3-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#product-large-two" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/products/4-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#product-large-three" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/products/5-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#product-large-four" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/products/6-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#product-large-five" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/products/10-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Thumbnail Carousel End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Single Product Content Start -->
                        <div class="product-details-content">
                            <div class="product-details-top">
                                <h2 class="product-details-name"><?= $name ?></h2>
                                <div class="ratings-wrap">
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>
                                        <a class="review-btn" href="#singleProductTab">1 Reviews</a>
                                        <a class="review-btn" href="#singleProductTab">write a review</a>
                                    </span>
                                </div>
                                <ul class="product-details-list list-unstyled">
                                    <li>Brand: <a href="#">Apple</a></li>
                                    <table border="1" style="border-collapse: collapse;">
                                        <tr>

                                            <th style="border: 1px solid white;padding:10px;">màu sắc</th>
                                            <th style="border: 1px solid white;padding:10px;">chất liệu</th>
                                            <th style="border: 1px solid white;padding:10px;">trọng lượng</th>
                                            <th style="border: 1px solid white;padding:10px;">kích thước</th>
                                            <th style="border: 1px solid white;padding:10px;">phụ kiện</th>
                                            <th style="border: 1px solid white;padding:10px;">khuyến mãi</th>
                                            <th style="border: 1px solid white;padding:10px;">tình trạng</th>
                                            <th style="border: 1px solid white;padding:10px;">bảo hành</th>
                                        </tr>
                                        <tr>
                                            <?php
                                            $ctsp = all_ct_sanpham();
                                            foreach ($ctsp as $row) :
                                                extract($row);
                                            ?>
                                                <td style="border: 1px solid white;padding:5px;"><?= $mau_sac ?></td>
                                                <td style="border: 1px solid white;padding:5px;"><?= $chat_lieu ?></td>
                                                <td style="border: 1px solid white;padding:5px;"><?= $trong_luong ?> gam</td>
                                                <td style="border: 1px solid white;padding:5px;"><?= $kich_thuoc ?></td>
                                                <td style="border: 1px solid white;padding:5px;"><?= $phu_kien ?></td>
                                                <td style="border: 1px solid white;padding:5px;"><?= $khuyen_mai ?></td>
                                                <td style="border: 1px solid white;padding:5px;"><?= $tinh_trang ?></td>
                                                <td style="border: 1px solid white;padding:5px;"><?= $bao_hanh ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    </table>


                                    <div class="product-content text-center">
                                        <?php
                                        $ctsp = all_ct_sanpham();
                                        foreach ($ctsp as $row) :
                                            extract($row);
                                        ?>
                                            <span>Cartier</span>
                                            <h4><a href=""><?= $name ?></a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$<?= $gia_giam ?></span>
                                                <span class="product-price-old">
                                                    <span class="money">$<?= $gia ?></span>
                                                </span>
                                            </div>
                                            <div class="product-price-wrapper"><?= $mo_ta ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                </ul>

                            </div>

                            <div class="product-details-bottom">
                                <div class="product-details-action-wrapper mb--20">
                                    <div class="product-details-action-top d-flex align-items-center mb--20">
                                        <div class="quantity">
                                            <span>SL: </span>
                                            <input type="number" class="quantity-input" name="qty" id="pro_qty" value="1" min="1">
                                        </div>
                                       <a href="index.php?redirect=giohang"> <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                            Thêm vào giỏ hàng
                                        </button></a>
                                    </div>

                                    <div class="social-share">
                                        <a href="https://facebook.com/" target="_blank" rel="noopener noreferrer" class="facebook share-button">
                                            <i class="fa fa-facebook"></i>
                                            <span>Like</span>
                                        </a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" class="twitter share-button">
                                            <i class="fa fa-twitter"></i>
                                            <span>Tweet</span>
                                        </a>
                                        <a href="#" class="share share-button">
                                            <i class="fa fa-plus-square"></i>
                                            <span>Share</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
            </section>
            <style>
                .hienthibinhluan {
                    max-height: 300px;
                    /* Điều chỉnh chiều cao của vùng hiển thị */
                    overflow-y: auto;
                    /* Hiển thị thanh cuộn khi nội dung vượt quá chiều cao */
                    border: 1px solid #ccc;
                    border-radius: 8px;
                    padding: 10px;
                    position: relative;
                }



                .load-more {
                    text-align: center;
                    padding: 10px;
                    cursor: pointer;
                    background-color: #f1f1f1;
                    border-radius: 5px;
                    margin-top: 10px;
                }
              .hienthibinhluan  .mot-binhluan span {
    display: inline-block;
    margin-bottom: 5px; /* Thêm margin để tạo khoảng cách giữa các phần tử */
}

            </style>

            <div class="binhluan">
                <?php
                // Kiểm tra xem người dùng đã đăng nhập hay chưa bằng cách kiểm tra có tồn tại id hay không
                if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                ?>
                    <div class="vietbinhluan">
                        <form action="index.php?redirect=guibinhluan&id=<?= $_GET['id'] ?>" method="post">
                            <input type="hidden" name="id_san_pham" value="<?= $id ?>"> <!-- Giá trị ID sản phẩm -->
                            <input type="hidden" name="id_tai_khoan" value="<?= $_SESSION['id'] ?>"> <!-- Giá trị ID tài khoản -->
                            <input type="text" name="ngay_binh_luan" value="<?php $ngay_binh_luan = date('Y-m-d');
                                                                            echo $ngay_binh_luan ?>" hidden>
                            <label for="noi_dung">Nội dung bình luận:</label><br>
                            <textarea id="noi_dung" name="noi_dung_binh_luan" rows="4" cols="50" placeholder="Viết bình luận..."></textarea><br>
                            <label for="danh_gia">Đánh giá:</label><br>
                            <select id="danh_gia" name="danh_gia">
                                <option value="5">5 sao</option>
                                <option value="4">4 sao</option>
                                <option value="3">3 sao</option>
                                <option value="2">2 sao</option>
                                <option value="1">1 sao</option>
                            </select><br><br>
                            
                            <input type="submit" value="Gửi bình luận" name="guibinhluan">
                        </form>
                    </div>
                <?php } else { ?>
                    <a href="index.php?redirect=dangnhap">Vui lòng đăng nhập để bình luận</a>
                    
                <?php } ?>

                <div class="hienthibinhluan">
                    <?php
                    if(isset($_GET['id'])){
                        $binhluan = load_one_binhluan($_GET['id']);
                    }
                    
                    foreach ($binhluan as $row) :
                        extract($row);
                       
                    ?>
                        <tr>
                            <div class="mot-binhluan">
                                <span>ID tài khoản:</span> <br>
                                <span class="info" id="id_tai_khoan"> <?= $_SESSION['id'] ?> </span><br><br>
                                <span>Ngày bình luận:</span><br>
                                <span class="info" id="ngay_binh_luan"> <?= $ngay_binh_luan ?> </span><br><br>
                                <span>Nội dung bình luận:</span><br>
                                <span class="info" id="noi_dung_binh_luan"> <?= $noi_dung_binh_luan ?> </span><br><br>
                                <span>Đánh giá (số sao):</span> <br>
                                <span class="info" id="danh_gia"> <?= $danh_gia ?> </span><br><br>
                            </div>
                        <?php
                    endforeach;
                        ?>

                        <div class="load-more" style="display: none;">Hiển thị thêm</div>
                </div>
            </div>

            </div>

        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hienthibinhluan = document.querySelector('.hienthibinhluan');
        const allBinhluan = hienthibinhluan.querySelector('.all-binhluan');
        const loadMore = hienthibinhluan.querySelector('.load-more');

        const binhluanItems = [];
        let currentIndex = 0;
        const showMoreComments = () => {
            const showCount = 3;
            for (let i = currentIndex; i < currentIndex + showCount; i++) {
                if (binhluanItems[i]) {
                    binhluanItems[i].style.display = 'block';
                }
            }
            currentIndex += showCount;
            if (currentIndex >= binhluanItems.length) {
                loadMore.style.display = 'none';
            }
        };
        showMoreComments();
        hienthibinhluan.addEventListener('scroll', function() {
            if (hienthibinhluan.scrollTop === 0) {
                showMoreComments();
            }
        });
    });
</script>