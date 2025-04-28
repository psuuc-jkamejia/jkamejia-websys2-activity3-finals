@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

        <!-- Search Form -->
        <form action="{{ route('students.index') }}" method="GET" class="mb-6">
            <div class="flex">
                <input type="text" name="search" placeholder="Search by name" class="border rounded py-2 px-3 mr-2" value="{{ request()->query('search') }}">
                <button type="submit" class="text-black font-bold py-2 px-4 rounded">
                    Search
                </button>
            </div>
        </form>

       
        <br>

        <h3 class="text-xl font-semibold mb-4">STUDENT LIST</h3>
        <div class="flex justify-end">
            <button>
                <a href="/students/create" class="text-black font-bold py-2 px-4 rounded">
                    Add New Student
                </a>
            </button>
        </div> 

        <!-- Table for Student List -->
        <table class="table-auto w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b">First Name</th>
                    <th class="py-2 px-4 border-b">Last Name</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $student->first_name }}</td>
                    <td class="py-2 px-4">{{ $student->last_name }}</td>
                    <td class="py-2 px-4">
                        <a href="/students/{{ $student->id }}" class="text-blue-500 hover:underline mr-2">View</a>
                        <a href="/students/{{ $student->id }}/edit" class="text-yellow-500 hover:underline mr-2">Edit</a>
                        <form action="/students/{{ $student->id }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this student?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
