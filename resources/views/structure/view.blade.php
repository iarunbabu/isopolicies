@extends('layout.app')

@section('content')

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
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class=""><a style="background-color: #3c8dbc;color: white;"
                                                href="{{url('/headlines')}}">Headlines</a></li>
                                <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/structure')}}">Structure</a>
                                </li>
                                <li><a style="background-color: #3c8dbc;color: white;" href="{{url('/approved')}}">Approved</a>
                                </li>
                                <li><a href="{{url('/tools')}}">Tools</a></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li><a style="background-color: #FF851B;color: white;" href="#tab_5" data-toggle="tab">Notes</a>
                                </li>
                                <li><a style="background-color: #FF851B;color: white;" href="#tab_6" data-toggle="tab">Discussions</a>
                                </li>
                                <li><a style="background-color: #FF851B;color: white;" href="#tab_7" data-toggle="tab">Documets</a>
                                </li>
                                <li><a style="background-color: #FF851B;color: white;" href="#tab_8" data-toggle="tab">To-dos</a>
                                </li>
                                <li><a style="background-color: #FF851B;color: white;" href="#tab_9" data-toggle="tab">KPIs</a>
                                </li>
                                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    


                                        <div class="row">
        <div class="col-md-3">
          <!-- Widget: user widget style 1 -->

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Removable</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              The body of the box
            </div>
            <!-- /.box-body -->
          </div>
  <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
             

              <div class="row">
                <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-body" style="background-color: #e3ebf6;">
              <table class="table table-bordered">
               
                <tr>
                  <td>Assigned to:</td>
                  <td></td>
                  
                </tr>
                <tr>
                  <td>Start:</td>
                  <td></td>
                  
                </tr>
                <tr>
                  <td>Due:</td>
                  <td></td>
                </tr>
                                <tr>
                  <td>Days estimated:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Days taken:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Progress:</td>
                  <td></td>
                </tr>
               </table>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
                <div class="col-md-12">
               <div class="box-header with-border">
              <h3 class="box-title">Structures</h3>
              
            </div>

        </div>
      </div>
      <div class="row">
                <div class="col-md-12">
               <div class="box-header with-border">
              <h3 class="box-title">Linked work</h3>
              <p>no Link to display </p>
            </div>

        </div>
      </div>
            </div>
          </div>
        </div>
      </div>        
  </div>
        <!-- /.col -->
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <h4 >Notes</h4>
          <div class="box box-widget widget-user">
             <div>
             	<div class="row">
             		<strong class="pull-right"> <a href="#"><i class="fa fa-fw fa-trash"></i>Delete</a></strong>
             		<strong class="pull-right"> <a href="#"><i class="fa fa-fw fa-edit"></i>Edit</a></strong>
             	</div>
                  <div class="user-block">
                        
                    <span ><strong>Tips</strong></span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                </div>
  <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
             

              <h3 class="box-title">Policy</h3>
                                <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

            </div>
          </div>
        </div>
      </div>
            </div>
            <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">To-dos</h3>
              <p>no To-dos to display</p>
            </div>

            <div class="box-header with-border">
              <h3 class="box-title">Documents</h3>
              <p>no Documents to display</p>
            </div>

            <div class="box-header with-border">
              <h3 class="box-title">Discussions</h3>
              <p>no Discussions to display</p>
            </div>
          </div>
        </div>

        
      </div>
            
            
            
        </div>
        






        <div class="col-md-3">
        	<div class="row">
                                        <button type="button" class="btn  btn-success btn-xs  pull-left">Add Note
                                        </button>
                                    </div>
                                    <div class="row">
                                    	<div class="box-body">
                                    	<img style="
                                                            width: 20px;height:20px; margin-right: 10px" src="http://localhost:8000/img/user2-160x160.jpg" alt="Message User Image">
                                                            <span>Stakeholder
                                                                Map</span>
                                                            </div>       
                                                            </div>
        </div>
        <!-- /.col -->
      </div>


                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@stop