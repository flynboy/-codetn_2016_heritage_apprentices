@extends('layouts.app')

@section('content')

<!--to do:
possibly make more avis
-->
  <div>
    <form id="contactForm" onsubmit="return validate()" action="contact.php" method="post">
        <input class="formInput" type="text" id="name" name="name" autocorrect="off" placeholder="What's your name?"/>
        <input class="formInput" type="email" name="email" id="email" autocapitalize="off" autocorrect="off" placeholder="Email address? (We don't spam!)"/>
        <input class="formInput" type="text" id="name" name="name" autocorrect="off" placeholder="Who would you like to contact?"/>
        
        <textarea class="formInput" name="message" id="message" placeholder="Leave us your message!"></textarea>
        <br>
        <input class="submitForm" type="submit" value="Send"/>
    </form>
    
    <style type="text/css">
    #contactForm {
        margin: 0 auto;
    }

    #contactForm input, textarea {
        letter-spacing: 2px;
        font: 200 1em/1.1em 'Arial', serif;
        color: #000;
        background-color: RGBA(204, 204, 204, .1);
        outline: none; border: none;
        display:block;
        margin: 0 auto;
        padding: 1em;
        width: 90%;
        max-width: 400px;
    }


    #contactForm textarea {
        height: 150px;
    }
    
    #contactForm *:focus {
       background-color:#FF5555;
    }
    
    #contactForm *:hover {
       background-color: #efa0a0;
    }
    
    ::-webkit-input-placeholder {
          color: #777;
    }
    
    :-ms-input-placeholder {  
           color: #F03A3A;
    }
 </style>
</div>
@endsection
