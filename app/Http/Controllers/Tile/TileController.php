<?php

namespace App\Http\Controllers\Tile;

use App\Http\Controllers\ApiControllerInterface;
use App\Http\Controllers\Controller;

use Spatie\QueryBuilder\QueryBuilder;
use App\Models\{
    Tile
};

use Illuminate\Http\{
    Request,
    JsonResponse
};

class TileController extends Controller implements ApiControllerInterface
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        QueryBuilder::for(Tile::class)
            ->allowedAppends([''])
            ->allowedFields([])
            ->allowedSorts([])
            ->paginate(30);
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
     * @param Tile $tile
     *
     * @return JsonResponse
     */
    public function show(Tile $tile): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tile    $tile
     *
     * @return JsonResponse
     */
    public function update(Request $request, Tile $tile): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tile $tile
     *
     * @return JsonResponse
     */
    public function destroy(Tile $tile): JsonResponse
    {
        //
    }
}
