<?php

namespace App\Http\Controllers\Api\Notes;

use App\Models\Note;
use Illuminate\Http\Request;
use App\helpers\BaseResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\NoteResource;

class NoteController extends Controller
{
    public function index()
    {
        return BaseResponse::MakeResponse(Note::latest()->get(), 'Notes retrieved successfully', 200);
    }
    public function show(Note $note)
    {
        return BaseResponse::MakeResponse(new NoteResource($note) , 'Note retrieved successfully', 200);
    }
    public function store(Request $request)
    {
        $note = Note::create([
            'body' => $request->body,
        ]);
        return BaseResponse::MakeResponse($note, 'Task created successfully', 201);
    }
    public function update(Note $note, Request $request)
    {
        $note->update([
            'body' => $request->body,
        ]);
        return BaseResponse::MakeResponse($note, 'Note updated successfully', 200);
    }
    public function destroy(Note $note)
    {
        $note->delete();
        return BaseResponse::MakeResponse(null, 'Note deleted successfully', 204);
    }
}
