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
              <li class=""><a  href="#tab_1" data-toggle="tab">Headlines</a></li>
              <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/structure')}}" >Structure</a></li>
              <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/approved')}}">Approved</a></li>
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
             
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
          <div class="box-header with-border">
      <h4 class=""></i> Activity Satus</h4>
</div>
<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                         <div class="box-body">
              <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
<!-- info-box-content -->
            <div class="">
              <span class="info-box-text text-center text-primary">Completed</span>
              <span class="info-box-number text-center" style="font-size: 25px;">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
              <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="info-box">
<!-- info-box-content -->
            <div class="">
              <span class="info-box-text text-center text-primary">Awaiting approval</span>
              <span class="info-box-number text-center" style="font-size: 25px;">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
              <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="info-box">
<!-- info-box-content -->
            <div class="">
              <span class="info-box-text text-center text-primary">Open</span>
              <span class="info-box-number text-center" style="font-size: 25px;">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
              <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="info-box">
<!-- info-box-content -->
            <div class="">
              <span class="info-box-text text-center text-primary">Overdue</span>
              <span class="info-box-number text-center" style="font-size: 25px;">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">

            <div class="">
              <span class="info-box-text text-center text-primary">Unassigned</span>
              <span class="info-box-number text-center" style="font-size: 25px;">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
              
            </div>
            <!-- /.box-body -->

              
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="row">
             <div class="box-header with-border">
      <h4 class=""></i> Activity Satus</h4>
</div>
<div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                         <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="110">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              </form>
            </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Create</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                         <div class="box-body pad">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Create</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
           
         </div>

       


 <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Updates
                <!-- <small></small> -->
              </h3>
              <!-- tools box -->
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <!-- <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
            </li> -->
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Read more</a>
                  <a class="btn btn-danger btn-xs">Delete</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                <div class="timeline-body">
                  Take me to your leader!
                  Switzerland is small and neutral!
                  We are more like Germany, ambitious and misunderstood!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            
            <!-- /.timeline-label -->
            <!-- timeline item -->
            
            <!-- END timeline item -->
            <!-- timeline item -->
            
            <!-- END timeline item -->
            
          </ul>
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col-->


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
