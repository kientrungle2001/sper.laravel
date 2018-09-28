<div class="col-sm-2 col-md-4 col-lg-3" ng-repeat="item in items">
    <div class="panel panel-default mb-2">
        <div class="panel-heading pd-0">
            <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                <img class="img-responsive" src="%%getImage(item).path | thumb:640:360%%" />
            </div>
        </div>
        <div class="panel-body">
            <a class="service-heading text-service-highlight" href="/service/product?serviceid=%%item.serviceid%%&prodid=%%item.prodid%%">
                <h4>
                    %%item.prodcode%%
                </h4>
            </a>
            <p>
                Giá : 
                <span style="color: red;">
                    %%getPrice(item).price | toCurrency%%đ
                </span>
                /%%getPrice(item).unit%%
            </p>
            <p>
                <a class="text-service" href="/service/product?serviceid=%%item.serviceid%%&prodid=%%item.prodid%%">
                    <span class="fs-14 fas fa-chevron-circle-up fa-2x"></span>
                     Xem chi tiết
                </a>
            </p>
        </div>
    </div>
</div>