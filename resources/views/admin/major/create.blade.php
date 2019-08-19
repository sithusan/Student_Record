@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12 my-5" style = "height:450px">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
        </div>
            <div class="card">
                <div class="card-header">
                    <strong>Shop</strong>
                </div>
                <form action="{{ action('MajorController@store') }}" method="post">
                    @csrf
                <div class="card-body card-block">

                        <div class="form-group">
                            <label for="name" class=" form-control-label">Major</label>
                            <input type="text" id="name" name="major" placeholder="Enter Major.." class="form-control">
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>

                </div>
                </form>

            </div>

        <!-- END DATA TABLE -->
    </div>
@endsection
