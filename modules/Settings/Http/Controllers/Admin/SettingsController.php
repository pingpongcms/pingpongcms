<?php namespace Pingpong\Cms\Settings\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Pingpong\Cms\Settings\Entities\Setting;
use Pingpong\Modules\Routing\Controller;

class SettingsController extends Controller
{
    
    public function index()
    {
        return view('settings::admin.index');
    }

    public function update(Request $request)
    {
        $settings = $request->input('settings');

        foreach ($settings as $key => $value) {
            Setting::whereKey($key)->update(compact('value'));
        }

        return redirect()->back();
    }
}
