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
            <form align="left" class="pl-1 pr-1 navbar-form navbar-left">
                <div class="relative form-group">
                    <select class="input-sm-new dropdown-replace form-control" style="width: 120px;" ng-options="category.categoryid as category.categoryname for category in categories | orderBy: 'position'" ng-model="selectedCategoryId" ng-change="selectCategory()">
                         
                    </select>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </div>
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
                <div class="relative form-group">
                    <select class="input-sm-new dropdown-replace form-control" style="width: 120px;" ng-options="city.addcityid as city.addcityname for city in cities" ng-model="selectedCityId" ng-change="selectCity()">
                         
                    </select>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-default btn-xs" style="height: 34px;">
                        <span class="fs-16 glyphicon glyphicon-phone"></span>
                         Tải App 
                    </button>
                </div>
            </form>
            <ul align="right" class="navbar-collapse collapse pl-1 pr-1 nav navbar-nav navbar-right" id="top-menu">
                <li>
                    <a class="pl-1 pr-1" href="#" data-toggle="modal" data-target="#loginModal" ng-hide="user">
                        Đăng nhập
                    </a>
                </li>
                <li class="dropdown dropdown-no-close dropdown-no-bg" ng-show="user">
                    <a class="dropdown-toggle pl-1 pr-1 navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <span class="fs-20 fa fa-user fa-1x"></span>
                         %%user.fullname%% 
                        <span class="caret"></span>
                         
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="user-menu-link" href="/clientarea/service">
                                <span class="fa fa-cubes fa-1x"></span>
                                 Dịch vụ của bạn
                            </a>
                        </li>
                        <li>
                            <a class="user-menu-link" href="#">
                                <span class="fa fa-credit-card fa-1x"></span>
                                 Thanh toán
                            </a>
                        </li>
                        <li>
                            <a class="user-menu-link" href="/clientarea/history">
                                <span class="fa fa-history fa-1x"></span>
                                 Lịch sử
                            </a>
                        </li>
                        <li>
                            <a class="user-menu-link" href="/clientarea/collection">
                                <span class="bookmark-scale fa fa-bookmark fa-1x"></span>
                                 Bộ sưu tập
                            </a>
                        </li>
                        <li>
                            <a class="user-menu-link" href="#">
                                <span class="fa fa-trophy fa-1x"></span>
                                 Điểm thưởng
                            </a>
                        </li>
                        <li>
                            <a class="user-menu-link" href="/clientarea/feedback">
                                <span class="fa fa-inbox fa-1x"></span>
                                 Góp ý
                            </a>
                        </li>
                        <li>
                            <a class="user-menu-link" href="/clientarea/info">
                                <span class="fa fa-user fa-1x"></span>
                                 Cài đặt tài khoản
                            </a>
                        </li>
                        <li>
                            <a class="user-menu-link" href="/clientarea/logout" ng-click="logout()" onclick="return false;">
                                <span class="fa fa-power-off fa-1x"></span>
                                 Đăng xuất
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown dropdown-no-close dropdown-no-bg" ng-show="user">
                    <a class="dropdown-toggle pl-1 pr-1 navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
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
                <li class="dropdown dropdown-no-close dropdown-no-bg">
                    <a class="dropdown-toggle pl-1 pr-1 navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                        <span class="fs-20 fa fa-shopping-cart fa-1x"></span>
                        <span class="hidden badge bg-red">
                            1
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <section style="width: 570px;" id="shopping-cart-section" ng-controller="Sper.Checkout.Cart">
                            <table class="table table-hovered">
                                <tr>
                                    <th>
                                        Sản phẩm
                                    </th>
                                    <th>
                                        Số lượng
                                    </th>
                                    <th>
                                        Đơn vị
                                    </th>
                                    <th>
                                        Đơn giá
                                    </th>
                                    <th>
                                        Thành tiền
                                    </th>
                                    <th>
                                        Xóa
                                    </th>
                                </tr>
                                <tr ng-repeat="item in cart_items">
                                    <td style="width: 350px;">
                                        <div class="media">
                                            <div class="media-left">
                                                <div style="width: 80px;">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <img class="media-object" src="%%getImage(item.product).path | thumb:640:360%%" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <div class="fs-14">
                                                        <a href="/service/product?serviceid=%%item.service.serviceid%%&prodid=%%item.product.prodid%%">
                                                            %%item.product.prodcode%%
                                                        </a>
                                                    </div>
                                                </h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="pointer" ng-click="decreaseQuantity(item)">
                                             - 
                                        </span>
                                        %%item.quantity%%
                                        <span class="pointer" ng-click="increaseQuantity(item)">
                                             + 
                                        </span>
                                    </td>
                                    <td>
                                        %%getPrice(item.product).unit%%
                                    </td>
                                    <td>
                                        %%getPrice(item.product).price | toCurrency%%đ
                                    </td>
                                    <td>
                                        %%getPrice(item.product).price * item.quantity | toCurrency%%đ
                                    </td>
                                    <td>
                                        <span class="pointer glyphicon glyphicon-trash" ng-click="remove($index)"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        Tổng tiền: %%calculateTotal() | toCurrency%%đ
                                    </td>
                                </tr>
                            </table>
                            <div class="text-center">
                                <a class="btn-cart-page btn btn-success" href="/cart">
                                    <span class="fa fa-shopping-cart fa-1x"></span>
                                     Xem giỏ hàng
                                </a>
                            </div>
                        </section>
                    </div>
                </li>
                <li class="dropdown dropdown-no-close dropdown-no-bg">
                    <a class="dropdown-toggle pl-1 pr-1 navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
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
                <li class="dropdown dropdown-no-close dropdown-no-bg">
                    <a class="dropdown-toggle pl-1 pr-1 navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
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