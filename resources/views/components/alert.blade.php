@if(session('error'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Hi {{ Auth::user()->name }} !</strong> {{ session('error') }}

</div>
@endif