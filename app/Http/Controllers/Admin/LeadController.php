<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppSetting;
use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::latest()->paginate(30);
        $leadSendToEmail = AppSetting::value('lead_send_to_email', '');

        return view('admin.leads.index', compact('leads', 'leadSendToEmail'));
    }

    public function updateLeadSendTo(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'lead_send_to_email' => ['required', 'email'],
        ]);

        AppSetting::setValue('lead_send_to_email', $validated['lead_send_to_email']);

        return back()->with('status', 'Lead Send To email updated successfully.');
    }
}
