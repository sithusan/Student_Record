@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12 my-5">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
        </div>
        <div class="card">
            <div class="card-header">
                <strong>Shop</strong>
            </div>
            <form action="{{ action('StudentController@update',[$major_id,$student->id]) }}" method="post">
                <input type = "hidden" value="PUT" name = "_method">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Roll No</label>
                        <input type="text" id="name" name="roll_no" value = "{{ $student->roll_no }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name</label>
                        <input type="text" id="name" name="name"  class="form-control" value = "{{$student->name}}">
                    </div>
                    <div class="form-group">
                            <label for="address" class=" form-control-label">Academic Year</label>
                            <select name = "academic" class = "form-control">
                                @foreach($academics as $data)
                                <option value = "{{ $data->id}}" {{ $data->id == $student->academic_id }}> {{$data->academic }} </option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group">
                            <label for="address" class=" form-control-label"> NRC No</label>
                            <input type="text" id="address" name="nrc" value = "{{ $student->nrc }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address" class=" form-control-label">Parent Name</label>
                        <input type="text" id="address" name="parent_name" value = "{{$student->parent_name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Address</label>
                        <input type="text" id="address" name="address" value = "{{$student->address}}"class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Phone</label>
                        <input type="text" id="address" name="phone" value = "{{$student->phone_no}}" class="form-control">
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
