@extends('Layouts.AdminLayout')

@section('title', 'DashBoard')

@section('sidebar')
    @parent


@endsection

@section('content')
    <div class="carddash">
        <div class="subhead">
            <div class="subcont">
                <div class="div_search"><input type="text" id="txt_search" class="myinputsize2" placeholder="Search"></div>
                <div class="filters">

                    <div class="datebox">

                        <input type="date" placeholder="Date" title="Date" class="mdate form-control myinputsize2"
                            id="datepicker">
                        {{-- <div class="dateplace">
                            <p>Date</p>
                        </div> --}}
                    </div>

                    <select class="myinputsize2 inputmargin" name="opt_status" aria-placeholder="Status">
                        <option value="0" disabled selected>Status</option>
                        <option value="0">Red</option>
                        <option value="1">Contacted</option>
                        <option value="2">Not Interested</option>
                    </select>
                    <select class="myinputsize2 inputmargin" name="opt_source" aria-placeholder="Status">
                        <option value="0" disabled selected>Source</option>
                        <option value="0">Instagram</option>
                        <option value="1">FaceBook</option>
                        <option value="2">TikTok</option>
                    </select>
                    <button onclick="" id="btn_newlead" class="inputmargin myinputsize2">
                        New Lead
                    </button>
                </div>
            </div>
        </div>
        <div class="mtable">
            <table>
                <thead>
                    <tr>
                        <th style="padding-left: 2rem">Status</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Interest</th>
                        <th>Source</th>
                        <th>Date</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="status">
                                <div class="statuscolor"></div>
                                <div class="st2">
                                    <p class="status_p">New</p>
                                </div>
                            </div>
                        </td>
                        <td>Alaa Mohra</td>
                        <td>engmohra@gmail.com</td>
                        <td>+97158555777</td>
                        <td>Egypt</td>
                        <td>Sobha Tower</td>
                        <td>Tiktok</td>
                        <td>15 June 2022</td>
                        <td>He Wants to buy now</td>
                    </tr>
                    <div style="margin-top:10px"></div>
                    <tr>
                        <td style="color: red">
                            <div class="status">
                                <div class="statuscolor" style="background-color:#e36b82"></div>
                                <div class="st2">
                                    <p class="status_p" style="color: #e36b82">New</p>
                                </div>
                            </div>
                        </td>
                        <td>Alaa Mohra</td>
                        <td>engmohra@gmail.com</td>
                        <td>+97158555777</td>
                        <td>Egypt</td>
                        <td>Sobha Tower</td>
                        <td>Tiktok</td>
                        <td>15 June 2022</td>
                        <td>He Wants to buy now</td>
                    </tr>

                </tbody>
            </table>

        </div>
        <div class="mpagination">
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                </ul>
            </nav>
        </div>
    </div>
@endsection
