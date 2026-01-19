<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        Activity::create($request->all());
        return redirect()->route('activities.index');
    }

    public function show(string $id)
    {
        $activity = Activity::find($id);
        return view('activities.show', compact('activity'));
    }

    public function edit(string $id)
    {
        $activity = Activity::find($id);
        return view('activities.edit', compact('activity'));
    }

    public function update(Request $request, string $id)
    {
        $activity = Activity::find($id);
        $activity->update($request->all());
        return redirect()->route('activities.index');
    }

    public function destroy(string $id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        return redirect()->route('activities.index');
    }
}