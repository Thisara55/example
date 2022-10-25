@extends('layout')

<div class="card bg-light mb-3">
    <div class="card-header text-center"> <b>Products</b></div>
        <div class="card-body">
            <form action="{{url('/create')}}" method="POST">

                @csrf
                <div class="row p-2 p-2">
                    <div class="col-md-3">
                        <label for="">ID</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" placeholder="" name="id">
                    </div>
                </div>

                <div class="row p-2 p-2">
                    <div class="col-md-3">
                        <label for="">Title:</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" placeholder="" name="title">
                    </div>
                </div>
                <div class="row p-2 p-2">
                    <div class="col-md-3">
                        <label for="">Price:</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" placeholder="" name="price">
                    </div>
                </div>
                <div class="row p-2 p-2">
                    <div class="col-md-3">
                        <label for="">Promotion</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" placeholder="" name="promotion">
                    </div>
                </div>


                <div class="row p-2">
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit">Create</button>
                        <a class="btn btn-primary" href="index">View</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
