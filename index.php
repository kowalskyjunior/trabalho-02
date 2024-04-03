<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css">
    <script defer src="assets/script/script.js"></script>
    <title>Trabalho 01</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="#"><img src="assets/images/logo.png" alt="logo-image"></a>
                </div><!--logo-->
                <nav>
                    <ul>
                        <li>Home</li>
                        <li>Find a doctor</li>
                        <li>Apps</li>
                        <li>Testimonials</li>
                        <li>About us</li>
                    </ul>
                </nav>
                <div class="hamburger-icon">
                    <img class="menu-icon" src="https://cdn-icons-png.flaticon.com/128/8182/8182885.png" alt="hamburger-icon">
                </div>
                <div class="menu-mobile">
                    <ul>
                        <li>Home</li>
                        <li>Find a doctor</li>
                        <li>Apps</li>
                        <li>Testimonials</li>
                        <li>About us</li>
                    </ul>
                </div><!--menu-mobile-->
            </div>
        </div><!--container-->
    </header>

    <section class="healthcare-section">
        <div class="container">
            <div class="healthcare-wrapper">
                <div class="left-side">
                    <h2>Virtual healthcare for you</h2>
                    <p>Trafalgar provides progressive, and affordable healthcare, accessible on mobile and online for
                        everyone.</p>
                    <a href="#"><button>Consult today</button></a>
                </div><!--left-side-->
                <div class="right-side">
                    <img src="assets/images/imagem1.png" alt="image01">
                </div><!--right-side-->
            </div><!--healthcare-wrapper-->
        </div><!--container-->
    </section>

    <section class="our-services-section">
        <div class="container">
            <h2>Our services</h2>
            <div class="line"></div>
            <p class="our-services-section-p">We provide to you the best choiches for you. Adjust it to your health
                needs and make sure your undergo treatment with our highly qualified doctors you can consult with us
                which type of service is suitable for your health</p>

            <div class="card-wrapper">
                <div class="card-single">
                    <img src="assets/images/busca.png" alt="busca-image">
                    <h2>Search doctor</h2>
                    <p>Choose your doctor from thousands of specialist, general, and trusted hospitals.</p>
                </div><!--card-single-->
                <div class="card-single">
                    <img src="assets/images/frasco.png" alt="frasco-image">
                    <h2>Online pharmacy</h2>
                    <p>Buy your medicines with our mobile application with a simple delivery system.</p>
                </div><!--card-single-->
                <div class="card-single">
                    <img src="assets/images/consulta.png" alt="consulta-image">
                    <h2>Consultation</h2>
                    <p>Free consulation with our trusted doctors and get the best recomendations.</p>
                </div><!--card-single-->
                <div class="card-single">
                    <img src="assets/images/ficha.png" alt="ficha-image">
                    <h2>Details info</h2>
                    <p>Free consulation with our trusted doctors and get the best recomendations.</p>
                </div><!--card-single-->
                <div class="card-single">
                    <img src="assets/images/remedio.png" alt="remedio-image">
                    <h2>Emergency care</h2>
                    <p>You can get 24/7 urgent care for yourself or you children and your lovely family.</p>
                </div><!--card-single-->
                <div class="card-single">
                    <img src="assets/images/documento.png" alt="documento-image">
                    <h2>Tracking</h2>
                    <p>Track and save your medical history and health data.</p>
                </div><!--card-single-->
            </div><!--card-wrapper-->

            <div class="our-services-btn">
                <a href="#"><button>Learn more</button></a>
            </div>
        </div><!--container-->
    </section>

    <section class="form-consulta-section">
        <h2>Agendar consulta</h2>
        <div class="line"></div>
        <div class="consulta-wrapper">
            <div class="container">
                <form action="./actions/adicionar_consultas.php" method="POST" onsubmit="confirmData()">
                    <div class="input-single w50">
                        <label>Nome</label>
                        <input placeholder="Nome completo" required type="text" name="nome">
                    </div><!--input-name-->

                    <div class="input-single w50">
                        <label>CPF</label>
                        <input placeholder="000.000.000-00" required type="number" name="cpf">
                    </div><!--input-cpf-->

                    <div class="input-single w50">
                        <label>E-mail</label>
                        <input placeholder="E-mail" required type="email" name="email">
                    </div><!--input-email-->

                    <div class="input-single w50">
                        <label>Telefone</label>
                        <input placeholder="+55 (XX) XXXXX-XXXX" required type="number" name="telefone">
                    </div><!--input-telefone-->

                    <div class="input-single w50">
                        <label>Data</label>
                        <input required type="date" name="data">
                    </div><!--input-data-->

                    <div class="input-single w50">
                        <label>Horário</label>
                        <input placeholder="Ex: 9h" required type="time" name="horario">
                    </div><!--input-horario-->

                    <button class="form-btn" type="submit">Enviar</button>

                </form>
            </div><!--container-->
        </div><!--consulta-wrapper-->
    </section>

    <section class="leading-section">
        <div class="container">
            <div class="leading-wrapper">
                <div class="leading-image">
                    <img src="assets/images/imagem2.png" alt="image02">
                </div><!--leading-image-->
                <div class="leading-text">
                    <h2>Leading healthcare providers</h2>
                    <div class="line-left"></div>
                    <p>Trafalgar provides progessive, and affordable healthcare, accessible on mobile and online for
                        everyone. To us, it's not just work. We take pride in the solutions we deliver.</p>
                    <button class="leading-btn">Learn more</button>
                </div><!--leading-text-->
            </div><!--leading-wrapper-->
        </div><!--container-->
    </section>

    <footer>
        <div class="container">
            <div class="footer-wrapper">
                <div class="logo-single">
                    <div class="logo-title">
                        <h2 class="t">T</h2>
                        <h2 class="trafalgar">Trafalgar</h2>
                    </div><!--logo-title-->
                    <p class="footer-p">Trafalgar provides progressive, and affordable healthcare, accessible on mobile
                        and online for
                        everyone.</p>
                    <p class="footer-copyrigth">©Trafalgar PTY LTD 2020. All rights reserved.</p>
                </div><!--logo-single-->

                <div class="footer-single">
                    <h2>Company</h2>
                    <ul>
                        <li>About</li>
                        <li>Testimonials</li>
                        <li>Find a doctor</li>
                        <li>Apps</li>
                    </ul>
                </div><!--company-single-->

                <div class="footer-single">
                    <h2>Region</h2>
                    <ul>
                        <li>Indonesia</li>
                        <li>Singapore</li>
                        <li>Hongkong</li>
                        <li>Canada</li>
                    </ul>
                </div><!--region-footer-->

                <div class="footer-single">
                    <h2>Help</h2>
                    <ul>
                        <li>Help center</li>
                        <li>Contact support</li>
                        <li>Instructions</li>
                        <li>How it works</li>
                    </ul>
                </div><!--help-single-->
            </div><!--footer-wrapper-->
        </div><!--container-->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmData(data) {
            Swal.fire({
                title: "Dados Enviados!",
                text: "Dados enviados com sucesso!",
                icon: "success"
            });
        }
    </script><!-- modal de confirmação de envio de dados. !-->

</body>

</html>