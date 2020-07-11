$(document).ready( function () {

    fetchCollection();

    function fetchCollection() {
        $.ajax({
            url: 'plugins/collections/list.php',
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

const template = `
<!--Controls-->
<div class='controls-top'>
  <a class='btn-floating' href='#multi-item-example' data-slide='prev'><i class='fas fa-chevron-left'></i></a>
  <a class='btn-floating' href='#multi-item-example' data-slide='next'><i
      class='fas fa-chevron-right'></i></a>
</div>

<!-- Indicators-->
<!-- <ol class='carousel-indicators'>
  <li data-target='#multi-item-example' data-slide-to='0' class='active'></li>
  <li data-target='#multi-item-example' data-slide-to='1'></li>
</ol> -->
<!--/.Indicators -->

<!--Slides-->
<div class='carousel-inner' role='listbox'>

  <!--First slide-->
  <div class='carousel-item active'>

    <div class='col-md-3' style='float:left'>
    <div class='card mb-2'>
        <img class='card-img-top'
          src='https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg' alt='Card image cap'>
        <div class='card-body'>
          <h4 class='card-title'>Card title</h4>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class='btn btn-primary'>Button</a>
        </div>
      </div>
    </div>

    <div class='col-md-3' style='float:left'>
      <div class='card mb-2'>
        <img class='card-img-top'
          src='https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg' alt='Card image cap'>
        <div class='card-body'>
          <h4 class='card-title'>Card title</h4>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class='btn btn-primary'>Button</a>
        </div>
      </div>
    </div>

    <div class='col-md-3' style='float:left'>
      <div class='card mb-2'>
        <img class='card-img-top'
          src='https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg' alt='Card image cap'>
        <div class='card-body'>
          <h4 class='card-title'>Card title</h4>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class='btn btn-primary'>Button</a>
        </div>
      </div>
    </div>
    
    <div class='col-md-3' style='float:left'>
    <div class='card mb-2'>
        <img class='card-img-top'
          src='https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg' alt='Card image cap'>
        <div class='card-body'>
          <h4 class='card-title'>Card title</h4>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class='btn btn-primary'>Button</a>
        </div>
      </div>
    </div>

  </div>
  <!--/.First slide-->

  <!--Second slide-->
  <div class='carousel-item'>

    <div class='col-md-3' style='float:left'>
      <div class='card mb-2'>
        <img class='card-img-top'
          src='https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg' alt='Card image cap'>
        <div class='card-body'>
          <h4 class='card-title'>Card title</h4>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class='btn btn-primary'>Button</a>
        </div>
      </div>
    </div>

    <div class='col-md-3' style='float:left'>
      <div class='card mb-2'>
        <img class='card-img-top'
          src='https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg' alt='Card image cap'>
        <div class='card-body'>
          <h4 class='card-title'>Card title</h4>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class='btn btn-primary'>Button</a>
        </div>
      </div>
    </div>

    <div class='col-md-3' style='float:left'>
      <div class='card mb-2'>
        <img class='card-img-top'
          src='https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg' alt='Card image cap'>
        <div class='card-body'>
          <h4 class='card-title'>Card title</h4>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class='btn btn-primary'>Button</a>
        </div>
      </div>
    </div>
    
    <div class='col-md-3' style='float:left'>
      <div class='card mb-2'>
        <img class='card-img-top'
          src='https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg' alt='Card image cap'>
        <div class='card-body'>
          <h4 class='card-title'>Card title</h4>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class='btn btn-primary'>Button</a>
        </div>
      </div>
    </div>

  </div>
  <!--/.Second slide-->

</div>
<!--/.Slides-->`