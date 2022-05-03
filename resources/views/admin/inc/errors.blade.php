@if ($errors->any)
  <ul class=" list-unstyled mt-3">
    @foreach ($errors->all() as $error)
       <li class="alert alert-danger">
           {{ $error }}
       </li>
    @endforeach
  </ul>
@endif
