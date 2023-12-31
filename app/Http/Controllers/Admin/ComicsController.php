<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderBy('id')->paginate(10);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $image_path = null;

        $val_data = $request->validated();

        if ($request->has('thumb')) {
            $file_path = Storage::put('comic_image', $request->thumb);
            $val_data['thumb'] = $file_path;
        }

        Comic::create($val_data);

        // $comic = new Comic();
        // $comic->title = $request->title;
        // $comic->thumb = $image_path;
        // $comic->series = $request->series;
        // $comic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        if ($comic) {
            return view('admin.comics.show', compact('comic'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        if ($request->has('thumb') && $comic->thumb) {
            Storage::delete($comic->thumb);

            $newImageFile = $request->thumb;

            $path = Storage::put('comic_image', $newImageFile);

            $data['thumb'] = $path;
        }

        $comic->update($data);

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //dd($comic);
        if (!is_null($comic->thumb)) {
            Storage::delete($comic->thumb);
        }

        $comic->delete();

        //POST REDIRECT GET
        return to_route('comics.index')->with('message', 'Well done! Comic deleted successfully 👍');
    }

    /**
     * Soft delete method. Add the files in a trashcan that can be restored.
     */
    public function deleted_comics(){
        return view('admin.comics.dumbster', ['deleted_comics' => Comic::onlyTrashed()->get()]);
    }
}
