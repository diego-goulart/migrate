<?php

namespace Migrate\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;

class UploadController extends Controller
{
    public function create()
    {
        return view('form');
    }


    public function upload(Request $request)
    {
        $csv = Reader::createFromPath($request->file('file')->getPathname());
        $csv->setDelimiter(';');
        $csv->stripBom(true);
        $res = $csv->setOffset(1)->fetchAll();

       return view('result', compact('res'));
    }


    public function show()
    {

    }
}
