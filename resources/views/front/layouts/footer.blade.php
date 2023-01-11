<!--Footer Style Two-->


<footer class="footer-style-two">

    <div class="auto-container">

        <!--Upper Section-->
        <div class="upper-section">

            <!--Appointment Widget-->
            <div class="appointment-widget">
                <h2>Make an Appointment</h2>

                <!--Appointment Form-->
                <div class="appointment-form">

                    <form method="post" action="http://st.ourhtmldemo.com/new/Accoya/contact.html">
                        <div class="row clearfix">
                            <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                <input type="text" name="name" value="" placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                <input type="text" name="phone" value="" placeholder="Phone" required>
                            </div>
                            <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                <select class="custom-select-box">
                                    <option>Window Service</option>
                                    <option>Service One</option>
                                    <option>Service Two</option>
                                    <option>Service Three</option>
                                    <option>Service Four</option>
                                </select>
                            </div>
                            <button type="submit" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>Submit</button>
                        </div>
                    </form>

                </div>

            </div>

            <!--Footer Info Block-->
            <div class="footer-info-block">
                <div class="clearfix">

                    <!--Social Box-->
                    <div class="social-outer text-center">
                        <!--Social Icon Two-->
                        <ul class="social-icon-two">
                            <li><a href="{{settingSite()->facebook}}"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="{{settingSite()->twitter}}"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="{{settingSite()->instagram}}"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="{{settingSite()->YouTube}}"><span class="fa fa-youtube-play"></span></a></li>
                        </ul>
                    </div>

                    <!--Pull Left-->
                    <div class="pull-left">
                        <div class="text">+0 789.0123.456 <br> {{settingSite()->email}}</div>
                    </div>

                    <div class="pull-right">
                        <div class="text">{{settingSite()->address}}</div>
                    </div>

                </div>
            </div>

        </div>

        <!--Foter Bottom-->
        <div class="footer-bottom">
            <div class="clearfix">

                <!--Logo Box-->
                <div class="logo-box">
                    <a href="{{route('website')}}"><img src="{{asset(settingSite()->image)}}" alt="" /></a>
                </div>

                <div class="column">
                    <div class="text"  style="
    margin-top: 18px;
    margin-left: 393px;
" > {{date('Y')+1}} – {{date('Y')}} © All rights reserved by <a href="https://faroukgroup.com/">Farouk Group</a></div>
                </div>


            </div>
        </div>

    </div>




</footer>


<!--End Footer Style Two-->
