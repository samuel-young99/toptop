<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-grid-agileits-w3ls text-left">
                <h3>About US</h3>
                <p><span id="W_Name2">Toptop</span> is a Professional <span id="W_Type1">blogging</span> Platform. Here we will only provide you with interesting content that you will enjoy very much.
                </p>
                <div class="read">
                    <a href="{{url('/about')}}" class="btn btn-primary read-m">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 footer-grid-agileits-w3ls text-left">

               
            </div>
            <!-- subscribe -->
            <div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
                <h2>Newsletter</h2>
                <div class="subscribe-main text-left">
                        <div class="subscribe-form">
                                <form action="#" method="post" class="subscribe_form">
                                    <input class="form-control" type="email" placeholder="Enter your email..." required="">
                                    <button type="submit" class="btn btn-primary submit">Submit</button>
                                </form>
                                <div class="clearfix"> </div>
                       </div>
                    <p>We respect your privacy.No spam ever!</p>
                </div>
                <!-- //subscribe -->
            </div>
        </div>
        <!-- footer -->
        <div class="footer-cpy text-center">
            <div class="w3layouts-agile-copyrightbottom">
                <p>Copyright &copy; <?php $current=date("Y"); print_r($current);?> -  Developed By
                    <a href="">TopTop Services</a>
                </p>
                <p>University of Wolverhampton - UK</p>
            </div>
        </div>
        <!-- //footer -->
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('js/main-copy.js')}}"></script>