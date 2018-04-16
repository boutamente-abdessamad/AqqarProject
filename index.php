<!doctype html >
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ar" dir="rtl"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Soft-Tect Free Landing Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
        <!--For Plugins external css-->
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="stylesheet" href="css/roboto-webfont.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- Css Price Slider -->
        <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="css/main.css">
        <!-- offers css -->
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css"> -->
        <link rel="stylesheet" href="css/gallery/thumbnail-gallery.css">
        <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>+06 65 57 67 67</a>
                                <a href="#"><i class="fa fa-envelope"></i>contact@aqqar.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="login" data-toggle="modal" data-target="#exampleModal"><a href="#" data-dismiss="modal">تسجيل الدخول</a></li>
                        <li class="login"><a href="register.php">انشاء حساب</a></li>
                        <li><a href="#price">حول الموقع</a></li>
                        <li><a href="contact.php">اتصل بنا</a></li>
                        <li><a href="#service">مساعدة</a></li>                        
                        <li><a href="#">اضف اعلان</a></li>
                        <li class="active"><a href="index.php">الرئيسية</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
         <!-- model login -->



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تسجيل الدخول</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <section id="login">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-wrap">
                        <p style="text-align: center;">المرجو إدخال البريد الالكتروني او رقم الهاتف مع كلمةالدخول</p>
                            <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                                <div class="form-group">
                                    <label for="email" class="sr-only">البريد الالكتروني او رقم الهاتف</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="البريد الالكتروني او رقم الهاتف">
                                </div>
                                <div class="form-group">
                                    <label for="key" class="sr-only">كلمةالدخول</label>
                                    <input type="password" name="key" id="key" class="form-control" placeholder="كلمةالدخول">
                                </div>
                                <div class="checkbox">
                                    <span class="character-checkbox" onclick="showPassword()"></span>
                                    <span class="label">إضهار كلمة الدخوال</span>
                                </div>
                                <div class="modal-footer">
                                <a href="profile.php"><input type="submit" id="btn-login"    data-dismiss="modal" class="btn btn-custom btn-lg btn-block" value="تسجيل الدخول"></a>
                                </div>
                            </form>
                            <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal"> هل نسيت كلمة الدخول؟؟</a>
                            <hr>
                        </div>
                    </div> <!-- /.col-xs-12 -->
                </div> <!-- /.row -->
        </section>
      </div>
    </div>
  </div>
</div>



        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-fluid-block">
                <div class="container text-center">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">

                                    <h1>هل تبحت عن عقار منزل شقة نحن هنا لمساعدتك</h1>
                                    <p>وصف تقديمي</p>

                                    <!-- <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                            <div class="home-contact">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                                    <input type="submit" class="form-control" value="Use It Free">

                                                </div><!-- /input-group -->
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
        </header>
        <!-- Recherche -->
        <section>
            <div class="container">
                <div class="row">
                        <div class="col-md-3">
                          <img src="images/ads.jpg" alt="ads" class="responsive ads" >
                        </div>
                    <!-- form de recherche -->
                        <div class="col-md-9">
                            <div class="panel panel-default panel-form body-panel-style">
                                <div class="panel-heading header-panel heading-panel-style" >
                                 <h5 class="h5"> ابحت عن عقار</h5>
                                </div>
                                <div class="panel-body ">
                                    <div class="col-md-12">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="type" class="align-items">نوع العقار</label>
                                                        <select  name="type" id="type" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="type" class="align-items">المدينة او المنطقة</label>
                                                        <select  name="type" id="type" class="form-control">                        
                                                            <option value="1">	-اختر مدينة-</option>
                                                            <option value="1">	Casablanca</option>
                                                            <option value="1">	Fez</option>
                                                            <option value="1">	Tangier</option>
                                                            <option value="1">	Marrakesh</option>
                                                            <option value="1">	Salé</option>
                                                            <option value="1">	Meknes</option>
                                                            <option value="1">	Rabat</option>
                                                            <option value="1">	Oujda</option>
                                                            <option value="1">	Kenitra	</option>
                                                            <option value="1">	Agadir	</option>
                                                            <option value="1">	Tetouan	</option>
                                                            <option value="1">	Temara	</option>
                                                            <option value="1">	Safi	</option>
                                                            <option value="1">	Mohammedia	</option>
                                                            <option value="1">	Khouribga	</option>
                                                            <option value="1">	El Jadida	</option>
                                                            <option value="1">	Beni Mellal	</option>
                                                            <option value="1">	Aït Melloul	</option>
                                                            <option value="1">	Nador	</option>
                                                            <option value="1">	Dar Bouazza	</option>
                                                            <option value="1">	Taza	</option>
                                                            <option value="1">	Settat	</option>
                                                            <option value="1">	Berrechid	</option>
                                                            <option value="1">	Khemisset	</option>
                                                            <option value="1">	Inezgane	</option>
                                                            <option value="1">	Ksar El Kebir	</option>
                                                            <option value="1">	Larache	</option>
                                                            <option value="1">	Guelmim</option>
                                                            <option value="1">	Khenifra	</option>
                                                            <option value="1">	Berkane	</option>
                                                            <option value="1">	Taourirt	</option>
                                                            <option value="1">	Bouskoura	</option>
                                                            <option value="1">	Fquih Ben Salah	</option>
                                                            <option value="1">	Dcheira El Jihadia	</option>
                                                            <option value="1">	Oued Zem	</option>
                                                            <option value="1">	El Kelaa Des Sraghna</option>	
                                                            <option value="1">	Sidi Slimane	</option>
                                                            <option value="1">	Errachidia	</option>
                                                            <option value="1">	Guercif	</option>
                                                            <option value="1">	Oulad Teima</option>
                                                            <option value="1">	Ben Guerir	</option>
                                                            v<option value="1">	Tifelt	</option>
                                                            <option value="1">	Lqliaa	</option>
                                                            <option value="1">	Taroudant	</option>
                                                            <option value="1">	Sefrou	</option>
                                                            <option value="1">	Essaouira	</option>
                                                            <option value="1">	Fnideq	</option>
                                                            <option value="1">	Sidi Kacem	</option>
                                                            <option value="1">	Tiznit	</option>
                                                            <option value="1">	Tan-Tan	</option>
                                                            <option value="1">	Ouarzazate	</option>
                                                            <option value="1">	Souk El Arbaa	</option>
                                                            <option value="1">	Youssoufia	</option>
                                                            <option value="1">	Lahraouyine	</option>
                                                            <option value="1">	Martil	</option>
                                                            <option value="1">	Ain Harrouda	</option>
                                                            <option value="1">	Suq as-Sabt </option>
                                                            <option value="1">	Skhirat	</option>
                                                            <option value="1">	Ouazzane	</option>
                                                            <option value="1">	Benslimane	</option>
                                                            <option value="1">	Al Hoceima	</option>
                                                            <option value="1">	Beni Ansar	</option>
                                                            <option value="1">	M'diq	</option>
                                                            <option value="1">	Sidi Bennour	</option>
                                                            <option value="1">	Midelt	</option>
                                                            <option value="1">	Azrou	</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="type" class="align-items">العرض</label>
                                                        <select  name="type" id="type" class="form-control">
                                                        <option value="1">عرض الكل</option>
                                                        <option value="1">بيع</option>
                                                        <option value="1">ايجار</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row bottom-form">
                                                <div class="col-md-6">
                                            <div class="row">
                                                <label for="type" class="price-pos">تحديد السعر</label>  <br>
                                                <div class="col-md-6 price-style">
                                                    <input class="form-control" type="number" placeholder="Dh السعر الادنى">                           
                                                </div>
                                                <div class="col-md-6 price-style">
                                                    <input class="form-control" type="number" placeholder="Dh السعرالاقصى">
                                                </div>                   
                                            </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <label for="type" class=" price-style">تحديد المساحة</label><br>
                                                        <input class="form-control" type="number" placeholder="0.00 M &sup2;">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="type" class=" price-style">عدد الغرف</label><br>
                                                    <input class="form-control" type="number" placeholder="عدد الغرف">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4 col-md-push-4">
                                    <button type="submit" class="btn btn-success button-style bottom-form"><span class="glyphicon glyphicon-search"> بحت</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>        
        </section>    
        <!-- Offers and pub  -->
        <section>
            <div class="container">
                <div class="row">
                   <div class="col-md-3">
                        <img src="images/ads.jpg" alt="ads" class="responsive">
                    </div>
                    <div class="col-md-9">
                            <div class="tz-gallery">
                            <p class="page-description text-center">عقارات</p>
                                   <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="col-md-8 caption">
                                                <p class="h3 time-offer">اليوم 10:16</p>
                                                <h3>شقة للبيع</h3>
                                                <p>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على 
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                 ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام
                                                  "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقرو
                                                </p>

                                                 <table class="table">
                                                     <tr>
                                                         <td><small class="fa fa-usd">  السعر 1200 درهم </small></td>
                                                         <td><small class="	glyphicon glyphicon-map-marker">المدينة مراكش  </small></td>
                                                         <td> <small class="glyphicon glyphicon-thumbs-up"> قابل للتفاوض </small></td>
                                                         <td><a href="" class="">تفاصيل اكتر</a></td>
                            
                                                     </tr>
                                                 </table>  
                                            </div>
                                            <div class="col-md-4">
                                            <div class="thumbnail">
                                                        <img src="images/bridge.jpg" alt="Bridge">
                                                </div>                                               
                                            </div>
                                        </div>                                   
                                    </div>  
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="col-md-8 caption">
                                                <p class="h3 time-offer">اليوم 10:16</p>
                                                <h3>شقة للبيع</h3>
                                                <p>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على 
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                 ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام
                                                  "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقرو
                                                </p>

                                                 <table class="table">
                                                     <tr>
                                                         <td><small class="fa fa-usd">  السعر 1200 درهم </small></td>
                                                         <td><small class="	glyphicon glyphicon-map-marker">المدينة مراكش  </small></td>
                                                         <td> <small class="glyphicon glyphicon-thumbs-up"> قابل للتفاوض </small></td>
                                                         <td><a href="" class="">تفاصيل اكتر</a></td>
                            
                                                     </tr>
                                                 </table>  
                                            </div>
                                            <div class="col-md-4">
                                                <div class="thumbnail">
                                                        <img src="images/bridge.jpg" alt="Bridge">
                                                </div>                                              
                                            </div>
                                        </div>                                   
                                    </div>  
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="col-md-8 caption">
                                                <p class="h3 time-offer">اليوم 10:16</p>
                                                <h3>شقة للبيع</h3>
                                                <p>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على 
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                 ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام
                                                  "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقرو
                                                </p>

                                                 <table class="table">
                                                     <tr>
                                                         <td><small class="fa fa-usd">  السعر 1200 درهم </small></td>
                                                         <td><small class="	glyphicon glyphicon-map-marker">المدينة مراكش  </small></td>
                                                         <td> <small class="glyphicon glyphicon-thumbs-up"> قابل للتفاوض </small></td>
                                                         <td><a href="" class="">تفاصيل اكتر</a></td>
                            
                                                     </tr>
                                                 </table>  
                                            </div>
                                            <div class="col-md-4">
                                            <div class="thumbnail">
                                                        <img src="images/bridge.jpg" alt="Bridge">
                                                </div>                                               
                                            </div>
                                        </div>                                   
                                    </div>  
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="col-md-8 caption">
                                                <p class="h3 time-offer">اليوم 10:16</p>
                                                <h3>شقة للبيع</h3>
                                                <p>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على 
                                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                 ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام
                                                  "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقرو
                                                </p>

                                                 <table class="table">
                                                     <tr>
                                                         <td><small class="fa fa-usd">  السعر 1200 درهم </small></td>
                                                         <td><small class="	glyphicon glyphicon-map-marker">المدينة مراكش  </small></td>
                                                         <td> <small class="glyphicon glyphicon-thumbs-up"> قابل للتفاوض </small></td>
                                                         <td><a href="" class="">تفاصيل اكتر</a></td>
                            
                                                     </tr>
                                                 </table>  
                                            </div>
                                            <div class="col-md-4">
                                            <div class="thumbnail">
                                                        <img src="images/bridge.jpg" alt="Bridge">
                                                </div>                                               
                                            </div>
                                        </div>                                   
                                    </div>  
                                    <hr>
                                    <div class="bs-example">
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                            </div>
                    </div>  
                </div>
            </div>
        </section>
        <section id="footer-menu" class="sections footer-menu">
            <div class="container">
                <div class="row">
                    <div class="footer-menu-wrapper">

                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>القائمة</h5>
                                    <ul>
                                    <li><a href="#price">حول الموقع</a><a href="#business">اتصل بنا</a><a href="#home">الرئيسية</a></li>
                                    <li><a href="#service">مساعدة</a><a href="#features">اضف اعلان</a></li>                       
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>نص تجريبي</h5>
                                    <ul>
                                        <li>نص تجريبي & نص تجريبي</li>
                                        <li>نص تجريبي نص تجريبي نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>نص تجريبي</h5>
                                    <ul>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي نص تجريبي</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="menu-item">
                                    <h5>نص تجريبي</h5>
                                    <ul>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي نص تجريبي</li>
                                    </ul>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="images/logo.png" alt="logo" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Made with by <a target="_blank" href="http://abdessamadBoutament.me"> MilanDev </a>2018. All rights reserved.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>
        <!-- JavaScript & jquery -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/main.js"></script>
        <!-- pagination script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- <script src="js/script.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script> -->
        <!-- jQuery Price Slider -->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
        <!-- <script>
        $( function() {
            $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 10000000,
            values: [ 0, 0 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        } );
        </script> -->
        <script>
            function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}
        </script>
    </body>
</html>


