<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WorkerController extends BaseController
{
    public function index(){
        return view('Worker.index');
    }
    public function create() {
        return view('Worker.create');
    }
    public function store() {

    }
    public function show() {

    }
    public function edit() {

    }
    public function update() {
        return view('Worker.update');
    }
    public function delete() {
        return view('Worker.delete');
    }
}
