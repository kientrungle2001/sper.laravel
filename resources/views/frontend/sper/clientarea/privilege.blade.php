<div class="container mt-3">
    <ol class="breadcrumb">
        <li>
            <a href="/">
                Trang chủ
            </a>
        </li>
        <li class="active">
             Tài khoản 
        </li>
    </ol>
</div>
<div class="container" ng-controller="Sper.ClientArea.Privilege">
    <div class="row-pd-5 row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading pd-0" ng-controller="Sper.ClientArea.User">
                    <div class="thumbnail mg-0">
                        <a href="/clientarea/info">
                            <img class="img-circle img-responsive" style="width: 64px; height: auto;" src="%% user.avatar || 'http://placehold.it/64x64' %%" />
                        </a>
                        <div class="text-center caption">
                            <a href="/clientarea/info">
                                %%user.fullname%%
                            </a>
                            <br />
                            <small>
                                %%user.email%%
                            </small>
                        </div>
                    </div>
                </div>
                <ul class="account-menu list-group">
                    <li class="active list-group-item">
                        <a href="/clientarea/info">
                            <span class="fa fa-user fa-2x"></span>
                             Thông tin tài khoản
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/changepassword">
                            <span class="fa fa-user fa-2x"></span>
                             Đổi mật khẩu
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/trophy">
                            <span class="fa fa-trophy fa-2x"></span>
                             Điểm thưởng
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/payment">
                            <span class="fa fa-credit-card fa-2x"></span>
                             Thanh toán
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/collection">
                            <span class="bookmark-scale fa fa-bookmark fa-2x"></span>
                             Bộ sưu tập
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/service">
                            <span class="fa fa-cubes fa-2x"></span>
                             Dịch vụ của bạn
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/privilege">
                            <span class="fa fa-user fa-2x"></span>
                             Phân quyền chi nhánh
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/feedback">
                            <span class="fa fa-inbox fa-2x"></span>
                             Góp ý
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/clientarea/history">
                            <span class="fa fa-history fa-2x"></span>
                             Lịch sử
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/logout">
                            <span class="fa fa-power-off fa-2x"></span>
                             Thoát
                        </a>
                    </li>
                </ul>
                <div class="panel-footer pd-0">
                    <a class="btn-block btn btn-success" href="/clientarea/createservice">
                         Tạo dịch vụ 
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                     Phân quyền chi nhánh 
                </div>
                <div class="panel-body">
                    <div class="row-pd-5 row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form>
                                        <h2>
                                            Chi nhánh 1
                                        </h2>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đổi ảnh đại diện 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đổi mật khẩu 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Gửi tin nhắn trả lời Support SPER 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Thêm sửa xóa sản phẩm ở chi nhánh 1 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đặt hàng 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Tạo / Sửa / Xóa Chi nhánh 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đánh giá / Lưu / Share / Call / Viết blog 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Thanh toán 
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form>
                                        <h2>
                                            Chi nhánh 1
                                        </h2>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đổi ảnh đại diện 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đổi mật khẩu 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Gửi tin nhắn trả lời Support SPER 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Thêm sửa xóa sản phẩm ở chi nhánh 1 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đặt hàng 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Tạo / Sửa / Xóa Chi nhánh 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đánh giá / Lưu / Share / Call / Viết blog 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Thanh toán 
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form>
                                        <h2>
                                            Chi nhánh 1
                                        </h2>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đổi ảnh đại diện 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đổi mật khẩu 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Gửi tin nhắn trả lời Support SPER 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Thêm sửa xóa sản phẩm ở chi nhánh 1 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đặt hàng 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Tạo / Sửa / Xóa Chi nhánh 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Đánh giá / Lưu / Share / Call / Viết blog 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                 Thanh toán 
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>