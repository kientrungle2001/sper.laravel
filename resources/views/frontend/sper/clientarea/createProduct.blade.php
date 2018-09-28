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
            <div class="panel panel-default" ng-controller="Sper.ClientArea.CreateProduct">
                <div class="panel-heading">
                     Đăng sản phẩm 
                </div>
                <div class="panel-body">
                    <form ng-submit="create()">
                        <div class="form-group">
                            <div class="relative" style="height: 200px; overflow: hidden;">
                                <h2 class="text-white text-center absolute w-100-p" style="bottom:15px; z-index: 1">
                                    %%service.servicename%%
                                </h2>
                                <img class="img-responsive" src="%% service.serviceimg || 'http://placehold.it/1366x300'%%" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập tên sản phẩm" ng-model="prodcode" value="Samsung J7 Pro" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Giá" ng-model="price" value="200000" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Đơn vị" ng-model="unit" value="chiếc" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" placeholder="Chọn lĩnh vực" ng-model="categoryid" ng-options="subCategory.categoryid as subCategory.categoryname for subCategory in category.children">
                                <option>
                                    Chọn lĩnh vực
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Mô tả chi tiết" rows="5" ng-model="proddesc"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">
                                Hoàn thành
                            </button>
                            <a class="btn btn-default" href="/clientarea/service">
                                Trở về
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>