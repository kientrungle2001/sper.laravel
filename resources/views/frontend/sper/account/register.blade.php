<div tabindex="-1" role="dialog" class="modal fade" id="registerModal" ng-controller="Sper.Account.Register">
    <div role="document" class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header pd-0">
                <h4 class="clearfix relative modal-title">
                    <p class="text-center mg-0 pd-1 w-100-p">
                        Đăng ký
                    </p>
                    <button type="button" class="absolute p-top-5 p-right-5 close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove-circle"></span>
                    </button>
                </h4>
            </div>
            <div class="modal-body">
                <form ng-submit="register()">
                    <div class="form-group">
                        <p class="bg-danger pd-3 text-white form-control-static" ng-show="error.message">
                            %%error.message%%
                        </p>
                    </div>
                    <div class="form-group" ng-class="{'has-error': error.username}">
                        <input class="form-control" placeholder="Tên đăng nhập" ng-model="username" />
                    </div>
                    <div class="form-group" ng-class="{'has-error': error.fullname}">
                        <input class="form-control" placeholder="Tên hiển thị" ng-model="fullname" />
                    </div>
                    <div class="form-group" ng-class="{'has-error': error.password}">
                        <input class="form-control" placeholder="Mật khẩu" ng-model="password" />
                    </div>
                    <div class="form-group" ng-class="{'has-error': error.confirmPassword}">
                        <input class="form-control" placeholder="Nhập lại mật khẩu" ng-model="confirmPassword" />
                    </div>
                    <div class="form-group" ng-class="{'has-error': error.phone}">
                        <input class="form-control" placeholder="Số điện thoại" ng-model="phone" />
                    </div>
                    <div class="form-group" ng-class="{'has-error': error.email}">
                        <input class="form-control" placeholder="Email" ng-model="email" />
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="Captcha" ng-model="captcha" />
                            </div>
                            <div class="col-sm-6">
                                <p class="form-control-static">
                                    Captcha
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn-block btn btn-success">
                            Đăng ký
                        </button>
                    </div>
                    <div class="form-group">
                        <p class="text-center">
                            <small>
                                 Bằng việc đăng ký bạn đã đồng ý với Sper về
                                <br />
                                 
                                <a class="text-service" href="#">
                                    Điều khoản dịch vụ
                                </a>
                                 và 
                                <a class="text-service" href="#">
                                    chính sách bảo mật
                                </a>
                                 
                            </small>
                        </p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center">
                    <small>
                         Bạn đã có tài khoản? Vui lòng 
                        <a class="text-service" href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">
                            Đăng nhập
                        </a>
                         
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>