@extends('template_admin.home')
@section('judul','Kategori')
@section('sub_judul','Kategori Pengajuan')
@section('content')

    @foreach ($user as $item)
        {{ $item->name }}
    @endforeach

@endsection
