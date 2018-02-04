@extends('layout')
@section('content')

<div class="row">
    
    <div class="col-md-1 col-sm-0">
        
    </div>
        
    <div class="col-md-10 col-sm-12" id='load'>

        @include('ajax.pagination')
        
    </div>
</div>

@endsection