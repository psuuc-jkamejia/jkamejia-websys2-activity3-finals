<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
    
        if ($search) {
            $students = Student::where('first_name', 'like', "%{$search}%")
                               ->orWhere('last_name', 'like', "%{$search}%")
                               ->get();
        } else {
            $students = Student::all();
        }
    
        return view('students.index', compact('students'));
    }
    

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return redirect()->route('students.index');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        $qrData = json_encode([
            'id' => $student->id,
            'name' => $student->name,
            'course' => $student->course,
            'year' => $student->year,
        ]);

        return view('students.show', compact('student', 'qrData'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }


}
