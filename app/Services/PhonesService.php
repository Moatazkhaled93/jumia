<?php

namespace App\Services;

use App\Repository\Eloquent\PhoneRepository;

class PhonesService {

    private $phoneRepository;

    public function __construct(PhoneRepository $phoneRepository) {
        $this->phoneRepository = $phoneRepository;
    }

    public function index($data) {

        return $this->phoneRepository->all();
    }
    public function show($id) {

        return $this->phoneRepository->find($id);
    }
    
    public function store($data) {

        return $this->phoneRepository->create($data);
    }

    public function update($data,$id) {

        return $this->phoneRepository->update($data,$id);
    }

    public function destroy($id) {

        return $this->phoneRepository->delete($id);
    }

}
