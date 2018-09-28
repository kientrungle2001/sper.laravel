<div class="panel panel-default">
    <div class="panel-heading pd-0" ng-controller="Sper.ClientArea.User">
        <div class="thumbnail mg-0">
            <a href="/clientarea/info">
                <img class="img-circle img-responsive" style="width: 64px; height: auto;" src="%% user.avatar || 'http://placehold.it/64x64' %%" />
            </a>
            <div class="text-center caption">
                <a href="/clientarea/info">
                    %%user.fullname%%
                </a>
                <br />
                <small>
                    %%user.email%%
                </small>
            </div>
        </div>
    </div>
    <ul class="account-menu list-group">
        <li class="active list-group-item">
            <a href="/clientarea/info">
                <span class="fa fa-user fa-2x"></span>
                 Thông tin tài khoản
            </a>
        </li>
        <li class="list-group-item">
            <a href="/clientarea/changepassword">
                <span class="fa fa-user fa-2x"></span>
                 Đổi mật khẩu
            </a>
        </li>
        <li class="list-group-item">
            <a href="/clientarea/trophy">
                <span class="fa fa-trophy fa-2x"></span>
                 Điểm thưởng
            </a>
        </li>
        <li class="list-group-item">
            <a href="/clientarea/payment">
                <span class="fa fa-credit-card fa-2x"></span>
                 Thanh toán
            </a>
        </li>
        <li class="list-group-item">
            <a href="/clientarea/collection">
                <span class="bookmark-scale fa fa-bookmark fa-2x"></span>
                 Bộ sưu tập
            </a>
        </li>
        <li class="list-group-item">
            <a href="/clientarea/service">
                <span class="fa fa-cubes fa-2x"></span>
                 Dịch vụ của bạn
            </a>
        </li>
        <li class="list-group-item">
            <a href="/clientarea/privilege">
                <span class="fa fa-user fa-2x"></span>
                 Phân quyền chi nhánh
            </a>
        </li>
        <li class="list-group-item">
            <a href="/clientarea/feedback">
                <span class="fa fa-inbox fa-2x"></span>
                 Góp ý
            </a>
        </li>
        <li class="list-group-item">
            <a href="/clientarea/history">
                <span class="fa fa-history fa-2x"></span>
                 Lịch sử
            </a>
        </li>
        <li class="list-group-item">
            <a href="/logout">
                <span class="fa fa-power-off fa-2x"></span>
                 Thoát
            </a>
        </li>
    </ul>
    <div class="panel-footer pd-0">
        <a class="btn-block btn btn-success" href="/clientarea/createservice">
             Tạo dịch vụ 
        </a>
    </div>
</div>