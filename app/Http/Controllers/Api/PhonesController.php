<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GrideRequest;
use App\Http\Requests\StorePhoneRequest;
use App\Http\Requests\updatePhoneRequest;
use App\Services\PhonesService;
use Illuminate\Http\JsonResponse;
use App\Helpers\HttpStatusCodes;

class PhonesController extends Controller {
    /**
     * get Phones instance .
     * @param PhonesService $PhonesService
     * @return JsonResponse
     */

    public function index(GrideRequest $request, PhonesService $phonesService) {
        try {
            $Phones = $phonesService->index($request->validated());
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($Phones, 'Phones listed successfully');
    }

    /**
     * get Phones instance .
     * @param PhonesService $PhonesService
     * @return JsonResponse
     */

    public function show(PhonesService $phonesService ,$id) {
        try {
            $phone = $phonesService->show($id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($phone, 'get client  successfully');
    }

    /**
     * create Phones instance .
     * @param PhonesService $PhonesService
     * @return JsonResponse
     */

    public function store(StorePhoneRequest $request, PhonesService $phonesService) {
        try {
            $phone = $phonesService->store($request->validated());
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($phone, 'store client successfully');
    }

        /**
     * create Phones instance .
     * @param PhonesService $PhonesService
     * @return JsonResponse
     */

    public function update(updatePhoneRequest $request, PhonesService $phonesService,$id) {
        try {
            $phone = $phonesService->update($request->validated(),$id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($phone, 'update client successfully');
    }

    /**
     * get Phones instance .
     * @param PhonesService $PhonesService
     * @return JsonResponse
     */

    public function destroy(PhonesService $phonesService ,$id) {
        try {
            $phone = $phonesService->destroy($id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success('', 'destroy client  successfully');
    }

}