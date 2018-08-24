<div class="container mt-3" ng-controller="Sper.Service.Highlight">
    <div class="bg-none-i panel panel-default">
        <div class="bg-white-i panel-heading pd-0">
            <div class="row">
                <div class="col-md-3">
                    <ul type="tabs" class="text-uppercase tabs-no-border tabs-no-bg nav nav-tabs bd-none">
                        <li role="presentation">
                            <a class="text-service relative" href="#" onclick="return false;">
                                <span class="fs-25 absolute p-top-5 p-left-5 glyphicon glyphicon-star"></span>
                                <span class="d-inline-block pl-5 text-service-highlight text-bold">
                                    Dịch vụ nổi bật nhất
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <ul type="tabs" class="text-uppercase tabs-no-border tabs-service tabs-no-bg nav nav-tabs bd-none">
                        <li role="presentation" ng-repeat="category in categories | orderBy: 'position'" ng-class="{'active': (selectedCategory === category)}" ng-click="selectCategory(category)">
                            <a href="#" onclick="return false;">
                                %%category.categoryname%%
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-body pd-0">
            <div class="bg-none-i panel panel-success mg-0 bd-none">
                <div class="bg-black-i panel-heading pd-0">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3" mdo="3">
                            <ul type="tabs" class="tabs-no-border tabs-no-bg tabs-black nav nav-tabs bd-none">
                                <li role="presentation" ng-repeat="orderBy in orderBys" ng-class="{'active': selectedOrderBy === orderBy}">
                                    <a href="#" onclick="return false;" ng-click="selectOrderBy(orderBy)">
                                        %%orderBy.label%%
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="clearfix">
                                <ul type="tabs" class="pull-right tabs-black tabs-no-bg nav nav-tabs bd-none">
                                    <li role="presentation" class="dropdown">
                                        <a class="data-toggle" href="#" data-toggle="dropdown">
                                            %%selectedSubCategory.categoryname || 'Chủ đề'%% 
                                            <span class="caret"></span>
                                        </a>
                                        <ul align="right" class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-submenu dropdown-submenu-left" ng-repeat="subCategory in selectedCategory.children" ng-class="{'active': selectedSubCategory === subCategory}">
                                                <a class="test relative" href="#" onclick="return false;" ng-click="selectSubCategory(subCategory)">
                                                    %%subCategory.categoryname%% 
                                                    <span class="absolute caret" style="left: 90%; top: 45%;"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li ng-repeat="subCategoryLevel2 in subCategory.children" ng-class="{'active': selectedSubCategory === subCategoryLevel2}">
                                                        <a href="#" onclick="return false;" ng-click="selectSubCategory(subCategoryLevel2)">
                                                            %%subCategoryLevel2.categoryname%%
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
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
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">
                        <a class="text-service text-underline" href="#">
                            Xem thêm
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>