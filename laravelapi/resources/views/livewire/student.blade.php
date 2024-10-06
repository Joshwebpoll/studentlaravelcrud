<!-- Button trigger modal -->


<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="" wire:submit="save">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" wire:model.live="name">
                        @error('name')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" wire:model.live="email">
                        @error('email')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" class="form-control" wire:model.live="phone">
                        @error('phone')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Update Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="" wire:submit="updateme">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" wire:model.live="name">
                        @error('name')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" wire:model.live="email">
                        @error('email')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" class="form-control" wire:model.live="phone">
                        @error('phone')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="" wire:submit="destroystudent">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h5>Are you sure you want to delete?</h5>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>



<!--Delete Modal -->
