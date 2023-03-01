@extends('Layouts.MainLayout')

@section('title', 'Login')

@section('sidebar')
    @parent

    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection

@section('content')
    {{-- <div class="container"> --}}
    <form method="get" action="{{ route('login') }}">
        <div class="card">

            <h5 class="head">User Login</h5>
            <input type="text" id="txt_username" name="txt_username" placeholder="UserName" value="{{ old('txt_username') }}">
            {{ $errors->first('txt_username') }}
            <input type="text" id="txt_password" name="txt_password" placeholder="Password"
                value="{{ old('txt_password') }}">
            {{ $errors->first('txt_password') }}
            <button onclick="" id="btn_login">
                Login
            </button>

        </div>
    </form>
    {{-- </div> --}}
@endsection
