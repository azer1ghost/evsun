<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public static function getLink()
    {
        return Profile::find(1)->getInstagramAuthUrl();
    }

    public static function getProfile()
    {
        return Profile::find(1)->username;
    }

    public static function getProfileLink()
    {
        $username = Profile::find(1)->username;
        return "https://www.instagram.com/$username";
    }

    public static function hasInstagramNotAccess(): bool
    {
        return ! Profile::find(1)->hasInstagramAccess();
    }

    public function complete(): string
    {
        if(request('result') === 'success')
            return redirect()->route('voyager.settings.index')->with([
                'message'    => "Instagram profile linked successfully",
                'alert-type' => 'success',
            ]);
        else
            return redirect()->route('voyager.settings.index')->with([
                'message'    => "Ops, something went wrong",
                'alert-type' => 'error',
            ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $instagramProfile = Profile::find(1);

        if($instagramProfile->username != $request->input('instagram_username')){
            $instagramProfile->username = $request->input('instagram_username');

            $instagramProfile->clearToken();

            $instagramProfile->save();

            return back()->with([
                'message'    => "Instagram profile changed! Please verify account!",
                'alert-type' => 'success',
            ]);
        }

        return back()->with([
            'message'    => "Nothing changed",
            'alert-type' => 'info',
        ]);

    }
}
