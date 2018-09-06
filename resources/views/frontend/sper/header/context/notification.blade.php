<div class="panel panel-default">
    <div class="panel-heading pd-0">
        <div class="row">
            <div class="col-md-12">
                <ul align="justified" type="tabs" class="nav nav-tabs nav-justified bd-none">
                    <li role="presentation" class="active" ng-class="{'active': orderBy == 'me'}">
                        <a href="#" onclick="return false;" ng-click="selectOrderBy('me')">
                            Của tôi
                        </a>
                    </li>
                    <li role="presentation" ng-class="{'active': orderBy == 'service'}">
                        <a href="#" onclick="return false;" ng-click="selectOrderBy('service')">
                            Dịch vụ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel-body pd-0">
        <ul class="media-list">
            <div class="media bb-1">
                <div class="media-left pd-1">
                    <img class="img-circle media-object" src="http://placehold.it/48x48" />
                </div>
                <div class="media-body pd-1">
                    <a href="#">
                        <small>
                            Chúc mừng bạn đã đăng ký tài khoản thành công, chúng tôi rất hân hạnh được phục vụ quý khách hàng
                        </small>
                    </a>
                </div>
            </div>
            <div class="media">
                <div class="media-left pd-1">
                    <img class="img-circle media-object" src="http://placehold.it/48x48" />
                </div>
                <div class="media-body pd-1">
                    <small>
                        Chúc mừng bạn đã đăng ký tài khoản thành công, chúng tôi rất hân hạnh được phục vụ quý khách hàng
                    </small>
                </div>
            </div>
        </ul>
    </div>
</div>