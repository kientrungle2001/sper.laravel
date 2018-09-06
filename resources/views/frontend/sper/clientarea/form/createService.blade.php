<form>
    <div class="form-group">
        <img class="img-responsive" src="http://placehold.it/1366x300" />
    </div>
    <div class="form-group">
        <h2>
            Mô tả dịch vụ
        </h2>
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Nhập tên công ty / cửa hàng / đội nhóm" ng-model="servicename" value="Điện thoại Di Động 101" />
    </div>
    <div class="form-group">
        <select class="form-control" placeholder="Chọn lĩnh vực">
            <option value="1">
                Chọn lĩnh vực
            </option>
        </select>
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Nhập địa chỉ chính" ng-model="address_identifier.addressname" value="101 Nguyễn Trãi" />
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Chọn định vị" />
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Số chi nhánh" value="2" />
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Nhập số điện thoại" ng-model="phone" value="0123456789" />
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Nhập Email" ng-model="email" value="kientrungle2001@gmail.com" />
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Nhập Website" ng-model="website" value="http://dtdd101.vn" />
    </div>
    <div class="form-group">
        <textarea class="form-control" placeholder="Mô tả chi tiết" rows="5" ng-model="servicedesc"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-success" ng-click="create()">
            Hoàn thành
        </button>
        <button class="btn btn-default">
            Chỉnh sửa
        </button>
    </div>
</form>