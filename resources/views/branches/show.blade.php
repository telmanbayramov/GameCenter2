@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Şube Detayı</h1>
        <p><strong>Şube Adı:</strong> {{ $branch->title }}</p>
        <p><strong>Şube Sırası:</strong> {{ $branch->order }}</p>
        <p><strong>Şube Tipi ID:</strong> {{ $branch->branch_type_id }}</p>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Geri Dön</a>
    </div>
@endsection