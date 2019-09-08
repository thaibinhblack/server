<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\UserQuestionAnwser;
class UserQuestioAnwserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->get('UUID_ANWSER') as $question) {
            UserQuestionAnwser::create([
                'UUID_BOOKING' => $request->get('UUID_BOOKING'),
                'UUID_ANWSER' => $question
            ]);
        }
        return response()->json($request->all(), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = UserQuestionAnwser::join('BOOKING_ANSWER','BOOKING_USER_QUESTION_ANWSER.UUID_ANWSER', 'BOOKING_ANSWER.UUID_ANWSER')
        ->join('BOOKING_QUESTION', 'BOOKING_ANSWER.UUID_QUESTION','BOOKING_QUESTION.UUID_QUESTION')
        ->where('UUID_BOOKING',$id)->get();
        return response()->json($result, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
