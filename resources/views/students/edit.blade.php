@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6">Edit Student</h2>

        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <input type="text" name="first_name" value="{{ $student->first_name }}" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="First Name">
            </div>

            <div class="mb-4">
                <input type="text" name="last_name" value="{{ $student->last_name }}" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="Last Name">
            </div>

            <div class="mb-4">
                <input type="text" name="address" value="{{ $student->address }}" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="Address">
            </div>

            <div class="mb-4">
                <input type="email" name="email" value="{{ $student->email }}" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="Email">
            </div>

            <div class="mb-4">
                <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <input type="text" name="course" value="{{ $student->course }}" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    placeholder="Course">
            </div>

            <div class="mb-4">
                <select name="status" required 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="Active" {{ $student->status == 'Active' ? 'selected' : '' }}>Undergraduate</option>
                    <option value="Inactive" {{ $student->status == 'Inactive' ? 'selected' : '' }}>Graduate</option>
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" 
                    class=" text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Student
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
