@extends('layouts.app')

@section('title', 'N23 - Service FAQ')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                {{-- Alert Messages --}}
                @include('common.alert')

                {{-- Page Title --}}
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                            <h4 class="mb-sm-0">
                                Service FAQ
                                @if (!empty($service->title))
                                    - {{ $service->title }}
                                @endif
                            </h4>

                            <div class="page-title-right">
                                <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-arrow-left"></i>
                                    Back to Services
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    {{-- ========================================================= --}}
                    {{-- RIGHT SIDE - ADD FAQ --}}
                    {{-- ========================================================= --}}
                    <div class="col-lg-4">

                        <div class="card">

                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    Add FAQ
                                </h5>
                            </div>

                            <div class="card-body">

                                <form method="POST" action="{{ route('service-faq.store', $service_id) }}">

                                    @csrf

                                    {{-- Question --}}
                                    <div class="mb-3">

                                        <label class="form-label">
                                            Question
                                            <span style="color:red;">*</span>
                                        </label>

                                        <textarea name="question" class="form-control" rows="3" placeholder="Enter question">{{ old('question') }}</textarea>

                                        @if ($errors->has('question'))
                                            <span class="text-danger">
                                                {{ $errors->first('question') }}
                                            </span>
                                        @endif

                                    </div>


                                    {{-- Answer --}}
                                    <div class="mb-3">

                                        <label class="form-label">
                                            Answer
                                            <span style="color:red;">*</span>
                                        </label>

                                        <textarea name="answer" class="form-control" rows="6" placeholder="Enter answer">{{ old('answer') }}</textarea>

                                        @if ($errors->has('answer'))
                                            <span class="text-danger">
                                                {{ $errors->first('answer') }}
                                            </span>
                                        @endif

                                    </div>

                                    <button type="submit" class="btn btn-primary">

                                        <i class="fas fa-save"></i>
                                        Save FAQ

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                    {{-- ========================================================= --}}
                    {{-- LEFT SIDE - FAQ LISTING --}}
                    {{-- ========================================================= --}}
                    <div class="col-lg-8">

                        <div class="card">

                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-0">
                                        FAQ List
                                    </h5>

                                    <button type="button" class="btn btn-sm btn-danger" id="bulkDeleteBtn" disabled>
                                        <i class="fas fa-trash"></i>
                                        Delete Selected
                                    </button>

                                </div>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped align-middle">

                                        <thead>
                                            <tr>

                                                <th style="width: 40px;">
                                                    <input type="checkbox" id="selectAll">
                                                </th>

                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th style="width: 100px;">
                                                    Action
                                                </th>

                                            </tr>
                                        </thead>

                                        <tbody>

                                            @forelse($faqs as $faq)
                                                <tr id="faq-row-{{ $faq->id }}">

                                                    {{-- Do not display ID --}}
                                                    <td>
                                                        <input type="checkbox" class="faq-checkbox"
                                                            value="{{ $faq->id }}">
                                                    </td>

                                                    <td>
                                                        {{ $faq->question }}
                                                    </td>

                                                    <td>
                                                        {!! nl2br(e($faq->answer)) !!}
                                                    </td>
                                                    <td>
                                                        {{-- Edit --}}
                                                        <button type="button" class="btn btn-sm btn-primary editFaq"
                                                            data-id="{{ $faq->id }}"
                                                            data-question="{{ $faq->question }}"
                                                            data-answer="{{ $faq->answer }}"
                                                            data-call="{{ $faq->book_a_call }}" title="Edit">

                                                            <i class="fas fa-edit"></i>

                                                        </button>

                                                        {{-- Delete --}}
                                                        <button type="button" class="btn btn-sm btn-danger deleteFaq"
                                                            data-id="{{ $faq->id }}" title="Delete">

                                                            <i class="fas fa-trash"></i>

                                                        </button>

                                                    </td>

                                                </tr>

                                            @empty

                                                <tr>
                                                    <td colspan="4" class="text-center">
                                                        No FAQ found.
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>

                                    </table>

                                </div>

                                {{-- Pagination --}}
                                <div class="d-flex justify-content-center mt-3">
                                    {{ $faqs->links() }}
                                </div>

                            </div>

                        </div>

                    </div>




                </div>

            </div>
        </div>
    </div>


    {{-- ========================================================= --}}
    {{-- EDIT FAQ MODAL --}}
    {{-- ========================================================= --}}
    <div class="modal fade" id="editFaqModal" tabindex="-1" aria-labelledby="editFaqModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="editFaqModalLabel">
                        Edit FAQ
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>

                </div>

                <form method="POST" id="editFaqForm" action="">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        {{-- Edit Question --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Question
                                <span style="color:red;">*</span>
                            </label>

                            <textarea name="question" id="edit_question" class="form-control" rows="3"></textarea>

                            @if ($errors->editFaq->has('question'))
                                <span class="text-danger">
                                    {{ $errors->editFaq->first('question') }}
                                </span>
                            @endif

                        </div>


                        {{-- Edit Answer --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Answer
                                <span style="color:red;">*</span>
                            </label>

                            <textarea name="answer" id="edit_answer" class="form-control" rows="6"></textarea>

                            @if ($errors->editFaq->has('answer'))
                                <span class="text-danger">
                                    {{ $errors->editFaq->first('answer') }}
                                </span>
                            @endif

                        </div>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>

                        <button type="submit" class="btn btn-primary">

                            <i class="fas fa-save"></i>
                            Update FAQ

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection


@section('scripts')

    <script>
        $(document).ready(function() {

            const serviceId = {{ $service_id }};

            /*
            |--------------------------------------------------------------------------
            | Select All
            |--------------------------------------------------------------------------
            */
            $('#selectAll').on('change', function() {

                $('.faq-checkbox').prop(
                    'checked',
                    $(this).prop('checked')
                );

                toggleBulkDelete();
            });


            /*
            |--------------------------------------------------------------------------
            | Individual Checkbox
            |--------------------------------------------------------------------------
            */
            $(document).on('change', '.faq-checkbox', function() {

                let totalCheckboxes = $('.faq-checkbox').length;
                let totalChecked = $('.faq-checkbox:checked').length;

                $('#selectAll').prop(
                    'checked',
                    totalCheckboxes > 0 && totalCheckboxes === totalChecked
                );

                toggleBulkDelete();
            });


            /*
            |--------------------------------------------------------------------------
            | Enable / Disable Bulk Delete
            |--------------------------------------------------------------------------
            */
            function toggleBulkDelete() {

                let selected = $('.faq-checkbox:checked').length;

                $('#bulkDeleteBtn').prop(
                    'disabled',
                    selected === 0
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Edit FAQ Modal
            |--------------------------------------------------------------------------
            */
            $(document).on('click', '.editFaq', function() {

                let faqId = $(this).data('id');
                let question = $(this).attr('data-question');
                let answer = $(this).attr('data-answer');
                let call = $(this).attr('data-call');

                $('#edit_question').val(question);
                $('#edit_answer').val(answer);
                $('#edit_book_a_call').val(call);

                let updateUrl =
                    "{{ route('service-faq.update', [$service_id, ':id']) }}";

                updateUrl = updateUrl.replace(':id', faqId);

                $('#editFaqForm').attr('action', updateUrl);

                $('#editFaqModal').modal('show');
            });


            /*
            |--------------------------------------------------------------------------
            | Single Hard Delete
            |--------------------------------------------------------------------------
            */
            $(document).on('click', '.deleteFaq', function() {

                let faqId = $(this).data('id');

                if (!confirm('Are you sure you want to delete this FAQ?')) {
                    return;
                }

                let deleteUrl =
                    "{{ route('service-faq.destroy', [$service_id, ':id']) }}";

                deleteUrl = deleteUrl.replace(':id', faqId);

                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',

                    data: {
                        _token: "{{ csrf_token() }}"
                    },

                    success: function(response) {

                        if (response.status) {

                            alert(response.message);

                            $('#faq-row-' + faqId).remove();

                            toggleBulkDelete();

                        }
                    },

                    error: function() {
                        alert('Something went wrong while deleting FAQ.');
                    }
                });

            });


            /*
            |--------------------------------------------------------------------------
            | Bulk Hard Delete
            |--------------------------------------------------------------------------
            */
            $('#bulkDeleteBtn').on('click', function() {

                let ids = [];

                $('.faq-checkbox:checked').each(function() {
                    ids.push($(this).val());
                });

                if (ids.length === 0) {
                    alert('Please select at least one FAQ.');
                    return;
                }

                if (!confirm(
                        'Are you sure you want to delete selected FAQs?'
                    )) {
                    return;
                }

                $.ajax({

                    url: "{{ route('service-faq.bulk-delete', $service_id) }}",

                    type: 'POST',

                    data: {
                        _token: "{{ csrf_token() }}",
                        ids: ids
                    },

                    success: function(response) {

                        if (response.status) {

                            alert(response.message);

                            $.each(ids, function(index, id) {
                                $('#faq-row-' + id).remove();
                            });

                            $('#selectAll').prop('checked', false);

                            toggleBulkDelete();
                        }
                    },

                    error: function(xhr) {

                        let message = 'Something went wrong.';

                        if (
                            xhr.responseJSON &&
                            xhr.responseJSON.message
                        ) {
                            message = xhr.responseJSON.message;
                        }

                        alert(message);
                    }

                });

            });

        });
    </script>


    {{-- Open edit modal again when edit validation fails --}}
    @if (session('edit_faq_id'))
        <script>
            $(document).ready(function() {

                let faqId = "{{ session('edit_faq_id') }}";

                let updateUrl =
                    "{{ route('service-faq.update', [$service_id, ':id']) }}";

                updateUrl = updateUrl.replace(':id', faqId);

                $('#editFaqForm').attr('action', updateUrl);

                $('#edit_question').val(@json(old('question')));
                $('#edit_answer').val(@json(old('answer')));

                $('#editFaqModal').modal('show');
            });
        </script>
    @endif

@endsection
