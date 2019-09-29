@extends('layout.app')

@section('content')
<section class="margin">
  <ol class="breadcrumb col-md-12">
    <li><a class="text-dark" href="#">Projects</a></li>
    <li><a class="text-dark" href="#">Policies and Controls</a></li>
  </ol>
</section>
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
                                    <!-- START PROGRESS BARS -->


                                    <div class="row">
                                        <button type="button" class="btn  btn-success btn-xs  pull-right">New tool
                                            usage
                                        </button>

                                    </div>
                                    <div class="row">

                                        <h4 class="box-title">Built in tools</h4>

                                            <div class="box">
                                                <div class="">
                                                    <table class="table table-bordered">
                                                        <!-- for each here -->
                                                        <tr>
                                                            <th>Tools</th>
                                                            <th>Name</th>
                                                            <th>Type</th>
                                                            <th>Regarding</th>
                                                            <th>Last activity</th>
                                                        </tr>
                                                        <tr>
                                                            <td ><div ><img style="
                                                            width: 20px;height:20px; margin-right: 10px" src="http://localhost:8000/img/user2-160x160.jpg" alt="Message User Image">
                                                            <span>Stakeholder
                                                                Map</span>
                                                            </div>
                                                            </td>
                                                            <td class="nav navbar-nav"><div class=" user-menu"><img class=" user-image" style="
                                                            width: 20px;height:20px;" src="http://localhost:8000/img/user2-160x160.jpg" alt="Message User Image">
                                                            
                                                            <span>ISMS Interested Parties</span>
                                                            </div>
                                                            </td>
                                                            
                                                            <td>Project</td>

                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td ><div ><img style="
                                                            width: 20px;height:20px; margin-right: 10px" src="http://localhost:8000/img/user2-160x160.jpg" alt="Message User Image">
                                                            <span>Stakeholder
                                                                Map</span>
                                                            </div>
                                                            </td>
                                                            <td class="nav navbar-nav"><div class=" user-menu"><img class=" user-image" style="
                                                            width: 20px;height:20px;" src="http://localhost:8000/img/user2-160x160.jpg" alt="Message User Image">
                                                            
                                                            <span>ISMS Interested Parties</span>
                                                            </div>
                                                            </td>
                                                            
                                                            <td>Project</td>

                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td ><div ><img style="
                                                            width: 20px;height:20px; margin-right: 10px" src="http://localhost:8000/img/user2-160x160.jpg" alt="Message User Image">
                                                            <span>Stakeholder
                                                                Map</span>
                                                            </div>
                                                            </td>
                                                            <td class="nav navbar-nav"><div class=" user-menu"><img class=" user-image" style="
                                                            width: 20px;height:20px;" src="http://localhost:8000/img/user2-160x160.jpg" alt="Message User Image">
                                                            
                                                            <span>ISMS Interested Parties</span>
                                                            </div>
                                                            </td>
                                                            
                                                            <td>Project</td>

                                                            <td></td>
                                                        </tr>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">

                                       <h4 class="box-title">Template Tools</h4>

                                            <div class="box">
                                                <div class="">
                                                    <table class="table table-bordered">
                                                        <!-- if data exist -->
                                                        <!-- forEach start here -->
                                                        <tr>
                                                            <th>Tools</th>
                                                            <th>Name</th>
                                                            <th>Type</th>
                                                            <th>Regarding</th>
                                                            <th>Last activity</th>
                                                        </tr>
                                                        <!-- forEach end here -->
                                                        <!-- else no data -->
                                                        <tr>
                                                            <td><p>No Tools to display</p></td>
                                                        </tr>
                                                    </table>
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