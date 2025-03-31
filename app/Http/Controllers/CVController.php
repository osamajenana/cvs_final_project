<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Reference;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CVController extends Controller
{
    public function show_form()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'nullable|image',
        ]);

        $user = Auth::user();

        $cv = CV::where('user_id', $user->id)->first();

        if (!$cv) {
            $cv = CV::create([
                'user_id' => $user->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'image' => $request->file('image') ? $request->file('image')->store('images', 'public') : null,
                'skills' => $request->skills,
                'languages' => $request->languages,
            ]);
        } else {
            $cv->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'image' => $request->file('image') ? $request->file('image')->store('images', 'public') : $cv->image,
                'skills' => $request->skills,
                'languages' => $request->languages,
            ]);
        }

        if ($request->has('education')) {
            $cv->educations()->delete();
            foreach ($request->education['major'] as $key => $major) {
                Education::create([
                    'cv_id' => $cv->id,
                    'major' => $major,
                    'institution' => $request->education['institution'][$key] ?? null,
                ]);
            }
        }

        if ($request->has('experiences')) {
            $cv->experiences()->delete();

            foreach ($request->experiences['jobTitle'] as $key => $jobTitle) {
                Experience::create([
                    'cv_id' => $cv->id,
                    'job_title' => $jobTitle,
                    'company_name' => $request->experiences['companyName'][$key] ?? null,
                    'job_description' => $request->experiences['jobDescription'][$key] ?? null,
                    'start_date' => $request->experiences['start'][$key] ?? null,
                    'end_date' => $request->experiences['end'][$key] ?? null,
                ]);
            }
        }

        if ($request->has('references')) {
            $cv->references()->delete();
            foreach ($request->references['name'] as $index => $name) {
                Reference::create([
                    'cv_id' => $cv->id,
                    'name' => $name ?? null,
                    'job' => $request->references['job'][$index] ?? null,
                    'phone' => $request->references['phone'][$index] ?? null,
                    'email' => $request->references['email'][$index] ?? null,
                ]);
            }
        }
        return redirect()->back()->with('success', 'CV created successfully');
    }

    public function my_cvs()
    {
        return view('my_cvs');
    }

    public function show($id)
    {
        $user = Auth::user();
        $cv = CV::with(['educations', 'experiences', 'references'])->where('user_id', $user->id)->latest()->first();
        if ($id == 1) {
            return view('cvs/cv1', compact('cv'));
        } elseif ($id == 2) {
            return view('cvs/cv2', compact('cv'));
        } elseif ($id == 3) {
            return view('cvs/cv3', compact('cv'));
        } elseif ($id == 4) {
            return view('cvs/cv4', compact('cv'));
        }
    }

    public function downloadCVAsPDF($id, $template_id)
    {
        $user = Auth::user();
        $cv = CV::with(['educations', 'experiences', 'references'])->where('user_id', $user->id)->latest()->first();
        if ($template_id == 1) {
            $pdf = Pdf::loadView('cv.pdf1', compact('cv'));
        } elseif ($template_id == 2) {
            $pdf = Pdf::loadView('cv.pdf', compact('cv'));
        } elseif ($template_id == 3) {
            $pdf = Pdf::loadView('cv.pdf', compact('cv'));
        } elseif ($template_id == 4) {
            $pdf = Pdf::loadView('cv.pdf', compact('cv'));
        }
        return $pdf->download('cv-' . $cv->first_name . '-' . $cv->last_name . '.pdf');
    }
}
