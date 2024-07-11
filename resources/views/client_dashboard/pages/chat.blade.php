@extends('client_dashboard.components.app')
@section('page_titre')
Messagerie
@endsection
@section('page_container')
             
    <!-- Content Wrapper START -->
    <div class="main-content w-100 mb-5">
        <div class="page-header">
            @php
    $user = Auth::user();
    $token = $user->createToken('API Token')->plainTextToken;
@endphp

         
        </div>
        <div class="container-fluid p-h-0">
            <div class="chat chat-app row" style="height:100%;width:100%;">
                <div class="chat-list">
                  
                    
                </div>
                <div class="chat-content open position-relative m-0 p-0" style="height:100%;width:100%;">
                    <div class="conversation">
                        <div class="conversation-wrapper">
                            <div class="conversation-header justify-content-between">
                                <div class="media align-items-center">
                                    <a href="javascript:void(0);" class="chat-close m-r-20 d-none text-dark font-size-18 m-t-5" >
                                        <i class="anticon anticon-left-circle"></i>
                                    </a>
                                    <div class="avatar avatar-image">
                                        <img src="/assets/images/logo/logo-fold.png" alt="">
                                    </div>
                                    <div class="p-l-15">
                                        <h6 class="m-b-0">Finanza LBE</h6>
                                        <p class="m-b-0 text-muted font-size-13 m-b-0">
                                            <span class="badge badge-success badge-dot m-r-5"></span>
                                            <span>in linea</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="dropdown dropdown-animated scale-left">
                                    <a class="text-dark font-size-20" href="javascript:void(0);" data-toggle="dropdown">
                                        <i class="anticon anticon-setting"></i>
                                    </a>
                                   
                                </div>
                            </div>
                            <div class="conversation-body justify-content-reverse mb-4"  id="conversation_body" 
                            style="height:50vh;width:100%">
                                
                                <div id="derniere_div"></div>
                            </div> 
                            <div class="conversation-footer">
                                <div id="image_div"></div>
                                <input  type="hidden" value="{{$token}}" id="my_token"  />
                                <input  type="hidden" value="{{Auth::user()->id}}" id="exp_id"  />
                                <input  type="hidden" value="0" id="dest_id"  />
                                <input class="chat-input" id="message_input" onkeyup="message_onchange(event)" type="text" placeholder="Scrivi un messaggio...">
                                <ul class="list-inline d-flex align-items-center m-b-0">
                                    <li class="list-inline-item m-r-15">
                                        <a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="Emoji">
                                            <i class="anticon anticon-smile"></i>
                                        </a>
                                        
                                    </li> 
                                    <li class="list-inline-item m-r-15">
                                        <input type="file" class="d-none" name="message_image" id="message_image" onchange="image_choose(event)" >
                                        <label for="message_image" class="text-gray font-size-20" data-toggle="tooltip" title="Attachment">
                                            <i class="anticon anticon-paper-clip"></i>
                                        </label >
                                    </li>    
                                    <li class="list-inline-item">
                                        <button id="send_button" onclick="envoie_message()" class="d-none d-md-block btn btn-primary">
                                            <span class="m-r-10">Send</span>
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                        <a href="javascript:void(0);" onclick="envoie_message()" class="text-gray font-size-20 d-md-none d-block">
                                            <i class="far fa-paper-plane"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->
    
    <!-- Footer END -->
    <script>
    let message_content='';
    let nombre_initial=0;
    const conversation_body=document.getElementById("conversation_body");
    let messages={};
    const token=document.getElementById("my_token").value;
    const exp_id=document.getElementById("exp_id").value;
    const dest_id=0;
    const message_input=document.getElementById("message_input");
      const imageDiv = document.getElementById("image_div");
    const derniere_div = document.getElementById("derniere_div");
    let message_file;
    const message_onchange=(event)=>{
        var key = event.key || event.keyCode;
            if (key === "Enter" || key === 13) {
                envoie_message();
  }
      message_content=event.target.value;
    }
    const envoie_message=async ()=>{
        if(message_file){
            await envoie_message_image();
        }else{
            await envoie_message_text();
        }
    }
    const envoie_message_text = async () => {
        if (message_content != '' && token!=''   ) {
            try {
                const res = await fetch('/api/messages', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer ' + token // Remplace 'token' par ton véritable jeton d'authentification
                    },
                    body: JSON.stringify({ message: message_content,exp_id,dest_id })
                });
                message_input.value='';
                imageDiv.innerHTML='<span></span>';
                message_content='';
                const data = await res.json();
                console.log(data); // Fais quelque chose avec la réponse JSON retournée
            } catch (error) {
                alert(error);
                console.error(error);
            }
        }
    };


    const image_choose = (event) => {
  const image = event.target.files[0];
  message_file=image;
  if (image) {
    const reader = new FileReader();
    imageDiv.innerHTML='<span></span>';
    reader.onload = (e) => {
      const imageURL = e.target.result;
      const imgElement = document.createElement("img");
      imgElement.src = imageURL;
      imgElement.style.height = "50px"; // Applique la hauteur de 50 pixels
      
      imageDiv.appendChild(imgElement);
    };
    
    reader.readAsDataURL(image);
  }
};


const envoie_message_image = async () => {
  if (message_file && token) {
    try {
      const formData = new FormData();
      formData.append('image', message_file);
      formData.append('message', message_content);
      formData.append('exp_id', exp_id);
      formData.append('dest_id', dest_id);
      formData.append('message_type', 'image');

      const res = await fetch('/api/messages', {
        method: 'POST',
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        body: formData
      });

      message_input.value = '';
    imageDiv.innerHTML='<span></span>';
      message_file = null;
      message_content='';

      const data = await res.json();
   
    } catch (error) {
        alert(error)
      console.error(error);
    }
  }
};

    const recuperer_messages = async () => {
        
        try {
            const res = await fetch(`/api/messages/${exp_id}`, {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + token // Remplace 'token' par ton véritable jeton d'authentification
                }
            });
            const data = await res.json();
            // conversation_body.innerHTML='';
            let message_dom='';
            data.forEach(message => {
                if(message.message_type=='image'){
                    const image_url_s=message.file_path;
                    const image_url_tab=image_url_s.split('/')
                    image_url_tab.splice(0, 1)
                    const image_url=image_url_tab.join('/')
                    if(message.exp_id==exp_id){
                    message_dom+=`<div class="msg msg-sent">
                                    <div class="bubble">
                                        <div class="bubble-wrapper d-flex flex-column">
                                            <a href="/storage/${image_url}" target="_blank" rel="noopener noreferrer"> <img src="/storage/${image_url}" style="max-width:300px" alt="/${image_url}"></a>
                                            <span class="text-wrap text-break">${message.message ? message.message : ''} </span>
                                        </div>
                                    </div>
                                </div>`
                }else{
                    message_dom+=`<div class="msg msg-recipient">
                                    <div class="bubble m-l-50">
                                        <div class="bubble-wrapper d-flex flex-column">
                                            <a href="/storage/${image_url}" target="_blank" rel="noopener noreferrer"> <img src="/storage/${image_url}" style="max-width:300px" alt="/${image_url}"></a>
                                            <span class="text-wrap text-break">${message.message ? message.message : ''} </span>
                                        </div>
                                    </div>
                                </div>`
                }
                }else{
                if(message.exp_id==exp_id){
                    message_dom+=`<div class="msg msg-sent">
                                    <div class="bubble">
                                        <div class="bubble-wrapper">
                                            <p class="text-wrap text-break">${message.message} </p>
                                        </div>
                                    </div>
                                </div>`
                }else{
                    message_dom+=`<div class="msg msg-recipient">
                                    <div class="bubble m-l-50">
                                        <div class="bubble-wrapper">
                                            <p class="text-wrap text-break">${message.message} </p>
                                        </div>
                                    </div>
                                </div>`
                }
                
                }
            });
            conversation_body.innerHTML=message_dom;
            
            const divs = conversation_body.querySelectorAll('.msg');
            const lastDiv = divs[divs.length - 1];
            lastDiv.style.marginBottom = '100px';
            conversation_body.scrollTop = conversation_body.scrollHeight;

        } catch (error) {
            console.error(error);
        }
    };

    const nombre=async ()=>{
        try {
            const res = await fetch(`/api/messages/nombre/${exp_id}`, {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + token // Remplace 'token' par ton véritable jeton d'authentification
                }
            });
            const data = await res.json();
            messages=data;
            if(nombre_initial<parseInt(data.nombre)){
                recuperer_messages();
                nombre_initial=parseInt(data.nombre);
            }
        } catch (error) {
            // alert(error)
            console.error(error);
        }
    }
    
    
    const interval=setInterval(nombre,1000);
    
    </script>
@endsection

@section('javascript')
<script src="/assets/js/pages/chat.js"></script>

@endsection