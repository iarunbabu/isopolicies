@extends('layout.app')

@section('content')
<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
         <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class=""><a style="background-color: #3c8dbc;color: white;"  href="{{url('/headlines')}}" data-toggle="tab">Headlines</a></li>
              <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/structure')}}" >Structure</a></li>
              <li><a href="{{url('/approved')}}" >Approved</a></li>
              <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/tools')}}" >Tools</a></li>
              <li></li>
              <li></li>
              <li></li>

              <li><a style="background-color: #FF851B;color: white;" href="#tab_5" data-toggle="tab">Notes</a></li>
              <li><a style="background-color: #FF851B;color: white;" href="#tab_6" data-toggle="tab">Discussions</a></li>
              <li><a style="background-color: #FF851B;color: white;" href="#tab_7" data-toggle="tab">Documets</a></li>
              <li><a style="background-color: #FF851B;color: white;" href="#tab_8" data-toggle="tab">To-dos</a></li>
              <li><a style="background-color: #FF851B;color: white;" href="#tab_9" data-toggle="tab">KPIs</a></li>

              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- START PROGRESS BARS -->


      <h4 class="box-title">Members</h4>
       <div class="row">
        <div class="box box-primary">
            <div class="with-border">
              <div class="box-body">
                <!-- Add Loop here -->
                <div class="card" style="width: 18rem;float: left">
                  <div class="user-block ">
                    <img class="img-circle img-bordered-sm" src="{{ asset('/img/user2-160x160.jpg') }}" alt="User Image">
                        <span class="username ">
                          <a href="#">Alex</a>
                        </span>
                    <span class="description">Options</span>
                                        <button type="button" style="width: 40%;"class="btn btn-block btn-danger btn-sm margin">Leave</button>

                  </div>
                                    </div>

                
              

</div>
</div>
             <div class="row">
         <button type="button" class="btn  btn-success btn-xs  pull-right">Add Approval member</button>
               
             </div>
          </div>
       </div>

      <h4 class="box-title"> Activities requiring approval</h4>
<div class="row">
        <div class="box box-primary">
            <div class=" with-border box-body">
              <h5>There are currently no Activities requiring approval</h5>
            </div>

          </div>
       </div>




      <h4 class="box-title">Updates</h4>
       <div class="row">
        <div class="box box-primary">
            <div class="box-body with-border">
              No Update to display
            </div>
            </div>
            
        
       </div>



      <!-- /.row -->
      <!-- END PROGRESS BARS -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                
      <div class="row">
        <!-- /.col (left) -->
                <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Progress bars</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="progress" style="background-color: white;">
                Background information
              </div>
              <div class="progress" style="background-color: white;">
                ISO Requiremets
              </div>
              <div class="progress" style="background-color: white;">
                A5.Information Secrity Policies
              </div>
              <div class="progress" style="background-color: white;">
                A6.Organization of Information Secrity
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Progress bars</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="progress">
                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
              </div>
              
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

@stop
