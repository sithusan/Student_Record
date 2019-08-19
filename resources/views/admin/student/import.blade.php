@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12 my-5">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
        </div>
        <div class="card" style = "height:450px;">
            <div class="card-header">
                <strong>Shop</strong>
            </div>
            <form action="{{ action('StudentController@import',$major_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="file" class=" form-control-label"> Excel File </label>
                        <input type="file" id="file" name="file">
                    </div>

                    <button class = "btn btn-primary"> Submit </button>

                </div>

            </form>

        </div>
    </div>
@endsection
