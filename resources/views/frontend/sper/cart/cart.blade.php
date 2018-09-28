<div class="container mt-3 mb-3">
    <ol class="breadcrumb">
        <li>
            <a href="/">
                Trang chủ
            </a>
        </li>
        <li class="active">
             Giỏ hàng 
        </li>
    </ol>
    <div class="text-center">
        <h1>
            Giỏ hàng của bạn
        </h1>
    </div>
    <section id="shopping-cart-section" ng-controller="Sper.Checkout.Cart">
        <table class="table table-hovered">
            <tr>
                <th>
                    Sản phẩm
                </th>
                <th>
                    Số lượng
                </th>
                <th>
                    Đơn vị
                </th>
                <th>
                    Đơn giá
                </th>
                <th>
                    Thành tiền
                </th>
                <th>
                    Xóa
                </th>
            </tr>
            <tr ng-repeat="item in cart_items">
                <td style="width: 350px;">
                    <div class="media">
                        <div class="media-left">
                            <div style="width: 160px;">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="media-object" src="%%getImage(item.product).path | thumb:640:360%%" />
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <div class="text-bold fs-16">
                                    <a href="/service/detail?serviceid=%%item.service.serviceid%%">
                                        %%item.service.servicename%%
                                    </a>
                                </div>
                                <div class="fs-14">
                                    <a href="/service/product?serviceid=%%item.service.serviceid%%&prodid=%%item.product.prodid%%">
                                        %%item.product.prodcode%%
                                    </a>
                                </div>
                            </h4>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="pointer" ng-click="decreaseQuantity(item)">
                         - 
                    </span>
                    %%item.quantity%%
                    <span class="pointer" ng-click="increaseQuantity(item)">
                         + 
                    </span>
                </td>
                <td>
                    %%getPrice(item.product).unit%%
                </td>
                <td>
                    %%getPrice(item.product).price | toCurrency%%đ
                </td>
                <td>
                    %%getPrice(item.product).price * item.quantity | toCurrency%%đ
                </td>
                <td>
                    <span class="pointer glyphicon glyphicon-trash" ng-click="remove($index)"></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    Tổng tiền
                </td>
                <td>
                    %%calculateTotal() | toCurrency%%đ
                </td>
                <td></td>
            </tr>
        </table>
        <div class="text-center">
            <button class="btn-cart-page btn btn-default">
                Trở lại trang trước
            </button>
            <button class="btn-cart-page btn btn-success">
                Thanh toán
            </button>
        </div>
    </section>
</div>