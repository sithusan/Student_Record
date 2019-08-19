@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12" style = "height:650px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>

                    <th>Name</th>
                    <th>Parent Name</th>
                    <th>Address</th>
                    <th>Phone</th>


                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr class="tr-shadow">

                        <td> {{ $student->name }}</td>
                        <td>
                            <span class="block-email">{{ $student->parent_name }}</span>
                        </td>
                        <td> {{ $student->address }}</td>
                        <td> {{ $student->phone_no }}</td>
                    </tr>
                    <tr class="spacer"></tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
@endsection
