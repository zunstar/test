<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Fitness\PersonalTrainer;

class FitnessController extends Controller
{
    public function solution(Request $request, PersonalTrainer $trainer) : JsonResponse
    {
        $solutionTypes = $request->input('solutionType', []);
        $tags = $request->input('tags', []);

        $solution = $trainer->getSolution($solutionTypes, $tags);

        return response()->json($solution,200);
    }
}
