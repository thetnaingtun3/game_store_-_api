@extends('layouts.master')
@section('content')

    <!-- banner -->
    <div class="banner">
        <div class="agileinfo-dot">
            <div class="agileits-logo">
                <h1><a href="index.html">Gaming <span>Store</span></a></h1>
            </div>
            <div class="header-top">
                <div class="container">
                    <div class="header-top-info">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                <nav>
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="#about" class="scroll">About</a></li>
                                        <li><a href="#gallery" class="scroll">Latest Games</a></li>
                                        <li><a href="#team" class="scroll">Team</a></li>
                                        <li><a href="#blog" class="scroll">Blog</a></li>
                                        <li><a href="#mail" class="scroll">Mail Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
            <div class="w3layouts-banner-info">
                <div class="container">
                    <div class="w3layouts-banner-slider">
                        <div class="w3layouts-banner-top-slider">
                            <div class="slider">
                                <div class="callbacks_container">
                                    <ul class="rslides callbacks callbacks1" id="slider4">
                                        <li>
                                            <div class="banner_text">
                                                <h3>Lorem ipsum</h3>
                                                <p>In volutpat metus quis velit malesuada</p>
                                                <div class="w3-button">
                                                    <a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner_text">
                                                <h3>Nam semper</h3>
                                                <p>Nam imperdiet tellus nec enim tempus</p>
                                                <div class="w3-button">
                                                    <a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <script src="js/responsiveslides.min.js"></script>
                                <script>
                                  // You can also use "$(window).load(function() {"
                                  $(function () {
                                    // Slideshow 4
                                    $('#slider4').responsiveSlides({
                                      auto: true,
                                      pager: true,
                                      nav: true,
                                      speed: 500,
                                      namespace: 'callbacks',
                                      before: function () {
                                        $('.events').append('<li>before event fired.</li>')
                                      },
                                      after: function () {
                                        $('.events').append('<li>after event fired.</li>')
                                      }
                                    })

                                  })
                                </script>
                                <!--banner Slider starts Here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <div class="welcome">
                <div class="agileits-title">
                    <h2>Welcome</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent
                        nulla
                        nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="about-w3lsrow">
                @foreach ($about as $user)
                    <div class="col-md-7 col-sm-7">
                        <img  src="{{asset('/gallery/about/'.($user->image))}}" style="width: 655px;
                        height: 480%;
    background-size: cover;
    min-height: 30em;
    padding: 0;
	position:relative;" alt="">
                        <div class="w3about-text">


                            <h5 class="w3l-subtitle">{{$user->title}}</h5>
                            <p class="text-justify">{{$user->description}}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- markets -->
    <div class="markets" id="markets">
        <div class="container">
            <div class="agileits-title">
                <h3>Our Services</h3>
            </div>
            <div class="markets-grids">
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Suspendisse</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at
                                lectus
                                ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Aliquam</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at
                                lectus
                                ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Consectetur</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at
                                lectus
                                ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Bibendum</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at
                                lectus
                                ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Vestibulum</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at
                                lectus
                                ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Fermentum</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at
                                lectus
                                ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //markets -->
    <!-- portfolio -->
    <div class="portfolio" id="gallery">
        <div class="container">
            <div class="agileits-title">
                <h3>Our Games</h3>
            </div>
            <ul class="simplefilter w3layouts agileits">
                <li class="active w3layouts agileits" data-filter="all">All</li>
                <li class="w3layouts agileits" data-filter="1">Category1</li>
                <li class="w3layouts agileits" data-filter="2">Category2</li>
                <li class="w3layouts agileits" data-filter="3">Category3</li>
                <li class="w3layouts agileits" data-filter="4">Category4</li>
                <li class="w3layouts agileits" data-filter="5">Category5</li>
            </ul>

            <div class="filtr-container w3layouts agileits">

                <div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
                    <a href="images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="2, 5" data-sort="Luminous night">
                    <a href="images/p2.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p2.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="1, 4" data-sort="City wonders">
                    <a href="images/p3.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p3.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="3" data-sort="In production">
                    <a href="images/p4.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p4.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="3, 4" data-sort="Industrial site">
                    <a href="images/p5.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p5.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Peaceful lake">
                    <a href="images/p6.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p6.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="1, 5" data-sort="City lights">
                    <a href="images/p7.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p7.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
                    <a href="images/p8.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p8.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
                    <a href="images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Gaming <span>Store</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //portfolio -->
    <!-- modal -->
    <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Gaming <span>Store</span></h4>
                </div>
                <div class="modal-body">
                    <div class="agileits-w3layouts-info">
                        <img src="images/1.jpg" alt=""/>
                        <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus
                            odio
                            eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis.
                            Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse
                            ultrices
                            hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa luctus,
                            varius
                            lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus
                            sem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    <!-- testimonial -->
    <div class="jarallax testimonial" id="testimonial">
        <div class="testimonial-dot">
            <div class="container">
                <div class="agileits-title testimonial-heading">
                    <h3>Testimonial</h3>
                </div>
                <div class="w3-agile-testimonial">
                    <div class="slider">
                        <div class="callbacks_container">
                            <ul class="rslides callbacks callbacks1" id="slider3">
                                <li>
                                    <div class="testimonial-img-grid">
                                        <div class="testimonial-img t-img1">
                                            <img src="images/ts1.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="images/ts2.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-img t-img2">
                                            <img src="images/ts3.jpg" alt=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="testimonial-img-info">
                                        <p>Nunc interdum elit nec sapien vehicula, ut blandit nulla ultrices. Sed
                                            ullamcorper metus eget efficitur rutrum. Aliquam a nunc odio. Aenean
                                            fermentum
                                            finibus efficitur.</p>
                                        <h5>Peter Guptill</h5>
                                        <h6>Proin blandit</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial-img-grid">
                                        <div class="testimonial-img t-img1">
                                            <img src="images/ts2.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="images/ts3.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-img t-img2">
                                            <img src="images/ts1.jpg" alt=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="testimonial-img-info">
                                        <p>Morbi est est, mollis id diam a, pellentesque dignissim lorem. Sed malesuada
                                            sed
                                            lacus sit amet vestibulum. Sed nibh purus, egestas eu orci vel, mollis
                                            interdum
                                            orci.</p>
                                        <h5>Mary Jane</h5>
                                        <h6>Lorem ipsum</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial-img-grid">
                                        <div class="testimonial-img t-img1">
                                            <img src="images/ts3.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="images/ts1.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-img t-img2">
                                            <img src="images/ts2.jpg" alt=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="testimonial-img-info">
                                        <p>Proin blandit rhoncus metus porta tristique. Praesent suscipit in erat a
                                            tempor.
                                            Nullam tempor lectus ex, a auctor orci ultricies ac. Mauris sapien neque,
                                            condimentum sit</p>
                                        <h5>Steven Wilson</h5>
                                        <h6>Proin blandit</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <script>
                          // You can also use "$(window).load(function() {"
                          $(function () {
                            // Slideshow 4
                            $('#slider3').responsiveSlides({
                              auto: true,
                              pager: false,
                              nav: false,
                              speed: 500,
                              namespace: 'callbacks',
                              before: function () {
                                $('.events').append('<li>before event fired.</li>')
                              },
                              after: function () {
                                $('.events').append('<li>after event fired.</li>')
                              }
                            })

                          })
                        </script>
                        <!--banner Slider starts Here-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonial -->
    <!-- team -->
    <div class="team" id="team">
        <div class="container">
            <div class="agileits-title">
                <h3>Amazing Team</h3>
            </div>
            <div class="agileits-team-grids">
                @foreach($team as $tea)
                <div class="col-md-3 agileits-team-grid">
                    <div class="team-info">
                        <img src="{{asset('/gallery/team/'.($tea->image))}}" alt="">
                        <div class="team-caption">
                            <h4>{{$tea->name}}</h4>
                            <p>{{$tea->about}}</p>
                            <ul>
                                <li><a href="{{$tea->fb_link}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$tea->tw_link}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$tea->gg_link}}"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //team -->
    <!-- blog -->

    <!-- //blog -->
    <!-- mail -->
    <div class="mail" id="mail">
        <div class="container">
            <div class="agileits-title">
                <h3>Mail Us</h3>
            </div>
            <div class="w3_mail_grids">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post">
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-10" name="w3lName"
                               placeholder="Your Name" required=""/>
						<label class="input__label input__label--jiro" for="input-10">
							<span class="input__label-content input__label-content--jiro">Your Name</span>
						</label>
					</span>
                    <span class="input input--jiro">
						<input class="input__field input__field--jiro" type="email" id="input-11" name="w3lSender"
                               placeholder="Your Email Address" required=""/>
						<label class="input__label input__label--jiro" for="input-11">
							<span class="input__label-content input__label-content--jiro">Your Email</span>
						</label>
					</span>
                    <span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-12" name="w3lSubject"
                               placeholder="Subject" required=""/>
						<label class="input__label input__label--jiro" for="input-12">
							<span class="input__label-content input__label-content--jiro">Subject</span>
						</label>
					</span>
                    <textarea name="w3lMessage" placeholder="Message..." required=""></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <script src="js/classie.js"></script>
    <script>
      (function () {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
          (function () {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g
            String.prototype.trim = function () {
              return this.replace(rtrim, '')
            }
          })()
        }

        [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
          // in case the input is already filled..
          if (inputEl.value.trim() !== '') {
            classie.add(inputEl.parentNode, 'input--filled')
          }

          // events:
          inputEl.addEventListener('focus', onInputFocus)
          inputEl.addEventListener('blur', onInputBlur)
        })

        function onInputFocus (ev) {
          classie.add(ev.target.parentNode, 'input--filled')
        }

        function onInputBlur (ev) {
          if (ev.target.value.trim() === '') {
            classie.remove(ev.target.parentNode, 'input--filled')
          }
        }
      })()
    </script>
    <!-- //mail -->
    <!-- contact -->
    <div id="contact" class="contact">
        <div class="contact-row agileits-w3layouts">
            <div class="col-md-5 contact-w3lsleft map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488799.4874326692!2d95.90137815046135!3d16.8389524908704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1583130064022!5m2!1sen!2smm"></iframe>
            </div>
            <div class="col-md-7 contact-w3lsright">
                <h6>Sed interdum interdum accumsan nec purus ac orci finibus facilisis sapien Sed interdum . </h6>
                <div class="col-xs-6 address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Visit Us</h5>
                        <p>Broome St, Canada, <br>NY 10002, New York </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-6 address-row w3-agileits">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Mail Us</h5>
                        <p><a href="mailto:info@example.com"> mail@example1.com </a></p>
                        <p><a href="mailto:info@example.com"> mail@example2.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-6 address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Call Us</h5>
                        <p>+01 222 333 4444<br></p>
                        <p>+01 222 333 5555</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-6 address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Working Hours</h5>
                        <p>Mon - Fri : 8:00 am to 10:30 pm<br>
                            Sat - Sun : 9:00 am to 11:30 pm</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //contact -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-4 amet-sed">
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation
                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-md-4 amet-sed amet-medium">
                    <div class="footer-title">
                        <h3>Twitter Feed</h3>
                    </div>
                    <p><a href="#">http://example.com</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        tincidunt lorem sed velit fermentum eget placerat. </p>
                    <p><a href="#">http://mail.com</a> Sed tincidunt lorem sed velit fermentum eget placerat. Lorem
                        ipsum
                        dolor sit, consectetur adipiscing elit. </p>
                </div>
                <div class="col-md-4 amet-sed ">
                    <div class="footer-title">
                        <h3>Follow Us</h3>
                    </div>
                    <div class="agileinfo-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                    <div class="support">
                        <form action="#" method="post">
                            <input type="email" placeholder="Enter email...." required="">
                            <input type="submit" value="Subscribe" class="botton">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <p class="footer-class">© 2020 Gaming Store . All Rights Reserved | Design by <a
                        href="http://w3layouts.com/"
                        target="_blank">W3layouts</a>
            </p>
        </div>
    </div>

@stop