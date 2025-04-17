<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Board::factory()->count(30)->create();
        return response()->json(Board::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $board = Board::create($request->all());
        if($board){
            $response = [
                'error' =>  0,
                'message' => 'board create successfully'
            ];
        }else{
            $response = [
                'error' =>  1,
                'message' => 'Something went wrong!'
            ];
        }

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(Board $board, $id)
    {
        return response()->json($board->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Board $board, $id)
    {
        $board = $board->find($id)->update($request->all());

        if($board){
            $response = [
                'error' =>  0,
                'message' => 'board updated successfully'
            ];
        }else{
            $response = [
                'error' =>  1,
                'message' => 'Something went wrong!'
            ];
        }

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board, $id)
    {
        $board = $board->find($id)->delete();

        if($board){
            $response = [
                'error' =>  0,
                'message' => 'board deleted successfully'
            ];
        }else{
            $response = [
                'error' =>  1,
                'message' => 'Something went wrong!'
            ];
        }

        return response()->json($response);

    }
}
