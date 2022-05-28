<div class="grid grid-cols-3 gap-3 my-10 mx-auto w-full pl-24">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
            border-radius: 20px;
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            border-radius: 20px;
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            border-radius: 20px;
            background-color: rgb(20, 18, 18);
            color: black;
        }

        .flip-card-back {
            border-radius: 20px;
            background-color: #E5E708;
            color: white;
            transform: rotateY(180deg);
        }

    </style>
    <div data-aos="zoom-in" class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1611734828917-718f25babb2b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                    alt="Avatar" style="width:300px;border-radius: 20px;height:300px;">
            </div>
            <div class="flip-card-back">
                <br>
                <br>
                <h1 class="text-black font-bold">Shop New Phones</h1>
                <p class="text-black text-semibold">Get Today</p>
                <br>
                <br>
                <a href="#" class="mt-16 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">Shop New</a>
            </div>
        </div>
    </div>
    <div data-aos="zoom-in" class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="https://img.freepik.com/free-photo/putting-some-extra-hours-home-shot-handsome-young-man-working-his-laptop-home_590464-23809.jpg?w=740"
                    alt="Avatar" style="width:300px;border-radius: 20px;height:300px;">
            </div>
            <div class="flip-card-back">
                <br>
                <br>
                <h1 class="text-black font-bold">Get Repairs</h1>
                <p class="text-black text-semibold">Fix Your Phone Today</p>
                <br>
                <br>
                <a href="#" class="mt-16 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">Fix Your Phone</a>
            </div>
        </div>
    </div>
    <div data-aos="zoom-in" class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="https://media.istockphoto.com/photos/close-up-cell-phone-picture-id144274951?k=20&m=144274951&s=170667a&w=0&h=WG9lgyklEVjciRsGeo5ntarLZCjU7crgGviQQ3pKK6s="
                    alt="Avatar" style="width:300px;border-radius: 20px;height:300px;">
            </div>
            <div class="flip-card-back">
                <br>
                <br>
                <h1 class="text-black font-bold">Shop Used Phones</h1>
                <p class="text-black text-semibold">Get Today</p>
                <br>
                <br>
                <a href="#" class="mt-16 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">Shop Used</a>
            </div>
        </div>
    </div>
</div>
