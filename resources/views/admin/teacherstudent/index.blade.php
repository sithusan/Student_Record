@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12" style = "height:650px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
                <a href = "{{ action('TeacherStudentController@create',$id) }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add Teacher</a>

        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>

                    <th>Teacher Name</th>
                    <th>Major</th>
                    <th>Subject</th>
                    <th>Academic</th>

                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($ts as $data)
                <tr class="tr-shadow">

                    <td> {{ $data->teacher->name }}</td>
                    <td>
                        <span class="block-email">{{ $data->major->major }}</span>
                    </td>
                    <td> {{ $data->subject->subject }}</td>
                    <td> {{ $data->academic->academic }}</td>



                    <td>
                        <div class="table-data-feature">

                            <a href = "{{ action('TeacherStudentController@edit',[$data->teacher_id,$data->id]) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>


                                <form action="{{ action('TeacherStudentController@destroy',[$data->teacher_id,$data->id]) }}" method = "POST">
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
