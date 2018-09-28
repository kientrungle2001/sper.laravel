<div class="panel panel-default mg-0 pd-0" ng-init="selectedTab='region'">
    <div class="panel-body pd-0">
        <div class="row-pd-0 row">
            <div class="col-md-3">
                <ul class="service-category mt-3 list-group">
                    <li class="pd-1 pl-5 list-group-item" ng-class="{'active': selectedTab=='region'}" ng-click="selectTab('region')">
                        <a href="#" onclick="return false;">
                            Khu vực
                        </a>
                    </li>
                    <li class="pd-1 pl-5 bb-1 list-group-item" ng-class="{'active': selectedTab=='category'}" ng-click="selectTab('category')">
                        <a href="#" onclick="return false;">
                            Chủ đề
                        </a>
                    </li>
                    <li class="pd-1 pl-5 list-group-item" ng-class="{'active': selectedTab=='organize'}" ng-click="selectTab('organize')">
                        <a href="#" onclick="return false;">
                            Phân loại
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="pd-3">
                    <div class="row" style="height: 300px; overflow-y: scroll; overflow-x: hidden;" ng-show="selectedTab=='region'">
                        <div class="checkbox col-xs-6" ng-repeat="district in selectedCity.districts">
                            <label>
                                <input type="checkbox" value="%%district.addmunicipalityid%%" aria-label="..." />
                                 %%district.addmunicipalityname%% 
                            </label>
                        </div>
                    </div>
                    <div class="row" style="height: 300px; overflow-y: scroll; overflow-x: hidden;" ng-show="selectedTab=='category'">
                        <div class="col-xs-12">
                            <div class="panel panel-default" ng-repeat="category in selectedCategory.children">
                                <div class="panel-heading">
                                    <label>
                                        <input type="checkbox" value="%%category.categoryid%%" aria-label="..." />
                                         %%category.categoryname%% 
                                    </label>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="checkbox col-xs-6" ng-repeat="subCategory in category.children">
                                            <label>
                                                <input type="checkbox" value="%%subCategory.categoryid%%" aria-label="..." />
                                                 %%subCategory.categoryname%% 
                                            </label>
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
    <div class="text-center panel-footer">
        <button class="btn btn-success">
            Tìm kiếm
        </button>
        <button class="btn btn-default">
            Xóa bộ lọc
        </button>
    </div>
</div>