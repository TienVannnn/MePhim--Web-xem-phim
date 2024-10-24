<?php

namespace App\Services\Backend;

use App\Models\Manager;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ManagerService
{
    public function getDataManagers()
    {
        $data = Manager::orderByDesc('id')->paginate(10);
        return $data;
    }

    public function createManager($request)
    {
        try {
            Manager::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            Session::flash('success', 'Thêm mới nhân viên thành công');
            return true;
        } catch (\Exception $e) {
            Session::flash('err', 'Thêm mới nhân viên thất bại: ' . $e->getMessage());
            return false;
        }
    }

    public function updateManager($request, $manager)
    {
        $request->validated();
        try {
            $manager->fill([
                'name' => $request->name,
                'phone' => $request->phone ? $request->phone : null,
                'email' => $request->email,
                'password' => $request->password ? Hash::make($request->password) : $manager->password
            ]);
            $manager->save();
            Session::flash('success', 'Cập nhật nhân viên ' . $request->name . ' thành công');
            return true;
        } catch (\Exception $e) {
            Session::flash('err', 'Cập nhật nhân viên thất bại: ' . $e->getMessage());
            return false;
        }
    }

    public function deleteManager($manager)
    {
        $name = $manager->name;
        try {
            $manager->delete();
            // Session::flash('success', 'Xóa thành viên ' . $name . ' thành công');
            return true;
        } catch (\Exception $e) {
            Session::flash('err', 'Xóa thành viên ' . $name . ' thất bại: ' . $e->getMessage());
            return false;
        }
    }
}
