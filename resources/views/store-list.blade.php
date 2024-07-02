
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>Store List | SoldCoupons</title>
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/metisMenu/dist/metisMenu.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/Waves/dist/waves.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/toastr/toastr.css')}}">


  <link rel="stylesheet" href="{{asset('bower_components/datatables/media/css/jquery.dataTables.min.css')}}">


  <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>

<body class="icon-menu menu-alt">
  <!--Preloader-->
 <div id="preloader">
      <div class="refresh-preloader"><div class="preloader"><i>.</i><i>.</i><i>.</i></div></div>
</div>


  <div class="wrapper">
   
  @include('partials.nav-top')
  @include('partials.sidebar')
  @include('partials.notibar')


    <div class="container-fluid">
     <div class="row">
        <div class="col-lg-12">
            <div class="data-info">
              <table id="table1" class="display datatable no-stripes table">
                <thead>
                  <tr>
                    <th>Store</th>
                    <th>Category</th>
                    <th>Store URL</th>
                    <th>Country</th>
                    <th>Description</th>
                    <th>Featured</th>
                    <th>Enable</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                            @foreach($stores as $store)
                  <tr>
                    <td>
                    	{{$store->store_name}}
                    </td>
                    <td>{{ $store->category_id}}</td>
                    <td>{{ $store->store_url}}</td>
                    <td>{{ $store->country}}</td>
                    <td>{{ $store->description}}
						</td>

                    <td> <label> <input class="toggle toggle-info" type="checkbox" {{ $store->featured ? 'checked' : ''}}    > <i></i></label> </td>
                    <td> <label> <input class="toggle toggle-info" type="checkbox"  {{ $store->enabled ? 'checked' : ''}}   > <i></i></label> </td>
                    <td> <button type="button" class="btn btn-warning raised icon m-r-10" data-toggle="tooltip" data-placement="top" title="Edit Store">
                             <i class="zmdi zmdi-edit"></i> </button>
                         <button type="button" class="btn btn-danger raised icon" data-toggle="tooltip" data-placement="top" title="Remove Store">
                             <i class="zmdi zmdi-close"></i> </button>
                    </td>
                  </tr>

@endforeach





                </tbody>
              </table>
            </div>





        </div>
      </div>
    </div>
    <footer class="page-footer">©SoldCoupon </footer>
  </div>



<!-- Modal prevent outside click -->
  <div class="modal fade" id="modal-click" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header" style="background:#ffbb33;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Amazon</h4>
                  <img src="img/brands/amazon-logo.png" width="100" />
              </div>
              <div class="modal-body">


<div class="row">
  <div class="form-group">
    <label for="store_name" class="col-sm-1 control-label">Store Name</label>
    <div class="col-sm-5 p-r-30">
      <input type="text" disabled class="form-control material" id="store_name"  value="Amazon">
    </div>
  </div>
  <div class="form-group">
    <label for="store_url" class="col-sm-1 control-label">Store URL</label>
    <div class="col-sm-5 p-r-30">
      <input type="text" disabled class="form-control material" id="store_url"  value="amazon.com">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label for="store_name" class="col-sm-1 control-label">Web Address</label>
    <div class="col-sm-5 p-r-30">
      <input type="text" disabled class="form-control material" id="store_name" value="amazon.com">
    </div>
  </div>
  <div class="form-group">
    <label for="store_url" class="col-sm-1 control-label">Tracking Link</label>
    <div class="col-sm-5">
      <input type="text" disabled class="form-control material" id="store_url"  value="amazon.com/asda/asda34s/">
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label for="store_name" class="col-sm-1 control-label">Category</label>
    <div class="col-sm-5 p-r-30">
      <div class="select">
      	<input type="text" disabled class="form-control material" id="store_url" value="Department Stores" >

      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="store_url" class="col-sm-1 control-label">Country</label>
    <div class="col-sm-5">
    <input type="text" disabled class="form-control material" id="store_url" value="United States" >


    </div>
  </div>
</div>
<!-- Row -->

<div class="row">
  <div class="form-group">
    <label for="store_name" class="col-sm-1 control-label">Meta Description</label>
    <div class="col-sm-5 p-r-30">
      <input type="text" disabled class="form-control material" id="store_url" value="Donec id sagittis dolor. Fusce cursus felis sit amet sodales hendrerit." >
    </div>
  </div>
  <div class="form-group">
    <label for="store_url" class="col-sm-1 control-label">Featured</label>
    <div class="col-sm-2 p-t-15">
      <label>
        <input disabled class="toggle toggle-info" type="checkbox" >
        <i></i></label>
    </div>
  </div>
  <div class="form-group">
    <label for="store_url" class="col-sm-1 control-label">Enabled</label>
    <div class="col-sm-2 p-t-15">
      <label>
        <input disabled class="toggle toggle-info" type="checkbox" checked>
        <i></i></label>
    </div>
  </div>
</div>
<!--- Row -->

                  <div class="row p-t-40">

                  <div class="form-group">
                    <label for="store_title" class="col-sm-2 control-label">Store Title</label>
                    <div class="col-sm-8 p-r-30">
                      <input disabled type="text" class="form-control material" id="store_title" placeholder="store title">
                    </div>
                  </div>

                  </div> <!--- Row -->

                  <div class="row p-t-20">
                    <div class="col-lg-12">
                      <label for="description" class="control-label">Description</label>
                      <textarea disabled rows="4" id="description" name="description" style="width:100%">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id sagittis dolor. Fusce cursus felis sit amet sodales hendrerit. Vestibulum interdum tortor id gravida eleifend. Fusce quam leo, malesuada ut justo ut, posuere aliquet eros. Sed laoreet, lorem vitae rutrum semper, nunc purus bibendum dolor, eu condimentum urna ante quis arcu. Vivamus vulputate, velit et ultricies sagittis, odio mauris tincidunt lorem, vitae varius urna dolor a neque. Maecenas vitae dui vitae lacus tincidunt mattis. Sed convallis suscipit ex. Vestibulum vulputate accumsan sem eu auctor. Praesent a euismod nulla, et commodo enim. </textarea>
                    </div>
                   </div> <!--- Row--->



              </div> <!-- Modal Body ---->
              <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-default m-b-5" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>


  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
  <script src="{{ asset('bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js') }}"></script>
  <script src="{{ asset('bower_components/Waves/dist/waves.min.js') }}"></script>
  <script src="{{ asset('bower_components/toastr/toastr.js') }}"></script>

  <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.js') }}"></script>
  <script src="{{ asset('bower_components/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('bower_components/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('bower_components/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>


  <script src="{{ asset('js/common.js') }}"></script>



  <script>
    //Tables
    $('#table1').DataTable({
     "dom": '<"toolbar tool2"><"clear-filter">frtip',
      info: false,
      paging: true,
      responsive: true,
	  "oLanguage": { "sSearch": "" }
    });

    $("div.tool2").html('<h5 class="zero-m">Stores List</h5>');
	$('.dataTables_filter input').attr("placeholder", "Search");

 </script>
</body>
</html>
