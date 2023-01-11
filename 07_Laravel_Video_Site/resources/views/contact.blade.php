@extends('master')
 
@section('content')
 
  <article class="entry">
 
  <h2 class="entry-title">Contact Us</h2>
 
 
  <div class="entry-content">
   
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('site.contact') }}" method="post">

        @csrf
 
    <div class="mb-3">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        <div class="form-text text-danger">{{ $errors->first('name') }}</div>
    </div>
 
      <div class="mb-3">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        <div class="form-text text-danger">{{ $errors->first('email') }}</div>
      </div>
 
      <div class="mb-3">  
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
        <div class="form-text text-danger">{{ $errors->first('phone') }}</div>
      </div>
 
      <div class="mb-3">  
        <label>Subject</label>
        <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
        <div class="form-text text-danger">{{ $errors->first('subject') }}</div>
      </div>

      <div class="mb-3">  
        <label>Message</label>
        <input type="text" class="form-control" name="message" value="{{ old('message') }}">
        <div class="form-text text-danger">{{ $errors->first('message') }}</div>
      </div>
 
        <hr>
        <button class="btn btn-primary" type="submit">Send Query</button>
 
 
        </form>
      </div>
      <div class="col-md-6">
        <strong>Our Address</strong>
        <hr>
        Some Dummy Building <br>
        Some Dummy Road <br>
        Dummy City - 333333 <br>
        P/h: 9898989898
      </div>
    </div>
 
  </div>
 
  </article>
 
@endsection
