<div class="dropdown-menu-right dropdown-menu-add dropdown-menu" style="width: 300px">
    <div class="panel panel-default mg-0" ng-repeat="city in cities" ng-class="{'panel-success': selectedCity === city}">
        <div class="panel-heading">
            <input type="checkbox" id="city_%%city.addcityid%%" ng-model="selectedCityIds[city.addcityid]" ng-change="selectCity(city)" />
            <label href="#" for="city_%%city.addcityid%%">
                %%city.addcityname%%
            </label>
        </div>
        <div class="panel-body pd-0">
            <ul class="list-group mg-0">
                <li class="list-group-item" ng-repeat="district in city.districts">
                    <input type="checkbox" id="district_%%district.addmunicipalityid%%" ng-model="selectedDistrictIds[district.addmunicipalityid]" ng-change="selectDistrict(district)" />
                    <label class="pl-3" for="district_%%district.addmunicipalityid%%">
                        %%district.addmunicipalityaltcode%%
                    </label>
                </li>
            </ul>
        </div>
    </div>
</div>