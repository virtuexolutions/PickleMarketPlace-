@extends('layouts.front_master')


@section('content')

<section class="dashboard">
    <h2 class="Shopping-heading">Dashboard</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-0">
                <div class="dash-div">
                    <h2 class="dashboard-txt">Dashboard</h2>
                </div>
                <div class="tab">
                    <div class="tab-btn tablinks" onclick="openTab(event, 'Profile')" id="defaultOpen">
                        <i class="fa-solid fa-user dash-icons"></i>
                        <button>Profile <i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                    <div class="tab-btn tablinks" onclick="openTab(event, 'History')">
                        <i class="fa-solid fa-briefcase dash-icons"></i>
                        <button>Order History<i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                     {{--<div class="tab-btn tablinks" onclick="openTab(event, 'Upload')">
                        <i class="fa-sharp fa-solid fa-upload dash-icons"></i>
                        <button>Upload Product<i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                    <div class="tab-btn tablinks" onclick="openTab(event, 'Earnings')">
                        <i class="fa-sharp fa-solid fa-dollar-sign dash-icons"></i>
                        <button>Earnings <i class="fa-solid fa-chevron-right"></i></button>
                    </div> --}}
                    <div class="tab-btn tablinks" onclick="openTab(event, 'Logout')">
                        <i class="fa-sharp fa-solid fa-power-off dash-icons"></i>
                        <button>Logout <i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-8 p-0">
                <div class="dash-div1">
                    <h2 class="dashboard-txt1">Your Information</h2>
                </div>
                <div id="Profile" class="tabcontent">
                    <div class="profile-div">
                        <img src="{{ asset("frontend") }}/assets/images/profile-pic.png" alt="profile-pic" class="profile-pic">
                        <h4 class="profile-name">{{ Auth::user()->name }}</h4>
                        <h5 class="profile-email">{{ Auth::user()->email }}</h5>
                        <div class="profile-social">
                            <a href="javascript:"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="javascript:"><i class="fa-brands fa-twitter"></i></a>
                            <a href="javascript:"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="javascript:"><i class="fa-brands fa-pinterest-p"></i></a>
                            <a href="javascript:"><i class="fa fa-basketball"></i></a>
                        </div>
                        <p class="profile-desc">{{ Auth::user()->about }}</p>
                      </div>
                </div>

                <div id="History" class="tabcontent">
                    <table class="table w-100">
                         <thead>
                             <tr>
                                <th>S.#</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                             </tr>
                         </thead>
                    </table>
                </div>

                {{-- <div id="Upload" class="tabcontent">

                </div>
                <div id="Earnings" class="tabcontent">

                </div> --}}
                <div id="Logout" class="tabcontent">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection