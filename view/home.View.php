<!------------------------------------------------ SETTINGS  -->
    <?php
        
        $Controller = new Controller;
        $imagens = $Controller->settingImage();
        if($imagens != []){
            $perfil = $imagens['perfil'];
            $about = $imagens['about'];
            $portfolioDefault = $imagens['portfolio'];
        }
        
    ?>
<main class="view" id="view">
    <!------------------------------------------------ HOME  -->
        <section class="container-home" id="home">
        <div class="container-presentation">
            <div class="content-presentation">
                    <div class="text">
                        <p class="title"><br> Paulo Ferreira</p>
                        <p class="description">Sou um profissional apaixonados por tecnologia, comprometido a oferecer soluções inovadoras e eficientes para nossos clientes.</p>
                        <br>
                        <p class="description">
                        Com experiência em suporte técnico, infraestrutura e desenvolvimento web, estou aqui para ajudá-lo alcançar seus objetivos digitais e tecnicos.</p>
                        <div class="container-button">
                            <a href="#contact" class="button" type="submit">Diga olá!</a>
                        </div>
                    </div>
                    <!-- ------------- EXPERIENCIAS-------------
                        <div class="container-statistic">
                            <div class="content-statistic">
                                <div class="item-statistic">
                                    <p class="title">3 a.</p>
                                    <p class="description">Experiência</p>
                                </div>
                                <div class="item-statistic">
                                    <p class="title">50+</p>
                                    <p class="description">Projeto concluído</p>
                                </div>
                                <div class="item-statistic">
                                    <p class="title">25</p>
                                    <p class="description">Cliente feliz</p>
                                </div>
                            </div>
                        </div>
                     -->
                </div>
                <div class="content-perfil">
                    <img src="<?php echo $perfil?>" alt="" srcset="">
                </div>
            </div>
        </section>
    <!------------------------------------------------ ABOUT  -->
        <section class="container-about" id="about">
            <div class="box-about">
                <div class="content-about">
                    <div class="about-picture-social-media">
                        <img src="<?php echo $about?>" alt="">
                        <div class="container-social-media">
                            <div class="content-social-media">
                                <a href="mailto:pauloferreiradevs@gmail.com" target="_blank"><i class="fa-regular fa-envelope"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=5562999589427&text=Quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20seus%20servi%C3%A7os" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="https://github.com/PauloTIgit" target="_blank"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="container-bio">
                        <div class="text-bio">
                            <p class="title">Paulo Ferreira</p>
                            <p class="description text-bio1">
                                Como profissional de TI especializado, estou dedicado a projetar e desenvolver serviços e sistemas web inovadores, juntamente com lojas online elegantes e modernas.
                            </p>
                            <p class="description text-bio2">
                                Minha paixão reside em criar soluções digitais, com uma abordagem centrada no usuário, meu objetivo é criar experiências digitais que não apenas atendam às necessidades específicas, mas superem as expectativas dos clientes.
                            </p>
                            <div class="btn">
                                <a href="#my-project" class="my-project">Meus projetos</a>
                                <a href="#services" class="services">Meus servicos</a>
                                <!-- <a href="#download-cv" class="my-cv">Download CV</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <!------------------------------------------------ PROCESS  -->
        <section class="container-process" id="process">
            <div class="work-process">
                <div class="text-process">
                    <p class="title-process">Processo de trabalho</p>
                    <p class="description-process">
                        Um processo bem definido é essencial para garantir a consistência, qualidade e eficiência das operações.
                    </p>
                    <p class="description-process">
                        Fornecendo clareza no desenvolvimento do trabalho, incentivando a transparência, promovendo a busca pela melhoria contínua e contribuindo para a redução de falhas
                    </p>
                </div>
                <div class="box-process">
                    <div class="item-process">
                        <div class="container-item">
                            <i class="fa-solid fa-clipboard-list"></i>
                            <p class="title-item">1. Planejar</p>
                            <p class="description-item">Desenvolver estratégias, a identificar recursos necessários e compreender as expectativas.</p>
                        </div>
                        <div class="container-item">
                            <i class="fa-solid fa-chart-line"></i>
                            <p class="title-item">2. Monitorar</p>
                            <p class="description-item">Acompanhar o progresso do projeto, identificar possíveis desvios e realizar ajustes conforme necessário para garantir que os objetivos sejam alcançados.</p>
                        </div>
                    </div>
                    <div class="item-process">
                        <div class="container-item">
                            <i class="fa-solid fa-pencil"></i>
                            <p class="title-item">3. Otimizar </p>
                            <p class="description-item">Analisar os resultados obtidos, identificar pontos fortes e áreas de melhoria e utilizar essas informações para otimizar o projetos.</p>
                        </div>
                        <div class="container-item">
                            <i class="fa-solid fa-rocket"></i>
                            <p class="title-item">4. Lançar</p>
                            <p class="description-item">E Realizada as últimas verificações para garantir que todos os objetivos foram alcançados, antes da transição para a próxima fase ou a entrega do projeto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <!------------------------------------------------ PORTFOLIO  -->
        <section class="container-portfolio" id="my-project">
            <div class="content-portfolio">
                <div class="title-portfolio">
                    <p class="title">Portfólio</p>
                    <p class="description">Cada projeto reflete minha paixão e dedicação.</p>
                </div>
                <div class="container-item-portfolio" >
                    <div class="box-item-portfolio">
                        <div class="item-portfolio slide">
                            <div class="imagen-item-portfolio">
                                <img src="<?php echo $portfolioDefault ?>" alt="">
                            </div>
                            <div class="container-description-item-portfolio">
                                <div class="description-item-portfolio">
                                    <span>UI-UX DESIGN</span>
                                    <p class="title-item-portfolio">Product Admin Dashboard</p>
                                    <p class="description-portfolio">Vivamus eleifend convallis ante, non pharetra libero molestie laoreet. Donec id imperdiet lacus.</p>
                                </div>
                                <div class="btn-item-portfolio">
                                    <a class="btn-portfolio" href="?project=makeflix.renataclara.com">Processos <i class="fa-solid fa-arrow-right"></i></a>
                                    <a class="btn-portfolio" href="https://makeflix.renataclara.com" target="_black">Visitar <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container-btn-portfolio">
                <a href="#more_project">Ver Mais Projetos</a>
            </div> -->
        </section>
    
    <!------------------------------------------------ CALL  -->
        <section class="container-call-action">
            <div class="content-call-action">
                <div>
                    <p class="title-call-action">Tem um projeto em mente?</p>
                    <p class="description-call-action">Vamos transformar sua ideia em realidade. Conte-me sobre seu projeto e vamos criar algo incrível juntos!</p>
                </div>
                <div class="container-btn-call-action">
                    <a class="btn-call-action" href="#contact">Vamos trabalhar juntos 
                        <i class="fa-solid fa-arrow-right"></i> 
                    </a>
                </div>
            </div>
        </section>
    
    <!------------------------------------------------ BLOG 
        <section class="container-call-blog" id="blog">
                <div class="container-blog">
                    <div class="content-blog">
                        <div class="container-text-blog">
                            <p class="title-blog">Blog</p>
                            <p class="description-blog">Confira as últimas novidades e insights do nosso blog. Mantenha-se atualizado com nossos artigos informativos e inspiradores.</p>
                        </div>
                        <div class="container-card-blog slideshow-container">
                            <a class="container-item-card-link" href="">
                                <div class="container-item-card">
                                    <div class="item-card-imagen">
                                        <img src="image/blog/imagen_blog.png" alt="">
                                    </div>
                                    <div class="item-card-description">
                                        <p class="coment-data">22 Oct, 2020/246 Comments</p>
                                        <p class="coment-text">Lorem ipsum dolor sit consea. Nulla purus arcu</p>
                                    </div>
                                </div>
                            </a>
                            <a class="container-item-card-link" href="">
                                <div class="container-item-card">
                                    <div class="item-card-imagen">
                                        <img src="image/blog/imagen_blog.png" alt="">
                                    </div>
                                    <div class="item-card-description">
                                        <p class="coment-data">22 Oct, 2020/246 Comments</p>
                                        <p class="coment-text">Lorem ipsum dolor sit consea. Nulla purus arcu</p>
                                    </div>
                                </div>
                            </a>
                            <a class="container-item-card-link" href="">
                                <div class="container-item-card">
                                    <div class="item-card-imagen">
                                        <img src="image/blog/imagen_blog.png" alt="">
                                    </div>
                                    <div class="item-card-description">
                                        <p class="coment-data">22 Oct, 2020/246 Comments</p>
                                        <p class="coment-text">Lorem ipsum dolor sit consea. Nulla purus arcu</p>
                                    </div>
                                </div>
                            </a>
                            <a class="container-item-card-link" href="">
                                <div class="container-item-card">
                                    <div class="item-card-imagen">
                                        <img src="image/blog/imagen_blog.png" alt="">
                                    </div>
                                    <div class="item-card-description">
                                        <p class="coment-data">22 Oct, 2020/246 Comments</p>
                                        <p class="coment-text">Lorem ipsum dolor sit consea. Nulla purus arcu</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> 
            </section>
    -->
    <!------------------------------------------------ SERVICES -->
        <section class="container-services" id="services">
            <div class="content-services">
                <div class="colun-text-description">
                    <p class="title-text">Soluções Digitais</p>
                    <div class="description-text">
                        <p>As soluções digitais são meticulosamente elaboradas para oferecer a você uma vantagem competitiva única no mundo online. </p>
                        <br>
                        <p>Desde o design e desenvolvimento de sites sob medida até a implementação de sistemas web avançados e lojas online, minha equipe está comprometida em traduzir suas visões em realidade digital.</p>
                        <br>
                        <p> Cada solução é cuidadosamente adaptada para atender às suas necessidades específicas e objetivos comerciais, garantindo uma experiência digital excepcional para você e seus clientes, estou aqui para impulsionar o seu sucesso digital.</p>
                    </div>
                </div>
                <div class="container-card-services">
                    <div class="container-item-card-services" id="car-services-pry">
                        <p class="title-services">Design e Desenvolvimento Web</p>
                        <p class="description-services">Desde sites corporativos informativos até plataformas web dinâmicas, estou preparado para transformar suas ideias em realidade digital. Utilizo as mais recentes tecnologias e tendências de design para garantir que seu site se destaque na multidão.</p>
                    </div>
                    <div class="container-item-card-services" id="car-services-seg">
                        <p class="title-services">Desenvolvimento de Lojas Online</p>
                        <p class="description-services">Se você está procurando lançar uma loja virtual ou atualizar uma existente, posso ajudar a criar uma experiência de compra online intuitiva e segura. Desde a configuração inicial até a integração de sistemas de pagamento, estou aqui para simplificar o processo.</p>
                    </div>
                    <div class="container-item-card-services" id="car-services-ter">
                        <p class="title-services">Suporte Técnico Personalizado</p>
                        <p class="description-services">O suporte técnico é a espinha dorsal de qualquer operação digital. Ofereço serviços abrangentes de suporte técnico para garantir que suas operações permaneçam eficientes e seguras. Desde a resolução de problemas do dia a dia até a implementação de soluções de segurança avançadas, estou comprometido em manter seu sistema funcionando sem problemas.</p>
                    </div>
                </div>
            </div>
            <div class="btn-services">
                <a class="btn-text" href="#contact">Diga olá!</a>
            </div>
        </section>
    
    
    <!------------------------------------------------ CONTACT -->
        <section class="container-contact" id="contact">
            <div class="content-contact">
                <div class="container-my-information">
                    <div class="text-information">
                        <p class="title-information">Vamos discutir o seu projeto?</p>
                        <p class="description-information">Aqui estão algumas informações sobre mim, como endereço, e-mail, telefone e redes sociais.</p>
                    </div>
                    <div class="container-card">
                        <a class="link-card-my-information" href="https://g.co/kgs/DbquwM6" target="_blank">
                            <div class="item-card-my-information card-address">
                                <div class="card-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="card-description">
                                    <p>Meu Endereço:</p>
                                    <p>La Rioja - Argentina</p>
                                </div>
                            </div>
                        </a>
                        <a class="link-card-my-information" href="mailto:pauloferreira@paulodevelop.com.br" target="_blank">
                            <div class="item-card-my-information card-email">
                                <div class="card-icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="card-description">
                                    <p>Meu E-mail:</p>
                                    <p>pauloferreira@paulodevelop.com.br</p>
                                </div> 
                            </div>
                        </a>
                        <a class="link-card-my-information" href="tel:3804234932" target="_blank">
                            <div class="item-card-my-information card-call-me-now">
                                <div class="card-icon">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                </div>
                                <div class="card-description">
                                    <p>Meu Celular:</p>
                                    <p>380 423-4932</p>
                                </div> 
                            </div>
                        </a>
                    </div>
                    <div class="container-social-media">
                        <a href="https://www.instagram.com/paulodev.ofc/" target="_blank" class="instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://t.me/pauloferreiradev" target="_blank" class="telegram">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.twitch.tv/paulodeveleper" target="_blank" class="twitch">
                            <i class="fa fa-twitch" aria-hidden="true"></i>
                        </a>
                        <a href="https://github.com/PauloTIgit" target="_blank" class="github">
                            <i class="fa fa-github" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="container-form-contact">
                    <div class="form-contact-title">
                        <p class="title">Utilize o formulário abaixo para enviar-me uma mensagem</p>
                    </div>
                    <div class="content-form-contact">
                        <form action="?send_email=contact" method="POST">
                            <div class="form-contact form-contact-name">
                                <label for="name" class="form-label">Nome*</label>
                                <input type="text" class="input name" id="name" name="name" oninput="formatName(this)" required>
                            </div>
                            <div class="form-contact form-contact-email">
                                <label for="email" class="form-label">E-mail*</label>
                                <input type="email" class="input email" id="email" name="email" required>
                            </div>
                            <div class="form-contact form-contact-phone">
                                <label for="phone" class="form-label">Celular*</label>
                                <input type="tel" class="input phone" id="phone" name="phone" minlength="15" maxlength="15" required>
                            </div>
                            <div class="box-form-contact">
                                <div class="form-contact form-contact-budget">
                                    <label for="budget" class="form-label">Orçamento</label>
                                    <input type="text" class="input budget" id="budget" name="budget">
                                </div>
                                <div class="form-contact form-contact-subject">
                                    <label for="subject" class="form-label">Assunto*</label>
                                    <input type="text" class="input subject" id="subject" name="subject" required>
                                </div>
                            </div>
                            <div class="form-contact form-contact-message">
                                <label for="message" class="form-label">Mensagem*</label>
                                <textarea class="input message" id="message" name="message" required></textarea>
                            </div>
                            <div class="btn-form-contact">
                                <button type="submit">Enviar <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!------------------------------------------------ CONTACT --> 
</main>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>ss -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="view/js/contact.js"></script>
<span class="coockie">
    <!-------------------- COOCKIE -->
        <script type="text/javascript" charset="UTF-8"  data-cookiescriptreport="report" src="//report.cookie-script.com/r/85836292fd84e940ca15fe2c37336b1a.js"></script>
        <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/85836292fd84e940ca15fe2c37336b1a.js"></script> 
    <!-------------------- COOCKIE -->
</span>