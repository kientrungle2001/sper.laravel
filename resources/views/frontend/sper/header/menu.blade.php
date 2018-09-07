<div class="bg-white">
    <div class="container" ng-controller="Sper.Header">
        <nav type="default" class="navbar navbar-default bg-white mb-0 bd-none">
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
                    <select class="input-sm-new form-control" ng-options="category.categoryid as category.categoryname for category in categories | orderBy: 'position'" ng-model="selectedCategoryId" ng-change="selectCategory()">
                         
                    </select>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input class="input-sm-new form-control" style="width:280px" placeholder="Search" />
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-xs" style="height: 34px; width: 34px;background-color: #e6e6e6">
                                <span class="fs-16 glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <select class="input-sm-new form-control" ng-options="city.addcityid as city.addcityname for city in cities" ng-model="selectedCityId" ng-change="selectCity()">
                         
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-default btn-xs" style="height: 34px;">
                        <span class="fs-16 glyphicon glyphicon-phone"></span>
                         Tải App 
                    </button>
                </div>
            </form>
            <ul align="right" class="navbar-collapse collapse nav navbar-nav navbar-right" id="top-menu">
                <li>
                    <a href="#" data-toggle="modal" data-target="#loginModal" ng-hide="user">
                        Đăng nhập
                    </a>
                </li>
                <li class="dropdown dropdown-no-close" ng-show="user">
                    <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <span class="fs-20 fa fa-user fa-1x"></span>
                         %%user.fullname%% 
                        <span class="caret"></span>
                         
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/clientarea/service">
                                <span class="fa fa-cubes fa-1x"></span>
                                 Dịch vụ của bạn
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-credit-card fa-1x"></span>
                                 Thanh toán
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-history fa-1x"></span>
                                 Lịch sử
                            </a>
                        </li>
                        <li>
                            <a href="/clientarea/collection">
                                <span class="bookmark-scale fa fa-bookmark fa-1x"></span>
                                 Bộ sưu tập
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-trophy fa-1x"></span>
                                 Điểm thưởng
                            </a>
                        </li>
                        <li>
                            <a href="/clientarea/feedback">
                                <span class="fa fa-inbox fa-1x"></span>
                                 Góp ý
                            </a>
                        </li>
                        <li>
                            <a href="/clientarea/info">
                                <span class="fa fa-user fa-1x"></span>
                                 Cài đặt tài khoản
                            </a>
                        </li>
                        <li>
                            <a href="/clientarea/logout" ng-click="logout()" onclick="return false;">
                                <span class="fa fa-power-off fa-1x"></span>
                                 Đăng xuất
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown dropdown-no-close">
                    <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <span class="fs-20 far fa-bell fa-1x"></span>
                    </a>
                    <div class="dropdown-menu" style="width: 400px;">
                        <div class="panel panel-default">
                            <div class="panel-heading pd-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul align="justified" type="tabs" class="nav nav-tabs nav-justified bd-none">
                                            <li role="presentation" class="active" ng-class="{'active': orderBy == 'me'}">
                                                <a href="#" onclick="return false;" ng-click="selectOrderBy('me')">
                                                    Của tôi
                                                </a>
                                            </li>
                                            <li role="presentation" ng-class="{'active': orderBy == 'service'}">
                                                <a href="#" onclick="return false;" ng-click="selectOrderBy('service')">
                                                    Dịch vụ
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body pd-0">
                                <ul class="media-list">
                                    <div class="media bb-1">
                                        <div class="media-left pd-1">
                                            <img class="img-circle media-object" src="http://placehold.it/48x48" />
                                        </div>
                                        <div class="media-body pd-1">
                                            <a href="#">
                                                <small>
                                                    Chúc mừng bạn đã đăng ký tài khoản thành công, chúng tôi rất hân hạnh được phục vụ quý khách hàng
                                                </small>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left pd-1">
                                            <img class="img-circle media-object" src="http://placehold.it/48x48" />
                                        </div>
                                        <div class="media-body pd-1">
                                            <small>
                                                Chúc mừng bạn đã đăng ký tài khoản thành công, chúng tôi rất hân hạnh được phục vụ quý khách hàng
                                            </small>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-no-close">
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
                <li class="dropdown dropdown-no-close">
                    <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <span class="fs-20 glyphicon glyphicon-plus-sign"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li style="width: 250px;">
                            <div class="media bb-1">
                                <div class="media-left pd-3">
                                    <span class="far fa-star fa-2x"></span>
                                </div>
                                <div class="media-body">
                                    <a style="white-space: normal;line-height: 25px;" href="#">
                                         Viết blog chia sẻ trải nghiệm cho cộng đồng
                                    </a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left pd-3">
                                    <span class="fab fa-youtube fa-2x"></span>
                                </div>
                                <div class="media-body">
                                    <a style="white-space: normal;line-height: 25px;" href="#">
                                         Tạo Video Review
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown dropdown-no-close">
                    <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <img style="width: 20px; height: 20px;" src="/images/flag/vn.png" />
                        <span class="caret"></span>
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