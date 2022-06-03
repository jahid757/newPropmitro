@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Corporates
                <small>Welcome to {{$comp}}</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Visitors</small>
                </div>
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                    <small class="col-white">Bounce Rate</small>
                </div>
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="zmdi zmdi-home"></i> {{$comp}}</a></li>
                    <li class="breadcrumb-item active">Corporates</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Personal</strong> Information <small></small> </h2>

                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('users.store')}}" files="true">
                            {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {{-- <div class=""> --}}
                                        <label class="d-flex align-items-center" for="name"><span class="red ml-3">*</span> <span>Name</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    {{-- </div> --}}
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="mobile"><span class="red ml-3">*</span> <span>Phone</span></label>
                                    <input type="text" name="mobile" class="form-control" placeholder="Phone No.">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label class="d-flex align-items-center" for="gender"><span class="red ml-3">*</span> <span>Role</span></label>
                                <select name="gender" class="form-control show-tick">
                                    <option value="">-- Role --</option>
                                    <option value="admin">Admin</option>
                                    <option value="representative">Representative</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="email"><span class="red ml-3">*</span> <span>Email</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="email"><span class="red ml-3">*</span> <span>Address</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Address">
                                </div>
                            </div>
                        </div>
                        <h6 class="mt-4">Aditional Information</h6>
                        <div class="row clearfix">
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="company"><span>GST</span></label>
                                    <input type="text" name="gst" class="form-control" placeholder="GST"  value="">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="gender"><span>Agreement Status</span></label>
                                <select name="agreement" class="form-control show-tick p-0">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                </div>
                            </div>


                            <div class="col-md-3 col-sm-6 custom-flex">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="agreement"><span>Agreement copy</span></label>
                                    <label class="d-flex align-items-center" for="agreement"><span><i class="zmdi zmdi-cloud-upload"></i></span></label>
                                    <input id="agreement" type="file" name="agreement" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="gender"><span>Credit</span></label>
                                <select name="gender" class="form-control show-tick pt-0 pl-0">
                                    {{-- <option value="">-- Gender --</option> --}}
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="company"><span>Credit Period</span></label>
                                    <input type="text" name="creditPeriod" class="form-control" placeholder="Credit Period"  value="">
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 mt-1">
                            <button type="submit" class="btn btn-primary btn-round">Submit</button>
                        <a href="{{route('users.index')}}" class="btn btn-primary btn-round">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scriptsc')


@endsection

@endsection
