@extends('admin.layouts.back');
@section('content')
    <div class="col-md-12 my-5">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
        </div>
            <div class="card">
                <div class="card-header">
                    <strong>Student Register</strong>
                </div>
                <form action="{{ action('StudentController@store',$major_id) }}" method="post">
                    @csrf
                <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Roll No</label>
                            <input type="text" id="name" name="roll_no" placeholder="Enter Roll Number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter Name.." class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="address" class=" form-control-label">Academic Year</label>
                            <select name = "academic" class = "form-control">
                                @foreach($academics as $data)
                                <option value = "{{ $data->id}}"> {{$data->academic }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address" class=" form-control-label"> NRC No</label>
                            <input type="text" id="address" name="nrc" placeholder="Enter NRC roll_no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address" class=" form-control-label">Parent Name</label>
                            <input type="text" id="address" name="parent_name" placeholder="Enter Parent Name.." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone" class=" form-control-label">Address</label>
                            <input type="text" id="address" name="address" placeholder="Address.." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone" class=" form-control-label">Phone</label>
                            <input type="text" id="address" name="phone" placeholder="Phone.." class="form-control">
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
