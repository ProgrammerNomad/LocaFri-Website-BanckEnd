@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehiclestatus.index') }}" enctype="multipart/form-data">
                    Back</a>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="container mt-5">
                        <form method="post" action="{{ route('vehiclestatus.update', $vehiclestatus->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group mb-2 col-4">
                                    <label for="city">Kilometers</label>
                                    <input type="number" class="form-control" name="kilometer" value="{{ $vehiclestatus->kilometer }}" placeholder="">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">Fuel Level</label>
                                    <input type="Number" class="form-control" name="fule" value="{{ $vehiclestatus->fule }}" placeholder="">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">Damage Records</label>
                                    <textarea type="text" class="form-control" name="damage" value="" placeholder="">{{ $vehiclestatus->damage }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-7">
                    <div class="float-left">

                    </div>
                </div>
                <div class="col-5">
                    <div class="float-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
