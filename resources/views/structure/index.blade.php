@extends('layout.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header margin">
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
            <div class="info-box">
                <span class="margin"> </span>
                <div class="margin  pull-right" >
                  View by:
                  <button type="button" class="btn  btn-xs">Outline</button>
                  <button type="button" class="btn  btn-xs">Gantt chart</button>
                  <button type="button" class="btn  btn-xs">Progress</button>
                  <button type="button" class="btn  btn-xs">Statement of applicability</button>
                  
                </div>
            </div>
            <div class="box">
            <div class="panel-group" role="tablist" style="background-color: #e3ebf6;">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
                  <h4 class="panel-title"><i class="fa fa-caret-down"></i>
                  <a class="collapsed" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1">Background information</a>
                  </h4>
                </div>
                <div id="collapseListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
                  <ul class="">
                    <li class="panel-collapse collapse in">
                      <a class="collapsed" data-toggle="collapse" href="#collapseListGroup2" aria-expanded="false" aria-controls="collapseListGroup2">Access to this environment and team member controls</a>
                    </li>
                    <ul id="collapseListGroup2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading2">
                      <li>1</li>
                      <li>2</li>
                    </ul>
                    
                    
                    <li class="panel-collapse collapse in">
                      <a class="collapsed" data-toggle="collapse" href="#collapseListGroup3" aria-expanded="false" aria-controls="collapseListGroup3">Normative References with Terms and Conditions</a>
                    </li>
                    <ul id="collapseListGroup3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading3">
                      <li>3</li>
                      <li>4</li>
                    </ul>
                  </ul>
                </div>
              </div>
            </div>

            <div class="panel-group" role="tablist" style="background-color: #e3ebf6;">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="collapseListGroupHeading4">
                  <h4 class="panel-title"><i class="fa fa-caret-down"></i>
                  <a class="collapsed" data-toggle="collapse" href="#collapseListGroup4" aria-expanded="false" aria-controls="collapseListGroup4">ISO Requirements</a>
                  </h4>
                </div>
                <div id="collapseListGroup4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading4">
                  <ul class="">
                    <li class="panel-collapse collapse in">
                      <a class="collapsed" data-toggle="collapse" href="#collapseListGroup5" aria-expanded="false" aria-controls="collapseListGroup5">Understanding the organization and its context</a>
                    </li>
                    <ul id="collapseListGroup5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading2">
                      <li>
                        <a class="collapsed" data-toggle="collapse" href="#collapseListGroup7" aria-expanded="false" aria-controls="collapseListGroup7">4.1 Organization shall determine external and internal issues</a>
                        <div id="collapseListGroup7" class="panel-collapse collapse box-body" role="tabpanel" aria-labelledby="collapseListGroupHeading4">
                          <!-- <div class="form-group">
                            <label class="control-label">Name</label>
                            <textarea class="form-control" rows="4"></textarea>
                            
                          </div> -->
                          <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-8">
                    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Assigned to:</label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Refference</label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                  
                </div>

                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-2 control-label">Start date:</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="datepicker2" >
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Due:</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="datepicker2" >
                  </div>
                  
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Days estimated:</label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                  
                  
                </div>

                <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  
                  <input type="text" class="form-control pull-right" id="datepicker">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
                            
                            
                          
                        </div>
                      </li>
                    </ul>
                    
                    
                    <li class="panel-collapse collapse in">
                      <a class="collapsed" data-toggle="collapse" href="#collapseListGroup6" aria-expanded="false" aria-controls="collapseListGroup6">Normative References with Terms and Conditions</a>
                    </li>
                    <ul id="collapseListGroup6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading3">
                      <li>3</li>
                    </ul>
                  </ul>
                </div>
              </div>
            </div>
          </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      <!-- /.content -->
 
@stop