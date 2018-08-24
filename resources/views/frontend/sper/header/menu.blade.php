<div class="bg-white">
    <div class="container" ng-controller="Sper.Header">
        <nav type="default" class="navbar navbar-default bg-white mb-0">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed btn-default" data-target="#top-menu" data-toggle="collapse" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="relative navbar-brand" style="width: 50px" href="/">
                    <img class="absolute p-top-0 p-left-0" style="width: 50px; height: 50px" src="/images/logo/2.jpeg" />
                </a>
            </div>
            <form align="left" class="navbar-form navbar-left">
                <div class="form-group">
                    <select class="form-control" ng-options="category.categoryid as category.categoryname for category in categories | orderBy: 'position'" ng-model="selectedCategoryId" ng-change="selectCategory()">
                         
                    </select>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" style="width:280px" placeholder="Search" />
                        <span class="input-group-btn">
                            <button class="btn btn-default" style="height: 34px;">
                                <span class="fs-20 glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control" ng-options="city.addcityid as city.addcityname for city in cities" ng-model="selectedCityId" ng-change="selectCity()">
                         
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-default">
                        <span class="fs-20 glyphicon glyphicon-phone"></span>
                         Tải App 
                    </button>
                </div>
            </form>
            <ul align="right" class="navbar-collapse collapse nav navbar-nav navbar-right" id="top-menu">
                <li>
                    <a href="#" data-toggle="modal" data-target="#loginModal">
                        Đăng nhập
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <span class="fs-20 fa fa-bell fa-1x"></span>
                    </a>
                    <div class="dropdown-menu">
                         Thong bao 1
                        <br />
                         Thong bao 2
                        <br />
                         Thong bao 3
                        <br />
                         Thong bao 4
                        <br />
                         
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <span class="fs-20 fa fa-shopping-cart fa-1x"></span>
                        <span class="hidden badge bg-red">
                            1
                        </span>
                    </a>
                    <div class="dropdown-menu">
                         Cart Item 1
                        <br />
                         Cart Item 2
                        <br />
                         Cart Item 3
                        <br />
                         Cart Item 4
                        <br />
                         
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <span class="fs-20 glyphicon glyphicon-plus-sign"></span>
                    </a>
                    <div class="dropdown-menu">
                         Viet bai blog 
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <img style="width: 20px; height: 20px;" src="/images/flag/vn.png" />
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <img style="width: 20px; height: 20px;" src="/images/flag/vn.png" />
                                 Tiếng Việt 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img style="width: 20px; height: 20px;" src="/images/flag/en.png" />
                                 English 
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>