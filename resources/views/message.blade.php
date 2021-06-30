

<center>
@if(Session::has('success'))
{{-- <div class="alert"> --}}
<p class="alert alert-success">{{ Session::get('success') }}</p>
{{-- </div>  --}}
@endif
</center>
<center>
@if(Session::has('error'))
{{-- <div class="alert"> --}}
<p class="alert alert-danger">{{ Session::get('error') }}</p>
{{-- </div>  --}}
@endif
</center>
