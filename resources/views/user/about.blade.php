@extends("user.layout.App")
@section("title","About")

@section("content")



    <!-- Header Area Start -->
   
 

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
            <img src="assets/img/cart-item/cart-item-5.png" alt="Cart-Item">
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
    <section class="banner-area" style="background-image: asset('img/about/about.jpg')"> 
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

    <!-- About Area Start -->
    <section class="about-area"> 
        <div class="container">
            <!-- About Start -->
            <div class="about"> 
                <!-- About Img Start -->
                <div class="about-img"> 
                    <img src="{{asset('img/about/about.jpg')}}" alt="About">
                </div> 
                <!-- About Img End -->

                <!-- About Content Start -->
                <div class="about-content"> 
                    <span>about us</span>
                    <h4>The Best Choice For Your Taste</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas 
                    nulla quasi totam eligendi quae iusto delectus sequi alias numqum ex.
                    </p>
                    <!-- About List Start -->
                    <div class="about-list"> 
                        <ul>
                            <li><i class='bx bxs-right-arrow-square'></i>Drink a premium coffee</li>
                            <li><i class='bx bxs-right-arrow-square'></i>Drink a Delicious coffee</li>
                            <li><i class='bx bxs-right-arrow-square'></i>Drink a qualitative coffee</li>
                        </ul>
                        <ul>
                            <li><i class='bx bxs-right-arrow-square'></i>Drink a italian coffee</li>
                            <li><i class='bx bxs-right-arrow-square'></i>Drink a french coffee</li>
                            <li><i class='bx bxs-right-arrow-square'></i>Drink a mexican coffee</li>
                        </ul>
                    </div> 
                    <!-- About List End -->

                    <!-- Btn Start -->
                    <a href="#" class="btn">read more</a>
                    <!-- Btn End -->
                </div> 
                <!-- About Content End -->
            </div> 
            <!-- About End -->
        </div>
    </section> 
    <!-- About Area End -->
    
    
    <!-- Footer Area End -->

    <!-- JavaScript Library -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


@endsection