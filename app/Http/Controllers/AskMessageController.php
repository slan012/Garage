<?php

namespace App\Http\Controllers;

use App\Models\AskMessage;
use App\Http\Requests\AskMessageRequest;
use Illuminate\Http\Request;

class AskMessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AskMessageRequest $request)
    {
        $data = $request->except('_token');
        AskMessage::create($data);
        return redirect()->back()->with('success', 'Votre message bien été envoyé');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AskMessage  $askmessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AskMessage $askmessage)
    {
        $askmessage = AskMessage::findOrFail($askmessage->id);
        $askmessage->delete();
        return redirect()->back()->with('success', 'Le message a bien été supprimé');
    }
}
