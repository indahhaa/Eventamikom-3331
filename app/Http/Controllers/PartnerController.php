<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $partners = Partner::when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })->latest()->get();

        return view('admin.partners.index', compact('partners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo_url' => 'nullable',
        ]);

        Partner::create([
            'name' => $request->name,
            'logo_url' => $request->logo_url,
        ]);

        return redirect()->route('admin.partners.index');
    }

    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name' => 'required',
            'logo_url' => 'nullable',
        ]);

        $partner->update([
            'name' => $request->name,
            'logo_url' => $request->logo_url,
        ]);

        return redirect()->route('admin.partners.index');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();

        return redirect()->route('admin.partners.index');
    }
}