@if(isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="list-unstyled mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success', false))
    <?php $data = Session::get('success');?>
    @if(is_array($data))
        @foreach($data as $message)
            <div class="alert alert-success">
                <li class="fa fa-check">{{$message}}</li>
            </div>
        @endforeach
    @else
        <div class="alert alert-success">
            <li class="fa fa-check">{{$data}}</li>
        </div>
    @endif
@endif