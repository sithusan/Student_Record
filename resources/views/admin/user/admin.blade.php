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
                    <th>Email</th>
                    <th>date</th>

                </tr>
                </thead>
                <tbody>
                @foreach($admin as $data)
                    <tr class="tr-shadow">

                        <td> {{ $data->name }}</td>
                        <td>
                            <span class="block-email">{{ $data->email }}</span>
                        </td>
                        <td> {{ $data->created_at->diffForHumans() }}</td>



                    </tr>
                    <tr class="spacer"></tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
@endsection
