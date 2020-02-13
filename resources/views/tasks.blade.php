@extends('layouts.app')
@section('content')

    <a href="/index">перейти сайт лодки</a>
    <div class="card-body">
        @include('errors')

        <form action="{{ url('task') }}" method='POST' class="form-horizontal" style="margin: 5rem 5rem;">
            {{ csrf_field() }}

            <div class="row">
                <div class="form-group">
                    <label for="Task" class="col-sm-3 control-label">Task</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Numb" class="col-sm-3 control-label">Numb</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="number" name="number" id="task-number" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa plus"></i>
                                Add task
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @if(count($tasks) > 0)
        <div class="card">
            <div class="card-heading">
                Current tasks
            </div>
            <div class="card-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Task</th>
                    <th>№</th>
                    <th>delete</th>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr class="table-text">
                            <td>
                                <div>{{ $task-> name }}</div>
                            </td>
                            <td>
                                <div>{{ $task-> number }}</div>
                            </td>
                            <td>
                                <form action="{{ url('task/'.$task->id) }}" method='POST'>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-danger">
                                        DELETE
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection





