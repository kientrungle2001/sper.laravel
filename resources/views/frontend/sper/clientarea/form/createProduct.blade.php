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