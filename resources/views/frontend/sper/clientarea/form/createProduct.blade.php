<form ng-submit="create()">
    <div class="form-group">
        <img class="img-responsive" src="http://placehold.it/1366x300" />
    </div>
    <div class="form-group">
        <h2>
            Đăng sản phẩm
        </h2>
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
        <select class="form-control" placeholder="Chọn lĩnh vực" ng-model="categoryid">
            <option value="1">
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
        <button class="btn btn-default">
            Chỉnh sửa
        </button>
    </div>
</form>