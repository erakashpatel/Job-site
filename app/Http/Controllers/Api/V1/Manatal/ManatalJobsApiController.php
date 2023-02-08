<?php

namespace App\Http\Controllers\Api\V1\Manatal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManatalJobsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function fetch(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.manatal.com/open/v3/jobs/', [
        'headers' => [
        'Authorization' => 'Token 1547683c6cc8002fc4a283ff944e2d083d888784',
        'accept' => 'application/json',
        ],
        ]);
        $res_data =  $response->getBody();
        $jobsList =  json_decode($res_data);
        echo '<pre>';
        print_r($jobsList);
        exit;
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
        //
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
