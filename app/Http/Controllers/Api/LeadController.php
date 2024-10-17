<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Http\Requests\UpdateLeadRequest;
use App\Http\Requests\StoreLeadRequest;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(StoreLeadRequest $request)
    {
        $form_data = $request->validated();

        $lead = Lead::create($form_data);

        if ($lead) {
            return response()->json([
                'success' => true,
                'data' => $lead
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Fail'
            ]);
        }
    }
}