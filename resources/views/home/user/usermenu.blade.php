@auth
    <div class="brands_products"><!--brands_products-->
        <h2>MY ACCOUNT</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{route('user.index')}}"> <i class = "fa fa-user"></i> Profile</a></li>
                <li><a href="#"> <i class = "fa fa-gift"></i> Orders</a></li>
                <li><a href="{{route('user.reviews')}}"> <i class = "fa fa-file"></i> Reviews</a></li>
                <li><a href="#"> <i class = "fa fa-eye"></i> Checkout</a></li>
                <li><a href="#"> <i class = "fa fa-lock"></i> Login</a></li>
                <li><a href="/logout"> <i class = "fa fa-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div><!--/brands_products-->
@endauth