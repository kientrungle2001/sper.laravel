<div class="container mt-3">
    <div class="row-pd-5 row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <ul class="service-category list-group mt-3" ng-controller="Sper.Service.Category">
                    <li class="heading list-group-item pd-1 pl-5">
                        <a class="text-service text-bold text-uppercase" href="#">
                            <span class="fas fa-bars fa-1x"></span>
                             Danh mục
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5" ng-class="{'active': selectedTab == 'places'}">
                        <a href="#" onclick="return false;" ng-click="selectCategoryTab('places')">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Địa điểm
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5" ng-class="{'active': selectedTab == 'categories'}">
                        <a href="#" onclick="return false;" ng-click="selectCategoryTab('categories')">
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
                        <a href="#video-review">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Video Review
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5" ng-class="{'active': selectedTab == 'featured'}">
                        <a href="#" onclick="return false;" ng-click="selectCategoryTab('featured')">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Nổi bật
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5" ng-class="{'active': selectedTab == 'promotion'}">
                        <a href="#" onclick="return false;" ng-click="selectCategoryTab('promotion')">
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
                <div class="panel-body pd-0">
                    <img class="img-responsive" src="http://placehold.it/480x900" />
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading pd-0">
                    <div class="row-pd-5 row">
                        <div class="col-md-2">
                            <ul type="tabs" class="nav nav-tabs bd-none">
                                <li role="presentation">
                                    <a href="#">
                                        Bat dong san
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <ul type="tabs" class="nav nav-tabs bd-none">
                                <li role="presentation">
                                    <a href="#">
                                        Tat ca
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#">
                                        Gan nhat
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#">
                                        Moi nhat
                                    </a>
                                </li>
                                <li role="presentation" class="dropdown dropdown-no-close">
                                    <a class="data-toggle" href="#" data-toggle="dropdown">
                                        Dien tich 
                                        <span class="caret"></span>
                                    </a>
                                    <ul align="right" class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#">
                                                Dien tich 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Dien tich 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li role="presentation" class="dropdown dropdown-no-close">
                                    <a class="data-toggle" href="#" data-toggle="dropdown">
                                        Muc gia 
                                        <span class="caret"></span>
                                    </a>
                                    <ul align="right" class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#">
                                                Muc gia 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Muc gia 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <div class="clearfix">
                                <ul type="tabs" class="pull-right nav nav-tabs bd-none">
                                    <li role="presentation" class="dropdown dropdown-no-close">
                                        <a class="data-toggle" href="#" data-toggle="dropdown">
                                            Chu de 
                                            <span class="caret"></span>
                                        </a>
                                        <ul align="right" class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">
                                                    Chu de 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Chu de 2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body pd-2">
                    <div class="row-pd-5 row">
                        <div class="service-item col-md-15" ng-repeat="service in services">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-4by3" style="overflow:hidden;">
                                        <img class="img-responsive" ng-src="%%service.serviceimg|thumb:400:300%%" />
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
                </div>
                <div class="text-center panel-footer">
                    <ul class="pagination mg-0">
                        <li class="active">
                            <a href="#">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                3
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                4
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                5
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>