@extends('layouts/main')

@section('content')

  <h2>Contact</h2>
  <p>Ceci est ma page contact</p>

  <div>
          <!-- Success message -->
          @if(Session::has('success'))
            <div>
                {{Session::get('success')}}
            </div>
          @endif

    <form action="" method="post" action="{{ route('contact.store') }}">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" id="email">
    </div>

    <div>
        <label>Message</label>
        <textarea name="message" id="message" rows="4"></textarea>
    </div>

    <input type="submit" name="send" value="Envoyer" >
    </form>
  </div>
@endsection
