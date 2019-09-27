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
                        <li><a style="background-color: #3c8dbc;color: white;"
                               href="{{url('/structure')}}">Structure</a>
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
                        <li><a style="background-color: #FF851B;color: white;" href="#tab_7"
                               data-toggle="tab">Documets</a>
                        </li>
                        <li><a style="background-color: #FF851B;color: white;" href="#tab_8"
                               data-toggle="tab">To-dos</a>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="box box-default">
                                                <div class="box-header with-border">


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="box box-solid">
                                                                <div class="box-body"
                                                                     style="background-color: #e3ebf6;">
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
                                <div class="col-md-9">
                                    <div class="row" >
                                        <h4>Notes</h4>

                                        <div class="col-md-8" style="border: 1px solid #d2d6de">
                                            <!-- Widget: user widget style 1 -->
                                            <div class="box box-widget widget-user">
                                                    <div class="row" style="padding-top: 10px">
                                                        <div class="col-md-12">
                                                        <strong class="pull-right"> <a href="#"><i
                                                                        class="fa fa-fw fa-trash"></i>Delete</a></strong>
                                                        <strong class="pull-right"> <a href="#"><i
                                                                        class="fa fa-fw fa-edit"></i>Edit</a></strong>
                                                        </div>
                                                    </div>
                                                    <div class="user-block">

                                                        <span><strong>Tips</strong></span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <p>
                                                        Lorem ipsum represents a long-held tradition for designers,
                                                        typographers and the like. Some people hate it and argue for
                                                        its demise, but others ignore the hate as they create awesome
                                                        tools to help create filler text for everyone from bacon lovers
                                                        to Charlie Sheen fans.
                                                    </p>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="box box-default">
                                                            <div class="box-header with-border">
                                                                <h3 class="box-title">Policy</h3>
                                                                <p>
                                                                    Lorem ipsum represents a long-held tradition for
                                                                    designers,
                                                                    typographers and the like. Some people hate it and
                                                                    argue for
                                                                    its demise, but others ignore the hate as they
                                                                    create
                                                                    awesome
                                                                    tools to help create filler text for everyone from
                                                                    bacon
                                                                    lovers
                                                                    to Charlie Sheen fans.
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">

                                                <button type="button" class="btn  btn-success btn-xs  pull-left">Add
                                                    Note
                                                </button>



                                            </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="box-body">
                                                    <img style="
                                                            width: 20px;height:20px; margin-right: 10px"
                                                         src="http://localhost:8000/img/user2-160x160.jpg"
                                                         alt="Message User Image">
                                                    <span>Stakeholder
                                                                Map</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 25px">
                                        <div class="col-md-12">
                                            <div class="box-default">
                                                <div class="box-header">
                                                    <div class="row">
                                                        <h3 class="box-title">To-dos</h3>
                                                        <button type="button"
                                                                class="btn  btn-success btn-xs  pull-right">Add To-do
                                                        </button>
                                                    </div>

                                                    <p>no To-dos to display</p>
                                                </div>

                                                <div class="box-header with-border">
                                                    <div class="row">
                                                        <h3 class="box-title">Documents</h3>
                                                        <button type="button"
                                                                class="btn  btn-success btn-xs  pull-right">Add Document
                                                        </button>
                                                    </div>

                                                    <p>no Documents to display</p>
                                                </div>

                                                <div class="box-header with-border">
                                                    <div class="row">
                                                        <h3 class="box-title">Discussions</h3>
                                                        <button type="button"
                                                                class="btn  btn-success btn-xs  pull-right">Add
                                                            Discussion
                                                        </button>
                                                    </div>

                                                    <p>no Discussions to display</p>
                                                </div>
                                                <div class="box-header with-border">
                                                    <div class="row">
                                                        <h3 class="box-title">Tools</h3>

                                                    </div>

                                                    <p>no Tools to display</p>
                                                </div>
                                                <div class="box-header with-border">
                                                    <div class="row">
                                                        <h3 class="box-title">Updates</h3>
                                                    </div>

                                                    <p>no Updates to display</p>
                                                </div>
                                            </div>
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

@stop