@extends('admin.master')

@section('content')

  <article class="entry">

  <h2 class="entry-title">Login Page...</h2>

  <div class="entry-meta">
  </div>

  <div class="entry-content">
  <form action="{{ route('admin_site.login') }}" method="post">

  @csrf
 
  <div class="mb-3">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        <div class="form-text text-danger">{{ $errors->first('email') }}</div>
</div>

 <div class="mb-3">  
        <label>Password</label>
        <input type="password" class="form-control" name="password">
        <div class="form-text text-danger">{{ $errors->first('password') }}</div>
</div>

 <hr>
 <button class="btn btn-primary" type="submit">Login</button>

</form>

  </div>

  </article>

@endsection