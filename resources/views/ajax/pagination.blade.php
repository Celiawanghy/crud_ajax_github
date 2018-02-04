<form method="POST" action="{{url('/delete')}}">
    {{csrf_field()}} 
    <table class="table table-narrow">
        <tr>
            <thead class="thead-dark">
                <th>Name</th><th>Province</th><th>Salary</th><th>Action</th>
            </thead>
        </tr> 
        @foreach($data as $fields)
            <tr class="bg-white">
                <td>{{$fields->name}}</td>
                <td>{{$fields->province}}</td>
                @if($fields->province=="Quebéc")
                <td>$ {{number_format($fields->salary, 2, ',', ' ')}}</td>
                @else
                <td>$ {{number_format($fields->salary, 2)}}</td>
                @endif
                <!--<td><input type="submit" name="action" value="Delete"/></td>-->
                <td><button type="submit" class="btn btn-link delete" value="{{$fields->id}}">Delete</button></td> 
            </tr>
        @endforeach
    </table> 
</form>
<p>
    {{ $data->links() }}   
</p>

