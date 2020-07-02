<?php

namespace App\Http\Controllers\Tile;

use App\Http\Controllers\Controller;

use App\Models\{
    TileGroupMember
};

use Illuminate\Http\{
    Request,
    JsonResponse
};

class TileGroupMemberController extends Controller
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
     * @param TileGroupMember $tileGroupMember
     *
     * @return JsonResponse
     */
    public function show(TileGroupMember $tileGroupMember): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param TileGroupMember     $tileGroupMember
     *
     * @return JsonResponse
     */
    public function update(Request $request, TileGroupMember $tileGroupMember): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param TileGroupMember $tileGroupMember
     *
     * @return JsonResponse
     */
    public function destroy(TileGroupMember $tileGroupMember): JsonResponse
    {
        //
    }
}
