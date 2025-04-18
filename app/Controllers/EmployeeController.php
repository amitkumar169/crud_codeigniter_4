<?php namespace App\Controllers;

use App\Models\Employee;

class EmployeeController extends BaseController
{
    public function index()
    {
        $employee = new Employee();
        $data['employee'] = $employee->findAll();
        return view('employee/index', $data);
    }
    public function create()
    {
        return view('employee/create');
    }
    public function store()
    {
        $employee = new Employee();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'desgination' => $this->request->getPost('desigination')
        ];
        $employee->save($data);
        return redirect()->to(base_url('employee'))->with('status','Employee Added Successfuly');
    }

    public function edit($id)
    {
        $employee = new Employee();
        $data['employee'] = $employee->find($id);
        return view('employee/edit', $data);
    }

    public function update($id)
    {
        $employee = new Employee();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'desgination' => $this->request->getPost('desigination')
        ];
        $employee->update($id, $data);
        return redirect()->to(base_url('employee'))->with('status','Employee Updated Successfuly');
    }

    public function delete($id)
    {
        $employee = new Employee();
        $employee->delete($id);
        return redirect()->to(base_url('employee'))->with('status','Employee Deleted Successfuly');
    }
}

?>