

@isset($error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endisset
@empty($error)
    <div class="alert alert-success">
        Thanh Cong
    </div>
@endempty