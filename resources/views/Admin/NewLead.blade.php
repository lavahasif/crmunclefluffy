@extends('Layouts.AdminLayout')

@section('title', 'NewLead')

@section('sidebar')
    @parent


@endsection

@section('content')
    <div class="card2">
        <h5 class="head">New Lead</h5>

        <select class="myinput" name="opt_status" aria-placeholder="Status">
            <option value="0" disabled selected>Status</option>
            <option value="0">Red</option>
            <option value="1">Contacted</option>
            <option value="2">Not Interested</option>
        </select>
        <input type="text" id="txt_name" class="myinput" placeholder="Name">
        <input type="text" id="txt_email" class="myinput" placeholder="Eamil">
        <input type="text" id="txt_phone" class="myinput" placeholder="Phone">
        <input type="text" id="txt_country" class="myinput" placeholder="Country">
        <input type="text" id="txt_interest" class="myinput" placeholder="Interest">


        <select class="myinput" name="opt_source" aria-placeholder="Status">
            <option value="0" disabled selected>Source</option>
            <option value="0">Instagram</option>
            <option value="1">FaceBook</option>
            <option value="2">TikTok</option>
        </select>
        <input type="text" id="txt_remark" class="myinput" placeholder="Remark">
        <button onclick="" id="btn_login">
            Save
        </button>
    </div>
@endsection
