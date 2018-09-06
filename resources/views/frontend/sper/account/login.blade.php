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
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn-checkbox btn-xs btn btn-default">
                                        <input type="checkbox" value="1" ng-model="remember" autocomplete="off" />
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </label>
                                </div>
                                <span class="d-inline-block pl-3">
                                    Lưu mật khẩu
                                </span>
                            </div>
                            <div class="pull-right">
                                <a class="text-service" href="#" onclick="jQuery('#forgotPasswordModal').modal('show');" data-dismiss="modal">
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
                            <div class="login-icon bg-phone input-group-addon">
                                <span class="fa fa-phone fa-1x"></span>
                            </div>
                            <a class="btn-block btn-login-social btn btn-success">
                                 Đăng nhập bằng điện thoại 
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="login-icon bg-facebook input-group-addon">
                                <span class="fab fa-facebook-f fa-1x"></span>
                            </div>
                            <a class="btn-block btn-login-social btn btn-primary">
                                 Đăng nhập bằng Facebook 
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="login-icon bg-google-plus input-group-addon">
                                <span class="fab fa-google-plus-g fa-1x"></span>
                            </div>
                            <a class="btn-block btn-login-social btn btn-danger">
                                 Đăng nhập bằng Google Plus 
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-center">
                             Bạn chưa có tài khoản? 
                            <a class="text-service" href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">
                                Đăng ký
                            </a>
                             
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>