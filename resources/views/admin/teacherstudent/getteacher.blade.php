@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12" style = "height:650px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>

        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>

                    <th>Teacher </th>
                    <th>View</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr class="tr-shadow">

                        <td> {{ $teacher->name }}</td>
                        <td><a href="{{ action('TeacherStudentController@index',$teacher->id) }}" class = "btn btn-primary"> View</a> </td>

                </tbody>
                @endforeach
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
@endsection
