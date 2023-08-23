@extends('layouts.admin')

@section('content')

<div class="col-md-12 col-lg-12">
    <div class="card mg-b-20">
        <div class="card-header">
            <h4 class="card-header-title">
                Top Label Layout
            </h4>
            <div class="card-header-btn">
                <a href="" data-toggle="collapse" class="btn card-collapse" data-target="#collapse1"
                    aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="card-body collapse show" id="collapse1">
            <form method="POST" action="{{ route('user-create') }}">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label active">Firstname: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="firstname" placeholder="Enter firstname">
                            </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label active">Lastname: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="lastname" placeholder="Enter lastname">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label active">Phone <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="phone" placeholder="Enter Phone">
                            </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label active">Email address: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="email" placeholder="Enter email address">
                            </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label active">Password <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="password" name="password"
                                    placeholder="Enter Password">
                            </div>
                        </div>

                    </div>
                    <!-- row -->
                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-custom-primary">Submit Form</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                    <!-- form-layout-footer -->
                </div>
            </form>
        </div>
    </div>
</div>

@endsection