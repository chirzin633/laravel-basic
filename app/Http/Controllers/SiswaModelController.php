<?php

namespace App\Http\Controllers;

use App\Models\MentorModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = SiswaModel::with('mentor')->orderBy('nilai', 'desc')->paginate(10);
        return view('pages.siswa.index', ['data' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $mentors = MentorModel::all();
        return view('pages.siswa.create', ['mentors' => $mentors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student = SiswaModel::with('mentor')->findOrFail($id);
        return view('pages.siswa.detail', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
