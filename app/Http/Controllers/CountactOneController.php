<?php

namespace App\Http\Controllers;

use App\Models\CountactOne;
use Illuminate\Http\Request;

class CountactOneController extends Controller
{
    public function index()
    {
        $profiles = CountactOne::all();
        
        return view('Countact.index', compact('profiles'));
    }
    // Show
    public function show($id)
    {
        //
        $falcon = CountactOne::find($id);
        return view('Countact.show',compact('falcon'));
    }
    public function create()
    {
        return view('Countact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:countact_ones,username',
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $data = $request->all();

        // رفع الصور
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        if ($request->hasFile('cover_photo')) {
            $data['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }

        CountactOne::create($data);
        
        return redirect()->route('countact.index')->with('success', 'تم إنشاء الملف الشخصي بنجاح!');
    }

    public function edit($id)
    {
        $profile = CountactOne::findOrFail($id);
        return view('countact.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = CountactOne::findOrFail($id);

        $request->validate([
            'username' => 'required|unique:profiles,username,'.$CountactOne->id,
            'email' => 'required|email|unique:profiles,email,'.$CountactOne->id,
        ]);

        $data = $request->all();

        // تحديث الصور
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        if ($request->hasFile('cover_photo')) {
            $data['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }

        $profile->update($data);

        return redirect()->route('Countact.index')->with('success', 'تم تحديث الملف الشخصي بنجاح!');
    }

    public function destroy($id)
    {
        $profile = CountactOne::findOrFail($id);
        $profile->delete();

        return redirect()->route('countact.index')->with('success', 'تم حذف الملف الشخصي بنجاح!');
    }
}
