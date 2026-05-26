<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Partner;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
{
    $categoryId = $request->category;

    $events = Event::with('category')
        ->when($categoryId, function ($query) use ($categoryId) {
            return $query->where('category_id', $categoryId);
        })
        ->latest()
        ->get();

    $partners = Partner::latest()->get();
    $categories = Category::latest()->get();

    return view('welcome', compact('events', 'partners', 'categories', 'categoryId'));
}
}