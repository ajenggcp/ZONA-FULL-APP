<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function showGallery()
    {
        $tasks = Task::simplePaginate(10);

        return view('dashboard', ['tasks' => $tasks]);

    }
}
