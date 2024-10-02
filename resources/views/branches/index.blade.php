@extends('layouts.app')

@section('content')
    <h1>Şubeler</h1>
    <a href="{{ route('branches.create') }}" class="btn btn-primary">Yeni Şube Ekle</a>
    <ul>
        @foreach($branches as $branch)
            <li>
                {{ $branch->title }}
                <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Sil</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
