<div class="bg-none-i panel panel-default" ng-controller="Sper.Service.Section">
    <div class="bg-white-i panel-heading pd-0">
        <div class="row">
            <div class="col-md-3">
                <ul type="tabs" class="text-uppercase tabs-no-border tabs-no-bg nav nav-tabs bd-none">
                    <li role="presentation">
                        <a class="text-service-promotion relative" href="#" onclick="return false;">
                            <span class="fs-20 absolute p-top-9 p-left-5 glyphicon glyphicon-tags"></span>
                            <span class="d-inline-block pl-7 text-service-highlight text-bold">
                                Khuyến mại
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul type="tabs" class="tabs-service tabs-no-border tabs-no-bg nav nav-tabs bd-none">
                    <li role="presentation" class="active">
                        <a href="#">
                            Tất cả
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#">
                            Gần nhất
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#">
                            Mới nhất
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="clearfix">
                    <ul type="tabs" class="pull-right tabs-no-bg nav nav-tabs bd-none">
                        <li role="presentation" class="dropdown dropdown-no-close">
                            <a class="data-toggle" href="#" data-toggle="dropdown">
                                %%selectedSubCategory.categoryname || 'Chủ đề'%% 
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu-right dropdown-menu-category dropdown-menu" style="width: 300px">
                                <div class="panel panel-default mg-0 pd-0" ng-repeat="category in categories" ng-class="{'panel-success': selectedSubCategory === category}">
                                    <div class="panel-heading mg-0">
                                        <a class="test relative d-block collapsed" onclick="return false;" ng-click="selectSubCategory(category)" data-toggle="collapse" href="#sub-category-%%category.categoryid%%">
                                            <input type="checkbox" />
                                             %%category.categoryname%% 
                                            <span class="absolute caret" style="left: 90%; top: 45%;"></span>
                                        </a>
                                    </div>
                                    <div class="panel-body pd-0" id="sub-category-%%category.categoryid%%">
                                        <div class="panel panel-default mg-0 pd-0" ng-repeat="subCategory in category.children" ng-class="{'panel-success': selectedSubCategory === subCategory}">
                                            <div class="panel-heading mg-0">
                                                <a class="test relative d-block collapsed" onclick="return false;" ng-click="selectSubCategory(subCategory)" data-toggle="collapse" href="#sub-category-%%subCategory.categoryid%%">
                                                    <input type="checkbox" />
                                                     %%subCategory.categoryname%% 
                                                    <span class="absolute caret" style="left: 90%; top: 45%;"></span>
                                                </a>
                                            </div>
                                            <div class="panel-body pd-0" id="sub-category-%%subCategory.categoryid%%">
                                                <ul class="list-group mg-0">
                                                    <li class="list-group-item" ng-repeat="subCategoryLevel2 in subCategory.children" ng-class="{'active': selectedSubCategory === subCategoryLevel2}">
                                                        <a href="#" onclick="return false;" ng-click="selectSubCategory(subCategoryLevel2)">
                                                            <input type="checkbox" />
                                                             %%subCategoryLevel2.categoryname%%
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-none-i panel-body pd-2">
        <div class="row-pd-5 row">
            <div class="service-item col-md-15" ng-repeat="service in services">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <div class="embed-responsive embed-responsive-4by3" style="overflow:hidden;">
                            <img class="img-responsive" ng-src="%%service.serviceimg%%" />
                        </div>
                    </div>
                    <div class="panel-body">
                        <a class="service-heading text-service-highlight" href="#">
                            <h4>
                                %%service.servicename%%
                            </h4>
                        </a>
                        <address class="service-address mb-1">
                            %%service.address_identifier.addressname%%
                        </address>
                        <div class="fs-13 clearfix">
                            <div class="text-service pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhánh
                            </div>
                            <div class="pull-right">
                                %%selectedCategory.categoryname%%
                            </div>
                        </div>
                    </div>
                    <div class="bg-white-i panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                 
                            </div>
                            <div class="pull-right">
                                <span class="pointer fa fa-bookmark fa-1x" ng-click="bookmark(service)"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center">
            <a class="text-service text-underline" href="/service">
                Xem thêm
            </a>
        </p>
    </div>
</div>