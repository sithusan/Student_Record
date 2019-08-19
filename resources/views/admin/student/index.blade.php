@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12" style = "height:650px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
                <a href = "{{ action('StudentController@create',$major_id) }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add Student</a>
            <a href = "{{ action('StudentController@getimportfile',$major_id) }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>Import Excel </a>
            {{--<a href = "{{ action('StudentController@export') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">--}}
                {{--<i class="zmdi zmdi-plus"></i>Export </a>--}}
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>

                    <th>Name</th>
                    <th>Parent Name</th>
                    <th>Roll No</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>NRC</th>
                    <th>Academic Year</th>

                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr class="tr-shadow">

                    <td> {{ $student->name }}</td>
                    <td>
                        <span class="block-email">{{ $student->parent_name }}</span>
                    </td>
                    <td> {{ $student->roll_no }} </td>
                    <td> {{ $student->address }}</td>
                    <td> {{ $student->phone_no }}</td>
                    <td> {{ $student->nrc  }}</td>
                    <td> {{ $student->academic->academic }} </td>



                    <td>
                        <div class="table-data-feature">

                            <a href = "{{ action('StudentController@edit',[$major_id,$student->id]) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>


                                <form action="{{ action('StudentController@destroy',[$major_id,$student->id]) }}" method = "POST">
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
