$(document).ready( function () {

    fetchCarts();

    $('#carts-form').submit( e => {
        e.preventDefault();
        // const photo = $('#photo').val().replace(/(C:fakepath)/, 'assets/img/');
        const postData = {
            photo: `assets/img/${document.getElementById("photo").files[0].name}`,
            brand: $('#brand').val(),
            model: $('#model').val(),
            color: $('#color').val(),
            plate: $('#licensePlate').val(),
            name: $('#proprietorName').val(),
            lastname: $('#proprietorLastname').val(),
            date: $('#date').val()
        }
        $.post('carts-add.php', postData, (response) => {
            $('carts-form').trigger('reset');
            fetchCarts();
        })
        document.getElementById("carts-form").reset();
    } )

    function fetchCarts() {
        $.ajax({
            url: 'carts-list.php',
            type: 'GET',
            success: function(response) {
                const carts = JSON.parse(response);
                let template = '';
                carts.forEach( (cart) => {
                    template += `
                        <div class='col'>
                            <div class='card'>
                                <img class='card-img-top' src='${cart.photo}' alt='Card image cap'>
                                <div class='card-body'>
                                    <h5 class='card-title'>${cart.brand} model: ${cart.model} plate: ${cart.plate}</h5>
                                    <p class='card-text'> Owner: ${cart.name} ${cart.lastname} </p>
                                    <p class='card-text'><small class='text-muted'>Date: ${cart.date}</small></p>
                                </div>
                            </div>
                        </div>
                    `
                } )
                $('#carts-list').html(template);
            }

        })
    }
})