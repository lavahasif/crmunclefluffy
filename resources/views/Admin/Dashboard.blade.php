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

                        <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" placeholder="Date"
                            title="Date" class="mdate form-control myinputsize2" id="datepicker">
                        {{-- <div class="dateplace">
                            <p>Date</p>
                        </div> --}}
                    </div>

                    <select class="myinputsize2 inputmargin" wire:click="$emit('courseChanged', $event.target.value)"
                        name="opt_status" aria-placeholder="Status">
                        <option value="0" disabled selected>Status</option>
                        <option value="0">New</option>
                        <option value="1">Contacted</option>
                        <option value="2">Not Interested</option>
                    </select>
                    <select class="myinputsize2 inputmargin" name="opt_source" aria-placeholder="Status">
                        <option value="0" disabled selected>Source</option>
                        <option value="0">Instagram</option>
                        <option value="1">FaceBook</option>
                        <option value="2">TikTok</option>
                    </select>
                    <button onclick="window.location.href='/admin/newlead'" id="btn_newlead"
                        class="inputmargin myinputsize2">
                        New Lead
                    </button>
                </div>
            </div>
        </div>
        <div class="mtable">
            <livewire:leads-table :models="$models->items()" />


        </div>
        <div class="mpaginationlara">
            {{ $models->links() }}

        </div>

    </div>
    <script>
        // Find the search input field
        var element = document.querySelector("#txt_search")
        var element2 = document.querySelector("body > div > div > div.subhead > div > div.filters > select:nth-child(2)")
        var element3 = document.querySelector("body > div > div > div.subhead > div > div.filters > select:nth-child(3)")
        var date = document.querySelector("#datepicker")

        if (element !== null) {
            element.addEventListener('input', function() {
                // debugger;

                const searchTerm = event.target.value.trim();


                Livewire.emit('search', searchTerm);
                // console.log()
                // debugger;
            });
        }
        if (element2 !== null) {
            element2.addEventListener('change', function() {
                // debugger;

                const searchTerm = event.target.value.trim();


                Livewire.emit('statusChanged', searchTerm);
                // console.log()
                // debugger;
            });
        }
        if (element3 !== null) {
            element3.addEventListener('change', function() {
                // debugger;

                const searchTerm = event.target.value.trim();


                Livewire.emit('sourceChanged', searchTerm);
                // console.log()
                // debugger;
            });
        }
        if (date !== null) {
            date.addEventListener('input', function() {
                // debugger;

                const searchTerm = event.target.value.trim();


                Livewire.emit('dateChanged', searchTerm);
                // console.log()
                // debugger;
            });
        }
    </script>
@endsection
