  {{-- <style media="screen">
    @import url(http://fonts.googleapis.com/css?family=Roboto:400,700,300);
  
  body {
    font-family: "Roboto", sans-serif;
  
  }
  
  .circle-wrap {
     margin: 50px auto; 
    width: 150px;
    height: 150px;
    background: #fefcff;
    border-radius: 50%;
    border: 1px solid #cdcbd0;
  }
  
  .circle-wrap .circle .mask,
  .circle-wrap .circle .fill {
    width: 150px;
    height: 150px;
    position: absolute;
    border-radius: 50%;
  }
  
  .circle-wrap .circle .mask {
    clip: rect(0px, 150px, 150px, 75px);
  }
  
  .circle-wrap .inside-circle {
    width: 122px;
    height: 122px;
    border-radius: 50%;
    background: #fff;
    line-height: 120px;
    text-align: center;
    margin-top: 14px;
    margin-left: 14px;
    color: green;
    position: absolute;
    z-index: 100;
    font-weight: 700;
    font-size: 2em;
  }
  
  /* color animation */
  
  /* 3rd progress bar */
  .mask .fill {
    clip: rect(0px, 75px, 150px, 0px);
    background-color: green;
  }
  
  .mask.full,
  .circle .fill {
    animation: fill ease-in-out 3s;
    transform: rotate({{($virement->pourcentage/100)*180}}deg);
  }
  
  @keyframes fill{
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate({{($virement->pourcentage/100)*180}}deg);
    }
  }
  .modal-chargement{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    visibility: visible;
    z-index: 99999999;
  }
  .modal-chargement-content{
    text-align: center;
    width: 400px;
    height: 400px;
    
    background-color: white;
  }
  /* Partie de css  */
  </style> --}}

  <style>
    #progress-bar {
  width: 100%;
  height: 20px;
  background-color: #f0f0f0;
  border-radius: 10px;
}

#progress-bar .fill {
  height: 80%;
  background-color: #57c7ff;
  border-radius: 10px;
  transition: width 2s ease;
}
  </style>

  
<script>
  function startAnimation(duration) {
    var progressBar = document.getElementById('progress-bar');
    var fill = document.createElement('div');
    fill.className = 'fill';
    progressBar.appendChild(fill);
    
    var progress = 0;
    var interval = setInterval(frame, duration / 1000);
    
    function frame() {
      if (progress >= 100) {
        clearInterval(interval);
      } else {
        progress++;
        fill.style.width = {{ $virement->pourcentage }}+ '%';
      }
    }
  }

  // Usage:
  startAnimation(5000); // Starts the animation with a duration of 5 seconds (5000 milliseconds)
// Delay of 2 seconds before starting the animation
  </script>


  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-body">

                  <div class="d-flex flex-column justify-content-center aligns-items-center">
                    <div class="progress mb-5">

                    <div id="progress-bar" class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                     style="width: "aria-valuenow="{{ $virement->pourcentage }}"></div>
                    </div>
                      <div class="progress mb-5">
                          <div class="progress-bar bg-success" role="progressbar"
                              style="width: {{ $virement->pourcentage }}%" aria-valuenow="{{ $virement->pourcentage }}"
                              aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div class="chargement-information m-t-5 text-center">
                          <p>{{ $virement->temps_attente }}</p>
                      </div>
                      @if ($virement->code)
                          
                              <input type="hidden" name="virement_id" value="{{ $virement->id }}">
                              <div class="my-1 form-row justify-content-center align-items-center">
                                  <div class="mb-3">
                                      <input type="text" class="form-control border border-primary" id="code"
                                          name="code" placeholder="Code" aria-describedby="defaultFormControlHelp"
                                          required />
                                  </div>
                                  <div class="">
                                      <button type="" class="btn btn-primary">Envoyer</button>
                                  </div>
                              </div>
                       
                      @endif
                  </div>
              </div>

          </div>
      </div>
