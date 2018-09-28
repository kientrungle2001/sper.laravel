<div class="form-group">
    <div class="relative input-group">
        <input class="input-sm-new form-control" style="width:450px" placeholder="Tìm kiếm" />
        <div class="absolute fs-14 pointer dropdown dropdown-no-close" style="top: 7px; right: 40px; z-index: 2;">
            <div class="relative">
                <span class="dropdown-toggle" data-toggle="dropdown">
                    <span class="fs-14 fas fa-sliders-h fa-2x"></span>
                     Bộ lọc 
                </span>
                <div class="dropdown-menu" style="width: 800px; z-index: 3; left: -500px; padding: 0;padding-top: 6px; border: none; background: transparent; overflow: hidden;">
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
                </div>
            </div>
        </div>
        <span class="input-group-btn">
            <button class="btn btn-default btn-xs" style="height: 34px; width: 34px;background-color: #e6e6e6">
                <span class="fs-16 glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</div>