@extends('WebSite.layouts.master')

@section('content')
    <!-- Main Slider Three -->
    <section class="main-slider-three">
        <div class="banner-carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>شريكك الصحي الأكثر ثقة مدى الحياة</h2>
                                    <div class="text">
                                        نحن نقدم استشارات مجانية وأفضل إدارة مشروع لك
                                        الأفكار ، 100٪ التسليم مضمون
                                    </div>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn appointment-btn"><span class="txt">المواعيد</span></a>
                                        <a href="" class="theme-btn services-btn">الخدمات</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('WebSite/images/main-slider/3.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>فريقك الطبي الأكثر موثوقية على مدار الحياة.</h2>
                                    <div class="text">نقدم استشارات مجانية وأفضل إدارة للمشروعات لأفكارك، مع ضمان التسليم 100%.</div>
                                    <div class="btn-box">
                                        <a href="" class="theme-btn appointment-btn"><span class="txt">المواعيد</span></a>
                                        <a href="" class="theme-btn services-btn">الخدمات</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('WebSite/images/main-slider/17.jpg')}}" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>خبراء العمليات الجراحية لضمان سلامتك.</h2>
                                    <div class="text">نقدم استشارات مجانية وأفضل إدارة للعمليات لضمان نجاحها، مع التزام بتسليم النتائج بنسبة 100%.</div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">المواعيد</span></a>
                                        <a href="services.html" class="theme-btn services-btn">الخدمات</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('WebSite/images/main-slider/18.jpg')}}" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Health Section -->
    <section class="health-section">
        <div class="auto-container">
            <div class="inner-container">

                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="border-line"></div>
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>من نحن <br> الريادة في الصحة</h2>
                                <div class="separator"></div>
                            </div>
                            <div class="text">أين أنت في قلب مهمتنا. نأمل أن تعتبرنا منزلك الطبي - المكان الذي تشعر فيه بالأمان والراحة والرعاية. كمجموعة طبية متعددة التخصصات
                            </div>
                            <a href="" class="theme-btn btn-style-one"><span class="txt">المزيد عنا</span></a>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{URL::asset('WebSite/images/gallery/21.jpg')}}" alt=""/>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Health Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="auto-container">
        <div class="row clearfix">

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon flaticon-doctor-stethoscope"></div>
                        <h3><a href="#">العلاج الطبي</a></h3>
                    </div>
                    <div class="text">نقدم رعاية طبية شاملة لمساعدتك في التغلب على التحديات الصحية وتحسين جودة حياتك.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon flaticon-ambulance-side-view"></div>
                        <h3><a href="#">مساعدة الطوارئ</a></h3>
                    </div>
                    <div class="text">فريق الطوارئ لدينا جاهز على مدار الساعة لتقديم المساعدة الفورية عند الحاجة.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon fas fa-user-md"></div>
                        <h3><a href="#">أطباء مؤهلين</a></h3>
                    </div>
                    <div class="text">يضم فريقنا أطباء متخصصين ومؤهلين لتقديم أفضل رعاية صحية ممكنة.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon fas fa-briefcase-medical"></div>
                        <h3><a href="#">محترفين طبيا</a></h3>
                    </div>
                    <div class="text">نحن نقدم خدمات طبية احترافية متكاملة لضمان راحتك وسلامتك.</div>
                </div>
            </div>

        </div>

        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Department Section Three -->
    <section class="department-section-three">
        <div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
        <div class="auto-container">
            <!-- Department Tabs-->
            <div class="department-tabs tabs-box">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <h2>الأقسام</h2>
                            <div class="separator"></div>
                        </div>
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-urology" class="tab-btn active-btn">قسم المسالك البولية</li>
                            <li data-tab="#tab-neurology" class="tab-btn">قسم المخ والأعصاب</li>
                            <li data-tab="#tab-gastrology" class="tab-btn">قسم أمراض الجهاز الهضمي</li>
                            <li data-tab="#tab-cardiology" class="tab-btn">قسم أمراض القلب</li>
                            <li data-tab="#tab-eye" class="tab-btn">قسم العناية بالعيون</li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!-- Tab -->
                            <div class="tab active-tab" id="tab-urology">
                                <div class="content">
                                    <h2>قسم المسالك البولية</h2>
                                    <div class="title">وصف القسم</div>
                                    <div class="text">
                                        <p>يقدم قسم المسالك البولية خدمات شاملة تتعلق بمشاكل المسالك البولية. يتوفر لدينا مجموعة من الأطباء المتخصصين الذين يتمتعون بخبرة واسعة في هذا المجال، مما يضمن توفير رعاية طبية عالية الجودة.</p>
                                        <p>نحن نقدم تشخيصات دقيقة وعلاجًا فعّالًا لمجموعة متنوعة من الحالات، بما في ذلك التهابات المسالك البولية، وحصى الكلى، ومشاكل البروستاتا، وغيرها.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - خدمات المسالك البولية</h3>
                                            <div class="column-text">تشمل خدماتنا فحوصات شاملة، وعلاج الأمراض، ومتابعة حالات المرضى.</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - استشارات خاصة</h3>
                                            <div class="column-text">نوفر استشارات خاصة للمرضى لتقديم الدعم والمشورة الطبية.</div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">عرض المزيد</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-neurology">
                                <div class="content">
                                    <h2>قسم المخ والأعصاب</h2>
                                    <div class="title">وصف القسم</div>
                                    <div class="text">
                                        <p>يتمتع قسم المخ والأعصاب بخبرات متخصصة في تشخيص وعلاج الأمراض العصبية. نحن نقدم رعاية متكاملة للمرضى الذين يعانون من اضطرابات عصبية مختلفة.</p>
                                        <p>فريقنا من الأطباء المتخصصين ملتزم بتقديم أفضل خدمات الرعاية الصحية والتشخيص الدقيق.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - خدمات المخ والأعصاب</h3>
                                            <div class="column-text">نقدم خدمات متكاملة تتضمن تقييمات عصبية وعلاج طبي مخصص.</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - استشارات متقدمة</h3>
                                            <div class="column-text">استشارات متقدمة لأحدث الطرق العلاجية لمشاكل الأعصاب.</div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">عرض المزيد</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-gastrology">
                                <div class="content">
                                    <h2>قسم أمراض الجهاز الهضمي</h2>
                                    <div class="title">وصف القسم</div>
                                    <div class="text">
                                        <p>قسم أمراض الجهاز الهضمي يقدم مجموعة واسعة من الخدمات الطبية لعلاج اضطرابات الجهاز الهضمي. نحن نؤمن بتقديم رعاية متخصصة لكل مريض على حدة.</p>
                                        <p>أطباؤنا ذوو الخبرة يعملون بجد لضمان تقديم رعاية صحية فعالة تشمل جميع جوانب الجهاز الهضمي.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - خدمات الجهاز الهضمي</h3>
                                            <div class="column-text">تشمل خدماتنا فحوصات وعلاج الأمراض المعوية والمعدية.</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - استشارات تخصصية</h3>
                                            <div class="column-text">تقديم استشارات تخصصية لمشاكل الجهاز الهضمي المختلفة.</div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">عرض المزيد</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-cardiology">
                                <div class="content">
                                    <h2>قسم أمراض القلب</h2>
                                    <div class="title">وصف القسم</div>
                                    <div class="text">
                                        <p>يوفر قسم أمراض القلب خدمات شاملة لعلاج والوقاية من أمراض القلب والأوعية الدموية. يتمتع فريقنا بمهارات وخبرات عالية في هذا المجال.</p>
                                        <p>نحن نحرص على تقديم رعاية شخصية لكل مريض بما يتناسب مع احتياجاته.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - خدمات القلب</h3>
                                            <div class="column-text">فحوصات شاملة وعلاج متقدم لأمراض القلب.</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - استشارات القلب</h3>
                                            <div class="column-text">تقديم استشارات متخصصة حول الوقاية وعلاج أمراض القلب.</div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">عرض المزيد</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-eye">
                                <div class="content">
                                    <h2>قسم العناية بالعيون</h2>
                                    <div class="title">وصف القسم</div>
                                    <div class="text">
                                        <p>يقدم قسم العناية بالعيون خدمات شاملة تتعلق بصحة العين والرؤية. نحن نستخدم أحدث التقنيات لتقديم أفضل رعاية للمرضى.</p>
                                        <p>فريقنا من أطباء العيون مكرس لتقديم رعاية صحية متميزة مع التركيز على احتياجات المرضى الفردية.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - خدمات العيون</h3>
                                            <div class="column-text">فحوصات شاملة وعلاج للأمراض المتعلقة بالعيون.</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - استشارات العيون</h3>
                                            <div class="column-text">استشارات متخصصة لتقديم أفضل رعاية للعيون.</div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">عرض المزيد</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Department Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>الأخصائيون الطبيون</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('WebSite/images/gallery/d5.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="#appointment-form" class="appointment">حجز موعد</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">د. روبت سميث</a></h3>
                            <div class="designation">جراح قلب</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('WebSite/images/gallery/d1.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="#appointment-form" class="appointment">حجز موعد</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">الدكتورة أندريا جونيا</a></h3>
                            <div class="designation">أخصائي السرطان</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('WebSite/images/gallery/d3.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="#appointment-form" class="appointment">حجز موعد</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">دكتور ويل لورا</a></h3>
                            <div class="designation">طبيب الأسرة</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('WebSite/images/gallery/d4.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="#appointment-form" class="appointment">حجز موعد</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">الدكتور أليكس فورغسين</a></h3>
                            <div class="designation">أخصائي تقويم العظام</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- Video Section -->
    <section class="video-section" style="background-image:url(images/background/5.jpg)">
        <div class="auto-container">
            <div class="content">
                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span
                        class="flaticon-play-button"><i class="ripple"></i></span></a>
                <div class="text">نحن نهتم بصحتك<h2>نحن نهتم بك</h2>
                </div>
            </div>
    </section>
    <!-- End Video Section -->

    <!-- Appointment Section Two -->
    <section class="appointment-section-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/doctor-2.png" alt=""/>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div id="appointment-form" class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>حجز موعد</h2>
                                <div class="separator"></div>
                            </div>

                            <!-- Appointment Form -->
                            <div class="appointment-form">
                                <livewire:appointments.create/>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>ماذا يقول المرضى</h2>
                <div class="separator"></div>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            {{-- asset('WebSite/images/gallery/d4.jpg --}}
                            <img src="{{asset('WebSite/images/gallery/p2.jpg')}}" alt=""/>
                        </div>
                        <div class="text">
                            المركز الطبي هو مكان ممتاز لتلقي جميع خدماتك الصحية. جئت لإجراء فحص روتيني، ولم أنتظر أكثر من 5 دقائق قبل أن يتم استدعائي. أستطيع أن أتخيل جودة الخدمة التي ستحصل عليها في الحالات الأكثر تعقيدًا. شكرًا جزيلاً!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>أحمد عبد الله</h3>
                                        <div class="author">مريض قلب</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('WebSite/images/gallery/p3.jpg')}}" alt=""/>
                        </div>
                        <div class="text">
                            المركز الطبي كان الخيار الأفضل عندما كنت بحاجة لاستشارة طبية سريعة. جئت للعيادة وتمت خدمتي في وقت قصير جدًا، وأعجبت بجودة الرعاية الصحية المقدمة. بالتأكيد سأعود مرة أخرى!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>ليلى محمد</h3>
                                        <div class="author">مريضة السكري</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('WebSite/images/gallery/p5.jpg')}}" alt=""/>
                        </div>
                        <div class="text">
                            تلقيت خدمة ممتازة في هذا المركز. أتيت لإجراء فحص روتيني ولم أضطر للانتظار طويلًا. مستوى الرعاية الصحية هنا رائع حقًا، وأشعر بالراحة عند المجيء لأي استشارات مستقبلية. شكرًا للفريق!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>علي حسن</h3>
                                        <div class="author">مريض السرطان</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('WebSite/images/gallery/p4.jpg')}}" alt=""/>
                        </div>
                        <div class="text">
                            الخدمة في المركز الطبي كانت أكثر من رائعة. لم أضطر للانتظار طويلًا، وتمت معاملتي بكل احترافية واهتمام. أنصح الجميع بالتوجه لهذا المركز للحصول على أفضل رعاية طبية.
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>فاطمة الزهراء</h3>
                                        <div class="author">مريضة الجهز الهضمي</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section Two -->

    <!-- Counter Section -->
    <section class="counter-section style-two" style="background-image: url(images/background/pattern-3.png)">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter style-two">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                                </div>
                                <h4 class="counter-title">مرضى راضون</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box alternate">
                                    +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                                </div>
                                <h4 class="counter-title">فريق الطبيب</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                                </div>
                                <h4 class="counter-title">مهمة النجاح</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                                </div>
                                <h4 class="counter-title">جراحات ناجحة</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Doctor Info Section -->
    <section class="doctor-info-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>ساعات العمل</h3>
                            <ul class="doctor-time-list">
                                <li>من الإثنين إلى الجمعة<span>8:00am–7:00pm</span></li>
                                <li>السبت <span>9:00am–5:00pm</span></li>
                                <li>الأحد<span>9:00am–3:00pm</span></li>
                            </ul>
                            <h4>حالات الطوارئ</h4>
                            <div class="phone">اتصل بنا ! <strong>+898 68679 575 09</strong></div>
                        </div>
                    </div>

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>جدول الأطباء</h3>
                            <div class="text">
                                الجدول التالي هو للإرشاد فقط لمساعدتك في التخطيط لموعدك مع طبيبك أو الممرضة المفضلة لديك. نود التنويه بأن التوافر غير مضمون في جميع الأوقات، حيث قد يكون الأطباء أو الممرضات مشغولين بمهام أخرى.
                            </div>
                            <a href="#" class="detail">تفاصيل أكثر</a>
                        </div>
                    </div>


                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>العناية الصحية الأولية</h3>
                            <div class="text">
                                تقديم الرعاية الصحية الأولية هو الأساس للحفاظ على صحة جيدة ومنع الأمراض. فريقنا ملتزم بتقديم الرعاية الفعّالة والشاملة التي تركز على الوقاية والتشخيص المبكر لتلبية احتياجاتك الصحية.
                            </div>
                            <a href="#" class="detail">اتصل الآن</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Info Section -->

    <!-- News Section Two -->
    <section class="news-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>آخر الأخبار والمقالات</h2>
                <div class="separator style-three"></div>
            </div>
            <div class="row clearfix">

                <!-- News Block Two -->
                <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <ul class="post-info">
                                    <li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
                                    <li><span class="icon flaticon-heart"></span> 126</li>
                                </ul>
                                <ul class="post-meta">
                                    <li>21 يونيو 2018 الساعة 8:12 مساءً</li>
                                    <li>نشر بواسطة: Admin</li>
                                </ul>
                                <h3><a href="#">التشخيص الطبي: الأساليب الحديثة للحصول على نتائج دقيقة</a></h3>
                                <div class="text">
                                    يعد التشخيص الدقيق من أهم العوامل في تحديد العلاج المناسب. تعرف على أحدث الأساليب
                                    لتحسين النتائج الطبية.
                                </div>
                                <a href="#" class="theme-btn btn-style-five"><span class="txt">اقرأ المزيد</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Two -->
                <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <ul class="post-info">
                                    <li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
                                    <li><span class="icon flaticon-heart"></span> 126</li>
                                </ul>
                                <ul class="post-meta">
                                    <li>21 يونيو 2018 الساعة 8:12 مساءً</li>
                                    <li>نشر بواسطة: Admin</li>
                                </ul>
                                <h3><a href="#">النساء وصحتهن: حقائق مهمة يجب معرفتها</a></h3>
                                <div class="text">
                                    الكثير من النساء قد يتجاهلن المخاطر الصحية المرتبطة بأنماط حياتهن. اكتشفي كيف تحمي نفسك وتضمني صحتك.
                                </div>
                                <a href="#" class="theme-btn btn-style-five"><span class="txt">اقرأ المزيد</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Clients Section-->
    <section class="clients-section">
        <div class="outer-container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{asset('WebSite/images/gallery/s1.jpg')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{asset('WebSite/images/gallery/s2.jpg')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{asset('WebSite/images/gallery/s3.jpg')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{asset('WebSite/images/gallery/s4.jpg')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{asset('WebSite/images/gallery/s5.jpg')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{asset('WebSite/images/gallery/s6.jpg')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{asset('WebSite/images/gallery/s7.jpg')}}" alt=""></a></figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Clients Section-->
@endsection
