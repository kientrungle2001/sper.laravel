<section style="width: 570px;" id="shopping-cart-section" ng-controller="Sper.Checkout.Cart">
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
                        <div style="width: 80px;">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img class="media-object" src="%%getImage(item.product).path | thumb:640:360%%" />
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
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
            <td colspan="6">
                Tổng tiền: %%calculateTotal() | toCurrency%%đ
            </td>
        </tr>
    </table>
    <div class="text-center">
        <a class="btn-cart-page btn btn-success" href="/cart">
            <span class="fa fa-shopping-cart fa-1x"></span>
             Xem giỏ hàng
        </a>
    </div>
</section>