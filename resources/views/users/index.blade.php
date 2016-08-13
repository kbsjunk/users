@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="pull-left btn-table-align">
                            {{ trans('users::users.page.index') }}
                        </div>

                        <div class="pull-right">
                            <a href="{{ route('users.create') }}" class="btn btn-default pull-right">{{ trans('users::users.action.create') }}</a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    User
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <a href="{{ route('users.show', $user) }}">{{ $user->display_name }}</a><br>
                                        <small class="text-muted">{{ $user->atName }}</small>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="panel-footer">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
