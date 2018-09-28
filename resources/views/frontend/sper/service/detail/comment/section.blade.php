<div class="row mb-3" ng-controller="Sper.Service.Detail">
    <div class="col-md-8">
        <div class="panel panel-default" ng-repeat="comment in service.listComment">
            <div class="panel-heading">
                <div class="media">
                    <div class="media-left">
                        <img class="img-circle media-object" style="width: 32px; height: auto;" src="%% comment.avatar || 'http://placehold.it/32x32' %%" />
                    </div>
                    <div class="media-body">
                        <h4 class="fs-14 media-heading">
                            %%comment.fullname%%
                        </h4>
                        <div class="fs-12 text-light">
                            %%comment.createddate%%
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="clearfix" ng-bind-html="comment.cmtdesc"></div>
                <div class="fs-12 clearfix">
                    <span class="fs-12 fas fa-heart fa-2x"></span>
                     Thích 
                    <span class="fs-12 fas fa-comment fa-2x"></span>
                     Thảo luận 
                    <span class="fs-12 fas fa-exclamation-triangle fa-2x"></span>
                     Báo lỗi 
                </div>
            </div>
            <div class="panel-footer" style="background: #F9F9F9;">
                <div class="media">
                    <div class="media-left">
                        <img class="img-circle media-object" src="https://placehold.it/32x32" />
                    </div>
                    <div class="w-100-p media-body">
                        <input class="form-control" />
                    </div>
                </div>
                <ul class="media-list mt-3">
                    <div class="media">
                        <div class="media-left">
                            <img class="img-circle media-object" src="https://placehold.it/32x32" />
                        </div>
                        <div class="w-100-p media-body">
                            <h4 class="fs-14 media-heading">
                                <strong>
                                    Thảo Nguyễn
                                </strong>
                                 lúc 
                                <small>
                                    11:30 20/10/2018
                                </small>
                            </h4>
                            <div class="clearfix">
                                 Được đó 
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <ul class="list-group">
            <li class="text-left list-group-item">
                <strong>
                    %%service.listComment.length%%
                </strong>
                 Bình luận đã chia sẻ 
            </li>
            <li class="text-left list-group-item">
                <strong>
                    6
                </strong>
                 Tuyệt vời 
                <br />
                 
                <strong>
                    53
                </strong>
                 Khá tốt 
                <br />
                 
                <strong>
                    8
                </strong>
                 Trung bình 
                <br />
                 
                <strong>
                    4
                </strong>
                 Kém 
                <br />
                 
            </li>
            <li class="text-left list-group-item">
                <strong class="fs-18 text-service">
                    %%service.rate_avg%%
                </strong>
                 Điểm - 
                <strong>
                    Khá tốt
                </strong>
                 
            </li>
            <li class="text-left list-group-item pd-0">
                <button class="btn-block btn btn-success">
                    <span class="fas fa-comments fa-1x"></span>
                     Viết bình luận
                </button>
            </li>
        </ul>
        <div class="clearfix">
            <img class="img-responsive" src="/images/others/ad2.jpeg" />
        </div>
    </div>
</div>