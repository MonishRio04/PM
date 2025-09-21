@extends('layouts.admin')

@section('title', 'Portfolios')
@section('page-title', 'Manage Portfolios')

@section('content')
    <div class="p-6">
        <form action="{{ route('portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf @method('PUT')
            <input type="text" name="title" value="{{ $portfolio->title }}" class="w-full border p-2" required>
            <textarea name="description" class="w-full border p-2">{{ $portfolio->description }}</textarea>
            
            @if($portfolio->image)
                <img src="{{ asset('storage/'.$portfolio->image) }}" class="w-20 h-20 object-cover">
            @endif
            <input type="file" name="image" class="w-full border p-2">
            
            <input type="url" name="link" value="{{ $portfolio->link }}" class="w-full border p-2">

            <button class="px-4 py-2 bg-green-600 text-white rounded">Update</button>
        </form>
    </div>
@endsection
