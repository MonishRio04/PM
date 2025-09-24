<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'nullable|url',
            'short_description' => 'nullable|string|max:500',
            'client_name'=>'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('portfolios'), $filename);
            $data['image'] = 'portfolios/'.$filename;
        }

        Portfolio::create($data);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'nullable|url',
            'short_description' => 'nullable|string|max:500',
            'client_name'=>'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            if ($portfolio->image && file_exists(public_path($portfolio->image))) {
                unlink(public_path($portfolio->image));
            }
            $file     = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('portfolios'), $filename);
            $data['image'] = 'portfolios/'.$filename;
        }
        $portfolio->update($data);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }
        $portfolio->delete();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}
