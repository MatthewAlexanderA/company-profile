<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::latest()->paginate(500);

        return view('admin.service.index', compact('service'))
            ->with('i', (request()->input('page', 1) - 1) * 500);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|file|required',
        ]);

        $image = $request->file('image')->store('post-images/service');

        $validated['image'] = $image;

        Service::create($validated);

        return redirect()->route('service.index')
            ->with('success', 'Add Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|file',
        ];

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-images/service');
        };

        $service->update($validated);

        return redirect()->route('service.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::delete($service->image);
        }

        $service->delete($service->id);

        return redirect()->route('service.index')
            ->with('success', 'Delete Success!');
    }

    public function deleteCheckedService(Request $request)
    {
        $ids = $request->ids;
        Service::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
