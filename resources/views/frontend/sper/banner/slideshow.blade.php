<div class="carousel slide" id="slideshow" ng-controller="Sper.Banner.Slideshow" data-ride="carousel">
    <div role="listbox" class="carousel-inner">
        <div class="text-center item" ng-class="{'active': $index === 0}" ng-repeat="banner in banners">
            <div class="row-pd-0 row">
                <div class="col-xs-6">
                    <img class="img-responsive" src="%%banner.bannerimg%%" />
                </div>
                <div class="col-xs-6">
                    <img class="img-responsive" src="%%banner.bannerimg%%" />
                </div>
            </div>
        </div>
    </div>
    <a direction="left" role="button" class="carousel-control left" href="#slideshow" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a direction="right" role="button" class="carousel-control right" href="#slideshow" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>