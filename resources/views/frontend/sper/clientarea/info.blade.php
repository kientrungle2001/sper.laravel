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
<div class="container" ng-controller="Sper.ClientArea.Info">
    <div tabindex="-1" role="dialog" class="modal fade" id="previewModal">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Xem trước
                </div>
                <div class="modal-body">
                    <img class="img-responsive" id="previewImg" />
                    <input type="hidden" id="base64Img" />
                </div>
                <div class="modal-footer">
                    <div class="clearfix">
                        <div class="pull-left">
                            <button class="btn btn-success" ng-click="updateInfoImage()" data-dismiss="modal">
                                Cập nhật
                            </button>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-danger" data-dismiss="modal">
                                Đóng lại
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                     Thông tin tài khoản 
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Ảnh đại diện
                            </label>
                            <div class="col-md-9">
                                <img class="img-circle" style="width: 64px; height: auto;" id="userAvatar" src="%% user.avatar || 'http://placehold.it/64x64'%%" />
                                <div class="mt-3">
                                    <button class="btn btn-primary" onclick="jQuery('#avatarSelector').click(); return false;">
                                        Đổi ảnh đại diện
                                    </button>
                                    <input class="hide" type="file" id="avatarSelector" onchange="handleServiceUpload(event)" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Tên đăng nhập
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" ng-model="user.user_identifier.username" readonly="readonly" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Tên hiển thị
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" ng-model="user.fullname" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Số điện thoại
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" ng-model="user.phone" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Email
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" ng-model="user.email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Địa chỉ
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" ng-model="user.address_identifier.addressname" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Thành phố
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" ng-model="user.address_identifier.city" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3" mdo="3">
                                <button class="btn-block btn btn-success" ng-click="update()">
                                    Cập nhật thông tin cá nhân
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>