@extends('Layouts.AdminLayout')

@section('title', 'NewLead')

@section('sidebar')
    @parent


@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-Success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form method="GET" action="{{ route('leadadd') }}">
        <div class="card2">
            <h5 class="head">New Lead</h5>

            <select class="myinput" name="opt_status" aria-placeholder="Status">
                <option value="0" disabled selected>Status</option>
                <option value="0">New</option>
                <option value="1">Contacted</option>
                <option value="2">Not Interested</option>
            </select>
            <input type="text" id="txt_name" name="txt_name" class="myinput" placeholder="Name"
                value="{{ old('txt_name') }}">
            {{ $errors->first('txt_name') }}
            <input type="text" id="txt_email" name="txt_email" class="myinput"
                placeholder="Eamil"value="{{ old('txt_email') }}">
            {{ $errors->first('txt_email') }}
            <input type="text" id="txt_phone" name="txt_phone" class="myinput" placeholder="Phone"
                value="{{ old('txt_phone') }}">
            {{ $errors->first('txt_phone') }}
            <input type="text" id="txt_country" name="txt_country" class="myinput" placeholder="Country"
                value="{{ old('txt_country') }}">
            {{ $errors->first('txt_country') }}
            <input type="text" id="txt_interest" name="txt_interest" class="myinput" placeholder="Interest"
                value="{{ old('txt_interest') }}">

            {{ $errors->first('txt_interest') }}

            <select class="myinput" name="opt_source" aria-placeholder="Status">
                <option value="0" disabled selected>Source</option>
                <option value="0">Instagram</option>
                <option value="1">FaceBook</option>
                <option value="2">TikTok</option>
            </select>
            <input type="text" id="txt_remark" class="myinput" name="txt_remark" placeholder="Remark"
                value="{{ old('txt_remark') }}">
            {{ $errors->first('txt_remark') }}
            <button onclick="" id="btn_login">
                Save
            </button>

        </div>
    </form>
@endsection
