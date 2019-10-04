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
            <div class="box">
              <div class="panel-group" role="tablist" style="background-color: #e3ebf6;">
                <div class="panel panel-default" style="background-color: #e3ebf6;">
                  @foreach ($policies as $policy)
                  <div class="panel-heading"  id="collapseListGroupHeading1">
                    <h4 class="panel-title"><i class="fa fa-caret-down"></i>
                      <a class="collapsed" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1"><span class="step">P</span>Background information</a>
                    </h4>
                  </div>
                  @foreach($policy->deliverables as $deliverable)
                  <div id="collapseListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
                    <ul class="" style="background-color: #e3ebf6;">
                      <li class="panel-collapse collapse in margin">
                        <i class="fa fa-caret-down"></i>
                        <a class="collapsed margin" data-toggle="collapse" href="#collapseListGroup2" aria-expanded="false" aria-controls="collapseListGroup2"><span class="step">D</span>
                        Access to this environment and team member controls</a>
                        <div class="  pull-right" >
                          <a  class="btn btn-xs btn-success" class=" btn btn-xs btn-success collapsed margin" data-toggle="collapse" href="#collapseListGroup21" aria-expanded="false" aria-controls="collapseListGroup2">Add Activity</a>
                          <a class="btn  btn-xs" href="#">
                            <i class="fa fa-fw fa-trash"></i>Delete
                          </a>
                          <a class="btn  btn-xs" href="#">
                            <i class="fa fa-files-o"></i>Duplicate
                          </a>
                          <a class="btn  btn-xs" href="#">
                            <i class="fa fa fa-retweet"></i>Sort
                          </a>
                          <a class="btn  btn-xs" href="#">
                            <i class="fa fa-share"></i>Move
                          </a>
                          <a class="btn  btn-xs" href="#">
                            <i class="fa fa-pencil"></i>Edit
                          </a>
                        </div>
                      </li>
                      <ul >
                        @foreach($deliverable->activities as $activity)

                        <li  id="collapseListGroup2" class="panel-collapse collapse margin" role="tabpanel" aria-labelledby="collapseListGroupHeading2">

                          <a >      
                            <span class="step">A</span>
                            Making the template document work for yor organization and its stakeholders
                          </a>

                        </li>
                        @endforeach    
                        <div id="collapseListGroup21" class="panel-collapse collapse box-body" role="tabpanel" aria-labelledby="collapseListGroupHeading4">

                          <form class="form-horizontal">
                            <div class="box-body">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label activity-label">Name</label>
                                <div class="col-sm-8">
                                  <textarea class="form-control" rows="4"></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label activity-label">Assigned to:</label>
                                <div class="col-sm-2">
                                  <select class="form-control">
                                    <option>Unassigned</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                  </select>
                                </div>
                                <label for="inputEmail3" class="col-sm-2 control-label activity-label">Refference</label>
                                <div class="col-sm-2">
                                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label activity-label">Start date:</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" id="datepicker1" >
                                </div>
                                <label for="inputEmail3" class="col-sm-2 control-label activity-label">Due:</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" id="datepicker2" >
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label activity-label">Days estimated:</label>
                                <div class="col-sm-2">
                                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                              </div>

                            </div>
                          </form>
                        </div>
                        
                        <li  id="collapseListGroup2" class="panel-collapse collapse margin" role="tabpanel" aria-labelledby="collapseListGroupHeading2">
                          <i class="fa fa-caret-down"></i>
                          <a class="collapsed margin" data-toggle="collapse" href="#collapseListGroup22" aria-expanded="false" aria-controls="collapseListGroup2">
                            <span class="step">A</span>
                            Making the template document work for yor organization and its stakeholders
                          </a>
                        </li>
                      </ul>


                    </ul>
                  </div>

                  @endforeach     
                  @endforeach
                </div>
              </div>

            </div>
            

            
            
            <header role="banner">
              <nav class="nav" role="navigation">
                <ul class="nav__list">
                  @foreach ($policies as $policy)
                  <li>
                    <input id="group-1" type="checkbox" hidden />
                    <label for="group-1"><span class="fa fa-angle-right custom-margin" ></span> <div class="circle">P</div>First level</label>
                    @foreach($policy->deliverables as $deliverable)
                    <ul class="group-list">
                      <input id="sub-group-1" type="checkbox" hidden />
                      <label for="sub-group-1"><span class="fa fa-angle-right custom-margin" ></span><div class="circle">D</div> Second level</label>
                                              

                      <ul class="sub-group-list">
                        @foreach($deliverable->activities as $activity)
                        <label><div class="circle">A</div> Second level</label><br/>
                        @endforeach
                      </ul>
                      
                    </ul>
                    
                    @endforeach
                  </li>
                  @endforeach
                </ul>
              </nav>
            </header>
            <!-- /.sidebar -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-46156385-1', 'cssscript.com');
ga('send', 'pageview');
</script>
@stop