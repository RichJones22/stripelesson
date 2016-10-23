<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>

    <h1>By my book for $ 25.00</h1>

    <body>
        <form action="/purchases" method="POST">
            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_GpfxnwJvUQtzolMwZ9cdNUQu"
                    data-amount="2500"
                    data-name="Some Book"
                    data-description="This will give you everything you need to get started."
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-zip-code="true">
            </script>
        </form>
    </body>
</html>
