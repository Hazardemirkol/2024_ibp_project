<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hazar') }}
        </h2>
    </x-slot>

    <main class="mt-6">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background: linear-gradient(to right, #000000, #111111);
                /* Parlak siyah arka plan */
                color: #fff;
                /* Beyaz metin rengi */
            }

            /* Diğer CSS stilleri buraya gelecek */


            .grid {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                gap: 30px;
                margin: 20px;
            }

            .card {
                background: rgba(255, 255, 255, 0.8);
                border-radius: 20px;
                padding: 30px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                width: 300px;
                transition: transform 0.3s, box-shadow 0.3s;
                text-align: center;
            }

            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            }

            .card img {
                width: 80px;
                height: 80px;
                margin-bottom: 15px;
                transition: transform 0.3s;
            }

            .card:hover img {
                transform: scale(1.15);
            }

            .card h2 {
                font-size: 1.5rem;
                margin-bottom: 10px;
                color: #2c3e50;
            }

            .card p {
                font-size: 1rem;
                color: #34495e;
            }

            .nav {
                position: fixed;
                top: 50%;

                transform: translateY(-50%);
                display: flex;
                flex-direction: column;


            }

            .nav a {
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: transform 0.3s;
            }

            .nav a:hover {
                transform: scale(1.1);
            }

            .message-box {
                display: none;
                position: fixed;
                bottom: 80px;
                right: 20px;
                background: rgba(255, 255, 255, 0.9);
                width: 350px;
                max-height: 500px;
                overflow-y: auto;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            }

            .message-box .message {
                border-bottom: 1px solid #ddd;
                padding-bottom: 10px;
                margin-bottom: 10px;
            }

            .draggable {

                cursor: pointer;
                width: 60px;
                height: 60px;
                background: #ddd;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .draggable:hover {
                transform: scale(1.1);
            }

            html,
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links>a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <div class="grid">


            <div class="content">
                <div class="title m-b-md">
                    Kullanıcı Bilgilerini Düzenleme
                </div>

                <div class="links">
                    <a href="{{ route('admin.users.index') }}">See More</a>
                </div>
            </div>

        </div>
        <br>
        <div class="content">
            <div class="title m-b-md">
                Post Paylaşımı
            </div>

            <div class="links">
                <a href="{{ route('admin.posts.index') }}">See More</a>
            </div>
        </div>
        <div class="content">
            <div class="title m-s-m">
                Envanter Yönetimi
            </div>

            <div class="links">
                <a href="{{ route('admin.product.index') }}"">See More</a>
            </div>
        </div>
        </div>
        <div class="fixed bottom-10 right-6 nav">

            <div id="draggable-message-box" class="draggable">
                <div class="main-icon-without-slide icon-png-container pd-lv4" data-type="img"
                    data-png="https://cdn-icons-png.flaticon.com/512/3034/3034023.png" data-id="3034023"data-premium="">


                    <img src="   https://cdn-icons-png.flaticon.com/512/3034/3034023.png " width="56"
                        height="56"alt="" title="" class="img-small">
                </div>
            </div>



            <div id="message-box"
                class="bg-white p-4 shadow-lg rounded-lg w-60 h-60 overflow-y-auto cursor-pointer hidden">


                <!-- Cevap Formu -->
                <form class="response-form mt-4" method="POST" ">
                            @csrf
                            <textarea name="reply" rows="3" class="w-full border rounded-md p-2""></textarea>
                            <button type="submit"
                                class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Kullanıcıya Cevap Ver</button>
                        </form>
                    </div>

            </div>
        </div>
            <script>
                const draggableMessageBox = document.getElementById('draggable-message-box');
                const messageBox = document.getElementById('message-box');

                draggableMessageBox.addEventListener('click', () => {
                    messageBox.style.display = messageBox.style.display === 'block' ? 'none' : 'block';
                });

                draggableMessageBox.addEventListener('mousedown', (e) => {
                    let shiftX = e.clientX - draggableMessageBox.getBoundingClientRect().left;
                    let shiftY = e.clientY - draggableMessageBox.getBoundingClientRect().top;

                    function moveAt(pageX, pageY) {
                        draggableMessageBox.style.left = pageX - shiftX + 'px';
                        draggableMessageBox.style.top = pageY - shiftY + 'px';
                    }

                    function onMouseMove(e) {
                        moveAt(e.pageX, e.pageY);
                    }

                    document.addEventListener('mousemove', onMouseMove);

                    draggableMessageBox.onmouseup = function() {
                        document.removeEventListener('mousemove', onMouseMove);
                        draggableMessageBox.onmouseup = null;
                    };
                });

                draggableMessageBox.ondragstart = function() {
                    return false;
                };
            </script>
    </main>


</x-app-layout>
