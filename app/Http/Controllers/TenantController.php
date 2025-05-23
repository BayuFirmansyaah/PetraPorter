<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\TenantLocation;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::select([
            'tenants.id',
            'tenants.name',
            'tenant_locations.location_name as location',
            'tenants.isOpen'
        ])
            ->join('tenant_locations', "tenants.tenant_location_id", "=", "tenant_locations.id")
            ->get();
        
        return view('dashboard.tenant.index',[
            'tenants' => $tenants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tenantLocations = TenantLocation::all();
        return view('dashboard.tenant.create', [
            'tenantLocations' => $tenantLocations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
