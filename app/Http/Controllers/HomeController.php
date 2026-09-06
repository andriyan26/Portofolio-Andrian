<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Andrian',
            'role' => 'Full-stack Developer',
            'sub_role' => 'Web & Software Engineer',
            'phone' => '08569052928',
            'email' => 'andriandowehz123@gmail.com',
            'birth_place' => 'Depok',
            'birth_date' => '26 Mar 2000',
            'gender' => 'Laki-laki',
            'domicile' => 'Cinangka, Sawangan, Kota Depok, Jawa Barat',
            'bio' => 'Saya Andrian, seorang Full-stack Developer yang berfokus pada pengembangan aplikasi web modern yang teruji, terstruktur, dan efisien. Lulusan S1 Teknik Informatika Universitas Pamulang yang siap menghadirkan solusi digital berkualitas tinggi.',
            'years_experience' => '4+',
            'projects_count' => '15+',
            'gpa' => '3.73',
            'satisfaction_rate' => '100%',
            'graduation_status' => 'Wisuda 13 September 2026',
            'available' => true,
        ];

        $projects = Project::orderBy('sort_order')->get();
        $skills = Skill::orderBy('sort_order')->get()->groupBy('category');
        $experiences = Experience::orderBy('sort_order')->get()->groupBy('type');

        return view('home', compact('profile', 'projects', 'skills', 'experiences'));
    }
}
