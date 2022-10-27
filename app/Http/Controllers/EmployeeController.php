<?php

namespace App\Http\Controllers;

use App\Http\Actions\GetDistance;
use App\Models\Employee;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        return Employee::all();
    }

    public function store(Request $request)
    {
        $getDistance = new GetDistance();
        $distance = ($getDistance)($request->input(), Employer::getEmployer(1));

        $input = $request->input();
        $input['distance_to_office'] = $distance;

        return Employee::create($input);
    }

    public function update(Request $request, Employee $employee)
    {
        $getDistance = new GetDistance();
        $distance = ($getDistance)($request->input(), Employer::getEmployer(1));

        $input = $request->input();
        $input['distance_to_office'] = $distance;
        return $employee->update($input);
    }
}
