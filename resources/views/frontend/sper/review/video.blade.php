<div class="bg-none-i panel panel-default" ng-controller="Sper.Video.Review" id="video-review">
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
                                        <div class="relative clearfix">
                                            <a class="collapsed" onclick="return false;" ng-click="selectSubCategory(category)" data-toggle="collapse" href="#video-sub-category-%%category.categoryid%%">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                 %%category.categoryname%% 
                                            </a>
                                            <input type="checkbox" class="absolute p-top-0 p-right-5" />
                                        </div>
                                    </div>
                                    <div class="collapse panel-body pd-0" id="video-sub-category-%%category.categoryid%%">
                                        <div class="panel panel-default mg-0 pd-0" ng-repeat="subCategory in category.children" ng-class="{'panel-success': selectedSubCategory === subCategory}">
                                            <div class="panel-heading mg-0">
                                                <div class="relative clearfix">
                                                    <a class="collapsed pl-3" onclick="return false;" ng-click="selectSubCategory(subCategory)" data-toggle="collapse" href="#video-sub-category-%%subCategory.categoryid%%">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                         %%subCategory.categoryname%% 
                                                    </a>
                                                    <input type="checkbox" class="absolute p-top-0 p-right-5" />
                                                </div>
                                            </div>
                                            <div class="collapse panel-body pd-0" id="video-sub-category-%%subCategory.categoryid%%">
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
                            <img class="img-responsive" src="%%item.review_img|thumb:480:270%%" />
                        </div>
                    </div>
                    <div class="panel-body">
                        <a class="text-justify text-bold d-block fs-14" style="height: 18px; overflow: hidden;" href="/video/detail?videoid=%%item.id%%">
                            %%item.review_title%%
                        </a>
                        <div class="clearfix">
                            <small class="text-light">
                                %%item.created_at%%
                            </small>
                        </div>
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