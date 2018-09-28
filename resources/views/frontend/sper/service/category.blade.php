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