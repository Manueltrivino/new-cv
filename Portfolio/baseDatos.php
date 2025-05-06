<?php 
/*---------------------Habilidades--------------------------*/
    $habilidades = array();
        $habilidades[0]['lengual']="HTML";
        $habilidades[0]['uso']="Practica en proyectos personales.";
        $habilidades[0]['avance']="90";
        
        $habilidades[1]['lengual']="CSS";
        $habilidades[1]['uso']="Practica en proyectos personales.";
        $habilidades[1]['avance']="90";

        $habilidades[2]['lengual']="JavaScript";
        $habilidades[2]['uso']="Practica en proyectos personales.";
        $habilidades[2]['avance']="50";

        $habilidades[3]['lengual']=".NET";
        $habilidades[3]['uso']="Practica en proyectos personales.";
        $habilidades[3]['avance']="50";

        $habilidades[4]['lengual']="SQL";
        $habilidades[4]['uso']="Solo practicas de la carrera.";
        $habilidades[4]['avance']="60";

        $habilidades[5]['lengual']="Java";
        $habilidades[5]['uso']="Solo practicas de la carrera.";
        $habilidades[5]['avance']="60";

        $habilidades[6]['lengual']="Excel";
        $habilidades[6]['uso']="Uso en analisis de datos en experiencias laborales.";
        $habilidades[6]['avance']="60";

        $habilidades[7]['lengual']="Bootstrap";
        $habilidades[7]['uso']="Practicas personales.";
        $habilidades[7]['avance']="60";
    
    $cantidadHabilidades = count($habilidades);
/* ---------------------Estudios realizados----------------------- */
    $estudio = array();
    $estudio[0]['istituto']="Instituto Superior Santo Domingo";
    $estudio[0]['anio']="2021-presente";
    $estudio[0]['titulo']="Técnico Analista de sistemas";
    $estudio[0]['descripcion1']="Analista Programador. Certificación intermedia (4 semestres - No oficial)";
    $estudio[0]['descripcion2']="Técnico Superior en Análisis de Sistemas de Computación. Título oficial nacional (6 Semestres - Oficial).";

    $estudio[1]['istituto']="CISCO Networking Academy";
    $estudio[1]['anio']="2025";
    $estudio[1]['titulo']= "Junior Cybersecurity Analyst";
    $estudio[1]['descripcion1']="técnicas para monitorear y proteger la red, incluyendo firewalls.";
    $estudio[1]['descripcion2']="seguridad en la nube y criptografía. ";

    $estudio[2]['istituto']="Linkedin learning";
    $estudio[2]['anio']="2022";
    $estudio[2]['titulo']= "Analista de datos";
    $estudio[2]['descripcion1']="técnicas para el manejo de datos y procesamiento en Power BI y ";
    $estudio[2]['descripcion2']="Excel. ";

    $cantidadEstudios = count($estudio);

    /*----------Portafolio --------------------*/
    $portafolio = array();
    $portafolio[0]['categoria']="web desing";
    $portafolio[0]['imagen']="assets/img/portfolio/portfolio-2.png";
    $portafolio[0]['titulo']="mi primera pagina";
    $portafolio[0]['descripcion']="Mi primer portafolio web, creado con HTML, CSS, JavaScript";
    $portafolio[0]['redireccion']="https://manueltrivino.github.io/MiCV/";

    $portafolio[1]['categoria']="PHP";
    $portafolio[1]['imagen']="assets/img/portfolio/portafolio2.png";
    $portafolio[1]['titulo']="trabajo practico";
    $portafolio[1]['descripcion']="Trabajo hecho en clase de practica";
    $portafolio[1]['redireccion']="https://github.com/Manueltrivino/practicas";    
$cantidadexpe=count($portafolio);

/* -----------------cursos --------------------*/
$cursos = array();
    $cursos[0]['nombre']="Introducción a Bases de Datos y SQL";
    $cursos[0]['certifica']="assets/img/portfolio/SQLCert.png";

    $cursos[1]['nombre']="Introducción al Paradigma de Objetos";
    $cursos[1]['certifica']="assets/img/portfolio/Introducción-al-Paradigma-de-Objetos1.png";

    $cursos[2]['nombre']="Java para no programadores";
    $cursos[2]['certifica']="assets/img/portfolio/Java-para-no-programadores1.png";

    $cursos[3]['nombre']="Java-Standard-Programming-J2SE";
    $cursos[3]['certifica']="assets/img/portfolio/Java-Standard-Programming-J2SE1.png";

    $cursos[4]['nombre']="Java Spring";
    $cursos[4]['certifica']="assets/img/portfolio/Java-Spring1.png";

    $cursos[5]['nombre']="Java Advanced Programming Threads, Networking, J2SE";
    $cursos[5]['certifica']="assets/img/portfolio/Java-Advanced-Programming_-Threads,-Networking,-J2SE1.png";
$cantidadCursos = count($cursos)

?>