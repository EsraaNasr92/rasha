@extends('layouts.app')

@section('content')   
    <div class="col-md-8">
        <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
            @include('admin.banner.partials.fields')
        </form>
    </div>
@endsection

@section('scripts')
    @include('admin.banner.partials.scripts')
@endsection
