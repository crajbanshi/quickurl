<?php

namespace App\Http\Controllers;

use App\Models\AccessCount;
use Illuminate\Support\Str;
use App\Models\MicroUrl;
use Illuminate\Http\Request;
use Validator;

class MicroUrlController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function saveUrl(Request $request)
    {
        $validator = $this->validate($request, [
            'url' => 'required|url'
        ]);


        $microUrl = new MicroUrl();
        $microUrl->url = $request->input('url');
        $uniqueId = $this->generateUniqueId();
        $microUrl->identity = $uniqueId;
        $microUrl->save();
        return response()->json(['success' => 'Added new records.', "url" => "http://ql.rf.gd/" . $uniqueId, 'data' => $microUrl]);
    }

    function generateUniqueId()
    {
        $uniqueId = Str::random(8); // better than rand()

        // call the same function if the barcode exists already
        if ($this->uniqueIdExists($uniqueId)) {
            return $this->generateUniqueId();
        }
        // otherwise, it's valid and can be used
        return $uniqueId;
    }

    function uniqueIdExists($uniqueId)
    {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return MicroUrl::where("identity", $uniqueId)->exists();
    }

    public function redirect($uniqueid, Request $request)
    {
        $microUrl = MicroUrl::where("identity", $uniqueid)->first();

        if (empty($microUrl)) {
            return view('404');
        }
        $accessCount = AccessCount::where("identity", $uniqueid)->first();
        if (empty($accessCount)) {
            $accessCount = new AccessCount();
            $accessCount->identity = $uniqueid;
            $accessCount->count = 1;
            $accessCount->save();
        } else {
            $accessCount->count += 1;
            $accessCount->update();
        }


        if (!empty($microUrl)) {
            return redirect($microUrl->url);
        }        
    }
}