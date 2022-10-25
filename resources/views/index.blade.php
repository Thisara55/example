@extends('layout')
<div class="card text-dark bg-light mb-3">
    <div class="card-header text-center">Show Products</div>
    <div class="card-body">

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Promotion</th>
                    <th scope="col">Final Product price</th>
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
                            {{$product->promotion}}-{{$product->price}}
                        </td>

                    </tr>
                 @endforeach

            </tbody>

        </table>
    </div>
  </div>
</div>
