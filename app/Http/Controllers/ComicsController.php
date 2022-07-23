<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 6;

        if ($perPage) {
            $comics = Comic::paginate($perPage);
        }

        # per visualizzare tutti i comics senza pagination
        //$comics = Comic::all();

        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:100',
            'description'     => 'string|max:255',
            'thumb'    => 'string|max:255',
            'price'   => 'string',
            'series' => 'string|max:100',
            'sale_date'     => 'date',
            'type'   => 'string|max:100',
            'artists'   => 'string|max:255',
            'writers'   => 'string|max:255',
        ]);

        $formData = $request->all();

        $comic = Comic::create($formData);

        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title'      => 'required|string|max:100',
            'description'     => 'string|max:255',
            'thumb'    => 'string|max:255',
            'price'   => 'string',
            'series' => 'string|max:100',
            'sale_date'     => 'date',
            'type'   => 'string|max:100',
            'artists'   => 'string|max:255',
            'writers'   => 'string|max:255',
        ]);

        $formData = $request->all();

        $comic = Comic::create($formData);

        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
