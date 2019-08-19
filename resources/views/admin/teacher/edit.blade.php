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
            <form action="{{ action('TeacherController@update',$teacher->id) }}" method="post">
                <input type = "hidden" value="PUT" name = "_method">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name</label>
                        <input type="text" id="name" name="name"  class="form-control" value = "{{$teacher->name}}">
                    </div>
                    <div class="form-group">
                        <label for="address" class=" form-control-label">Qualifications</label>
                        <input type="text" id="address" name="qualifications" value = "{{$teacher->qualifications}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Address</label>
                        <input type="text" id="address" name="address" value = "{{$teacher->address}}"class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Phone</label>
                        <input type="text" id="address" name="phone" value = "{{$teacher->phone_no}}" class="form-control">
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
