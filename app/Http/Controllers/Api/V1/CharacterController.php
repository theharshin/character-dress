<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Character\AttachDressRequest;
use App\Http\Requests\Character\DetachDressRequest;
use App\Models\Character;
use App\Services\CharacterService;
use App\Traits\ApiResponser;

class CharacterController extends Controller
{
    use ApiResponser;

    private $characterService;

    public function __construct()
    {
        $this->characterService = new CharacterService();
    }

    public function attachDresses(Character $character, AttachDressRequest $request)
    {

        $this->characterService->attachDresses($character,$request->all());
        $data['message'] = __('character.attachDress');
        return $this->success($data);
    }

    public function detachDresses(Character $character, DetachDressRequest $request)
    {
        $this->characterService->detachDresses($character,$request->all());
        $data['message'] = __('character.detachDress');
        return $this->success($data);
    }
}
