@if (session()->has('create_success_message'))
    <!-- Form Error List -->
    <div class="alert alert-success">
        <strong>@lang('task.message.crsuccess')</strong>
        <br><br>
        {{ session()->get('create_success_message') }}
    </div>
@endif
@if (session('create_error_message'))
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>@lang('task.message.crerror')</strong>
        <br><br>
        {{ session('create_error_message') }}
    </div>
@endif
@if ($errors->any())
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>@lang('task.message.crerror')</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('delete_success_message'))
    <!-- Form Error List -->
    <div class="alert alert-success">
        <strong>@lang('task.message.dlsuccess')</strong>
        <br><br>
        {{ session('delete_success_message') }}
    </div>
@endif
@if (session('delete_error_message'))
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>@lang('task.message.dlerror')</strong>
        <br><br>
        {{ session('delete_error_message') }}
    </div>
@endif


