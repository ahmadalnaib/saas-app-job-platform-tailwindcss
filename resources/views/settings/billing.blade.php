<x-app-layout>
    @section('title','Settings')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">

        {{--navabr--}}
        @include('settings.nav')


        <form action="{{ route('billing.save') }}" id="card-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                    <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Billing Settings</h2>
                    <p class="text-xs text-gray-500">Update your billing info..</p>
                </div>
                <div class="md:w-2/3 w-full p-5">
                    <div class="p-8 ">
                        <label for="card-holder-name" class="text-sm text-gray-600">Name on Card</label>
                        <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="text" value="" id="card-holder-name">
                    </div>
                    <hr class="border-gray-200">
                    <div class="p-8 ">
                        <label for="name" class="text-sm text-gray-600">Credit Card</label>
                        <div id="card-element" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500"></div>

                    </div>


                    <x-button id="card-button" data-secret="{{ auth()->user()->createSetupIntent()->client_secret }}"  class="ml-3 mb-4 indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer">
                        {{ __('Update Payment Method') }}
                    </x-button>
                    <hr class="border-gray-200">
                </div>
            </div>

        </form>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env("STRIPE_KEY") }}');

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        const cardError = document.getElementById('card-errors');
        const form=document.getElementById('card-form')



        form.addEventListener('submit', async (e) => {
            e.preventDefault()
            cardButton.disabled=true

            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            );
            if (error) {
                // Display "error.message" to the user...
                cardButton.disabled=false

            } else {
                // The card has been verified successfully...
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'payment_method');
                hiddenInput.setAttribute('value', setupIntent.payment_method);
                form.appendChild(hiddenInput);
                // Submit the form
                form.submit();
            }
        });

    </script>

</x-app-layout>
