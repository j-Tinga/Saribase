<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Branch;
use DB;

class EmployeeController extends Controller
{
    function show()
    {
        $data= Employee::all();
        $branches = Branch::all();
        return view('Employee.employee')
        ->with('employees', $data)
        ->with('branches', $branches);
    }

    function showMaker()
    {
        $data= Employee::all();
        $branches = Branch::all();
        return view('Employee.employee')
            ->with('employees', $data)
            ->with('branches', $branches)
            ->with('newEmployee', 1);
    }

    function employeeActions(Request $req)
    {
        if($req->button == "Edit"){
            $data= Employee::all();
            $branches = Branch::all();
            $editEmployee = DB::table('employee')->where('employeeID', $req->id)->first();
            return view('Employee.employee')
            ->with('employees', $data)
            ->with('branches', $branches)
            ->with('editEmployee', $editEmployee);
            
        }else if ($req->button == "Delete"){
            return $this->destroy($req->id);
        }
    }
    
    function addEmployee(Request $req)
    {
        $employee = new Employee;
        $employee->firstName = $req->fname;
        $employee->lastName = $req->lname;
        $employee->contactNumber = $req->cnumber;
        $employee->password = $req->passw;
        $employee->branchID = $req->branch;
        $employee->save();
        return redirect('employees');
    }

    function editEmployee(Request $req)
    {
        $employee = Employee::find($req->id);
        $employee->firstName = $req->fname;
        $employee->lastName = $req->lname;
        $employee->contactNumber = $req->cnumber;
        $employee->password = $req->passw;
        $employee->branchID = $req->branch;
        $employee->save();
        return redirect('employees');
    }

    function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employees');
    }

    function newRoom(Request $req)
    {
        $room = new room;
        $room->RoomNumber = $req->roomnum;
        $room->Status = 'Vacant';
        $room->Type = $req->type;
        $room->save();
        return redirect('main');
    }

    function checkOut(Request $req)
    {
        $room = room::find($req->room);
        $room->Occupant = "";
        $room->CheckIn = NULL;
        $room->CheckOut = NULL;
        $room->Status = "Vacant";
        $room->save();
        return redirect('main');
    }

    function checkIn(Request $req)
    {
        $room = room::find($req->roomnumber);
        $room->Occupant = $req->name;
        $room->CheckIn = $req->indate;
        $room->CheckOut = $req->outdate;
        $room->Status = $req->status;
        $room->save();
        return redirect('main');
    }

    function roomType(Request $req)
    {
        $room = room::find($req->roomnumber);
        $room->Type = $req->type;
        $room->save();
        return redirect('main');
    }

    function delete(Request $req)
    {
        $room = room::find($req->roomnumber);
        $room->delete();
        return redirect('main');
    }

    function roomStatus(Request $req)
    {
        $room = room::find($req->roomnumber);
        $room->Status = $req->status;
        $room->save();
        return redirect('main');
    }
}
