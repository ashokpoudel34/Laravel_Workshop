@extends('master')

@section('content')

  <article class="entry">

  <h2 class="entry-title">Login Page...</h2>

  <div class="entry-meta">
    Some Meta
  </div>

  <div class="entry-content">
  <form action="">
 
 <label>Email</label>
 <input type="text" class="form-control mb-3" name="email">

 <label>Password</label>
 <input type="password" class="form-control mb-3" name="password">

 <hr>
 <button class="btn btn-primary" type="submit">Login</button>

</form>

  </div>

  </article>

@endsection