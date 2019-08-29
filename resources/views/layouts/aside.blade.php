<aside style="min-width: 200px; max-width: 200px; padding-top: 65px" class="bg-imperial-primer border-right vh-100">
    <nav class="list-group list-group-flush">
        <span class="mt-4 text-gray font-weight-bold px-2">Operations</span>
        <a href="{{ route('fleet.vehicle.index') }}" class="list-group-item list-group-item-action border-0">Incidents</a>

        <span class="mt-4 text-gray font-weight-bold px-2">Fleet</span>
        <a href="{{ route('fleet.vehicle.index') }}" class="list-group-item list-group-item-action border-0">Vehicles</a>
        <a href="{{ route('fleet.type.index') }}" class="list-group-item list-group-item-action border-0">Types</a>
        <a href="{{ route('fleet.make.index') }}" class="list-group-item list-group-item-action border-0">Makes</a>
        <a href="{{ route('fleet.model.index') }}"
           class="list-group-item list-group-item-action border-0">Models</a>

        <span class="mt-4 text-gray font-weight-bold px-2">Setup</span>
        <a href="{{ route('user.index') }}" class="list-group-item list-group-item-action border-0">Users</a>
    </nav>
</aside>
