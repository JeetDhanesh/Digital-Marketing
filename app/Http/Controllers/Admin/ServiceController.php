<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('icon')) {
            $destinationPath = 'uploads/services/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['icon'] = "$profileImage";
        }

        Service::create($input);

        return redirect()->route('admin.services.index')->with('success','Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('icon')) {
            // Delete old image
            $destinationPath = 'uploads/services/';
            if(File::exists($destinationPath.$service->icon)){
                File::delete($destinationPath.$service->icon);
            }
            
            // Upload new
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['icon'] = "$profileImage";
        } else {
            unset($input['icon']);
        }

        $service->update($input);

        return redirect()->route('admin.services.index')->with('success','Service updated successfully');
    }

    public function destroy(Service $service)
    {
        $destinationPath = 'uploads/services/';
        if(File::exists($destinationPath.$service->icon)){
            File::delete($destinationPath.$service->icon);
        }
        $service->delete();
        return redirect()->route('admin.services.index')->with('success','Service deleted successfully');
    }
}