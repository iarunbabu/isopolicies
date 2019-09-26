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
            <div class="panel-group" role="tablist" style="background-color: #e3ebf6;">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
                  <h4 class="panel-title"><i class="fa fa-angle-right"></i>
                  <a class="collapsed" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1">Background information</a>
                  </h4>
                </div>
                <div id="collapseListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
                  <ul class="">
                    <li class="panel-collapse collapse in">
                      <a class="collapsed" data-toggle="collapse" href="#collapseListGroup2" aria-expanded="false" aria-controls="collapseListGroup2">Access to this environment and team member controls</a>
                    </li>
                    <ul class="panel-collapse collapse in" id="collapseListGroup2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading2">
                      <li >Access to this environment and team member controls1</li>
                      <li >Normative References with Terms and Conditions1</li>
                    </ul>
                    <li class="panel-collapse collapse in">Normative References with Terms and Conditions</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      <!-- /.content -->
 
@stop