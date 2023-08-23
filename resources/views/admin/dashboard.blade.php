@extends('layouts.admin')


@section('content')



<div class="page-inner">
    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <!--================================-->
        <!-- Breadcrumb Start -->
        <!--================================-->
        <div class="pageheader pd-t-25 pd-b-35">
            <div class="pd-t-5 pd-b-5">
                <h1 class="pd-0 mg-0 tx-20">Sales Monitoring</h1>
            </div>
            <div class="breadcrumb pd-0 mg-0">
                <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i>
                    Home</a>
                <a class="breadcrumb-item" href="">Dashboard</a>
                <span class="breadcrumb-item active">Sales Monitoring</span>
            </div>
        </div>
        <!--/ Breadcrumb End -->
        <!--================================-->
        <!-- Count Card Start -->
        <!--================================-->
        <div class="row row-xs clearfix">
            <div class="col-sm-6 col-xl-3">
                <div class="card mg-b-20">
                    <div class="card-body pd-y-0">
                        <div class="custom-fieldset mb-4">
                            <div class="clearfix">
                                <label>Today Orders</label>
                            </div>
                            <div class="d-flex align-items-center text-dark">
                                <div
                                    class="wd-40 wd-md-50 ht-40 ht-md-50 mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded card-icon-warning">
                                    <i class="icon-screen-desktop tx-warning tx-20"></i>
                                </div>
                                <div>
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">5,300</span><small class="tx-15">.50</small>
                                    </h2>
                                    <div class="d-flex align-items-center tx-gray-500"><span
                                            class="text-success mr-2 d-flex align-items-center"><i
                                                class="ion-android-arrow-up mr-1"></i>+451</span>avg. sales
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card mg-b-20">
                    <div class="card-body pd-y-0">
                        <div class="custom-fieldset mb-4">
                            <div class="clearfix">
                                <label>Today Earnings</label>
                            </div>
                            <div class="d-flex align-items-center text-dark">
                                <div
                                    class="wd-40 wd-md-50 ht-40 ht-md-50 mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded card-icon-success">
                                    <i class="icon-diamond tx-success tx-20"></i>
                                </div>
                                <div>
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">1,500</span><small class="tx-15">.50</small>
                                    </h2>
                                    <div class="d-flex align-items-center tx-gray-500"><span
                                            class="text-danger mr-2 d-flex align-items-center"><i
                                                class="ion-android-arrow-down mr-1"></i>-310</span>avg.
                                        sales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card mg-b-20">
                    <div class="card-body pd-y-0">
                        <div class="custom-fieldset mb-4">
                            <div class="clearfix">
                                <label>Product Sold</label>
                            </div>
                            <div class="d-flex align-items-center text-dark">
                                <div
                                    class="wd-40 wd-md-50 ht-40 ht-md-50 mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded card-icon-primary">
                                    <i class="icon-handbag tx-primary tx-20"></i>
                                </div>
                                <div>
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">4,900</span><small class="tx-15">.50</small>
                                    </h2>
                                    <div class="d-flex align-items-center tx-gray-500"><span
                                            class="text-success mr-2 d-flex align-items-center"><i
                                                class="ion-android-arrow-up mr-1"></i>+350</span>avg. sales
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card mg-b-20">
                    <div class="card-body pd-y-0">
                        <div class="custom-fieldset mb-4">
                            <div class="clearfix">
                                <label>Total Earnings</label>
                            </div>
                            <div class="d-flex align-items-center text-dark">
                                <div
                                    class="wd-40 wd-md-50 ht-40 ht-md-50 mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded card-icon-danger">
                                    <i class="icon-speedometer tx-danger tx-20"></i>
                                </div>
                                <div>
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">9,900</span><small class="tx-15">.50</small>
                                    </h2>
                                    <div class="d-flex align-items-center tx-gray-500"><span
                                            class="text-danger mr-2 d-flex align-items-center"><i
                                                class="ion-android-arrow-down mr-1"></i>+130</span>avg.
                                        sales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Count Card End -->
        <div class="row row-xs clearfix">
            <!--================================-->
            <!--  Annual Report Start-->
            <!--================================-->
            <div class="col-lg-12 col-xl-8 col-12">
                <div class="card mg-b-20">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            Annual Reports
                        </h4>
                        <div class="card-header-btn">
                            <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#annualReports"
                                aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                            <a href="#" data-toggle="refresh" class="btn card-refresh"><i
                                    class="ion-android-refresh"></i></a>
                            <a href="#" data-toggle="expand" class="btn card-expand"><i
                                    class="ion-android-expand"></i></a>
                            <a href="#" data-toggle="remove" class="btn card-remove"><i
                                    class="ion-ios-trash-outline"></i></a>
                        </div>
                    </div>
                    <div class="collapse show" id="annualReports">
                        <div class="card-body pd-t-0 pd-b-20">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 mg-y-20">
                                    <span class="tx-uppercase tx-10 mg-b-10">Sales Report</span>
                                    <h3 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">580,350</span><small class="tx-15">.50</small></h3>
                                    <div class="tx-11 d-flex tx-gray-500"><span
                                            class="text-success mr-2 d-flex align-items-center"><i
                                                class="ion-android-arrow-up mr-1"></i>+535%</span>avg. sales
                                        per year</div>
                                    <p class="mg-t-10 mg-b-0 tx-12 tx-gray-600">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore. <a href="">Learn More</a></p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mg-y-20">
                                    <span class="tx-uppercase tx-10 mg-b-10">Annual Revenue</span>
                                    <h3 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">980,830</span><small class="tx-15">.50</small></h3>
                                    <div class="tx-11 d-flex tx-gray-500"><span
                                            class="text-success mr-2 d-flex align-items-center"><i
                                                class="ion-android-arrow-up mr-1"></i>+230%</span>avg. sales
                                        per year</div>
                                    <p class="mg-t-10 mg-b-0 tx-12 tx-gray-600">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore. <a href="">Learn More</a></p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mg-y-20">
                                    <span class="tx-uppercase tx-10 mg-b-10">Total Profit</span>
                                    <h3 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">730,360</span><small class="tx-15">.50</small></h3>
                                    <div class="tx-11 d-flex tx-gray-500"><span
                                            class="text-danger mr-2 d-flex align-items-center"><i
                                                class="ion-android-arrow-down mr-1"></i>-135%</span>avg.
                                        sales per year</div>
                                    <p class="mg-t-10 mg-b-0 tx-12 tx-gray-600">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore. <a href="">Learn More</a></p>
                                </div>
                            </div>
                            <div class="d-block clearfix">
                                <canvas id="annualReport"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Annual Report End -->
            <!--================================-->
            <!-- Sales+Order+Revenue  Start -->
            <!--================================-->
            <div class="col-lg-12 col-xl-4">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-body">
                                <div id="sales_slider" class="carousel slide" data-ride="carousel" data-interval="4000">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="tx-10 tx-uppercase tx-gray-500">
                                            Sales
                                        </span>
                                        <div class="btn-group border-0">
                                            <div class="sw-carousel-slider-control">
                                                <a class="tx-dark carousel-control-prev" href="#sales_slider"
                                                    data-slide="prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="tx-dark carousel-control-next" href="#sales_slider"
                                                    data-slide="next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Sales Report</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+110</span>)
                                                        higher than previous day</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $2,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="salesSpark1"></div>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Annual Revenue</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+150</span>)
                                                        higher than previous week</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $4,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="salesSpark2"></div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Total Profit</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+170</span>)
                                                        higher than previous month</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $5,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="salesSpark3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-body">
                                <div id="order_slider" class="carousel slide" data-ride="carousel" data-interval="5000">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="tx-10 tx-uppercase tx-gray-500">
                                            Order
                                        </span>
                                        <div class="btn-group border-0">
                                            <div class="sw-carousel-slider-control">
                                                <a class="tx-dark carousel-control-prev" href="#order_slider"
                                                    data-slide="prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="tx-dark carousel-control-next" href="#order_slider"
                                                    data-slide="next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Sales Report</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+180</span>)
                                                        higher than previous day</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $6,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="orderSpark1"></div>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Annual Revenue</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+140</span>)
                                                        higher than previous week</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $7,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="orderSpark2"></div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Total Profit</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+120</span>)
                                                        higher than previous month</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $8,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="orderSpark3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-12 hidden-md">
                        <div class="card mg-b-20">
                            <div class="card-body">
                                <div id="revenue_slider" class="carousel slide" data-ride="carousel"
                                    data-interval="6000">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="tx-10 tx-uppercase tx-gray-500">
                                            Revenue
                                        </span>
                                        <div class="btn-group border-0">
                                            <div class="sw-carousel-slider-control">
                                                <a class="tx-dark carousel-control-prev" href="#revenue_slider"
                                                    data-slide="prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="tx-dark carousel-control-next" href="#revenue_slider"
                                                    data-slide="next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Sales Report</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+110</span>)
                                                        higher than previous day</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $9,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="revenueSpark1"></div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Annual Revenue</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+120</span>)
                                                        higher than previous week</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $7,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="revenueSpark2"></div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                    <h3
                                                        class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">
                                                        Total Profit</h3>
                                                    <p class="tx-10 tx-normal mb-0 tx-gray-500">(<span
                                                            class="text-success tx-10"><i
                                                                class="ion-android-arrow-up mr-1"></i>+150</span>)
                                                        higher than previous month</p>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                    <span
                                                        class="tx-10 tx-uppercase tx-spacing-1 tx-medium">Earning</span>
                                                    <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">
                                                        $5,562</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div id="revenueSpark3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Sales+Order+Revenue  End -->
        <!--================================-->
        <!-- Transaction History Start -->
        <!--================================-->
        <div class="row row-xs clearfix">
            <div class="col-xl-4">
                <div class="card mg-b-20">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            Transaction History
                        </h4>
                        <div class="card-header-btn">
                            <a href="#" data-toggle="collapse" class="btn card-collapse"
                                data-target="#transactionHistory" aria-expanded="true"><i
                                    class="ion-ios-arrow-down"></i></a>
                            <a href="#" data-toggle="refresh" class="btn card-refresh"><i
                                    class="ion-android-refresh"></i></a>
                            <a href="#" data-toggle="expand" class="btn card-expand"><i
                                    class="ion-android-expand"></i></a>
                            <a href="#" data-toggle="remove" class="btn card-remove"><i
                                    class="ion-ios-trash-outline"></i></a>
                        </div>
                    </div>
                    <div class="collapse show" id="transactionHistory">
                        <ul class="list-group list-group-flush tx-13">
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i
                                            class="icon ion-checkmark"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-dark mg-b-0">Payment from <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#985632</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #857423</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik tx-dark">+$450<small class="tx-10">.50</small>
                                    </p>
                                    <span class="tx-12 tx-success mg-b-0">Completed</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i
                                            class="icon ion-checkmark"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-dark mg-b-0">Process refund to <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#458762</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #354155</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik tx-dark">+$180<small class="tx-10">.50</small>
                                    </p>
                                    <span class="tx-12 tx-success mg-b-0">Completed</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-warning"><i
                                            class="icon ion-shuffle"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-dark mg-b-0">Process delivery to <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#698524</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #452356</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik tx-dark">5 Items</p>
                                    <span class="tx-12 tx-warning mg-b-0">For pickup</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i
                                            class="icon ion-checkmark"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-dark mg-b-0">Payment from <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#365845</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #748562</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik tx-dark">+$129<small class="tx-10">.50</small>
                                    </p>
                                    <span class="tx-12 tx-success mg-b-0">Completed</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-danger"><i
                                            class="icon ion-close"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-dark mg-b-0">Payment failed from <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#475821</a></p>
                                    <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #457771</span>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik tx-dark">-$150<small class="tx-10">.50</small>
                                    </p>
                                    <span class="tx-12 tx-danger mg-b-0">Declined</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="d-none d-sm-block"><span
                                        class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-danger"><i
                                            class="icon ion-close"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-dark mg-b-0">Payment failed from <a href=""
                                            class="tx-dark mg-b-0 tx-semibold">#985324</a></p>
                                    <small class="tx-12 mg-b-0 tx-gray-500">Customar ID: #548596</small>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="mg-b-0 tx-rubik tx-dark">-$190<small class="tx-10">.50</small>
                                    </p>
                                    <span class="tx-12 tx-danger mg-b-0">Declined</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mg-b-20">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            Recent Earnings
                        </h4>
                        <div class="card-header-btn">
                            <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#recentEarnings"
                                aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                            <a href="#" data-toggle="refresh" class="btn card-refresh"><i
                                    class="ion-android-refresh"></i></a>
                            <a href="#" data-toggle="expand" class="btn card-expand"><i
                                    class="ion-android-expand"></i></a>
                            <a href="#" data-toggle="remove" class="btn card-remove"><i
                                    class="ion-ios-trash-outline"></i></a>
                        </div>
                    </div>
                    <div class="card-body pd-0 collapse show" id="recentEarnings">
                        <div class="row d-flex pd-t-20 pd-b-35 pd-x-15">
                            <div class="col-sm-6 col-xl-3">
                                <div class="media mg-t-20">
                                    <div
                                        class="wd-40 wd-md-50 ht-40 ht-md-50 card-icon-warning mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                        <i class="icon-cloud-upload tx-warning tx-20"></i>
                                    </div>
                                    <div>
                                        <span class="tx-uppercase tx-10 tx-gray-500">Gross Earnings</span>
                                        <h4 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                            $<span class="counter">1,958</span><small class="tx-15">.50</small></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="media mg-t-20">
                                    <div
                                        class="wd-40 wd-md-50 ht-40 ht-md-50 card-icon-success mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                        <i class="icon-disc tx-success tx-20"></i>
                                    </div>
                                    <div>
                                        <span class="tx-uppercase tx-10 tx-gray-500">Product Sales</span>
                                        <h4 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                            $<span class="counter">9,234</span><small class="tx-15">.50</small></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="media mg-t-20">
                                    <div
                                        class="wd-40 wd-md-50 ht-40 ht-md-50 card-icon-primary mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                        <i class=" icon-calculator tx-primary tx-20"></i>
                                    </div>
                                    <div>
                                        <span class="tx-uppercase tx-10 tx-gray-500">Tax Withheld</span>
                                        <h4 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                            $<span class="counter">1,608</span><small class="tx-15">.50</small></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="media mg-t-20">
                                    <div
                                        class="wd-40 wd-md-50 ht-40 ht-md-50 card-icon-danger mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                        <i class="icon-briefcase tx-danger tx-20"></i>
                                    </div>
                                    <div>
                                        <span class="tx-uppercase tx-10 tx-gray-500">Net Earnings</span>
                                        <h4 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                            $<span class="counter">6,820</span><small class="tx-15">.50</small></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mg-b-0">
                                <thead class="tx-dark tx-uppercase tx-10 tx-bold">
                                    <tr>
                                        <th>Date</th>
                                        <th class="text-right">Sales Count</th>
                                        <th class="text-right">Gross Earnings</th>
                                        <th class="text-right">Tax Withheld</th>
                                        <th class="text-right">Net Earnings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class=" tx-normal tx-gray-600">03/05/2019</td>
                                        <td class="tx-medium text-right tx-dark">1,050</td>
                                        <td class="text-right">+ $2,580<small class="tx-10">.50</small></td>
                                        <td class="text-right">- $3,023<small class="tx-10">.50</small></td>
                                        <td class="tx-medium text-right tx-dark">$2,670<small
                                                class="tx-10">.50</small><span
                                                class="mg-l-5 tx-10 tx-normal tx-success"><i
                                                    class="icon ion-md-arrow-up"></i>+ 5.5%</span></td>
                                    </tr>
                                    <tr>
                                        <td class=" tx-normal tx-gray-600">03/04/2019</td>
                                        <td class="tx-medium text-right tx-dark">1,980</td>
                                        <td class="text-right">+ $3,065<small class="tx-10">.50</small></td>
                                        <td class="text-right">- $2,780<small class="tx-10">.50</small></td>
                                        <td class="tx-medium text-right tx-dark">$6,930<small
                                                class="tx-10">.50</small><span
                                                class="mg-l-5 tx-10 tx-normal tx-danger"><i
                                                    class="icon ion-md-arrow-down"></i>- 1.8%</span></td>
                                    </tr>
                                    <tr>
                                        <td class=" tx-normal tx-gray-600">03/04/2019</td>
                                        <td class="tx-medium text-right tx-dark">1,532</td>
                                        <td class="text-right">+ $3,065<small class="tx-10">.50</small></td>
                                        <td class="text-right">- $2,780<small class="tx-10">.50</small></td>
                                        <td class="tx-medium text-right tx-dark">$6,930<small
                                                class="tx-10">.50</small><span
                                                class="mg-l-5 tx-10 tx-normal tx-success"><i
                                                    class="icon ion-md-arrow-down"></i>+ 0.8%</span></td>
                                    </tr>
                                    <tr>
                                        <td class=" tx-normal tx-gray-600">03/04/2019</td>
                                        <td class="tx-medium text-right tx-dark">2,003</td>
                                        <td class="text-right">+ $1,065<small class="tx-10">.50</small></td>
                                        <td class="text-right">- $2,780<small class="tx-10">.50</small></td>
                                        <td class="tx-medium text-right tx-dark">$2,930<small
                                                class="tx-10">.50</small><span
                                                class="mg-l-5 tx-10 tx-normal tx-danger"><i
                                                    class="icon ion-md-arrow-down"></i>- 3.1%</span></td>
                                    </tr>
                                    <tr>
                                        <td class=" tx-normal tx-gray-600">03/04/2019</td>
                                        <td class="tx-medium text-right tx-dark">2,300</td>
                                        <td class="text-right">+ $1,065<small class="tx-10">.50</small></td>
                                        <td class="text-right">- $2,780<small class="tx-10">.50</small></td>
                                        <td class="tx-medium text-right tx-dark">$2,930<small
                                                class="tx-10">.50</small><span
                                                class="mg-l-5 tx-10 tx-normal tx-danger"><i
                                                    class="icon ion-md-arrow-down"></i>- 0.2%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transaction History End -->
        <div class="row row-xs crearfix">
            <!--================================-->
            <!-- Product Sales Details Start -->
            <!--================================-->
            <div class="col-sm-12 col-xl-8">
                <div class="card mg-b-20">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            Product Sales Details
                        </h4>
                        <div class="card-header-btn">
                            <a href="#" data-toggle="collapse" class="btn card-collapse"
                                data-target="#productSalesDetails" aria-expanded="true"><i
                                    class="ion-ios-arrow-down"></i></a>
                            <a href="#" data-toggle="refresh" class="btn card-refresh"><i
                                    class="ion-android-refresh"></i></a>
                            <a href="#" data-toggle="expand" class="btn card-expand"><i
                                    class="ion-android-expand"></i></a>
                            <a href="#" data-toggle="remove" class="btn card-remove"><i
                                    class="ion-ios-trash-outline"></i></a>
                        </div>
                    </div>
                    <div class="card-body pd-0 collapse show" id="productSalesDetails">
                        <div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="tx-dark tx-uppercase tx-10 tx-bold">
                                        <tr>
                                            <th>Product</th>
                                            <th>Customer</th>
                                            <th class="tx-right">Sold</th>
                                            <th class="tx-right">Record point</th>
                                            <th class="tx-right">Stock</th>
                                            <th class="tx-right">Amount</th>
                                            <th class="tx-right">Status</th>
                                            <th class="tx-right">Stock Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Women Wallet-E32N</a></td>
                                            <td>Stanley C. Owens</td>
                                            <td class="tx-right tx-medium tx-dark">180+</td>
                                            <td class="tx-right tx-info">05</td>
                                            <td class="tx-right tx-success">112</td>
                                            <td class="tx-right tx-medium tx-dark">$2,356</td>
                                            <td class="tx-right"><span
                                                    class="badge badge-outlined badge-success">Completed</span>
                                            </td>
                                            <td class="tx-right"><i class="fa fa-check mr-1 text-success"></i> In Stock
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Phone-345S</a></td>
                                            <td>Stanley Owens</td>
                                            <td class="tx-right tx-medium tx-dark">100+</td>
                                            <td class="tx-right tx-info">04</td>
                                            <td class="tx-right tx-success">210</td>
                                            <td class="tx-right tx-medium tx-dark">$3,522</td>
                                            <td class="tx-right"><span
                                                    class="badge badge-outlined badge-warning">Pending</span>
                                            </td>
                                            <td class="tx-right"><i class="fa fa-check text-success"></i> In
                                                Stock</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Doll-Elephant</a></td>
                                            <td>Robert R. Chambers </td>
                                            <td class="tx-right tx-medium tx-dark">150+</td>
                                            <td class="tx-right tx-info">05</td>
                                            <td class="tx-right tx-success">215</td>
                                            <td class="tx-right tx-medium tx-dark">$5,362</td>
                                            <td class="tx-right"><span
                                                    class="badge badge-outlined badge-success">Completed</span>
                                            </td>
                                            <td class="tx-right"><i class="fa fa-check text-success"></i> In
                                                Stock</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Women-Kurtis</a></td>
                                            <td>Stanley C.</td>
                                            <td class="tx-right tx-medium tx-dark">210+</td>
                                            <td class="tx-right tx-info">07</td>
                                            <td class="tx-right tx-success">102</td>
                                            <td class="tx-right tx-medium tx-dark">$1,326</td>
                                            <td class="tx-right"><span
                                                    class="badge badge-outlined badge-warning">Pending</span>
                                            </td>
                                            <td class="tx-right"><i class="fa fa-check text-success"></i> In
                                                Stock</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Mens Shoes</a></td>
                                            <td>Adam L. Easter</td>
                                            <td class="tx-right tx-medium tx-dark">340+</td>
                                            <td class="tx-right tx-info tx-info">10</td>
                                            <td class="tx-right tx-success">325</td>
                                            <td class="tx-right tx-medium tx-dark">$5,234</td>
                                            <td class="tx-right"><span
                                                    class="badge badge-outlined badge-success">Completed</span>
                                            </td>
                                            <td class="tx-right"><i class="fa fa-check text-success"></i> In
                                                Stock</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Mens Gold Metal Watch</a></td>
                                            <td>C. Stanley </td>
                                            <td class="tx-right tx-medium tx-dark">110+</td>
                                            <td class="tx-right tx-info">04</td>
                                            <td class="tx-right tx-success">0</td>
                                            <td class="tx-right tx-medium tx-dark">$3,256</td>
                                            <td class="tx-right"><span class="badge badge-outlined badge-danger">Out of
                                                    stock</span></td>
                                            <td class="tx-right"> <i class="fa fa-exclamation-triangle text-danger"></i>
                                                Out
                                                of stock </td>
                                        </tr>
                                        <tr class="mb-0">
                                            <td><a href="#">Laptop</a></td>
                                            <td>Jeffery M. Jensen</td>
                                            <td class="tx-right tx-medium tx-dark">101+</td>
                                            <td class="tx-right tx-info">10</td>
                                            <td class="tx-right tx-success">0</td>
                                            <td class="tx-right tx-medium tx-dark">$7,652</td>
                                            <td class="tx-right"><span class="badge badge-outlined badge-danger">Out of
                                                    stock</span></td>
                                            <td class="tx-right"> <i class="fa fa-exclamation-triangle text-danger"></i>
                                                Out
                                                of stock </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Product Sales Details Start -->
            <!--================================-->
            <!-- Sales/Revenue Details Start -->
            <!--================================-->
            <div class="col-sm-12 col-xl-4">
                <div class="card mg-b-20">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            Sales/Revenue Details
                        </h4>
                        <div class="card-header-btn">
                            <a href="#" data-toggle="collapse" class="btn card-collapse"
                                data-target="#salesRevenuDetails" aria-expanded="true"><i
                                    class="ion-ios-arrow-down"></i></a>
                            <a href="#" data-toggle="refresh" class="btn card-refresh"><i
                                    class="ion-android-refresh"></i></a>
                            <a href="#" data-toggle="expand" class="btn card-expand"><i
                                    class="ion-android-expand"></i></a>
                            <a href="#" data-toggle="remove" class="btn card-remove"><i
                                    class="ion-ios-trash-outline"></i></a>
                        </div>
                    </div>
                    <div class="card-body pd-0 collapse show" id="salesRevenuDetails">
                        <div id="salesRevenueBarChart"></div>
                    </div>
                </div>
            </div>
            <!-- Sales/Revenue Details End -->
        </div>
        <!--================================-->
        <!-- Acquisition/Sessions Start -->
        <!--================================-->
        <div class="row row-xs">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-body">
                                <h6 class="tx-dark tx-uppercase  mg-b-15 tx-16 tx-semibold tx-spacing-1">
                                    Acquisition</h6>
                                <p class="tx-12 mg-b-15 tx-gray-600">Lorem ipsum dolor sit amet, consectetur
                                    sed do eiusmod tempor incididunt ut labore et dolore. <a href="">Learn
                                        More</a></p>
                                <div class="row">
                                    <div class="col-6 col-xl-6 d-sm-flex align-items-center">
                                        <div class="media mg-t-10">
                                            <div
                                                class="wd-40 wd-md-50 ht-40 ht-md-50 card-icon-success mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                                <i class="icon-chart tx-success tx-20"></i>
                                            </div>
                                            <div>
                                                <span class="tx-uppercase tx-10 tx-gray-500">Bounce
                                                    Rate</span>
                                                <h4 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                                    45.90<small class="tx-15">%</small></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 d-sm-flex align-items-center">
                                        <div class="media mg-t-10">
                                            <div
                                                class="wd-40 wd-md-50 ht-40 ht-md-50 card-icon-primary mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                                <i class="icon-pie-chart tx-primary tx-20"></i>
                                            </div>
                                            <div>
                                                <span class="tx-uppercase tx-10 tx-gray-500">Duration</span>
                                                <h4 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                                    4.32<small class="tx-15">min</small></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-body">
                                <h6 class="tx-dark tx-uppercase mg-b-15 tx-16 tx-semibold tx-spacing-1">
                                    Sessions</h6>
                                <p class="tx-12 mg-b-15 tx-gray-600">Lorem ipsum dolor sit amet, consectetur
                                    sed do eiusmod tempor incididunt ut labore et dolore. <a href="">Learn
                                        More</a></p>
                                <div class="row">
                                    <div class="col-6 d-sm-flex align-items-center">
                                        <div class="media mg-t-10">
                                            <div
                                                class="wd-40 wd-md-50 ht-40 ht-md-50 card-icon-danger mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                                <i class="icon-equalizer tx-danger tx-20"></i>
                                            </div>
                                            <div>
                                                <span class="tx-uppercase tx-10 tx-gray-500">New
                                                    Sessions</span>
                                                <h4 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                                    49.38<small class="tx-15">%</small></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-sm-flex align-items-center">
                                        <div class="media mg-t-10">
                                            <div
                                                class="wd-40 wd-md-50 ht-40 ht-md-50 card-icon-warning mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded">
                                                <i class=" icon-graph tx-warning tx-20"></i>
                                            </div>
                                            <div>
                                                <span class="tx-uppercase tx-10 tx-gray-500">Pages
                                                    View</span>
                                                <h4 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">
                                                    5,338<small class="tx-15">k</small></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Acquisition/Sessions End -->
            <!--================================-->
            <!-- Customar Details Start -->
            <!--================================-->
            <div class="col-md-12 col-xl-8">
                <div class="card mg-b-20">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            Customar Details
                        </h4>
                        <div class="card-header-btn">
                            <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#customarDetails"
                                aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                            <a href="#" data-toggle="refresh" class="btn card-refresh"><i
                                    class="ion-android-refresh"></i></a>
                            <a href="#" data-toggle="expand" class="btn card-expand"><i
                                    class="ion-android-expand"></i></a>
                            <a href="#" data-toggle="remove" class="btn card-remove"><i
                                    class="ion-ios-trash-outline"></i></a>
                        </div>
                    </div>
                    <div class="card-body pd-0 collapse show" id="customarDetails">
                        <div class="table-responsive">
                            <table class="table table-hover mg-0">
                                <thead class="tx-dark tx-uppercase tx-10 tx-bold">
                                    <tr>
                                        <th>User</th>
                                        <th>Store</th>
                                        <th>Earning</th>
                                        <th class="tx-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="avatar mr-2">
                                                <img src="assets/images/user/user1.png"
                                                    class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                            </div>
                                            <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">Stanley C. Owens</a>
                                                <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">Amazon Store</a>
                                            <p class="tx-12 mb-0 tx-gray-500">ID: #865923</p>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">$2,545</a>
                                            <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                        </td>
                                        <td class="tx-right">
                                            <a href="" class="btn btn-sm btn-label-primary">Contact</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="avatar mr-2">
                                                <img src="assets/images/user/user2.png"
                                                    class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                            </div>
                                            <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">John Doe</a>
                                                <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">Amazon Store</a>
                                            <p class="tx-12 mb-0 tx-gray-500">ID: #865923</p>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">$3,545</a>
                                            <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                        </td>
                                        <td class="tx-right">
                                            <a href="" class="btn btn-sm btn-label-warning">Contact</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="avatar mr-2">
                                                <img src="assets/images/user/user3.png"
                                                    class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                            </div>
                                            <div class="d-block">
                                                <a href="#" class="my-0 mt-1 tx-13">Stanley Owens</a>
                                                <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">Amazon Store</a>
                                            <p class="tx-12 mb-0 tx-gray-500">ID: #865923</p>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">$6,545</a>
                                            <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                        </td>
                                        <td class="tx-right">
                                            <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="avatar mr-2">
                                                <img src="assets/images/user/user4.png"
                                                    class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                            </div>
                                            <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">Adam L. Easter</a>
                                                <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">Amazon Store</a>
                                            <p class="tx-12 mb-0 tx-gray-500">ID: #865923</p>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">$5,545</a>
                                            <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                        </td>
                                        <td class="tx-right">
                                            <a href="" class="btn btn-sm btn-label-danger">Contact</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="avatar mr-2">
                                                <img src="assets/images/user/user5.png"
                                                    class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                            </div>
                                            <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">Jeffery M. Jensen</a>
                                                <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">Amazon Store</a>
                                            <p class="tx-12 mb-0 tx-gray-500">ID: #865923</p>
                                        </td>
                                        <td>
                                            <a href="" class="my-0 mt-1 tx-13">$1,545</a>
                                            <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                        </td>
                                        <td class="tx-right">
                                            <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                        </td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Customar Details End -->
        </div>
    </div>
    <!--/ Main Wrapper End -->
</div>
@endsection