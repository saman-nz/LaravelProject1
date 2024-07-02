<?php
namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('store-list', compact('stores'));
    }

    public function create()
    {
        return view('store-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'store_name' => 'required|string|max:255',
            'store_url' => 'required|string|max:255',
            'website' => 'nullable|string|max:255',
            'tracking_link' => 'nullable|string|max:255',
            'category_id' => 'required|integer',
            'country' => 'required|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'store_title' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        // Convert "on" to 1 and else to 0
        if ($request->has('featured')) {
            $validatedData['featured'] = $request->input('featured') == 'on' ? 1 : 0;
        } else {
            $validatedData['featured'] = 0;
        }

        if ($request->has('enabled')) {
            $validatedData['enabled'] = $request->input('enabled') == 'on' ? 1 : 0;
        } else {
            $validatedData['enabled'] = 0;
        }

        $store = new Store();
        $store->fill($validatedData);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $file->store('logos', 'public');
            $store->logo = $path;
        }

        $store->save();

        return redirect()->route('stores.index')->with('success', 'Store created successfully.');
    }

}
