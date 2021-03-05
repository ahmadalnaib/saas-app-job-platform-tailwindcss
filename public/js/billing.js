// const stripe = Stripe('{{ env("STRIPE_KEY") }}');
//
// const elements = stripe.elements();
// const cardElement = elements.create('card');
//
// cardElement.mount('#card-element');
//
// const cardHolderName = document.getElementById('card-holder-name');
// const cardButton = document.getElementById('card-button');
// const clientSecret = cardButton.dataset.secret;
// const cardError = document.getElementById('card-errors');
// const form=document.getElementById('card-form')
//
//
//
// form.addEventListener('submit', async (e) => {
//     e.preventDefault()
//     cardButton.disabled=true
//
//     const { setupIntent, error } = await stripe.confirmCardSetup(
//         clientSecret, {
//             payment_method: {
//                 card: cardElement,
//                 billing_details: { name: cardHolderName.value }
//             }
//         }
//     );
//     if (error) {
//         // Display "error.message" to the user...
//         cardButton.disabled=false
//
//     } else {
//         // The card has been verified successfully...
//         const hiddenInput = document.createElement('input');
//         hiddenInput.setAttribute('type', 'hidden');
//         hiddenInput.setAttribute('name', 'payment_method');
//         hiddenInput.setAttribute('value', setupIntent.payment_method);
//         form.appendChild(hiddenInput);
//         // Submit the form
//         form.submit();
//     }
// });
