<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/about', function () {
    $title = 'About Us';
    $description = 'Blogging is website for sharing your thoughts and ideas with the world.';
    return view('about', compact('title', 'description'));
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/', LandingController::class);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'store']);

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us.index');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact-us.store');

Route::get('/about', function () {
    $title = 'About Us';
    $description = 'Blogging is website for sharing your thoughts and ideas with the world.';
    $button = '<a class="btn btn-lg btn-secondary" href="/">Back to Landing Page</a>';

    $sponsors = [
        [
            "name" => "Google",
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png",
            "link" => "https://www.google.com"
        ],
        [
            "name" => "Red Bull",
            "image" => "https://e7.pngegg.com/pngimages/149/476/png-clipart-red-bull-gmbh-energy-drink-fizzy-drinks-red-bull-food-company.png",
            "link" => "https://www.redbull.com/id-id/"
        ],
        [
            "name" => "KFC",
            "image" => "https://assets.stickpng.com/images/58429977a6515b1e0ad75ade.png",
            "link" => "https://kfcku.com/"
        ],
        [
            "name" => "Coca Cola",
            "image" => "https://companieslogo.com/img/orig/KO-b23a2a5e.png?t=1684129869",
            "link" => "https://www.coca-cola.com/"
        ],
        [
            "name" => "Youtube",
            "image" => "https://img.freepik.com/premium-vector/red-youtube-logo-social-media-logo_197792-1803.jpg?w=2000",
            "link" => "https://about.youtube//"
        ],
        [
            "name" => "XBOX",
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Xbox_one_logo.svg/2048px-Xbox_one_logo.svg.png",
            "link" => "https://www.xbox.com/en-US/en-WW/"
        ]
    ];

    $faqs = [
        [
            "question" => "What are the benefits of sponsoring a blogging website?",
            "answer" => "When your brand is featured on our popular website, it will be seen by a large audience of potential customers.",
        ],
        [
            "question" => "How much does it cost to sponsor our website?",
            "answer" => "The cost of sponsorship depends on the size of your brand and the length of time you want to sponsor us.",
        ],
        [
            "question" => "How long does it take to sponsor our website?",
            "answer" => "The length of sponsorship depends on the size of your brand and the length of time you want to sponsor us.",
        ],
        [
            "question" => "How do I sponsor your website?",
            "answer" => "Please contact us using the form on this page and we will get back to you with more details.",
        ],
        [
            "question" => "How do I contact you?",
            "answer" => "Please contact us using the form on this page and we will get back to you with more details.",
        ]
    ];

    return view('about', compact('title', 'description', 'button', 'sponsors', 'faqs'));
});
