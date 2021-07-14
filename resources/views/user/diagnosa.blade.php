@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    @if($intruksi->count() >=1)
    <diagnosa-component></diagnosa-component>
        @else
        @include('user.term-condition')
    @endif
@endsection

@push('js')

@endpush
