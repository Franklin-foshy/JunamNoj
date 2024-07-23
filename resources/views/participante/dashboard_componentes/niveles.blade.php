<div class="row" >
        <div class="col-lg-4 mt-4 mb-3" id="cards-para-imagenes">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="chart">
                  <a href="{{ route('nivel1') }}">
                    <img clas = "imagen-nivel" src="{{asset('imgs/index/imagen_p4.jpg')}}" alt="">
                  </a>
                </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">{{_('NIVEL 1')}}</h6>
              <p class="text-sm ">{{_('Test corresponsabilidad')}}</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">{{_('schedule')}}</i>
                <p class="mb-0 text-sm">{{_('timepo: 7 minutos')}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3" id="cards-para-imagenes">
          <div class="card z-index-2">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="chart">
                  <a id = "nivel2" href="{{ route('nivel2') }}">
                    <img clas = "imagen-nivel" src="{{asset('imgs/index/imagen_p6.jpg')}}" alt="">
                  </a>
                </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">{{_('NIVEL 2')}}</h6>
              <p class="text-sm ">{{_('Historia sobre corresponsabilidad')}}</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">{{_('schedule')}}</i>
                <p class="mb-0 text-sm">{{_('Tiempo: 15 minutos')}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3" id="cards-para-imagenes">
          <div class="card z-index-2">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="chart">
                  <a id="nivel3" href="{{ route('nivel3') }}">
                    <img clas = "imagen-nivel" src="{{asset('imgs/index/imagen_p5.jpg')}}" alt="">
                  </a>
                </div>
            </div>

            <div class="card-body">
              <h6 class="mb-0 ">{{_('NIVEL 3')}}</h6>
              <p class="text-sm ">{{_('Test Final')}}</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">{{_('schedule')}}</i>
                <p class="mb-0 text-sm">{{_('Tiempo: 10 minutos')}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>