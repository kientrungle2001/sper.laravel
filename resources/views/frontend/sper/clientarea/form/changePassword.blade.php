<form class="form-horizontal">
    <div class="form-group" ng-show="showMessage">
        <div class="col-md-9 col-md-offset-3" mdo="3">
            <p class="form-control-static pd-3" ng-class="{'bg-success': success, 'bg-danger': !success}">
                %%message%%
            </p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">
            Mật khẩu cũ
        </label>
        <div class="col-md-9">
            <input class="form-control" ng-model="oldPassword" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">
            Mật khẩu mới
        </label>
        <div class="col-md-9">
            <input class="form-control" ng-model="newPassword" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">
            Nhập lại Mật khẩu mới
        </label>
        <div class="col-md-9">
            <input class="form-control" ng-model="confirmNewPassword" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3" mdo="3">
            <button class="btn btn-default">
                Hủy bỏ
            </button>
            <button class="btn btn-success" ng-click="update()">
                Đồng ý
            </button>
        </div>
    </div>
</form>