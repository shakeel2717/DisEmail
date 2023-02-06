<div class="row">
    @if ($searchArea)
    <div class="my-2">
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control form-control-lg" id="username" wire:model="username" value="{{ $username }}">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-sm" wire:click="fetch">Fetch Emails</button>
        </div>
    </div>
    @endif
    @if ($emailShow)
    <div class="d-flex align-items-center">
        <button onclick="copyToClipboard('text1')" class="btn btn-primary btn-sm me-1">Copy</button>
        <h4 class="amount" id="text1">{{$fullEmail}}</h4>
    </div>

    <div class="row">
        <div class="col my-3">
            <button class="btn btn-primary btn-sm" wire:click="refresh">Refresh</button>
        </div>
        <div class="spinner-border" role="status" wire:loading>
            <span class="sr-only"></span>
        </div>
    </div>

    <div class="row">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="row g-gs">
                    <div class="col-md-4">
                        <ul class="nav link-list-menu border border-light round m-0" role="tablist">
                            @foreach ($emails as $email)
                            <li><a style="font-size: 15px;" class="" data-bs-toggle="tab" href="#tab{{ $loop->iteration }}" aria-selected="false" role="tab" tabindex="-1"><em class="icon ni ni-comments"></em><span>{{ Str::limit($email['subject'],20) }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            @forelse ($emails as $email)
                            <div class="tab-pane" id="tab{{ $loop->iteration }}" role="tabpanel">
                                <div class="d-flex justify-content-between">
                                    <p>From:<b>{{ $email['from'] }} </b></p>
                                    <p>{{ now()->parse($email['time'])->diffForHumans() }}</p>
                                </div>
                                <p>Subject:<b>{{ $email['subject'] }}</b></p>
                                <p>{!! $email['body'] !!}</p>
                            </div>
                            @empty
                            <div class="col-md-12 mb-2 mb-2">
                                <div class="card card-bordered shadow card-full">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="m-2">
                                            <h5 class="amount">No Email</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>