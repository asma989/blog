
{{-- message box --}}
@if(count($errors)>0)
<div class="alert alert-danger">
        <ul style="list-style: none;">
                @foreach ($errors->all() as $error) 
                        <li>   {{$error}} </li>
                @endforeach
                @endif      
        </ul>
</div>
@if(session('success'))
<div  class="alert alert-success">
        {{session('success')}}
</div>
@endif

@if(session('error'))
<div  class="alert alert-danger">
        {{session('error')}}
</div>
@endif

<div style="display: none;" id="failDiv" class="alert alert-danger">
              
 </div>

 <div style="display: none;" id="successDiv" class="alert alert-success">
            
        </div>
{{-- endmessage box --}}