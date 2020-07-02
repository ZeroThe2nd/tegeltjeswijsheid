<?php

namespace App\Http\Controllers\Tile;

use App\Http\Controllers\Controller;
use App\Models\TileGroup;

use Illuminate\Http\{
    Request,
    JsonResponse
};

class TileGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param TileGroup $tileGroup
     *
     * @return JsonResponse
     */
    public function show(TileGroup $tileGroup): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request   $request
     * @param TileGroup $tileGroup
     *
     * @return JsonResponse
     */
    public function update(Request $request, TileGroup $tileGroup): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param TileGroup $tileGroup
     *
     * @return JsonResponse
     */
    public function destroy(TileGroup $tileGroup): JsonResponse
    {
        //
    }
}
