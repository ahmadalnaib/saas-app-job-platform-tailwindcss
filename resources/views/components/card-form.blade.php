
    <form id="card-form" action="{{$attributes->get('action')}}" method="POST" enctype="multipart/form-data">
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

              {{$slot}}


            </div>
        </div>

    </form>


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
