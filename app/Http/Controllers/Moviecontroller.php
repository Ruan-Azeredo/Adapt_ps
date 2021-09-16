<?php  /*php artisan make:controller 'MovieController'*/

namespace App\Http\Controllers;
use App\Models\Movie;           /*importante*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Moviecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');
        
        $movies = Movie::where([
            ['title','like','%'.$search.'%']])
            ->orwhere([['genre','like','%'.$search.'%']])
            ->orwhere([['release','like','%'.$search.'%']])
            ->orwhere([['rating','like','%'.$search.'%']])
            ->get();

        return view('movies.movies', compact('movies','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store('movies','public');
        $movie = Movie::create($data);
        $data['image_poster'] = $request->file('image_poster')->store('movies','public');
        $movie = Movie::create($data);
        return redirect(route('movies.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    // public function search(Request $request)
    // {
    //     $filmes = Movie::where("title", "like", "%" . $request->search . "%")->get();
    //     return view("movies", ["movies"->$filmes, 'search'->$request->search]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.edit', compact('movie'));
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
        $data = $request->all();
        $movie = Movie::find($id);

        if($request->hasFile(['image'])){
            Storage::delete('public/'. $movie->image);
            $data['image'] = $request->file('image')->store('movies', 'public');
        }
        $movie->update($data);

        if($request->hasFile(['image_poster'])){
            Storage::delete('public/'. $movie->image_poster);
            $data['image_poster'] = $request->file('image_poster')->store('movies', 'public');
        }
        $movie->update($data);

        return redirect(route('movies.index'));        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        Storage::delete('public/'. $movie->image);
        $movie->delete($movie);

        return redirect(route('movies.index')); 
    }
}
