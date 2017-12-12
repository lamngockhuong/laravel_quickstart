@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Display Validation Errors -->
            @include('common.message')
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('task.create.title')
                </div>
                <!-- Bootstrap Boilerplate... -->
                <div class="panel-body">
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
            <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('task.display.title')
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <!-- Table Headings -->
                        <thead>
                            <th>@lang('task.display.table.name')</th>
                            <th>&nbsp;</th>
                        </thead>
                        <!-- Table Body -->
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['task.destroy', 'id' => $task->id]]) !!}
                                            {{ method_field('DELETE') }}
                                            {!! Form::button('<i class="fa fa-trash"></i> ' . trans('task.delete.button'),
                                                [
                                                    'class' => 'btn btn-danger delete-button',
                                                    'type' => 'submit',
                                                    'data-mes-confirm' => trans('task.delete.confirm'),
                                                ])
                                            !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
