@if ($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <ul> 

       @foreach ($errors->all() as $error)
           <li>{{ $error }} </li>
       @endforeach
    </ul>

 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label=""></button>
 </div>
    

    
@endif