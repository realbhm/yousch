<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TicketsController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // init
        $tickets="";
        // get the current user id
        $user_id= Auth::user()->id;
        if (Auth::user()->type=="Student") {
            // get students tickets
            $tickets=Conversation::where('user_one', $user_id)->get();
        }
        else{
          $tickets=Conversation::all();
        }
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
         $request->validate([
            'object' => 'required',
            'service' =>  'required',
            'message_body' =>  'required',
        ]);
        
        // get data for a new conversation
       $new_conversation = array(
            'user_one'=>  $request->user_one,
            'conversation_subject'=>  $request->object,
            'send_time'=>  Now()->format('H:i:s'),
            'is_read'=>  0,
            'service'=>  $request->service,
            'is_closed'=>  0,
        );
        // create a new conversation
        $new_con=Conversation::create($new_conversation);

        // get data for a new message
        $new_message = array(
            'conversation_id'=>   $new_con->id,
            'user_id'=>   $request->user_one,
            'message_body'=>  $request->message_body,
            'me_send_time'=>  Now()->format('H:i:s'),
            );
        // create a new message
        Message::create($new_message);

        return redirect()->route('tickets.index')->with(
            'success',
            'Ticket crée avec succès');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reply(Request $request)
    {
        
        // get data for a new message
        $new_message = array(
            'conversation_id'=> $request->conversation_id,
            'user_id'=>   Auth::user()->id,
            'message_body'=>  $request->message_body,
            'me_send_time'=>  Now()->format('H:i:s'),
        );
        // create a new message
        Message::create($new_message);

        return redirect()->route('tickets.index')->with(
            'success',
            'Message envoyé avec succès');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get all tickets
        $ticket=Conversation::find($id);
        // update the is_read
        if ($ticket->is_read==0) {
            Conversation::whereId($id)->update(["is_read" => 1]);
        }
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            // get data for a new conversation
       $update_conversation = array(
            'service'=>  $request->service,
            'is_closed'=>  1,
        );
         Conversation::whereId($id)->update($update_conversation);
        
        return redirect()->route('tickets.index')->with(
            'success',
            'Ticket modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
