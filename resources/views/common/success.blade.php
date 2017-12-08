@if (session()->has('success_message'))
    <!-- Form Error List -->
    <div class="alert alert-success">
        <strong>@lang('task.message.crsuccess')</strong>
        <br><br>
        {{ session()->get('success_message') }}
    </div>
@endif
