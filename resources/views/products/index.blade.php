@extends('layouts.admin')


@section('content')

<div class="col-sm-12 col-xl-12">
    <div class="card mg-b-20">
        <div class="card-header">
            <h4 class="card-header-title">
                Product Sales Details
            </h4>
            <div class="card-header-btn">
                <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#productSalesDetails"
                    aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-ios-trash-outline"></i></a>
            </div>
        </div>
        <div class="card-body pd-0 collapse show" id="productSalesDetails">
            <div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="tx-dark tx-uppercase tx-10 tx-bold">
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th class="tx-right">Price</th>
                                <th class="tx-right">Quantity</th>
                                <th class="tx-right">Stock</th>
                                <th class="tx-right">Last Updated</th>
                                <th class="tx-right">Status</th>
                                <th class="tx-right">Stock Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if( $products->count() > 0)
                            @foreach($products as $key=> $product )

                            <tr>
                                <td><a href="#">PROD-{{$key + 1}}</a></td>
                                <td>
                                    <img src="{{$product->image}}" alt="{{$product->name}}" width="50" height="50" />
                                    <span class="tx-medium">{{$product->name}}</span>
                                </td>
                                <td class=" tx-right tx-medium tx-dark">{{ $product->price}}
                                </td>
                                <td class="tx-right tx-info">{{ $product->quantity}}</td>
                                <td class="tx-right tx-success">112</td>
                                <td class="tx-right tx-medium tx-dark">{{ $product->update_at}}</td>
                                <td class="tx-right"><span class="badge badge-outlined badge-success">Completed</span>
                                </td>
                                <td class="tx-right"><i class="fa fa-check mr-1 text-success"></i> In Stock
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
</div>

@endsection