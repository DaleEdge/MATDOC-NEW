<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ug_allotments; // Replace with your actual model

class FilterController extends Controller
{
    public function filterData(Request $request)
    {
        // Initialize query
        $query = ug_allotments::query(); // Fixed: Added semicolon

        // Apply filters based on request
        if ($request->input('rankType') === 'all_india') {
            $query->where('rank_type', 'all_india');
        } elseif ($request->input('rankType') === 'state') {
            $query->where('rank_type', 'state');
        } else {
            return response()->json([
                'draw' => $request->input('draw'),
                'recordsTotal' => 0,
                'recordsFiltered' => 0,
                'data' => []
            ]);
        }

        // Apply additional filters
        if ($request->has('round')) {
            $query->where('round', $request->input('round'));
        }
        if ($request->has('state')) {
            $query->where('state', 'like', '%' . $request->input('state') . '%');
        }
        if ($request->has('institute')) {
            $query->where('institute', 'like', '%' . $request->input('institute') . '%');
        }
        if ($request->has('category')) {
            $query->where('category', $request->input('category'));
        }

        // Get paginated data
        $data = $query->paginate(10); // Use paginate instead of take

        // Return JSON response for DataTables
        return response()->json([
            'draw' => $request->input('draw'),
            'recordsTotal' => $data->total(),
            'recordsFiltered' => $data->total(), // Adjust if you have separate count logic
            'data' => $data->items()
        ]);
    }
}
