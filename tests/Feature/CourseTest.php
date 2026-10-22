<?php

namespace Tests\Feature;

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Course::create([
            'title' => 'Fullstack Laravel & Vue.js',
            'instructor' => 'Sandhika Galih',
            'duration' => '24 Jam',
            'image' => 'course-laravel.svg',
            'price' => 350000,
            'category' => 'Web Development',
            'description' => 'Kursus lengkap pembuatan web fullstack dengan Laravel dan Vue.',
        ]);

        Course::create([
            'title' => 'Python untuk Pemula',
            'instructor' => 'Eko Kurniawan',
            'duration' => '15 Jam',
            'image' => 'course-python.svg',
            'price' => 200000,
            'category' => 'Programming',
            'description' => 'Dasar pemrograman Python dari nol.',
        ]);
    }

    public function test_catalog_page_can_be_rendered(): void
    {
        $response = $this->get(route('courses.index'));

        $response->assertStatus(200);
        $response->assertSee('Platform Belajar Online');
        $response->assertSee('251011700008');
        $response->assertSee('Fullstack Laravel & Vue.js');
        $response->assertSee('Python untuk Pemula');
    }

    public function test_table_page_can_be_rendered(): void
    {
        $response = $this->get(route('courses.table'));

        $response->assertStatus(200);
        $response->assertSee('Data Tabel Kursus Online');
        $response->assertSee('Sandhika Galih');
        $response->assertSee('Web Development');
    }

    public function test_detail_page_can_be_rendered(): void
    {
        $course = Course::first();
        $response = $this->get(route('courses.show', $course->id));

        $response->assertStatus(200);
        $response->assertSee($course->title);
        $response->assertSee($course->instructor);
        $response->assertSee($course->formatted_price);
    }

    public function test_catalog_can_be_filtered_by_category(): void
    {
        $response = $this->get(route('courses.index', ['category' => 'Programming']));

        $response->assertStatus(200);
        $response->assertSee('Python untuk Pemula');
    }

    public function test_about_page_displays_student_identity(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('Ilham Pangestu');
        $response->assertSee('251011700008');
        $response->assertSee('03SIFE003');
        $response->assertSee('Afif Efendi');
    }
}

