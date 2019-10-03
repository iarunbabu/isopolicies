@extends('layout.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="margin">
  <ol class="breadcrumb col-md-12">
    <li><a class="text-dark" href="#">Projects</a></li>
    <li><a class="text-dark" href="#">Policies and Controls</a></li>
  </ol>
</section>

<section class="content-header">
  <h1><i class="fa fa-book"></i> Policies and Cotrols</h1>
  <ol class="breadcrumb" style="font-size: 14px;">
    <a href="#"> <i class="fa fa-link"></i> Linked work </a> <a href="#"> <i class="fa fa-user"></i> Team </a> <a href="#"> <i class="fa fa-cog"></i> Settings </a> <a href="#"> <i class="fa fa-cog"></i> Tour </a> 
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="">
            <a style="background-color: #3c8dbc;color: white;" href="{{url('/headlines')}}">Headlines</a>
          </li>
          <li>
            <a href="#tab_1" data-toggle="tab" >Structure</a>
          </li>
          <li>
            <a style="background-color: #3c8dbc;color: white;" href="{{url('/approved')}}">Approved</a>
          </li>
          <li>
            <a style="background-color: #3c8dbc;color: white;" href="{{url('/tools')}}">Tools</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
          <li>
            <a style="background-color: #FF851B;color: white;" href="#tab_5" data-toggle="tab">Notes</a>
          </li>
          <li>
            <a style="background-color: #FF851B;color: white;" href="#tab_6" data-toggle="tab">Discussions</a>
          </li>
          <li>
            <a style="background-color: #FF851B;color: white;" href="#tab_7" data-toggle="tab">Documets</a>
          </li>
          <li>
            <a style="background-color: #FF851B;color: white;" href="#tab_8" data-toggle="tab">To-dos</a>
          </li>
          <li>
            <a style="background-color: #FF851B;color: white;" href="#tab_9" data-toggle="tab">KPIs</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
              <div class="row">
              
              <div class="col-sm-6 radio">
                <div class="col-sm-4">Show details: </div>
                <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Off
              </label>
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      On
              </label>
              <div class="col-md-3 pull-right vertical-divider ">
                <strong>
                  <a href="">Collapse all</a>
                </strong>
              

                
              </div>


               <div class="col-md-3 pull-right  border-right">
                <strong>
              <a href="">Expand all</a>
                  
                </strong>
                
              </div>
              
                
              </div>
             
              
              

                
              </div>
              <div class="row">

              <div class="row">
                <div class="col-md-4">
                  <div class="box box-success box-solid" style="border-color:#3c8dbc">
                  <div class="box-header with-border" style="background-color: #3c8dbc; ">
                    <h4 class="box-title">Activity</h4>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="remove"></button>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    The body of the box
                  </div>
                  <!-- /.box-body -->
                  
                </div>
                <div class="box-header">
                    <div class="col-md-3">Status:</div>
                  <div class="col-md-3">Open</div>

                  <div class="col-md-6 ">
                  <button type="button" class="btn-success btn  btn-xs">Sbmit for approval</button>

                  </div>
                    

                     
                  
                  </div>
                  <div class="box-body" style="background-color: #e3ebf6;">
                    <div class="col-md-12">
                      <a href="">
                        <i class="fa fa-pencil pull-right"></i>
                      </a>
                    </div>
                    <table class="table table-bordered">

                                <tr>
                                  <td>Assigned to:</td>
                                  <td><a href="">Select</a></td>

                                </tr>
                                <tr>
                                  <td>Start:</td>
                                  <td><a href="">Add</a></td>

                                </tr>
                                <tr>
                                  <td>Due:</td>
                                  <td><a href="">Add</a></td>
                                </tr>
                                <tr>
                                  <td>Days estimated:</td>
                                  <td>0.00</td>
                                </tr>
                                <tr>
                                  <td>Days taken:</td>
                                  <td><a href="">Add</a></td>
                                </tr>
                                <tr>
                                  <td>Progress:</td>
                                  <td>95%</td>
                                </tr>
                              </table>
                              
                  </div>
                  
                   <div class="box">
                    <h4>
                    Structure
                    </h4>
            <div class="panel-group" role="tablist" style="background-color: #e3ebf6;">
              <div class="panel panel-default" style="background-color: #e3ebf6;">
                <div class="" role="tab" id="collapseListGroupHeading1">
                  <h5 class="">

                  <a class="collapsed margin" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1"><span class="step">P</span>Background information</a>
                  

                  </h5>


                </div>
                <div id="collapseListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
                  <ul class="" style="background-color: #e3ebf6;">
                    <li class="panel-collapse collapse in margin">
                      <a class="collapsed margin" data-toggle="collapse" href="#collapseListGroup2" aria-expanded="false" aria-controls="collapseListGroup2"><span class="step">D</span>
                      <small>Access to this environment and team member controls</small></a>
                      
                    </li>
                    <ul >
                      <li  id="collapseListGroup2" class="panel-collapse collapse margin" role="tabpanel" aria-labelledby="collapseListGroupHeading2">
                        <a >
                          <span class="step">A</span>
                          <small>
                          Making the template document work for yor organization and its stakeholders
                          </small>
                        </a>
                        
                      </li>
                      
                      
                        
                      <li  id="collapseListGroup2" class="panel-collapse collapse margin" role="tabpanel" aria-labelledby="collapseListGroupHeading2">
                        <a class="collapsed margin" data-toggle="collapse" href="#collapseListGroup22" aria-expanded="false" aria-controls="collapseListGroup2">
                          <span class="step">A</span>
                          <small>
                          Making the template document work for yor organization and its stakeholders
                          </small>
                        </a>
                      </li>
                    </ul>
                    
                    
                  </ul>
              </div>
            </div>


          </div>
                
                  
                </div>
                <div class="card" style="background-color: #e3ebf6;">
                  <h4>
                    Linked Work
                    </h4>
                    <!-- <div class="box-body" style="background-color: #e3ebf6;">
                      
                    </div> -->
                  
                </div>
                </div>
                <div class="col-md-6">
                  hai1
                </div>
                <div class="col-md-2">
                  hai2
                </div>
                </div>
                
              </div>
            
              
            
          
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop