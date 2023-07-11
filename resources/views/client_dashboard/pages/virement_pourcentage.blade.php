  <style media="screen">
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
  </style>

      

      <div class="modal-chargement">
        <div class="modal-chargement-content">
            <div class="chargement-information">
                <p>Virement en cours<p>
               </div>
            <div class="circle-wrap">
              <div class="circle">
                <div class="mask full">
                  <div class="fill"></div>
                </div>
                <div class="mask half">
                  <div class="fill"></div>
                </div>
                <div class="inside-circle">{{($virement->pourcentage)}}%</div>
              </div>
            </div>
           <div class="chargement-information">
            <p>{{$virement->temps_attente }}</p>
           </div>
        </div>
      </div>
