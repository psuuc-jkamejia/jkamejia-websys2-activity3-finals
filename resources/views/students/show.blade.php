@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6">Student Details</h2>

        <p class="mb-2"><strong>First Name:</strong> {{ $student->first_name }}</p>
        <p class="mb-2"><strong>Last Name:</strong> {{ $student->last_name }}</p>
        <p class="mb-2"><strong>Course:</strong> {{ $student->course }}</p>
        <p class="mb-2"><strong>Address:</strong> {{ $student->address }}</p>
        <p class="mb-2"><strong>Email:</strong> {{ $student->email }}</p>
        <p class="mb-6"><strong>Date of Birth:</strong> {{ \Carbon\Carbon::parse($student->date_of_birth)->format('M d, Y') }}</p>

        <h3 class="text-xl font-semibold mb-4">QR Code:</h3>
        <div class="mb-4">
            {!! QrCode::size(200)->generate($qrData) !!}
        </div>

        <!-- Action Buttons -->
        <div class="flex space-x-4">
            <!-- Edit Button -->
            <button> 
                <a href="{{ route('students.edit', $student->id) }}" class="bg-blue-500 text-black font-bold py-2 px-4 rounded-lg">
                    Edit
                </a>
            </button> <br>

            <!-- Download QR Code Button -->
            <button>
                <a href="data:image/png;base64, {!! base64_encode(QrCode::size(200)->generate($qrData)) !!}" download="student_qr_code.png" class="bg-blue-500 text-black font-bold py-2 px-4 rounded-lg">
                    Download QR Code
                </a>
            </button>
        </div>

        <!-- Delete Button -->
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-blue-500 text-black font-bold py-2 px-4 rounded-lg">
                Delete
            </button>
        </form>

        <!-- Back Button -->
        <button>
            <a href="/students" class="bg-blue-500 text-black font-bold py-2 px-4 rounded-lg">
                Back to Students List
            </a>
        </button>
    </div>
</div>
@endsection
