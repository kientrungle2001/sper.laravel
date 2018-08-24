<div class="container-fluid pd-3 bg-black" ng-controller="Sper.Banner.Top">
    <div class="row">
        <div class="col-sm-3" ng-repeat="banner in banners">
            <a href="%%banner.bannerlink%%">
                <img class="img-responsive" src="%%banner.bannerimg%%" />
            </a>
        </div>
    </div>
</div>