@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12" style = "height:650px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
                <a href = "{{ action('TeacherController@create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add Teacher</a>
            <a href = "{{ action('TeacherController@getimportfile') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>Import Excel </a>
            <a href = "{{ action('TeacherController@export') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>Export </a>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>

                    <th>Name</th>
                    <th>Qualifications</th>
                    <th>Address</th>
                    <th>Phone</th>

                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                <tr class="tr-shadow">

                    <td> {{ $teacher->name }}</td>
                    <td>
                        <span class="block-email">{{ $teacher->qualifications }}</span>
                    </td>
                    <td> {{ $teacher->address }}</td>
                    <td> {{ $teacher->phone_no }}</td>



                    <td>
                        <div class="table-data-feature">

                            <a href = "{{ action('TeacherController@edit',$teacher->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>


                                <form action="{{ action('TeacherController@destroy',$teacher->id) }}" method = "POST">
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
