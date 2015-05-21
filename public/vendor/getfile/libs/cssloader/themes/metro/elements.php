<style type="text/css">
    #preloader {
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        background-color:#fff; /* change if the mask should have another color then white */
        z-index:98; /* makes sure it stays on top */
    }

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
        width: 30px;
        height: 30px;
        background-color: <?php echo $_POST['spinnerColor'] ?>;
        -webkit-animation: rotateplane 1.2s infinite ease-in-out;
        animation: rotateplane 1.2s infinite ease-in-out;
    }

    @-webkit-keyframes rotateplane {
        0% { -webkit-transform: perspective(120px) }
        50% { -webkit-transform: perspective(120px) rotateY(180deg) }
        100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
    }

    @keyframes rotateplane {
        0% {
            transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
        } 50% {
              transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
              -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
          } 100% {
                transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            }
    }
</style>
<!-- Preloader -->
<div id="loading-spinner">
    <div class="spinner"></div>
</div>
<?php if ($_POST['useLayer'] == "true"): ?>
<div id="preloader"></div>
<?php endif; ?>
<!-- /Preloader -->