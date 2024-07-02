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
    <title>Add Category | SoldCoupons</title>
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
                        <h5 class="content-title pull-left">Category</h5>
                        <div class="functions-btns pull-right"> <a class="refresh-btn" href="#"><i
                                    class="zmdi zmdi-refresh"></i></a> <a class="fullscreen-btn" href="#"><i
                                    class="zmdi zmdi-fullscreen"></i></a>
                            <!--<a class="close-btn" href="#"><i class="zmdi zmdi-close"></i></a>-->
                        </div>
                    </div>
                    <div class="content">
                        <form action={{ route('coupons.store')}} method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <select name="store_id" id="store">
                                        @foreach ($stores as $store)
                                            <option value="{{ $store->id }}">{{ $store->store_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group">
                                    <label for="title" class="col-sm-1 control-label">Category</label>
                                    <div class="col-sm-5 p-r-30">
                                        <input type="text" class="form-control material" id="title" name="title"
                                            placeholder="category title" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="code" class="col-sm-1 control-label">Code</label>
                                    <div class="col-sm-5 p-r-30">
                                        <input type="text" class="form-control material" id="code" name="code"
                                            placeholder="Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="discount" class="col-sm-1 control-label">Discount</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control material" id="discount" name="discount"
                                            placeholder="discount">
                                    </div>
                                </div>

                            </div>

                            <!-- Row -->



                            <div class="row p-t-20">
                                <div class="col-lg-12">
                                    <label for="description" class="control-label"> Description</label>
                                    <textarea id="description" name="description"> </textarea>
                                </div>
                            </div> <!--- Row--->

                            <div class="row p-t-40">
                                <div class="form-group">
                                    <div class="col-sm-12 text-right">
                                        <button type="button" class="btn btn-warning m-b-5">Cancel</button>
                                        <button type="submit" class="btn btn-primary m-b-5 m-l-30">Save</button>
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
    </script>

    <script>
        $('.dropify').dropify();
    </script>


</body>

</html>
