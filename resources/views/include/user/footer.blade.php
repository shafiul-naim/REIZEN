<section class="footer-area pt-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="about-part">
                    <h2 class="heading-part">about reizen</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="mtb-10">
                    <ul> 
                        <li><a href="https://www.facebook.com"><i class="fab fa-facebook" style="color: #097BEA"></i></a></li>
                        <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com"><i class="fab fa-twitter" style="color: #1DA1F2"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin" style="color: #0A66C2"></i></a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="service-list">
                    <h2 class="heading-part">quick links</h2>
                    <div class="mtb-10">
                        <ul>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\HotelsController@index')}}">hotels</a></li>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\RestaurantsController@index')}}">restaurents</a></li>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\PlaceController@index')}}">tourist places</a></li>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\TransportCostController@index')}}">transport cost</a></li>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\ShoppingMallController@index')}}">shoping malls</a></li>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\GroceryShopController@index')}}">grocery shops</a></li>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\EmergencyContactController@index')}}">emergency contacts</a></li>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\FamousAttireController@index')}}">famous cloth</a></li>
                            <li><i class="fas fa-caret-right"></i><a href="{{action('User\TraditionalAlimentController@index')}}">traditional food</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="webname">
                    <div class="circle">
                        <h2>reizen</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="contact-part">
                    <h2 class="heading-part">our contact</h2>
                    <div class="contact-content mtb-10 pb-50">
                        <div class="contact-phone p-10 row">
                            <a href="">
                                <i class="fas fa-phone-alt"></i><span>+123456789</span>
                            </a>
                        </div>
                        <div class="contact-email p-10 row">
                            <a href=">"    
                                <i class="fas fa-envelope"></i><span>info@reizen.com</span>
                            </a>
                        </div>
                        <div class="contact-address p-10 row">
                            <a href="">
                                <i class="fas fa-map-marked-alt"></i><span>zindabazar,sylhet</span> 
                            </a>
                        </div>
                        <div class="contact-website p-10 row">
                            <a href="">
                                <i class="fas fa-globe"></i><span>www.reizen.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <button id="show-modal" class="btn contact-btn"><span>Make an inquiry!</span></button>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="h-pink">ask the quest</h5>
                                <button id="close-modal" class="close close-popup"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="POST" action="{{action('User\QueryController@store')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group pt-10">
                                                    <label class="h-pink" for="inputEmail4">First Name</label>
                                                    <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group pb-10">
                                                    <label class="h-pink" for="inputPassword4">Last Name</label>
                                                    <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-10">
                                                    <label class="h-pink" for="inputEmail4">Email</label>
                                                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                </div>
                                                <div class="form-group pb-10">
                                                    <label class="h-pink" for="exampleFormControlTextarea1">Write your query...</label>
                                                    <textarea name="question" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                <button type="submit" class="btn btn-common">Send</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-p"><p> &copy; 2021 all rights reserved for reizen</p></div>
    @if (Session::has('submitquestion'))
        <script>
            swal("Good Job!", "Question Submit Successfully!", "success");
        </script>
    @endif
    <script>
        $(function(){
            $('#show-modal').click(function(){
                $('#myModal').modal('show');
            })
            $('#close-modal').click(function(){
                $('#myModal').modal('hide');
            })
        });
    </script>
</section>