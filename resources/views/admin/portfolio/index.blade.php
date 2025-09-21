@extends('layouts.admin')

@section('title', 'Portfolios')
@section('page-title', 'Manage Portfolios')

@section('content')
    <div class="p-6">
        <a href="{{ route('portfolios.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">+ Add Portfolio</a>

        <table class="w-full mt-6 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 text-left">ID</th>
                    <th class="p-2 text-left">Title</th>
                    <th class="p-2 text-left">Image</th>
                    <th class="p-2 text-left">Link</th>
                    <th class="p-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portfolios as $portfolio)
                <tr class="border-b">
                    <td class="p-2 text-left">{{ $portfolio->id }}</td>
                    <td class="p-2 text-left">{{ $portfolio->title }}</td>
                    <td class="p-2 text-left">
                        @if($portfolio->image)
                            <img src="{{ asset('storage/'.$portfolio->image) }}" class="w-16 h-16 object-cover">
                        @endif
                    </td>
                    <td class="p-2">
                        @if($portfolio->link)
                            <a href="{{ $portfolio->link }}" target="_blank" class="text-blue-500 underline">View</a>
                        @endif
                    </td>
                    <td class="p-2 flex space-x-2">
                        <a href="{{ route('portfolios.edit', $portfolio) }}" class="px-2 py-1 bg-yellow-500 text-white rounded">Edit</a>
                        <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf @method('DELETE')
                            <button class="px-2 py-1 bg-red-600 text-white rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $portfolios->links() }}
        </div>
    </div>
@endsection
