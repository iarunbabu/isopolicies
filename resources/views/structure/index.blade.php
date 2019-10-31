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
            <a href="{{url('/structure')}}" data-toggle="tab" >Structure</a>
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
            @foreach ($policies as $policy)
            <div class="box">
              <div class="panel-group" role="tablist" style="background-color: #e3ebf6;">
                <div class="panel panel-default " style="background-color: #e3ebf6;">

                  <div class="panel-heading on-hover"  id="collapseListGroupHeading1">
                    <div class="row ">
                      <div class="col-md-12 ">
                    <i class="fa fa-caret-down"></i>
                      <a class="collapsed" data-toggle="collapse" href="#policy{{$policy->id}}" aria-expanded="false" aria-controls="collapseListGroup1"><span class="step">P</span>{{$policy->name}}</a>  
                  </div>
                  
                   <div class="div-hover" style="position: absolute; right: 1px;background-color: #fff; padding: 3px; ">  

                    <a  class="btn btn-xs btn-success " class=" btn btn-xs btn-success collapsed margin" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseListGroup2">Add Deliverable</a>
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
                            <i class="fa fa-pencil"></i>Edit
                          </a>  
                      </div>
                    </div>
                    
                  </div>
                  @if(count($policy->deliverables) > 0)
                  
                  <div id="policy{{$policy->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
                    @foreach($policy->deliverables as $deliverable)

                    <ul class="" style="background-color: #e3ebf6;">
                      <li class="panel-collapse collapse in margin on-child-hover">
                        <div class="row">
                        <div  class="col-md-12" >
                        <i class="fa fa-caret-down"></i>
                        <a class="collapsed margin" data-toggle="collapse" href="#deliverable{{$deliverable->id}}" aria-expanded="false" aria-controls="collapseListGroup2"><span class="step">D</span>
                         {{$deliverable->name}}</a>
</div>

                         <div class="div-child-hover" style="position: absolute;right: 1px;background-color: #fff;padding: 3px">



                          <a  class="btn btn-xs btn-success" class=" btn btn-xs btn-success collapsed margin" data-toggle="collapse" href="#deliverableform{{$deliverable->id}}" aria-expanded="false" aria-controls="collapseListGroup2">Add Activity</a>
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
                        </div>
                      </li>
                      @if(count($deliverable->activities) > 0)
                      <div id="deliverable{{$deliverable->id}}" class="panel-collapse collapse margin" role="tabpanel" aria-labelledby="collapseListGroupHeading2">
                        <ul >
                          @foreach($deliverable->activities as $activity)
                          <li class="on-active-hover">
                            <div class="row margin">
                              <div class="col-md-12">
                            <a href="{{url('/activity')}}/{{$activity->id}}">      
                              <span class="step">A</span>
                              {{$activity->name}}
                            </a>
</div>
<div class="div-active-hover" style="position: absolute;right: 1px;background-color: #fff;padding: 3px">
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

</div>
                          </li>
                          @endforeach

                        </ul>

                        @endif

                        <ul>
                          <li id="deliverableform{{$deliverable->id}}" class="panel-collapse collapse box-body" role="tabpanel" aria-labelledby="collapseListGroupHeading4">
                            <div >

                              <form class="form-horizontal" method="POST" action="{{url('activity')}}">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <input type="hidden" name="deliverable_id" value="{{$deliverable->id }}">

                               <div class="box-body">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label activity-label">Name</label>
                                  <div class="col-sm-8">
                                    <textarea class="form-control" name="name" rows="4"></textarea>
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
                              <div class="row">
                                <div class="col-md-12">                                  
                                  <button class="btn btn-xs btn-success" >Save</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </li>
                      </ul>


                    </ul>
                    @endforeach

                  </div>
                  @endif

                </div>
              </div>

            </div>
            @endforeach

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