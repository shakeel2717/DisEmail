<div class="row">
    <div class="my-2">
        <h4 class="amount">Emails!</h4>
    </div>
    @foreach ($emails as $email)
    <div class="col-md-12 mb-2 mb-2">
        <div class="card card-bordered shadow card-full">
            <div class="d-flex justify-content-between align-items-center">
                <div class="m-2">
                    <h5 class="amount">{{ $email['subject'] }}</h5>
                    <p>{{ now()->diffForHumans() }}</p>
                    <p>
                        {{ $email['body'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>