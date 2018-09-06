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
                <div class="panel-heading pd-0">
                    <div class="thumbnail mg-0">
                        <img class="img-circle img-responsive" src="http://placehold.it/64x64" />
                        <div class="text-center caption">
                             Đinh Nhật Nam
                            <br />
                             
                            <small>
                                dinhnhatnam@gmail.com
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
                            <span class="fa fa-bookmark fa-2x"></span>
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
            <div class="panel panel-default" ng-controller="Sper.ClientArea.Service">
                <div class="panel-heading">
                     Dịch vụ của bạn 
                </div>
                <div class="panel-body">
                    <img class="img-responsive" src="%%service.serviceimg || 'http://placehold.it/1366x300' %%" />
                    <div class="row-pd-5 row mt-3">
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <h4>
                                            %%product.prodcode%%
                                        </h4>
                                    </a>
                                    <address>
                                        %%product.proddesc%%
                                    </address>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="far fa-heart fa-1x"></span>
                                             %%product.countLike%% 
                                            <span class="far fa-comments fa-1x"></span>
                                             %%product.listComment.length%% 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             %%product.countShare%% 
                                        </div>
                                        <div class="pull-right">
                                            <span class="glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <a href="/clientarea/product?prodid=%%product.prodid%%">
                                            Xem chi tiết
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn-block btn btn-success" href="/clientarea/createproduct?serviceid=%%service.serviceid%%">
                        Đăng sản phẩm
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>