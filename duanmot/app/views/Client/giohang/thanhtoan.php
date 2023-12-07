<?php
    if(isset($_SESSION['taikhoan'])){
        $tk = $_SESSION['taikhoan'];
    }

?>
<div class="main-content-wrapper">
    <div class="checkout-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- User Action Start -->

                    <!-- User Action End -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Area Start -->
                    <div class="checkout-wrapper bg--2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout-title">
                                    <h2>Địa chỉ nhận hàng</h2>
                                </div>
                                <form action="index.php?act=bill" class="form" method="POST">
                                <div class="checkout-form">
                                    
                                        <div class="form-row mb--30">
                                            <div class="form__group col-md-12 mb-sm--30">
                                                <label for="billing_fname" class="form__label">Họ Và Tên: <span>*</span></label>
                                                <input type="text" name="billing_fname" id="billing_fname" class="form__input form__input--2" value="<?= isset($tk['name']) ? $tk['name'] : '' ?>"">
                                            </div>
                                        </div>
                                        <div class="form-row mb--30">
                                            <div class="form__group col-12">
                                                <label for="billing_streetAddress" class="form__label">Địa Chỉ: <span>*</span></label>
                                                <input type="text" name="billing_streetAddress" id="billing_streetAddress" class="form__input form__input--2">
                                            </div>
                                        </div>
                                        <div class="form-row mb--30">
                                            <div class="form__group col-md-12 mb-sm--30">
                                                <label for="billing_phone" class="form__label">Số Điện Thoại: <span>*</span></label>
                                                <input type="text" name="billing_phone" id="billing_phone" class="form__input form__input--2" >
                                            </div>
                                            <div class="form__group col-md-12">
                                                <label for="billing_email" class="form__label">Email: <span></span></label>
                                                <input type="email" name="billing_email" id="billing_email" class="form__input form__input--2" value="<?= isset($tk['email']) ? $tk['email'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form__group col-12">
                                                <label for="orderNotes" class="form__label">Ghi Chú:</label>
                                                <textarea class="form__input form__input--2 form__input--textarea" id="orderNotes" name="orderNotes" placeholder="Ghi Chú..."></textarea>
                                            </div>
                                        </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md--30">
                                <div class="order-details">
                                    <h3 class="heading-tertiary">Thông tin đơn hàng</h3>
                                    <div class="order-table table-content table-responsive mb--30">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Sản Phẩm</th>
                                                    <th>Giá Tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <?php 
                                                $sum = 0;
                                                foreach (($_SESSION['giohang']) as $gh) {
                                                    $sum += $gh[2];
                                                    echo '
                                                    <td> <strong>'.$gh[1].'</strong>x'.$gh[4].'</td>
                                                    <td>'.$gh[2].'</td>
                                                </tr>';
                                                }
                                                echo '<tr class="order-total">
                                                <th>Tổng Đơn Hàng</th>
                                                <td><span class="order-total-ammount">'.$sum.'</span></td>
                                            </tr>';
                                                ?>
                                            
                                            </tbody>
                                            <tfoot>
                                           
                                                
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="checkout-payment">
                                    <div class="payment-btn-group">
                                    <div class="checkout-payment">
                                                    <div class="payment-group">
                                                        
                                                        <h5>Chọn phương thức thanh toán</h5> <br>
                                                        
                                                        <div class="custom-radio payment-radio">
                                                        <input style="width: 20px;" id="option1" type="radio" value="1" name="payment_method" />
                                                        <label class="payment-label" for="option1">Thanh Toán Khi Nhận Hàng</label>
                                                        </div> <br>

                                                        <div class="custom-radio payment-radio">
                                                        <input style="width: 20px;" id="option2" type="radio" value="2" name="payment_method" />
                                                        <label class="payment-label" for="option2">Thanh toán VNPAY</label>
                                                        </div> <br>

                                                        <div class="custom-radio payment-radio">
                                                        <input style="width: 20px;" id="option3" type="radio" value="3" name="payment_method" />
                                                        <label class="payment-label" for="option3">Thanh toán Momo</label>
                                                        </div> <br>

                                                      
                                                    </div>
                                                </div>
                                <a href="index.php?redirect=bill"><input name="dongydathang" type="submit" class="btn btn-style-3" value="Đặt hàng"></a>
                                </form>
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
    </div>
</div>
