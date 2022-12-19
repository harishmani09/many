<div>

    <div x-data="signature(@entangle($attributes->wire('model')))">
        <h1 class="text-xl font-semibold text-gray-700 items-center">Signature Pad</h1>
        <div>
            <canvas x-ref="canvas" name="signature" class="border rounded shadow"></canvas>
            <button id="clear-btn" class="bg-gray-500 text-white px-2 py-1 rounded-md mt-2">clear</button>
        </div>

    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

        <script>
            const clearbtn = document.querySelector('#clear-btn');
            document.addEventListener('alpine:init', () => {
                Alpine.data('signature', (value) => ({
                    signatureInstance: null,
                    value: value,
                    init() {
                        this.signatureInstance = new SignaturePad(this.$refs.canvas);
                        this.signatureInstance.addEventListener("endStroke", () => {
                            this.value = this.signatureInstance.toDataURL('image/png');
                        })
                        clearbtn.addEventListener('click', () => {
                            this.signatureInstance.clear();
                        })
                    },
                    // upload() {
                    //     @this.set('signature', );
                    //     @this.call('submit');
                    // }

                }))
            })
        </script>
    @endpush
</div>
