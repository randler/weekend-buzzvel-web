<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.8/css/ionicons.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito" />

<style>

    .iconbar {
        height: 50px;
        width: 90%;
        border-radius: 0 0 2em 2em;
        position: absolute;
        top: 0;
        background-color: #a3de83;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        cursor: pointer;
        overflow: hidden;
        box-shadow: 0px -1px 12px 0.1px black;
    }

    .icons {
        font-family: Nunito;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.4em;
    }

    .icon-left {
        border-bottom-left-radius: 28px;
        margin-left: 2px;
    }
    .icon-right {
        border-bottom-right-radius: 28px;
        margin-right: 2px;
    }

    .icons i {
        margin-right: 0.2em;
        font-size: 2.2em;
    }

    .icons span {
        font-size: 1.2em;
        vertical-align: top;
    }

    .active {
        background-color: #7cac63;
    }


    @media only screen and (max-device-width:480px) {
        .iconbar {
            height: 80px;
            width: 90%;
        }

        .icons i {
            font-size: 1.6em;
        }

        .icons span {
            font-size: 1em;
        }
    }

    .container-menu {
        display: flex;
        justify-content: center;
        align-content: center;
        align-items: center;

    }

</style>

<div class="container-menu">
    <div class="iconbar">
        <div class="icon-left icons active">
            <i class="icon ion-md-locate"></i>
            <span>Order by proximity</span>
        </div>
        <div class="icon-right icons active">
            <i class="icon ion-md-cash"></i>
            <span>Order by cash</span>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
<script>
    function check() {
        if ($('.iconbar>div').hasClass('active')) {
            $(".iconbar>.icons:nth-of-type(1)").css({
                'background-color': '#D9E9EF',
                'color': '#11313F'
            });
            $(".iconbar>.icons:nth-of-type(2)").css({
                'background-color': '#DFDDF7',
                'color': '#4D4B6A'
            });
            $(".iconbar>.icons:nth-of-type(3)").css({
                'background-color': '#DDF3CF',
                'color': '#47553E'
            });
            $(".iconbar>.icons:nth-of-type(4)").css({
                'background-color': '#D9DBFA',
                'color': '#303E3F'
            });

            $('.iconbar>div:not(.active)').css({
                'background-color': 'transparent',
                'color': 'black'
            });
        }
    };
</script>
