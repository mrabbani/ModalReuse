<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModalTestController extends Controller
{
    private $employeeList=[
        [
            'id' => '1',
            'name'=>'Mahbub Rabbani',
            'designation'=>'Software Engineer'
        ],

        [
            'id' => '2',
            'name'=>'Person 1',
            'designation'=>'Software Engineer'
        ],

        [
            'id' => '3',
            'name'=>'person 2',
            'designation'=>'Software Engineer'
        ],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        return view('index', with(['employeeList'=> $this->employeeList]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $employee = $this->employeeList[$id-1];

        return view('_employee_form', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // Handle your request to update item
        return redirect()->back()->with(['message'=>'Employee Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //Handle Delete request
        return redirect()->back()->with(['message'=>'Employee Deleted']);


    }
}
