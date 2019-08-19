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
            <form action="{{ action('TeacherStudentController@update',[$teacherstudent->id,$id]) }}" method="post">
                <input type = "hidden" value="PUT" name = "_method">
                @csrf
                <div class="card-body card-block">

                    <div class="form-group">
                        <label for=""> Major </label>
                        <select name="major" class = "form-control">
                            @foreach($majors as $major)
                                <option value="{{ $major->id }}" {{ $major->id == $teacherstudent->major_id ? 'selected' : '' }}> {{ $major->major }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""> Subject </label>

                        <select name="subject" class = "form-control">
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}" {{ $subject->id == $teacherstudent->subject_id ? 'selected' : '' }}> {{ $subject->subject }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""> Academic </label>

                        <select name="academic" class = "form-control">
                            @foreach($academics as $academic)
                                <option value="{{ $academic->id }}"{{ $academic->id == $teacherstudent->academic_id ? 'selected' : '' }}> {{ $academic->academic }}</option>

                            @endforeach
                        </select>
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
