<?php


namespace App\Repository\Graduated;


interface StudentGraduatedRepositoryInterface
{

    public function index();

    public function create();

    public function SoftDelete($request);

    public function ReturnData($request);

    public function destroy($request);
}