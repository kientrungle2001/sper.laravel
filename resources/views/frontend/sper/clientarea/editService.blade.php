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
<div class="container">
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
            <div class="panel panel-default" ng-controller="Sper.ClientArea.EditService">
                <div class="panel-heading">
                     Sửa dịch vụ 
                </div>
                <div class="panel-body">
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
                                            <button class="btn btn-success" ng-click="updateServiceImg()" data-dismiss="modal">
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
                    <form>
                        <div class="form-group">
                            <div class="relative hover-content" style="height: 200px; overflow: hidden;">
                                <input class="hide" type="file" id="serviceImg" onchange="handleServiceUpload(event)" />
                                <button class="absolute hover-inner btn btn-success" style="bottom: 40%; right: 40%; z-index: 1" onclick="jQuery('#serviceImg').click();">
                                    Đổi ảnh đại diện
                                </button>
                                <img class="img-responsive" src="%%service.serviceimg || 'http://placehold.it/1366x300'%%" />
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>
                                Mô tả dịch vụ
                            </h2>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập tên công ty / cửa hàng / đội nhóm" ng-model="service.servicename" value="Điện thoại Di Động 101" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" placeholder="Chọn lĩnh vực" ng-model="service.categoryid" ng-options="category.categoryid as category.categoryname for category in categories">
                                 
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" placeholder="Chọn thành phố" ng-model="service.address_identifier.addcityid" ng-options="city.addcityid as city.addcityname for city in cities" ng-change="selectCity()">
                                 
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" placeholder="Chọn quận huyện" ng-model="service.address_identifier.addmunicipalityid" ng-options="municipality.addmunicipalityid as municipality.addmunicipalityname for municipality in selectedCity.districts" ng-change="selectDistrict()">
                                 
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập địa chỉ chính" ng-model="service.address_identifier.addressname" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Chọn định vị" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Số chi nhánh" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập số điện thoại" ng-model="service.phone" value="0123456789" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập Email" ng-model="service.email" value="kientrungle2001@gmail.com" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Mô tả chi tiết" rows="5" ng-model="service.servicedesc"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" ng-click="update()">
                                Hoàn thành
                            </button>
                            <a class="btn btn-default" href="/clientarea/service">
                                Quay lại
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>