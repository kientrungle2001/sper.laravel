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