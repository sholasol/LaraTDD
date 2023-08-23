@extends('layouts.admin')

@section('content')

<div class="row row-xs clearfix">
    <!--================================-->
    <!-- Basic dataTable Start -->
    <!--================================-->
    <div class="col-md-12 col-lg-12">
        <div class="card mg-b-20">
            <div class="card-header">
                <h4 class="card-header-title">
                    Users List
                </h4>
                <div class="card-header-btn">
                    <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse1"
                        aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                    <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                    <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                    <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="card-body collapse show" id="collapse1">
                <table class="table table-hover mb-0">
                    <thead class="tx-dark tx-uppercase tx-10 tx-bold">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th class="tx-center">Email</th>
                            <th class="tx-center">Phone</th>
                            <th class="tx-center">Role</th>
                            <th class="tx-center">Created</th>
                            <th class="tx-center">Status</th>
                            <th class="tx-center">Stock Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( $users->count() > 0)
                        @foreach($users as $key=> $user )

                        <tr>
                            <td><a href="#">{{$key + 1}}</a></td>
                            <td>
                                <span class="tx-medium">{{$user->firstname}} {{$user->lastname}}</span>
                            </td>
                            <td class=" tx-center tx-medium tx-dark">{{$user->email}}
                            </td>
                            <td class="tx-center tx-info">{{$user->phone}}</td>
                            <td class="tx-center tx-success">{{$user->role}}</td>
                            <td class="tx-center tx-medium tx-dark">{{$user->created_at->DiffForhumans() }}</td>
                            <td class="tx-right"><span class="badge badge-outlined badge-success">Completed</span>
                            </td>
                            <td>
                                <a href="" class="text-success fa fa-edit"></a>
                                <a href="" class="text-danger fa fa-trash"></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan='7'><span class="text-danger text-center">No Records at this moment</span>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection