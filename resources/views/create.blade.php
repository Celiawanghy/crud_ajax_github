@extends('layout')
@section('content')

<div class="row">
    
    <div class="col-md-2 col-sm-1">
        
    </div>
        
    <div class="col-md-8 col-sm-10">
        
        <div class="panel panel-default bg-white">


            <div class="panel-body">

                <form  method="POST" action={{url('/display')}}>

                        {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">NAME:</label>
                                <input type="text" name="name" class="form-control" id="name" required="">
                            </div>

                            <div class="form-group">
                              <label for="province">PROVINCE:</label>
                              <select class="form-control" id="province" name="province" required>
                                <option value=""></option>
                                <option value="Ontario">Ontario</option>
                                <option value="Quebéc">Quebéc</option>
                                <option value="Nova Scotia">Nova Scotia</option>
                                <option value="New Brunswick">New Brunswick</option>
                                <option value="Manitoba">Manitoba</option>
                                <option value="British Columbia">British Columbia</option>
                                <option value="Prince Edward Island">Prince Edward Island</option>
                                <option value="Saskatchewan">Saskatchewan</option>
                                <option value="Alberta">Alberta</option>
                                <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                                <option value="Northwest Territories">Northwest Territories</option>
                                <option value="Yukon">Yukon</option>
                                <option value="Nunavut">Nunavut</option>
                              </select>
                            </div> 

                            <div class="form-group">
                                <label for="salary">SALARY:</label>
                                <input type="text" class="form-control" id="salary" name="salary" required="">
                            </div>
                        <button type="submit" class="btn btn-primary btn-long" id="save">SAVE</button>
                </form>

            </div>
            
            @include('error')
            
        </div>
    </div>
</div>

@endsection
