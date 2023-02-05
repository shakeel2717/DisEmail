<div class="row">
    <div class="my-2">
        <div class="form-group">
            <label for="default">Default Mail Box</label>
            <input type="text" name="default" class="form-control" id="default" wire:model="default" value="{{ $default }}">
        </div>
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control" id="username" wire:model="username" value="{{ $username }}">
        </div>
        <div class="form-group">
            <label for="domain">Domain</label>
            <select name="domain_id" id="domain_id" wire:model="domain_id" class="form-control">
                <option value="">Select Domain</option>
                @forelse ($domains as $domain)
                <option value="{{ $domain->id}}">{{ $domain->domain }}</option>
                @empty
                <option value="">No Domain in the System</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-sm" wire:click="fetch">Fetch Emails</button>
        </div>

        <h4 class="amount">Emails!</h4>
    </div>
    <div class="row">
        <div class="col my-3">
            <button class="btn btn-primary btn-sm" wire:click="refresh">Refresh</button>
        </div>
    </div>

    @forelse ($emails as $email)
    <div class="col-md-12 mb-2 mb-2">
        <div class="card card-bordered shadow card-full">
            <div class="d-flex justify-content-between align-items-center">
                <div class="m-2">
                    <h5 class="amount">{{ $email['subject'] }}</h5>
                    <p>{{ now()->parse($email['time'])->diffForHumans() }} ({{ $email['to'] }})</p>
                    <p>
                        {{ $email['body'] }}
                    </p>
                </div>
            </div>
        </div>
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