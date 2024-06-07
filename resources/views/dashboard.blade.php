<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hazar    ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <style>
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
                    </head>

                    <body>



                        <div class="content">
                            <div class="title m-b-md">
                                Posts
                            </div>

                            <div class="links">
                                <a href="{{ route('announcements.index') }}">See More</a>
                            </div>
                        </div>
                </div>
                <br>
                <div class="content">
                    <div class="title m-b-md">
                        Staff
                    </div>

                    <div class="links">
                        <a href="{{ route('product.index') }}">See More</a>
                    </div>
                </div>
                <div class="content">
                    <div class="title m-s-m">
                        About My University
                    </div>

                    <div class="links">
                        <a href="https://karabuk.edu.tr/">See More</a>
                    </div>
                </div>
            </div>
            <style>
                .footer {
                    position: fixed;
                    bottom: 0;
                    right: 0;
                    margin: 0;
                    padding: 0;
                }


                .contact-form-container {
                    background-attachment: fixed;
                    padding-left: 20px;
                    overflow-y: scroll;
                    flex: 1;
                }


                .contact-form {
                    display: none;
                    width: 400px;
                    background-color: #a1d21b;
                    height: auto;
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                    transition: width 0.3s ease;
                    z-index: 9998;
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    border-radius: 50px;
                    /* Yuvarlak şekil için border radius eklendi */
                }

                .contact-form.open {
                    display: block;
                }

                .contact-form-inner {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    width: 90%;
                    height: 100%;
                }

                .contact-form label {
                    font-weight: bold;
                }

                .contact-form input[type="text"],
                .contact-form input[type="email"],
                .contact-form textarea {
                    width: calc(100% - 16px);
                    padding: 8px;
                    margin: 8px 0;
                    border: 1px solid #d5712a;
                    border-radius: 5px;
                    box-sizing: border-box;
                }

                .contact-form button {
                    background-color: #8e4caf;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 50px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                .contact-form button:hover {
                    background-color: #45a049;
                }



                .message-box .message {
                    max-width: 300px;
                    background: #16a1b0;
                    padding: 10px;
                    border-radius: 350px;
                    margin: 20px 0px;
                    cursor: pointer;
                }

                /* Botun şeklini ayarlamak için özel stil */

            </style>

            <div class="contact-form-container">

                <button onclick="toggleContactForm()"
                    class="bg-transparent hover:bg-transparent text-white font-bold py-2 px-4 rounded-full">
                    <div class="main-icon-without-slide icon-png-container pd-lv4" data-type="img"
                        data-png="https://cdn-icons-png.flaticon.com/512/1384/1384095.png" data-id="1384095"
                        data-premium="">
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384095.png" width="48" height="48"
                            alt="" title="" class="img-small">
                    </div>
                </button>


                <div class="contact-form" id="contact-form">
                    <div class="contact-form-inner">
                        <form method="POST" id="contact-form-element">
                            @csrf
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div>
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" rows="4" required></textarea>
                            </div>
                            <div>
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="fixed bottom-6 right-6">
                    <div id="draggable-message-box" class="draggable bg-white p-4 shadow-lg rounded-lg w-16 h-16 cursor-pointer">
                        <img src="https://cdn-icons-png.flaticon.com/512/873/873388.png" width="24" height="24" alt="Message Icon">
                    </div>
                </div>


                    <div id="message-box"
                        class="bg-white p-4 shadow-lg rounded-lg w-60 h-60 overflow-y-auto cursor-pointer hidden">
                        @if (isset($messages) && !empty($messages))
                            @foreach ($messages as $message)
                                <div class="message border-b border-gray-200 mb-4 pb-4">
                                    <p><strong>Name:</strong> <span class="text-xs">{{ $message->name }}</span>
                                    </p>
                                    <p><strong>Email:</strong> <span class="text-xs">{{ $message->email }}</span></p>
                                    <p><strong>Message:</strong> <span class="text-xs">{{ $message->message }}</span>
                                    </p>
                                    <p><strong>Created At:</strong> <span
                                            class="text-xs">{{ $message->created_at }}</span></p>
                            @endforeach
                        @else
                            <p>Mesaj bulunamadı.</p>
                        @endif


                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <footer>Created By HAZAR DEMİRKOL.</footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function toggleContactForm() {
            var form = document.getElementById('contact-form');
            form.classList.toggle('open');
        }

        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('contact-form-element');
            var messageBox = document.querySelector('.message-box');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Formun normal şekilde gönderilmesini engelle

                var formData = new FormData(form); // Form verilerini al

                // Form verilerini AJAX ile gönder
                fetch('{{ route('contact.submit') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Başarılı bir şekilde gönderildiğinde başarılı mesajını göster
                        console.log(data.message); // Mesajı UI'de gösterebilirsiniz
                        // Form elemanlarını temizle
                        form.reset();
                        // Mesaj kutusunu göster

                        messageBox.style.display = 'block';
                    })
                    .catch(error => {
                        // Hata durumunda bir hata mesajı göster
                        console.error('There has been a problem with your fetch operation:', error);
                        // İhtiyaç duyarsanız UI'de bir hata mesajı gösterebilirsiniz
                    });
            });
        });
        const messageBox = document.getElementById('message-box');
        const messageIcon = document.getElementById('draggable-message-box');

        // Mesaj ikonuna tıklanınca mesaj kutusunu gösterme işlevi
        messageIcon.addEventListener('click', () => {
            messageBox.classList.toggle('hidden');
        });

        // Mesaj kutusuna tıklandığında küçültme işlevi
        messageBox.addEventListener('click', (e) => {
            if (!e.target.closest('.message')) {
                messageBox.classList.add('hidden');
            }
        });

        // JavaScript kullanarak mesaj kutusunu sürükleyebilme
        const draggableMessageBox = document.getElementById('draggable-message-box');

        // Başlangıç konumu
        let initialX;
        let initialY;
        let offsetX = 0;
        let offsetY = 0;
        let isDragging = false;

        // Fare tuşuna basılırsa sürükleme işlemi başlar
        draggableMessageBox.addEventListener('mousedown', (e) => {
            isDragging = true;
            initialX = e.clientX - offsetX;
            initialY = e.clientY - offsetY;
        });

        // Fare hareket ettirilirse kutu da hareket eder
        draggableMessageBox.addEventListener('mousemove', (e) => {
            if (isDragging) {
                offsetX = e.clientX - initialX;
                offsetY = e.clientY - initialY;
                draggableMessageBox.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
            }
        });

        // Fare tuşu bırakılırsa sürükleme işlemi sona erer
        draggableMessageBox.addEventListener('mouseup', () => {
            isDragging = false;
        });

        // Mesaj kutusunu büyütme işlevi
        draggableMessageBox.addEventListener('click', () => {
            if (messageBox.classList.contains('w-60')) {
                messageBox.classList.remove('w-60', 'h-60', 'overflow-hidden');
                messageBox.classList.add('w-auto', 'h-auto');
            } else {
                messageBox.classList.remove('w-auto', 'h-auto');
                messageBox.classList.add('w-60', 'h-60', 'overflow-hidden');
            }
        });

        // Sayfayı yeniden gönderme işlevi
        const refreshForm = document.getElementById('refresh-form');
        refreshForm.addEventListener('submit', (e) => {
            e.preventDefault();
            window.location.reload();
        });
    </script>


</x-app-layout>
