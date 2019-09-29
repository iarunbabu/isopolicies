@extends('layout.app')

@section('content')
<!-- Content Header (Page header) -->
      <section class=" margin">
        <ol class="breadcrumb col-md-12">
          <li><a class="text-dark" href="#">Projects</a></li>
          <li><a class="text-dark" href="#">Policies and Controls</a></li>
        </ol>
      </section>

      <section class="content-header">
        <h1>
<i class="fa fa-book"></i> Policies and Cotrols
          
        </h1>
        <ol class="breadcrumb" style="font-size: 14px;">
          <a href="#"> <i class="fa fa-link"></i> Linked work </a> <a href="#"> <i class="fa fa-user"></i> Team </a> <a href="#"> <i class="fa fa-cog"></i> Settings </a> <a href="#"> <i class="fa fa-cog"></i> Tour </a> 
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
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
  
       
      </section>
      <!-- /.content -->
 
@stop