@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12" style = "height:650px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
                <a href = "{{ action('UserController@create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add User</a>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>date</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr class="tr-shadow">

                    <td> {{ $user->name }}</td>
                    <td>
                        <span class="block-email">{{ $user->email }}</span>
                    </td>
                    <td> {{ $user->created_at->diffForHumans() }}</td>


                    <td>
                        <div class="table-data-feature">

                            <a href = "{{ action('UserController@edit',$user->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>


                                <form action="{{ action('UserController@destroy',$user->id) }}" method = "POST">
                                    <input type="hidden" name="_method" value="delete">
                                    {{ csrf_field() }}
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                </form>


                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
@endsection
