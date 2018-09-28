<div class="container mt-3">
    <ol class="breadcrumb">
        <li>
            <a href="/">
                Trang chu
            </a>
        </li>
        <li class="active">
             Tai khoan 
        </li>
    </ol>
</div>
<div class="container" ng-controller="Sper.ClientArea.BranchService">
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
                     Dịch vụ của bạn 
                </div>
                <div class="panel-body">
                    <img class="img-responsive" src="http://placehold.it/1366x300" />
                    <div class="panel panel-default bd-none">
                        <div class="panel-body bd-none">
                            <h2>
                                Trần Thạch Cao Bảo Vy
                            </h2>
                            <div>
                                <strong>
                                    Công ty
                                </strong>
                                 Độ uy tín: 
                                <strong>
                                    345
                                </strong>
                                 
                            </div>
                            <div>
                                 Số 3 ngõ 295 Bạch Mai 
                            </div>
                            <div>
                                 Đã cam kết dịch vụ 
                            </div>
                            <div>
                                 2 chi nhánh 
                                <span class="glyphicon glyphicon-heart-o"></span>
                                 200 Đang mở cửa (Thời gian mở cửa: 7h - 17h) 
                            </div>
                        </div>
                        <div class="panel-footer bd-none">
                             Số điện thoại Chát Bình luận Lưu vào bộ sưu tập Hình ảnh Chia sẻ 
                        </div>
                    </div>
                    <div class="bd-1">
                        <ul type="tabs" class="nav nav-tabs">
                            <li role="presentation" class="active">
                                <a href="#">
                                    Tất cả
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#">
                                    Mới nhất
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#">
                                    Xem nhiều
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row-pd-5 row mt-3">
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading pd-0">
                                    <a href="/clientarea/product?prodid=%%product.prodid%%">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                                        </div>
                                    </a>
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
                                            <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="/clientarea/product?prodid=%%product.prodid%%">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                 Sửa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>