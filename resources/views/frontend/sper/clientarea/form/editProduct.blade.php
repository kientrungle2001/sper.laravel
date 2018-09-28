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