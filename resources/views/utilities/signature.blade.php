<x-app-layout>

    <div x-data="signature()" class="mx-auto mt-6 max-w-xl">
        <div class=" shadow-xl bg-white rounded-lg p-6 flex gap-4 ">
            <form id="signature-pad-form" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <h1 class="text-xl font-semibold text-gray-700 items-center">Signature Pad</h1>
                    <div>
                        <canvas x-ref="canvas" name="signature" class="border rounded shadow"></canvas>
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" id="submit-btn"
                            class="bg-blue-500 text-white px-2 py-1 rounded-md mt-2">submit</button>
                        <button id="clear-btn" class="bg-blue-500 text-white px-2 py-1 rounded-md mt-2">clear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

        <script>
            // const canvas = document.getElementById("canvas");
            // const form = document.getElementById('signature-pad-form');

            // const dataURL = canvas.toDataURL();


            // const submitbtn = document.getElementById('btn');
            // const clearbtn = document.getElementById('btn2');
            // submitbtn.addEventListener('click', function() {
            // const dataURL = signaturePad.toDataURL();
            // console.log(dataURL);
            // })
            // clearbtn.addEventListener('click', function() {
            // signaturePad.clear();
            // })

            document.addEventListener('alpine:init', () => {
                Alpine.data('signature', () => ({
                    signatureInstance: null,
                    init() {
                        this.signatureInstance = new SignaturePad(this.$refs.canvas);
                    }

                }))
            })
        </script>
    @endpush
</x-app-layout>
