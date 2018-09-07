<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <ul class="service-category list-group mt-3">
                    <li class="heading list-group-item pd-1 pl-5">
                        <a class="text-service text-bold text-uppercase" href="#">
                            <span class="fas fa-bars fa-1x"></span>
                             Danh mục
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Địa điểm
                        </a>
                    </li>
                    <li class="active list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Chủ đề
                        </a>
                    </li>
                    <li class="hide list-group-item pd-1 pl-5">
                        <a href="/clientarea/service">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Dịch vụ của bạn
                        </a>
                    </li>
                    <li class="hide list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Danh bạ sper
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="/clientarea/collection">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Bộ sưu tập
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Video Review
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Nổi bật
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Khuyến mại
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="/blog">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Blog Sper
                        </a>
                    </li>
                    <li class="hide list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Ví Sper
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="/news">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Tin tức về Sper
                        </a>
                    </li>
                    <li class="hide list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Diễn đàn Sper
                        </a>
                    </li>
                    <li class="hide list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Tìm việc làm
                        </a>
                    </li>
                </ul>
                <hr class="mt-1 mb-1" />
                <ul class="service-category list-group">
                    <li class="heading list-group-item pd-1 pl-5">
                        <a class="text-service text-bold text-uppercase" href="#">
                            <span class="fas fa-credit-card fa-1x"></span>
                             Thanh toán
                        </a>
                    </li>
                    <li class="list-group-item pl-5">
                        <img class="img-responsive" src="/images/payment.png" />
                    </li>
                </ul>
                <hr class="mt-1 mb-1" />
                <ul class="service-category list-group">
                    <li class="heading list-group-item pd-1 pl-5">
                        <a class="text-service text-bold text-uppercase" href="#">
                            Đối tác của chúng tôi
                        </a>
                    </li>
                    <li class="list-group-item pl-5">
                        <img class="img-responsive" src="/images/partner.png" />
                    </li>
                </ul>
                <div class="panel-body">
                     
                </div>
            </div>
        </div>
        <div class="col-md-9">
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
            <div class="bg-none-i panel panel-default" ng-controller="Sper.Video.Review">
                <div class="bg-white-i panel-heading pd-0">
                    <div class="row">
                        <div class="col-md-3">
                            <ul type="tabs" class="text-uppercase tabs-no-border tabs-no-bg nav nav-tabs bd-none">
                                <li role="presentation">
                                    <a class="text-service-promotion relative" href="#" onclick="return false;">
                                        <span class="fs-26 absolute p-top-7 p-left-5 fab fa-youtube fa-2x"></span>
                                        <span class="d-inline-block pl-7 text-service-highlight text-bold">
                                            Video Review
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <ul type="tabs" class="tabs-no-border tabs-service tabs-no-bg nav nav-tabs bd-none">
                                <li role="presentation" class="active">
                                    <a href="#">
                                        Tất cả
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#">
                                        Nổi bật
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
                        <div class="col-md-4">
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
                                <ul type="tabs" class="pull-right tabs-no-bg nav nav-tabs bd-none">
                                    <li role="presentation" class="dropdown dropdown-no-close">
                                        <a class="data-toggle" href="#" data-toggle="dropdown">
                                            %%selectedCity.addcityname || 'Địa điểm'%% 
                                            <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu-right dropdown-menu-add dropdown-menu" style="width: 300px">
                                            <div class="panel panel-default mg-0" ng-repeat="city in cities" ng-class="{'panel-success': selectedCity === city}">
                                                <div class="panel-heading">
                                                    <input type="checkbox" id="city_%%city.addcityid%%" ng-model="selectedCityIds[city.addcityid]" ng-change="selectCity(city)" />
                                                    <label href="#" for="city_%%city.addcityid%%">
                                                        %%city.addcityname%%
                                                    </label>
                                                </div>
                                                <div class="panel-body pd-0">
                                                    <ul class="list-group mg-0">
                                                        <li class="list-group-item" ng-repeat="district in city.districts">
                                                            <input type="checkbox" id="district_%%district.addmunicipalityid%%" ng-model="selectedDistrictIds[district.addmunicipalityid]" ng-change="selectDistrict(district)" />
                                                            <label class="pl-3" for="district_%%district.addmunicipalityid%%">
                                                                %%district.addmunicipalityaltcode%%
                                                            </label>
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
                        <div class="col-md-3" ng-repeat="item in items">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <img class="img-responsive" src="%%item.review_img%%" />
                                    </div>
                                </div>
                                <div class="panel-body" style="height: 80px; overflow: hidden;">
                                    <a class="text-service-highlight text-justify text-bold" href="#">
                                        %%item.review_title%%
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="fs-13 pull-left">
                                            <span class="fs-13 far fa-heart fa-1x"></span>
                                             %%item.review_likes%% 
                                            <span class="fs-13 far fa-comments fa-1x"></span>
                                             %%item.review_comments%% 
                                            <span class="fs-13 fas fa-share-alt fa-1x"></span>
                                             %%item.review_shares%% 
                                        </div>
                                        <div class="pull-right">
                                            <span class="pointer bookmark-scale fa fa-bookmark fa-1x" ng-click="bookmark(item)"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">
                        <a class="text-view-more" href="/review">
                            Xem thêm
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>