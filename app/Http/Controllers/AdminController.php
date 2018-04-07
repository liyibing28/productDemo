<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Egulias\EmailValidator\Validation\Error\RFCWarnings;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if($this->is_manager() == false)
        {
            return back();
        }

        $users = User::all();

        return view('admin.employee_manage',compact('users'));
    }

    public function employeeEdit($id){


        if($this->is_manager() == false)
        {
            return back();
        }

        $employee = User::find($id);

        return view('admin.employee_edit',compact('employee'));
    }


    public function employeeDelete($id){
        if($this->is_manager() == false)
        {
            return back();
        }

        $employee = User::find($id);

        $employee->delete();

        $users = User::all();
        return view('admin.employee_manage',compact('users'));
    }

    public function employeeUpdate(Request $request, $id){
        if($this->is_manager() == false)
        {
            return back();
        }

        $employee = User::find($id);

        $data = $request->all();

        $employee->update([
            'name' => $data['name'],
            'telephone' => $data['telephone'],
        ]);

        $password = $request->get('password');

        if ($password != null)
        {
            $employee->update([
                'password' => bcrypt($password),
            ]);
        }


        $users = User::all();
        return view('admin.employee_manage',compact('users'));
    }

    public function getAddEmployeeForm(){
        if($this->is_manager() == true){
            return view('admin.employee_add');
        }
    }

    public function employeeAdd(Request $request){

        if($this->is_manager() == false)
        {
            return back();
        }

        $data = $request->all();


        if($data['is_taihao'] == '1'){
            $job = array(
                'cuche'=> false,
                'rechuli'=> false,
                'jingche'=>false,
                'kaidaoyi'=>true,
                'kaiding'=>true,
                'zuankong'=>true,
                'role' => 1
            );
        }
        else if($data['is_taihao'] == '2'){
            $job = array(
                'cuche'=> true,
                'rechuli'=> true,
                'jingche'=>true,
                'kaidaoyi'=>false,
                'kaiding'=>false,
                'zuankong'=>false,
                'role' => 2
            );
        }
        else if ($data['is_taihao'] == '0')
        {
            $job = array(
                'cuche'=> true,
                'rechuli'=> true,
                'jingche'=>true,
                'kaidaoyi'=>true,
                'kaiding'=>true,
                'zuankong'=>true,
                'role' => 0
            );
        }
        $user = User::create([
            'name' => $data['name'],
            'telephone' => $data['telephone'],
            'password' => bcrypt($data['password']),
            'is_cuche' => $job['cuche'],
            'is_rechuli' => $job['rechuli'],
            'is_jingche' => $job['jingche'],
            'is_kaidaoyi' => $job['kaidaoyi'],
            'is_kaiding' => $job['kaiding'],
            'is_zuankong' => $job['zuankong'],
            'role' => $job['role'],
        ]);

        return redirect('/');
    }

    public function is_manager(){
        $user = Auth::user();
        if($user['role'] != 0)
        {
            return false;
        }
        else{
            return true;
        }
    }
}
