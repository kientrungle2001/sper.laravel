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
            <div class="panel panel-default" ng-controller="Sper.ClientArea.EditProduct">
                <div class="panel-heading">
                     Sửa sản phẩm 
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
                                            <button class="btn btn-success" ng-click="updateProductImg()" data-dismiss="modal">
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
                    <form ng-submit="update()">
                        <div class="form-group">
                            <div class="relative" style="height: 200px; overflow: hidden;">
                                <h2 class="text-white text-center absolute w-100-p" style="bottom:15px">
                                    %%service.servicename%%
                                </h2>
                                <img class="img-responsive" src="%% service.serviceimg || 'http://placehold.it/1366x300'%%" />
                            </div>
                        </div>
                        <div class="form-group" id="productImages">
                            <div class="clearfix">
                                <div class="pull-left product-image-item" ng-repeat="image in product_images">
                                    <span class="absolute pointer glyphicon glyphicon-remove-sign" style="top: 5px; right: 5px; color: red;" ng-click="removeProductImg($index)"></span>
                                    <img class="img-responsive" src="%%image.path%%" />
                                </div>
                                <div class="pull-left product-image-item">
                                    <div style="padding-top: 25px;">
                                        <input class="hide" type="file" id="productUploader" onchange="handleServiceUpload(event)" />
                                        <a href="#" onclick="jQuery('#productUploader').click(); return false;">
                                            <span class="glyphicon glyphicon-plus"></span>
                                             Thêm
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nhập tên sản phẩm" ng-model="product.prodcode" value="Samsung J7 Pro" />
                        </div>
                        <div ng-repeat="attribute in product.attributeset_identifier.attrsetvalue">
                            <div ng-switch="ng-switch" on="attribute.attrvaluename">
                                <div ng-switch-when="PRICE">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Giá" ng-model="attribute.totalamt" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Đơn vị" ng-model="attribute.unit" />
                                    </div>
                                </div>
                                <div ng-switch-default="ng-switch-default">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="%%attribute.attrvaluename%%" ng-model="attribute.path" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" placeholder="Chọn lĩnh vực" ng-model="product.categoryid" ng-options="subCategory.categoryid as subCategory.categoryname for subCategory in category.children">
                                <option>
                                    Chọn lĩnh vực
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Mô tả chi tiết" rows="5" ng-model="product.proddesc"></textarea>
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