<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    /**
     * Show the application home page to the user.
     *
     * @return Response
     */
    public function index() {
        return view('homepage');
    }

    public function language(
    ChangeLocale $changeLocale) {
        $this->dispatch($changeLocale);

        return redirect()->back();
    }

}
