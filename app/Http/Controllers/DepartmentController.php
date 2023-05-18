<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Department;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DepartmentController extends BaseController
{
    public function index() {
        return view('Department.index');
    }
    public function create() {
        return view('Department.create');
    }
    public function store() {

    }
    public function show() {

    }
    public function edit() {

    }
    public function update() {
        return view('Department.update');
    }
    public function delete() {
        return view('Department.delete');
    }
}
