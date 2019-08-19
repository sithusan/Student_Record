@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12" style = "height:650px">
        <!-- DATA TABLE -->

        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>

                    <th>Major</th>

                    <th>View</th>
                </tr>
                </thead>
                <tbody>
                @foreach($majors as $data)
                    <tr class="tr-shadow">

                        <td> {{ $data->major }}</td>
                        <td><a href="{{ action('SubjectController@index',$data->id) }}" class = "btn btn btn-warning"> View</a></td>


                    </tr>
                    <tr class="spacer"></tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
@endsection
