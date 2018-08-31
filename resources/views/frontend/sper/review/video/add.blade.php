<div class="dropdown-menu-right dropdown-menu-add dropdown-menu" style="width: 300px">
    <div class="panel panel-default mg-0" ng-repeat="city in cities" ng-class="{'panel-success': selectedCity === city}">
        <div class="panel-heading">
            <a href="#" onclick="return false;" ng-click="selectCity(city)">
                %%city.addcityname%%
            </a>
        </div>
        <div class="panel-body pd-0">
            <ul class="list-group mg-0">
                <li class="list-group-item">
                    <input type="checkbox" />
                    <a href="#" onclick="return false;" ng-click="selectDistrict(district)">
                        Quận 1
                    </a>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" />
                    <a href="#" onclick="return false;" ng-click="selectDistrict(district)">
                        Quận 2
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>