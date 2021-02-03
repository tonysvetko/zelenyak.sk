<?php

namespace App\Http\Controllers;

use App\Event;
use App\Mail\NewRegistration;
use App\Photo;
use App\Rules\ReCaptchaRule;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'address' => 'required|max:100',
            'birth_year' => 'required|numeric',
            'g-recaptcha-response' => new ReCaptchaRule,
        ]);

        Mail::to(env('MAIL_TO_ADDRESS'))
            ->send(new NewRegistration($request));

        flash(__('Vaša registrácia bola úspešne spracovaná.'), 'success');

        return back();
    }

    public function proposition()
    {
        $event = Event::orderBy('id', 'desc')->first();

        return view('proposition')->withEvent($event);
    }

    public function gallery($year = null)
    {
        $years = Photo::select('year')
            ->orderBy('year', 'desc')
            ->groupBy('year')
            ->get();

        if ($year && !$years->where('year', $year)->count()) {
            abort(404);
        }

        if (!$year) {
            $year = $years->first()->year;
        }

        $photos = Photo::where('year', $year)->get();

        return view('gallery')->with(compact('years', 'year', 'photos'));
    }

    public function gdpr()
    {
        $locale = LaravelLocalization::getCurrentLocale();

        $md = File::get(storage_path('app/public/gdpr.' . $locale . '.md'));

        $text = Markdown::convertToHtml($md);

        return view('gdpr')->with(compact('text'));
    }
}
