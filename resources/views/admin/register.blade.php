@extends('layouts.master')

@section('content')



<div class="tittle">

  <h2>Register</h2>
</div>

<div class="login-box">
<form method="post" action="{{route('admin.register')}}">
  @csrf

  <div class="mb-3">
    <label for="name" class="visually-hidden">Name</label>
    <input type="text" name ="name" id="name" placeholder="Name" class="form-control @error('name') alert alert-danger @enderror" value="{{old('name')}}">
  </div>
  @error('name')
  <div class="error">
      {{ $message }}
  </div>
@enderror
<div class="mb-3">
  <label for="username" class="visually-hidden">Userame</label>
  <input type="text" name ="username" id="username" placeholder="Userame" class="form-control @error('username') alert alert-danger @enderror" value="{{old('username')}}">
</div>
@error('username')
<div class="error">
    {{ $message }}
</div>
@enderror


    <div class="mb-3">
      <label for="email" class="visually-hidden ">Email</label>
      <input type="text" name ="email" id="email" placeholder="Email" class="form-control @error('email') alert alert-danger @enderror" value="{{old('email')}}">
</div>

    @error('email')
  <div class="error">
      {{ $message }}
  </div>
@enderror

<div class="mb-3">
  <label for="phone" class="visually-hidden">Phone</label>
  <input type="text" name ="phone" id="phone" placeholder="Phone" class="form-control @error('phone') alert alert-danger @enderror" value="{{old('phone')}}">
</div>
@error('phone')
<div class="error">
    {{ $message }}
</div>
@enderror
<div class="mb-3">
  <label for="address" class="visually-hidden">Address</label>
  <input type="text" name ="address" id="address" placeholder="Address" class="form-control @error('address') alert alert-danger @enderror" value="{{old('address')}}">
</div>
@error('address')
<div class="error">
    {{ $message }}
</div>
@enderror

<div class="mb-4">
  <label for="password" class="visually-hidden">password</label>
  <input type="password" name ="password" id="password" placeholder="password" class="form-control @error('password') alert alert-danger @enderror" value="">
</div>
    @error('password')
  <div class="error">
      {{ $message }}
  </div>
@enderror

<div class="mb-4">
  <label for="password_confirmation" class="visually-hidden">Repeat password</label>
  <input type="password" name ="password_confirmation" id="password_confirmation" placeholder="Repeat password" class="form-control @error('password') alert alert-danger @enderror" value="">
</div>
    @error('password')
  <div class="error">
      {{ $message }}
  </div>
@enderror

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
