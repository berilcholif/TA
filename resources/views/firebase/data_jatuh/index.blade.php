@extends('firebase.app')
@section('content')
<div class="container">
<!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" > -->
    <div class="row">
        <div class="col-md-12">
           
        @if(session('status'))
            <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
            @endif
            <div class="card" >
                <div class="card-header">
                    <h4>DATA JATUH
                        <a href="{{ url('add-data')}}" class="btn btn-sm btn-primary float-end">Add</a>
                    </h4>
                </div>
               

                <table class="table table-bordered">
                    <thead><tr>
                        <th class="text-center">pasien</th>
                        <th class="text-center">PASIEN JATUH</th>
                    </tr></thead>
              
                <tbody>
                @php $i=1; @endphp
                @forelse ($data_jatuh as $key => $item)
                  <tr><td class="text-center">{{ $i++}}</td>
                    <td class="text-center">{{ $item['djatuh']}}</td>
                </tr>@empty
                
                    @endforelse
                   </tbody>
            </div>
        </div>
    <!-- </div> -->
</div></div>


@endsection
