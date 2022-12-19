<div>
    <div class="mx-auto mt-6 max-w-md">
        <div class=" shadow-xl bg-white rounded-lg p-6 flex flex-col gap-4 ">
            <x-signature-pad wire:model.defer="signature" />
            <div>
                <button wire:click="submit" type="submit" id="submit-btn"
                    class="bg-blue-500 text-white px-2 py-1 rounded-md mt-2 w-full">submit</button>

            </div>
        </div>

    </div>

</div>
