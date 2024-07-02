<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no" />

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#49CEFF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#49CEFF" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Add Store | SoldCoupons</title>
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/metisMenu/dist/metisMenu.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/Waves/dist/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/toastr/toastr.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-select/dist/css/bootstrap-select.css') }}">

    <link rel="stylesheet" href="{{ asset('js/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
-->
    <!--[if lt IE 9]>
      <script src="bower_components/html5shiv/dist/html5shiv.min,js"></script>
      <script src="bower_components/respondJs/dest/respond.min.js"></script>
    <![endif]-->
</head>

<body class="icon-menu menu-alt">
    <!--Preloader-->
    <div id="preloader">
        <div class="refresh-preloader">
            <div class="preloader"><i>.</i><i>.</i><i>.</i></div>
        </div>
    </div>
    <div class="wrapper">
        @include('partials.nav-top')
        @include('partials.sidebar')
        @include('partials.notibar')

        <!-- <div class="container-fluid">
     <div class="row">


      </div>
</div>
--> <!-- Container ------->
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="content-box">
                    <div class="head success-bg clearfix">
                        <h5 class="content-title pull-left">Store</h5>
                        <div class="functions-btns pull-right"> <a class="refresh-btn" href="#"><i
                                    class="zmdi zmdi-refresh"></i></a> <a class="fullscreen-btn" href="#"><i
                                    class="zmdi zmdi-fullscreen"></i></a>
                            <!--<a class="close-btn" href="#"><i class="zmdi zmdi-close"></i></a>-->
                        </div>
                    </div>
                    <div class="content">
                        <form enctype="multipart/form-data" id="frmStore-Add" name="frmStore-Add" method="POST"
                            action="{{ route('stores.store') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label for="store_name" class="col-sm-1 control-label">Store Name</label>
                                    <div class="col-sm-5 p-r-30">
                                        <input type="text" required class="form-control material" id="store_name"
                                            name="store_name" placeholder="store name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="store_url" class="col-sm-1 control-label">Store URL</label>
                                    <div class="col-sm-5 p-r-30">
                                        <input type="text" required class="form-control material" id="store_url"
                                            name="store_url" placeholder="store url">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="website" class="col-sm-1 control-label">Web Address</label>
                                    <div class="col-sm-5 p-r-30">
                                        <input type="text" class="form-control material" id="website"
                                            name="website" placeholder="web address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tracking_link" class="col-sm-1 control-label">Tracking Link</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control material" id="tracking_link"
                                            name="tracking_link" placeholder="tracking link">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="category_id" class="col-sm-1 control-label">Category</label>
                                    <div class="col-sm-5 p-r-30">
                                        <div class="select">
                                            <select required class="form-control material selectpicker"
                                                name="category_id">
                                                <option value="">Select Category</option>
                                                <option value="1">Accessories</option>
                                                <option value="2">Department Stores</option>
                                                <option value="3">Electronics</option>
                                                <option value="4">Clothing</option>
                                                <option value="5">Beauty</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="col-sm-1 control-label">Country</label>
                                    <div class="col-sm-5">
                                        <select required class="form-control material" name="country">
                                            @include('partials.country-list')
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->

                            <div class="row">
                                <div class="form-group">
                                    <label for="meta_description" class="col-sm-1 control-label">Meta
                                        Description</label>
                                    <div class="col-sm-5 p-r-30">
                                        <input type="text" class="form-control material" id="meta_description"
                                            name="meta_description" placeholder="meta description">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="featured" class="col-sm-1 control-label">Featured</label>
                                    <div class="col-sm-2 p-t-15">
                                        <label>
                                            <input class="toggle toggle-info" type="checkbox" name="featured">
                                            <i></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="enabled" class="col-sm-1 control-label">Enabled</label>
                                    <div class="col-sm-2 p-t-15">
                                        <label>
                                            <input class="toggle toggle-info" type="checkbox" name="enabled" checked>
                                            <i></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--- Row -->

                            <div class="row p-t-40">
                                <div class="form-group">
                                    <label for="store_title" class="col-sm-1 control-label">Store Title</label>
                                    <div class="col-sm-5 p-r-30">
                                        <input type="text" class="form-control material" id="store_title"
                                            name="store_title" placeholder="store title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="logo" class="col-sm-1 control-label">Logo Upload</label>
                                    <div class="col-sm-5 p-r-30">
                                        <input type="file" class="dropify" data-height="50" name="logo"/>
                                    </div>
                                </div>
                            </div>



                            <div class="row p-t-20">
                                <div class="col-lg-12">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea id="description" name="description"></textarea>
                                </div>
                            </div> <!--- Row--->

                            <div class="row p-t-40">
                                <div class="form-group">
                                    <div class="col-sm-12 text-right">
                                        <button id="btnCancel" name="btnCancel" type="button"
                                            class="btn btn-warning m-b-5">Cancel</button>
                                        <button id="btnSave" name="btnSave" type="submit"
                                            class="btn btn-primary m-b-5 m-l-30">Save</button>
                                    </div>
                                </div>
                            </div> <!------ Row ----->

                        </form>
                    </div>
                </div>
            </div>


        </div>

        <footer class="page-footer">©SoldCoupon {{ date('Y') }}</footer>
    </div> <!-- Wrapper ------->



    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script src="{{ asset('bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('bower_components/Waves/dist/waves.min.js') }}"></script>
    <script src="{{ asset('bower_components/toastr/toastr.js') }}"></script>

    <script src="{{ asset('bower_components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>


    <script>
        tinymce.init({
            selector: "textarea#description",
            theme: "modern",
            menubar: false,
            height: 300,
            plugins: [
                "advlist autolink link image lists  hr anchor pagebreak ",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor"
            ],
            toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | media fullpage | forecolor backcolor emoticons",
            style_formats: [{
                    title: 'Bold text',
                    inline: 'b'
                },
                {
                    title: 'Red text',
                    inline: 'span',
                    styles: {
                        color: '#ff0000'
                    }
                },
                {
                    title: 'Red header',
                    block: 'h1',
                    styles: {
                        color: '#ff0000'
                    }
                }
            ]

        });

        $('.dropify').dropify();
    </script>




</body>

</html>
