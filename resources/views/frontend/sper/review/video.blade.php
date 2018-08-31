<div class="bg-none-i panel panel-default" ng-controller="Sper.Video.Review">
    <div class="bg-white-i panel-heading pd-0">
        <div class="row">
            <div class="col-md-3">
                <ul type="tabs" class="text-uppercase tabs-no-border tabs-no-bg nav nav-tabs bd-none">
                    <li role="presentation">
                        <a class="text-service-promotion relative" href="#" onclick="return false;">
                            <span class="fs-26 absolute p-top-7 p-left-5 fa fa-youtube-play fa-2x"></span>
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
                        <li role="presentation" class="dropdown">
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
                        <li role="presentation" class="dropdown">
                            <a class="data-toggle" href="#" data-toggle="dropdown">
                                %%selectedCity.addcityname || 'Địa điểm'%% 
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu-right dropdown-menu-add dropdown-menu" style="width: 300px">
                                <div class="panel panel-default mg-0" ng-repeat="city in cities" ng-class="{'panel-success': selectedCity === city}">
                                    <div class="panel-heading">
                                        <a href="#" onclick="return false;" ng-click="selectCity(city)">
                                            %%city.addcityname%%
                                        </a>
                                    </div>
                                    <div class="panel-body pd-0">
                                        <ul class="list-group mg-0">
                                            <li class="list-group-item">
                                                <input type="checkbox" />
                                                <a href="#" onclick="return false;" ng-click="selectDistrict(district)">
                                                    Quận 1
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <input type="checkbox" />
                                                <a href="#" onclick="return false;" ng-click="selectDistrict(district)">
                                                    Quận 2
                                                </a>
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
            <div class="col-md-3">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <img class="img-responsive" src="http://placehold.it/480x360" />
                    </div>
                    <div class="panel-body">
                        <a href="#">
                            <h4>
                                Tran thach cao
                            </h4>
                        </a>
                        <address>
                            So 3 ngo 295 Bach Mai ...
                        </address>
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhanh
                            </div>
                            <div class="pull-right">
                                To doi
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="fa fa-heart-o fa-1x"></span>
                                 200 
                                <span class="fa fa-comments-o fa-1x"></span>
                                 200 
                                <span class="fa fa-share-alt fa-1x"></span>
                                 200 
                            </div>
                            <div class="pull-right">
                                <span class="fa fa-bookmark fa-1x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <img class="img-responsive" src="http://placehold.it/480x360" />
                    </div>
                    <div class="panel-body">
                        <a href="#">
                            <h4>
                                Tran thach cao
                            </h4>
                        </a>
                        <address>
                            So 3 ngo 295 Bach Mai ...
                        </address>
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhanh
                            </div>
                            <div class="pull-right">
                                To doi
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="fa fa-heart-o fa-1x"></span>
                                 200 
                                <span class="fa fa-comments-o fa-1x"></span>
                                 200 
                                <span class="fa fa-share-alt fa-1x"></span>
                                 200 
                            </div>
                            <div class="pull-right">
                                <span class="fa fa-bookmark fa-1x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <img class="img-responsive" src="http://placehold.it/480x360" />
                    </div>
                    <div class="panel-body">
                        <a href="#">
                            <h4>
                                Tran thach cao
                            </h4>
                        </a>
                        <address>
                            So 3 ngo 295 Bach Mai ...
                        </address>
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhanh
                            </div>
                            <div class="pull-right">
                                To doi
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="fa fa-heart-o fa-1x"></span>
                                 200 
                                <span class="fa fa-comments-o fa-1x"></span>
                                 200 
                                <span class="fa fa-share-alt fa-1x"></span>
                                 200 
                            </div>
                            <div class="pull-right">
                                <span class="fa fa-bookmark fa-1x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <img class="img-responsive" src="http://placehold.it/480x360" />
                    </div>
                    <div class="panel-body">
                        <a href="#">
                            <h4>
                                Tran thach cao
                            </h4>
                        </a>
                        <address>
                            So 3 ngo 295 Bach Mai ...
                        </address>
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhanh
                            </div>
                            <div class="pull-right">
                                To doi
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="fa fa-heart-o fa-1x"></span>
                                 200 
                                <span class="fa fa-comments-o fa-1x"></span>
                                 200 
                                <span class="fa fa-share-alt fa-1x"></span>
                                 200 
                            </div>
                            <div class="pull-right">
                                <span class="fa fa-bookmark fa-1x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <img class="img-responsive" src="http://placehold.it/480x360" />
                    </div>
                    <div class="panel-body">
                        <a href="#">
                            <h4>
                                Tran thach cao
                            </h4>
                        </a>
                        <address>
                            So 3 ngo 295 Bach Mai ...
                        </address>
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhanh
                            </div>
                            <div class="pull-right">
                                To doi
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="fa fa-heart-o fa-1x"></span>
                                 200 
                                <span class="fa fa-comments-o fa-1x"></span>
                                 200 
                                <span class="fa fa-share-alt fa-1x"></span>
                                 200 
                            </div>
                            <div class="pull-right">
                                <span class="fa fa-bookmark fa-1x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <img class="img-responsive" src="http://placehold.it/480x360" />
                    </div>
                    <div class="panel-body">
                        <a href="#">
                            <h4>
                                Tran thach cao
                            </h4>
                        </a>
                        <address>
                            So 3 ngo 295 Bach Mai ...
                        </address>
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhanh
                            </div>
                            <div class="pull-right">
                                To doi
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="fa fa-heart-o fa-1x"></span>
                                 200 
                                <span class="fa fa-comments-o fa-1x"></span>
                                 200 
                                <span class="fa fa-share-alt fa-1x"></span>
                                 200 
                            </div>
                            <div class="pull-right">
                                <span class="fa fa-bookmark fa-1x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <img class="img-responsive" src="http://placehold.it/480x360" />
                    </div>
                    <div class="panel-body">
                        <a href="#">
                            <h4>
                                Tran thach cao
                            </h4>
                        </a>
                        <address>
                            So 3 ngo 295 Bach Mai ...
                        </address>
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhanh
                            </div>
                            <div class="pull-right">
                                To doi
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="fa fa-heart-o fa-1x"></span>
                                 200 
                                <span class="fa fa-comments-o fa-1x"></span>
                                 200 
                                <span class="fa fa-share-alt fa-1x"></span>
                                 200 
                            </div>
                            <div class="pull-right">
                                <span class="fa fa-bookmark fa-1x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default mb-2">
                    <div class="panel-heading pd-0">
                        <img class="img-responsive" src="http://placehold.it/480x360" />
                    </div>
                    <div class="panel-body">
                        <a href="#">
                            <h4>
                                Tran thach cao
                            </h4>
                        </a>
                        <address>
                            So 3 ngo 295 Bach Mai ...
                        </address>
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                 2 chi nhanh
                            </div>
                            <div class="pull-right">
                                To doi
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-left">
                                <span class="fa fa-heart-o fa-1x"></span>
                                 200 
                                <span class="fa fa-comments-o fa-1x"></span>
                                 200 
                                <span class="fa fa-share-alt fa-1x"></span>
                                 200 
                            </div>
                            <div class="pull-right">
                                <span class="fa fa-bookmark fa-1x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>