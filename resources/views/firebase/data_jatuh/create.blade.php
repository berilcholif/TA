@extends('firebase.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>add
                        <a href="{{url('data_jatuh')}}" class="btn btn-sm btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add-data')}}" method="POST">
                        @csrf
                        <div class="form-froup mb-3">
                            <label> Data Jatuh</label>
                            <input type="text" name="Data_Jatuh" class="form-control">
                        </div>
                        <div class="form-froup mb-3">
                         <button type="submit" class="btn btn-primary">save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection