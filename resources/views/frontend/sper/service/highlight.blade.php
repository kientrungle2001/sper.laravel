<div class="container mt-3" ng-controller="Sper.Service.Highlight">
    <div class="bg-none-i panel panel-default">
        <div class="bg-white-i panel-heading pd-0">
            <div class="row">
                <div class="col-md-3">
                    <ul type="tabs" class="nav-sper-heading nav nav-tabs">
                        <li role="presentation">
                            <a onclick="return false;" href="#" class="nav-sper-title">
                                <span class="nav-sper-icon-highlight nav-sper-icon glyphicon glyphicon-star"></span>
                                <span class="nav-sper-text">
                                    Dịch vụ nổi bật
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
                                    <li role="presentation" class="dropdown dropdown-no-close">
                                        <a class="data-toggle" href="#" data-toggle="dropdown">
                                            %%selectedSubCategory.categoryname || 'Chủ đề'%% 
                                            <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu-right dropdown-menu-category dropdown-menu" style="width: 300px">
                                            <div class="panel panel-default mg-0 pd-0" ng-repeat="subCategory in selectedCategory.children" ng-class="{'panel-success': selectedSubCategory === subCategory}">
                                                <div class="panel-heading mg-0">
                                                    <div class="relative clearfix">
                                                        <a class="collapsed" onclick="return false;" ng-click="selectSubCategory(subCategory)" data-toggle="collapse" href="#sub-category-%%subCategory.categoryid%%">
                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                             %%subCategory.categoryname%% 
                                                        </a>
                                                        <input type="checkbox" class="absolute p-right-5 p-top-0" />
                                                    </div>
                                                </div>
                                                <div class="collapse panel-body pd-0" id="sub-category-%%subCategory.categoryid%%">
                                                    <ul class="list-group mg-0">
                                                        <li class="list-group-item" ng-repeat="subCategoryLevel2 in subCategory.children" ng-class="{'active': selectedSubCategory === subCategoryLevel2}">
                                                            <div class="relative clearfix">
                                                                <a class="pl-5" href="#" onclick="return false;" ng-click="selectSubCategory(subCategoryLevel2)">
                                                                     %%subCategoryLevel2.categoryname%%
                                                                </a>
                                                                <input type="checkbox" class="absolute p-top-0 p-right-5" />
                                                            </div>
                                                        </li>
                                                    </ul>
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
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" ng-src="%%service.serviceimg | thumb:640:360%%" />
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <a class="service-heading text-service-highlight" href="/service/detail?serviceid=%%service.serviceid%%">
                                        <h4>
                                            %%service.servicename%%
                                        </h4>
                                    </a>
                                    <address class="service-address mb-1 text-address">
                                        %%service.address_identifier.addressname%%
                                    </address>
                                    <div class="fs-12 clearfix">
                                        <div class="text-branch pull-left">
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
                                            <span class="pointer bookmark-scale fa fa-bookmark fa-1x" ng-click="bookmark(service)"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">
                        <a class="text-view-more" href="/service">
                            Xem thêm
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>