<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
    $title = 'Available Jobs';
    $jobs = ['Web Developer', 'Machine Learing', 'Seo Expert', 'Digital Marketer'];
    return view('jobs.index', compact('title', 'jobs'));
    }

    public function create(){
    return view('jobs.create');
    }

    public function show(string $id){
        return "Jobs id: $id";
    } 

    public function store(Request $request){
        return "Job name: $request->name, Job Description: $request->description";
    }
}
