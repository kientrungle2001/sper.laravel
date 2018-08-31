<section ng-controller="Sper.Banner.Top">
    <div class="container-fluid pd-3" ng-show="registerId">
        <div class="row">
            <div class="col-xs-12">
                <form class="form-inline" ng-submit="authenticate()">
                    <div class="form-group">
                        <p class="form-control-static">
                            Một email đã được gửi tới 
                            <strong>
                                %%email%%
                            </strong>
                             có chứa mã xác thực. Xác thực tại đây: 
                        </p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" ng-model="codeAuthen" placeholder="Mã xác thực" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">
                            Xác thực
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid pd-3 bg-black">
        <div class="row">
            <div class="col-sm-3" ng-repeat="banner in banners">
                <a href="%%banner.bannerlink%%">
                    <img class="img-responsive" src="%%banner.bannerimg%%" />
                </a>
            </div>
        </div>
    </div>
</section>