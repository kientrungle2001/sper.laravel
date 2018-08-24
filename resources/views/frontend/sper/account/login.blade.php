<div tabindex="-1" role="dialog" class="modal fade" id="loginModal" ng-controller="Sper.Account.Login">
    <div role="document" class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header pd-0">
                <h4 class="clearfix relative modal-title">
                    <p class="text-center mg-0 pd-1 w-100-p">
                        Đăng nhập
                    </p>
                    <button type="button" class="absolute p-top-5 p-right-5 close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove-circle"></span>
                    </button>
                </h4>
            </div>
            <div class="modal-body">
                <form ng-submit="login()">
                    <div class="form-group">
                        <p class="bg-danger pd-3 text-white form-control-static" ng-show="error.message">
                            %%error.message%%
                        </p>
                    </div>
                    <div class="form-group" ng-class="{'has-error': error.username}">
                        <input class="form-control" placeholder="Tên đăng nhập" ng-model="username" />
                    </div>
                    <div class="form-group" ng-class="{'has-error': error.password}">
                        <input class="form-control" type="password" placeholder="Mật khẩu" ng-model="password" />
                    </div>
                    <div class="form-group">
                        <div class="clearfix">
                            <div class="pull-left">
                                <input type="checkbox" value="1" ng-model="remember" />
                                 Lưu mật khẩu 
                            </div>
                            <div class="pull-right">
                                <a href="#" onclick="jQuery('#forgotPasswordModal').modal('show');" data-dismiss="modal">
                                    Quên mật khẩu
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn-block btn btn-success">
                            Đăng nhập
                        </button>
                    </div>
                    <div class="form-group">
                        <p class="text-center  pd-3">
                            Đăng nhập bằng
                        </p>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="login-icon bg-google-phone input-group-addon">
                                <span class="fa fa-phone fa-1x"></span>
                            </div>
                            <button class="btn-block btn btn-success">
                                 Đăng nhập bằng điện thoại 
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="login-icon bg-google-facebook input-group-addon">
                                <span class="fa fa-facebook fa-1x"></span>
                            </div>
                            <button class="btn-block btn btn-primary">
                                 Đăng nhập bằng Facebook 
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="login-icon bg-google-plus input-group-addon">
                                <span class="fa fa-google-plus fa-1x"></span>
                            </div>
                            <button class="btn-block btn btn-danger">
                                 Đăng nhập bằng Google Plus 
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-center">
                             Bạn chưa có tài khoản? 
                            <a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">
                                Đăng ký
                            </a>
                             
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>