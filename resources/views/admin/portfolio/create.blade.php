@extends('layouts.admin')

@section('title', 'Portfolios')
@section('page-title', 'Manage Portfolios')

@section('content')
    <div class="p-6">
        <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="text" name="title" placeholder="Title" class="w-full border p-2" required>
            <textarea name="description" placeholder="Description" class="w-full border p-2"></textarea>
            <input type="file" name="image" class="w-full border p-2">
            <input type="url" name="link" placeholder="Project Link" class="w-full border p-2">

            <button class="px-4 py-2 bg-blue-600 text-white rounded">Save</button>
        </form>
    </div>
@endsection