<div class="relative container-fluid" ng-controller="Sper.Service.Map">
    <input class="address-search-input absolute form-control" />
    <select class="absolute form-control address-search-radius" ng-model="radius" ng-init="radius=0.5" ng-options="option.value as option.label for option in options">
         
    </select>
    <iframe style="border:0; width: 100%; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.330981818558!2d105.80198221418333!3d21.218719886643747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135021539afc453%3A0xe6e0faa3520226b4!2zQ-G6o25nIGjDoG5nIGtow7RuZyBxdeG7kWMgdOG6vyBO4buZaSBCw6Bp!5e0!3m2!1svi!2s!4v1530382411218" width="600" height="450" frameborder="0"></iframe>
    <div class="carousel slide" id="service-map" data-ride="carousel">
        <div role="listbox" class="carousel-inner">
            <div class="item" ng-class="{'active': $index === 0}" ng-repeat="pagingServices in chunks">
                <div class="pl-5-p pr-5-p">
                    <div class="row">
                        <div class="col-md-15" ng-repeat="service in pagingServices">
                            <div class="embed-responsive embed-responsive-4by3" style="overflow:hidden;">
                                <img class="img-responsive" src="%%service.serviceimg%%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a direction="left" role="button" class="w-5-p carousel-control left" href="#service-map" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a direction="right" role="button" class="w-5-p carousel-control right" href="#service-map" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>