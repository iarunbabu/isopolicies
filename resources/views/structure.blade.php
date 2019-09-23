<!DOCTYPE html>
<html>
<head>
@include('layouts.head')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  @include('layouts.header')
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->

      <section class="content-header">
        <h1>
<i class="fa fa-book"></i> Policies and Cotrols
          
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-link"></i>Linked work</a></li>
          <li><a href="#"><i class="fa fa-user"></i>Tears</a></li>
          <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- START CUSTOM TABS -->
    <!--  <h2 class="page-header">Policies and Cotrols</h2>-->

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class=""><a href="#tab_1" data-toggle="tab">Headlines</a></li>
              <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/structure')}}" >Structure</a></li>
              <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/approved')}}" >Approved</a></li>
              <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/tools')}}">Tools</a></li>
              <li></li>
              <li></li>
              <li></li>

              <li><a style="background-color: #FF851B;color: white;" href="#tab_5" data-toggle="tab">Notes</a></li>
              <li><a style="background-color: #FF851B;color: white;" href="#tab_6" data-toggle="tab">Discussions</a></li>
              <li><a style="background-color: #FF851B;color: white;" href="#tab_7" data-toggle="tab">Documets</a></li>
              <li><a style="background-color: #FF851B;color: white;" href="#tab_8" data-toggle="tab">To-dos</a></li>
              <li><a style="background-color: #FF851B;color: white;" href="#tab_9" data-toggle="tab">KPIs</a></li>

              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- START PROGRESS BARS -->


      @include('tabs.headline-tab')
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                
      @include('tabs.structure-tab')
      
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_6">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_7">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_8">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_9">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
  
       
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->

 @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- SlimScroll -->
<script type="text/javascript" src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>

<!-- FastClick -->
<script type="text/javascript" src="{{ asset('js/fastclick.js') }}"></script>

<!-- AdminLTE App -->
<script type="text/javascript" src="{{ asset('js/adminlte.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
