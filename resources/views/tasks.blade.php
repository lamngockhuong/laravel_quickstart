@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('task.create.title')
                </div>
                <!-- Bootstrap Boilerplate... -->
                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                    @include('common.success')
                    <!-- New Task Form -->
                    {!! Form::open(['route' => 'task.index', 'class' => 'form-horizontal']) !!}
                    <!-- Task Name -->
                        <div class="form-group">
                            {!! Form::label('task', trans('task.create.name'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('name', '', ['id' => 'task-name', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                {!! Form::button('<i class="fa fa-plus"></i> ' . trans('task.create.button'), ['class' => 'btn btn-default', 'type' => 'submit']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
