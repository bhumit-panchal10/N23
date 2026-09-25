<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceFaqController extends Controller
{
    /**
     * Display FAQ list for selected service.
     */
    public function index($service_id)
    {
        $service = Service::findOrFail($service_id);

        $faqs = ServiceFaq::where('service_id', $service_id)
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('admin.service-faq.index', compact(
            'service',
            'faqs',
            'service_id'
        ));
    }

    /**
     * Store new FAQ.
     */
    public function store(Request $request, $service_id)
    {
        $service = Service::findOrFail($service_id);

        $validator = Validator::make($request->all(), [
            'question' => 'required|string',
            'answer'   => 'required|string',
        ], [
            'question.required' => 'Please enter question.',
            'answer.required'   => 'Please enter answer.',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('service-faq.index', $service_id)
                ->withErrors($validator)
                ->withInput();
        }

        ServiceFaq::create([
            'service_id' => $service->id,
            'question'   => $request->question,
            'answer'     => $request->answer,
        ]);

        return redirect()
            ->route('service-faq.index', $service_id)
            ->with('success', 'Service FAQ added successfully.');
    }

    /**
     * Update FAQ.
     */
    public function update(Request $request, $service_id, $id)
    {
        Service::findOrFail($service_id);

        $faq = ServiceFaq::where('id', $id)
            ->where('service_id', $service_id)
            ->firstOrFail();

        $validator = Validator::make($request->all(), [
            'question' => 'required|string',
            'answer'   => 'required|string',
        ], [
            'question.required' => 'Please enter question.',
            'answer.required'   => 'Please enter answer.',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('service-faq.index', $service_id)
                ->withErrors($validator, 'editFaq')
                ->withInput()
                ->with('edit_faq_id', $id);
        }

        $faq->update([
            'question' => $request->question,
            'answer'   => $request->answer,
        ]);

        return redirect()
            ->route('service-faq.index', $service_id)
            ->with('success', 'Service FAQ updated successfully.');
    }

    /**
     * Hard delete single FAQ.
     */
    public function destroy($service_id, $id)
    {
        $faq = ServiceFaq::where('id', $id)
            ->where('service_id', $service_id)
            ->firstOrFail();

        $faq->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Service FAQ deleted successfully.',
        ]);
    }

    /**
     * Hard delete selected FAQs.
     */
    public function bulkDelete(Request $request, $service_id)
    {
        $validator = Validator::make($request->all(), [
            'ids'   => 'required|array',
            'ids.*' => 'integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => false,
                'message' => 'Please select at least one FAQ.',
            ], 422);
        }

        ServiceFaq::where('service_id', $service_id)
            ->whereIn('id', $request->ids)
            ->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Selected FAQs deleted successfully.',
        ]);
    }
}
