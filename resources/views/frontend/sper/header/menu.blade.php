<div class="container" ng-controller="Sper.Header">
    <nav type="default" class="navbar navbar-default bg-white mb-0">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed btn-default" data-target="#top-menu" data-toggle="collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">
                <img src="http://placehold.it/20x20" />
            </a>
        </div>
        <form align="left" class="navbar-form navbar-left">
            <div class="form-group">
                <select class="form-control">
                    <option>
                        Cong ty
                    </option>
                    <option>
                        To doi
                    </option>
                </select>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" style="width:350px" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-default" style="height: 34px;">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <select class="form-control" ng-options="city.addcityid as city.addcityname for city in cities" ng-model="selectedCity">
                     
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-default">
                    <span class="glyphicon glyphicon-phone"></span>
                     Tai App 
                </button>
            </div>
        </form>
        <ul align="right" class="navbar-collapse collapse nav navbar-nav navbar-right" id="top-menu">
            <li>
                <a href="#" data-toggle="modal" data-target="#loginModal">
                    Login
                </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                    <span class="fa fa-bell fa-1x"></span>
                </a>
                <div class="dropdown-menu">
                     Thong bao 1
                    <br />
                     Thong bao 2
                    <br />
                     Thong bao 3
                    <br />
                     Thong bao 4
                    <br />
                     
                </div>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                    <span class="fa fa-shopping-cart fa-1x"></span>
                    <span class="hidden badge bg-red">
                        1
                    </span>
                </a>
                <div class="dropdown-menu">
                     Cart Item 1
                    <br />
                     Cart Item 2
                    <br />
                     Cart Item 3
                    <br />
                     Cart Item 4
                    <br />
                     
                </div>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                </a>
                <div class="dropdown-menu">
                     Viet bai blog 
                </div>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#" onclick="return false;">
                     Tieng Viet 
                </a>
                <div class="dropdown-menu">
                     Tieng Viet
                    <br />
                     Tieng Anh
                    <br />
                     
                </div>
            </li>
        </ul>
    </nav>
</div>