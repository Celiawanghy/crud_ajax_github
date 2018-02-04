@extends('layout')
@section('content')

<div class="row">
    
    <div class="col-md-2 col-sm-1">
        
    </div>
        
    <div class="col-md-8 col-sm-10">
        
        <h5 class="bg-info text-center notice">
            Your data is saved. Go to listing page to see.
        </h5>
        
        <div class="panel panel-default bg-white">


            <div class="panel-body">
                
                <table class='table'>
                    
                @foreach($input as $key=>$record)
                
                    <tr>
                        <td  class='borderless'>{{strtoupper($key)}}:</td>
                        <td class='borderless'>{{$record}}</td>
                        
                    </tr>
               
                @endforeach  
                    
                </table>

            </div>
        </div>
    </div>
</div>

@endsection