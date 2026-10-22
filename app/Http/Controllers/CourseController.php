<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of courses (Grid / Card View).
     */
    public function index(Request $request)
    {
        $query = Course::query();

        // Search by title or instructor
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('instructor', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter by category
        if ($category = $request->input('category')) {
            $query->where('category', $category);
        }

        // Sorting
        $sort = $request->input('sort', 'default');
        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'title_asc':
                $query->orderBy('title', 'asc');
                break;
            default:
                $query->orderBy('id', 'asc');
                break;
        }

        $courses = $query->get();
        $categories = Course::select('category')->distinct()->pluck('category');

        return view('courses.index', compact('courses', 'categories', 'search', 'category', 'sort'));
    }

    /**
     * Display courses in Table format.
     */
    public function table(Request $request)
    {
        $query = Course::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('instructor', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }

        if ($category = $request->input('category')) {
            $query->where('category', $category);
        }

        $courses = $query->orderBy('id', 'asc')->get();
        $categories = Course::select('category')->distinct()->pluck('category');

        return view('courses.table', compact('courses', 'categories', 'search', 'category'));
    }

    /**
     * Display the specified course detail.
     */
    public function show(string $id)
    {
        $course = Course::findOrFail($id);

        // Related courses in the same category, or other courses
        $relatedCourses = Course::where('id', '!=', $course->id)
            ->where(function ($q) use ($course) {
                $q->where('category', $course->category);
            })
            ->limit(3)
            ->get();

        if ($relatedCourses->isEmpty()) {
            $relatedCourses = Course::where('id', '!=', $course->id)->limit(3)->get();
        }

        return view('courses.show', compact('course', 'relatedCourses'));
    }

    /**
     * Student & Course project identity page.
     */
    public function about()
    {
        $totalCourses = Course::count();
        $categoriesCount = Course::distinct('category')->count('category');
        $averagePrice = Course::avg('price');

        return view('about', compact('totalCourses', 'categoriesCount', 'averagePrice'));
    }
}
