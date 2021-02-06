<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Admin\News;
use App\Traits\StoreUpdateTrait;
use http\Client\Response;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    use StoreUpdateTrait;
    /**
     * Display a listing of the news.
     *
     * @return view
     */
    public function index()
    {
        $news = News::all();

        return view('admin.homepage.news.index', compact('news'));
    }
    /**
     * Store a newly created news in storage.
     *
     * @param  NewsRequest  $request
     * @return Response
     */
    public function store(NewsRequest $request)
    {
        $model = new News();

        $this->storeData($request, $model);

        return back()->with('success' , 'News Saved Successfully') ;

    }
    /**
     * Show the form for editing the specified news.
     *
     * @param  $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if ($request->ajax())
        {
            $news = News::find($id);

            return response()->json($news);
        }

    }

    /**
     * Update the specified news in storage.
     *
     * @param  NewsRequest $request
     * @param  News  $news
     * @return Response
     */
    public function update(NewsRequest $request, News $news)
    {
        $this->updateData($request, $news);

        return back()->with('success' , 'News Updated Successfully') ;

    }

    /**
     * Remove the specified news from storage.
     *
     * @param  News $news
     * @return Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return back()->with('success' , 'News deleted Successfully') ;
    }
}
