<x-app-layout>
    @section('title','Plans')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plans') }}
        </h2>
    </x-slot>


    <div class="container mx-auto max-w-3xl  m-8 ">

                <form id="card-form" action="{{route('subscriptions.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

                        <div class="md:w-2/3 w-full p-5">
                            <div class="p-8 px-16">
                                <label for="card-holder-name" class="text-sm text-gray-600">Name on Card</label>
                                <input id="card-holder-name" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500"  type="text"  name="name">
                            </div>
                            <hr class="border-gray-200">
                            <div class="p-8 px-16">
                                <label for="name" class="text-sm text-gray-600">Card details</label>
                                <!-- Stripe Elements Placeholder -->
                                <div class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" id="card-element"></div>
                            </div>

                            <div class="p-8 px-16">
                                <input type="hidden" name="plan" value="{{request('plan')}}">
                            </div>

                            <x-button data-secret="{{$intent->client_secret}}" id="card-button" class="ml-3 mb-4 indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer">
                                {{ __('Pay') }}
                            </x-button>

                        </div>
                    </div>

                </form>

            </div>








    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{config('cashier.key')}}');

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const form=document.getElementById('card-form');
        const cardButton = document.getElementById('card-button');
        const cardHolderName = document.getElementById('card-holder-name');

        form.addEventListener('submit',async (e) =>{
            e.preventDefault()
            cardButton.disabled=true;

         const{setupIntent,error}=  await stripe.confirmCardSetup(
               cardButton.dataset.secret,{
                   payment_method: {
                       card:cardElement,
                       billing_details: {
                           name:cardHolderName.value
                       }
                   }
               }
           )

            if (error) {
               cardButton.disabled=false;
            } else {
                // The card has been verified successfully...
                let token=document.createElement('input')
                token.setAttribute('type','hidden')
                token.setAttribute('name','token')
                token.setAttribute('value',setupIntent.payment_method)
                form.appendChild(token)
                form.submit()


            }

            });

    </script>

</x-app-layout>
