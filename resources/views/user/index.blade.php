@extends("user.layout.App")
@section("title","Home")

@section("content")


    <!-- Header Area End -->


    <!-- Cart Items Start -->
    <div class="cart-items"> 
        <!-- Single Cart Start -->
        <div class="single-cart"> 
            <img src="assets/img/cart-item/cart-item-1.png" alt="Cart-Item">
            <h4>item title <span>&#2547;550</span></h4>
            <i class='bx bx-x'></i>
        </div> 
        <!-- Single Cart End -->

        <!-- Single Cart Start -->
        <div class="single-cart"> 
            <img src="assets/img/cart-item/cart-item-2.png" alt="Cart-Item">
            <h4>item title <span>&#2547;550</span></h4>
            <i class='bx bx-x'></i>
        </div> 
        <!-- Single Cart End -->

        <!-- Single Cart Start -->
        <div class="single-cart"> 
            <img src="assets/img/cart-item/cart-item-3.png" alt="Cart-Item">
            <h4>item title <span>&#2547;550</span></h4>
            <i class='bx bx-x'></i>
        </div> 
        <!-- Single Cart End -->

        <!-- Single Cart Start -->
        <div class="single-cart"> 
            <img src="assets/img/cart-item/cart-item-4.png" alt="Cart-Item">
            <h4>item title <span>&#2547;550</span></h4>
            <i class='bx bx-x'></i>
        </div> 
        <!-- Single Cart End -->

        <!-- Single Cart Start -->
        <div class="single-cart"> 
            <img src="{{asset('img/cart-item/cart-item-5.png')}}" alt="Cart-Item">
            <h4>item title <span>&#2547;550</span></h4>
            <i class='bx bx-x'></i>
        </div> 
        <!-- Single Cart End -->

        <!-- Btn Start -->
        <a href="#" class="btn">checkout</a>
        <!-- Btn End -->
    </div> 
    <!-- Cart Items End -->

    <!-- Banner Area Start -->
    <section class="banner-area" style="background-image: url('assets/img/banner/banner.jpg');"> 
        <div class="container">
            <!-- Banner Content Start -->
            <div class="banner-content"> 
                <span>welcome to our cafe</span>
                <h4>Live Your Life With Energy</h4>
                <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Modi tempora voluptas
                nesciunt quam necessitatibus praesentium quis et dolorem, cum sunt!</p>
                <!-- Btn Start -->
                <a href="#" class="btn">read more</a>
                <!-- Btn End -->
            </div> 
            <!-- Banner Content End -->
        </div>
    </section> 
    <!-- Banner Area End -->

    <!-- Features Area Start -->
    <section class="features-area"> 
        <div class="container">
            <!-- Features Start -->
            <div class="features"> 
                <!-- Single Feature Start -->
                <div class="single-feature"> 
                    <!-- Feature Icon Start -->
                    <div class="feature-icon"> 
                        <i class='bx bx-package'></i>
                    </div> 
                    <!-- Feature Icon End -->

                    <!-- Feature Content Start -->
                    <div class="feature-content"> 
                        <h4>Free Shipping</h4>
                        <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
                    </div> 
                    <!-- Feature Content End -->
                </div> 
                <!-- Single Feature End -->

                <!-- Single Feature Start -->
                <div class="single-feature"> 
                    <!-- Feature Icon Start -->
                    <div class="feature-icon"> 
                        <i class='bx bx-minus-back'></i>
                    </div> 
                    <!-- Feature Icon End -->

                    <!-- Feature Content Start -->
                    <div class="feature-content"> 
                        <h4>Exchanges & Returns</h4>
                        <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
                    </div> 
                    <!-- Feature Content End -->
                </div> 
                <!-- Single Feature End -->

                <!-- Single Feature Start -->
                <div class="single-feature"> 
                    <!-- Feature Icon Start -->
                    <div class="feature-icon"> 
                        <i class='bx bx-support'></i>
                    </div> 
                    <!-- Feature Icon End -->

                    <!-- Feature Content Start -->
                    <div class="feature-content"> 
                        <h4>24/7 Free Support</h4>
                        <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit.</p>
                    </div> 
                    <!-- Feature Content End -->
                </div> 
                <!-- Single Feature End -->
            </div> 
            <!-- Features End -->
        </div> 
    </section> 
    <!-- Features Area End -->
    
  

    <!-- JavaScript Library -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
@endsection