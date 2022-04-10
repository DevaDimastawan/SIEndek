@extends('layouts.main')
@section('container')
<div class="row">
    @foreach($motif as $item)
    <div class="card border-warning text-dark my-2 mx-4 " style="width: 18rem; height:12rem">
        <div class="card-footer text-center">
            <a class="card-title  btn btn-sm btn-warning" href="{{ route('showendekmotif', [$item['nama']]) }}">{{ $item['nama'] }}  <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
    </div>
    @endforeach
</div>
@endsection