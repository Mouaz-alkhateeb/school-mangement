<?php

namespace App\Repository\Quizz;

interface QuizzRepositoryInterface
{
    public function index();

    public function create();

    public function store($request);

    public function edit($id);

    public function update($request);

    public function destroy($request);
}
