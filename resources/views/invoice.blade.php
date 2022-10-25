@extends('layout')

<div class="card text-dark bg-light mb-3">
    <div class="card-header text-center">Invoice</div>
    <div class="card-body">

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Promotion</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->promotion}}</td>
                        <td>
                            <a class="btn btn-primary" href="update">Update</a>
                            <a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('delete',$product->id)}}"> Delete</a>
                            <a class="btn btn-primary" href="invoice">invoice</a>

                        </td>
                    </tr>
                 @endforeach

            </tbody>

        </table>
    </div>
  </div>
</div>
