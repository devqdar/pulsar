<style type="text/css">

    #loading-spinner {
        margin: -25px 0 0 -25px;
        width: 50px;
        height: 50px;
        position: absolute;
        left: 50%;
        top: 40%;
        z-index:99; /* makes sure it stays on top */
    }

    .spinner {
        width: 32px;
        height: 32px;
        position: relative;
    }

    .cube1, .cube2 {
        background-color: <?php echo $_POST['spinnerColor'] ?>;
        width: 16px;
        height: 16px;
        position: absolute;
        top: 0;
        left: 0;

        -webkit-animation: cubemove 1.8s infinite ease-in-out;
        animation: cubemove 1.8s infinite ease-in-out;
    }

    .cube2 {
        -webkit-animation-delay: -0.9s;
        animation-delay: -0.9s;
    }

    @-webkit-keyframes cubemove {
        25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
        50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
        75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
        100% { -webkit-transform: rotate(-360deg) }
    }

    @keyframes cubemove {
        25% {
            transform: translateX(42px) rotate(-90deg) scale(0.5);
            -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
        } 50% {
              transform: translateX(42px) translateY(42px) rotate(-179deg);
              -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
          } 50.1% {
                transform: translateX(42px) translateY(42px) rotate(-180deg);
                -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
            } 75% {
                  transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
                  -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
              } 100% {
                    transform: rotate(-360deg);
                    -webkit-transform: rotate(-360deg);
                }
    }
</style>
<!-- Preloader -->
<div id="loading-spinner">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<!-- /Preloader -->