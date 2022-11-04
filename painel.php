<?php
if (!isset($_SESSION)) {
    session_start();
}

include('./assets/php/verifica-login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="./assets/img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodental - Painel Administrativo</title>

    <!-- Meu CSS -->

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav-bar.css">
    <link rel="stylesheet" href="./assets/css/painel.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

</head>

<body>
    <header>
        <nav class="border-botton">
            <a href="index.html">
                <div class="menu-logo">
                    <div class="logo"><img src="./assets/img/logo.png" class="logo"></div>
                    <div class="logo-text">BIO</div>
                    <div class="logo-text logo-text-blue">DENTAL</div>
                </div>
            </a>
            <ul class="nav-list">
                <li><a href="#">PACIENTES</a></li>
                <li><a href="#">CONSULTAS</a></li>
                <li><a href="#"><?php echo strtoupper($_SESSION['usuario']) ?></a></li>
                <li><a href="./assets/php/logout-script.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="content-container">
            <div class="barra-lateral-conteiner">
                <div class="barra-lateral">
                    <img src="./assets/img/corpo-clinico-1.jpg" alt="" srcset="" class="barra-lateral-img">
                    <div class="barra-lateral-selecao">
                        <select id="inserir_dados1" name="meu_nome">
                            <option value="1">Dra. Larrisa Cunha</option>
                            <option value="2">Dr. Sérgio Mendes</option>
                            <option value="3">Dr. Bernardo Oliveira</option>
                            <option value="4">Dra. Michelle Dias</option>
                        </select>
                    </div>
                    <div class="status">
                        <div class="status-item">
                            1<br>Agendados
                        </div>
                        <div class="status-item">
                            2<br>Finalizados
                        </div>
                        <div class="status-item">
                            3<br>Retornos
                        </div>
                        <div class="status-item">
                            0<br>Cancelados
                        </div>
                    </div>
                </div>

                <div class="proximo-atendimento">
                    <div class="proximo-atendimento-header border-botton">PRÓXIMO AGENDAMENTO</div>
                    <div class="proximo-atendimento-item">
                        <div class="horario-item">8:00</div>
                        <div class="horario-item">Nome do Paciente</div>
                        <div class="horario-item">Tipo de Atendimento</div>
                        <div class="horario-item">Convenio Médico</div>
                    </div>
                </div>
            </div>

            <div class="agenda-container">
                <div class="agenda-header">
                    <h1>Cabecalho</h1>
                </div>
                <div class="agenda">
                    <div class="agenda-item">
                        <div class="agenda-item-header border-botton">
                            Segunda
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">9:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">9:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">14:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">14:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-item-header border-botton">
                            Terça
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">9:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">9:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">14:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">14:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-item-header border-botton">
                            Quarta
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">9:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">9:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">14:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">14:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-item-header border-botton">
                            Quinta
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">9:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">9:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">14:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">14:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-item-header border-botton">
                            Sexta
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">8:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">9:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">9:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">10:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">13:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>

                        <div class="agenda-horario">
                            <div class="horario-item">14:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">14:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">15:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:00</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                        <div class="agenda-horario">
                            <div class="horario-item">16:30</div>
                            <div class="horario-item">Nome do Paciente</div>
                            <div class="horario-item">Tipo de Atendimento</div>
                            <div class="horario-item">Convenio Médico</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="border-top">
        ©2022, Biodental – Todos os direitos reservados. Desenvolvido por Gustavo Dornelas®
    </footer>
</body>

</html>