<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index()
    {
        $domains = Domain::orderBy('id')->get();

        return view('domains.index', compact('domains'));
    }

    public function create()
    {
        return view('domains.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|max:255',
            'name_fr' => 'required|max:255',
            'name_en' => 'required|max:255',
            'description_ar' => 'nullable',
            'description_fr' => 'nullable',
            'description_en' => 'nullable',
        ]);

        Domain::create([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
            'description_ar' => $request->description_ar,
            'description_fr' => $request->description_fr,
            'description_en' => $request->description_en,
            'is_active' => true,
        ]);

        return redirect()
            ->route('domains.index')
            ->with('success', 'تمت إضافة المجال بنجاح.');
    }

    public function show(Domain $domain)
    {
        return redirect()->route('domains.index');
    }

    public function edit(Domain $domain)
    {
        return view('domains.edit', compact('domain'));
    }

    public function update(Request $request, Domain $domain)
    {
        $request->validate([
            'name_ar' => 'required|max:255',
            'name_fr' => 'required|max:255',
            'name_en' => 'required|max:255',
            'description_ar' => 'nullable',
            'description_fr' => 'nullable',
            'description_en' => 'nullable',
        ]);

        $domain->update($request->all());

        return redirect()
            ->route('domains.index')
            ->with('success', 'تم تحديث المجال بنجاح.');
    }

    public function destroy(Domain $domain)
    {
        $domain->delete();

        return redirect()
            ->route('domains.index')
            ->with('success', 'تم حذف المجال بنجاح.');
    }
}
