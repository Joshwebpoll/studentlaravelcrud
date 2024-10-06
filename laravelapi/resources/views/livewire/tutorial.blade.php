<div class="container mt-3">
    @include('livewire.student')
    {{-- Nothing in the world is as soft and yielding as water. --}}

    {{-- @if ($updatess == false)
        <div>
            <form action="" wire:submit="save">

                <input type="text" wire:model.live="name"> <br>
                @error('name')
                    <span class=" error">{{ $message }}</span>
                @enderror
                <input type="eamil" wire:model.live="email"><br>
                @error('email')
                    <span class=" error">{{ $message }}</span>
                @enderror
                <input type="phone" wire:model="phone"> <br>
                <button type="submit" class="btn btn-primary">submit</button>

            </form>

        </div>
    @else
        <h1>Hello word</h1>
        <form action="" wire:submit="updateme">

            <input type="text" wire:model="ids">
            <input type="text" wire:model="name">
            <input type="eamil" wire:model="email">
            <input type="phone" wire:model="phone">
            <button type="submit">update</button>
        </form>
    @endif --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add student
    </button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>

                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        {{-- {{ $student }} --}}
        @foreach ($student as $data)
            <tr>
                <td scope="row">{{ $data['name'] }}</td>
                <td>{{ $data['email'] }}</td>
                <td>{{ $data['phone'] }}</td>
                <td><button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal"
                        wire:click="delete({{ $data->id }})">Delete</button></td>
                <td><button type="button" data-bs-toggle="modal" wire:click="update({{ $data->id }})"
                        data-bs-target="#updateModal">update</button></td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{-- {{ $student->links() }} --}}

    <div>
        @if ($counter == null)
            <h1>0</h1>
        @else
            <h1>{{ $counter }}</h1>
        @endif
        <h1></h1>
        <button wire:click="increament" wire:loading.attr="disabled">Increment
            {{-- <div wire:loading class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div> --}}
        </button>
    </div>
    <script>
        window.addEventListener('close-modal', event => {
            $('#exampleModal').modal('hide');
            $('#updateModal').modal('hide');
            $('#deleteModal').modal('hide');

        });
    </script>
</div>
