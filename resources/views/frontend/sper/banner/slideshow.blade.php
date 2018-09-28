<div class="carousel slide" id="slideshow" ng-controller="Sper.Banner.Slideshow" data-ride="carousel">
    <div role="listbox" class="carousel-inner">
        <div class="text-center item" ng-class="{'active': $index === 0}" ng-repeat="banner in banners">
            <div class="row-pd-0 row">
                <div class="text-center col-xs-12">
                    <a href="%%banner.bannerlink%%">
                        <img class="img-responsive" src="%%banner.bannerimg%%" />
                        <h2 class="mg-1 pd-0 fs-16 text-white" style="line-height: 25px;" ng-bind-html="banner.bannerdesc"></h2>
                    </a>
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