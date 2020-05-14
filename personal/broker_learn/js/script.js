
    // Carga inicial do JQuery **********************/
    $(document).ready(function($) {
    // *********************

        // $('#opinat-filter').on('change', function() {
        //     var dado = this.value;
        //     alert(dado);
        // });

        // var dado = $('.nav-link').val();
        // alert(dado);

        // $("#bodyGeneral").html("html");
        
        // $("#Link").click(function(){
        //     alert("clicked Item");
        // });

        //** HOME */
        $("#home").click(function(){
            $.ajax({
            // *********************
            type:'post',   
            async: false,
            data: {cases:'home', opcao:'opcao passada: home '},
            url: 'app/case.php',
            // *********************
            success:function(data){
                $("#bodyGeneral").html(data);
            },
            // *********************
            error:function(data){
                console.log('Error');
                $("#bodyGeneral").html(data);
            }
            });
        });
        //** CARTERA */
        $("#cartera").click(function(){
            $.ajax({
            // *********************
            type:'post',   
            async: false,
            data: {cases:'cartera', opcao:'opcao passada: link '},
            url: 'app/case.php',
            // *********************
            success:function(data){
                $("#bodyGeneral").html(data);
            },
            // *********************
            error:function(data){
                console.log('Error');
                $("#bodyGeneral").html(data);
            }
            });
        });
        //** OPERACOES */
        $("#operacoes").click(function(){
            $.ajax({
            // *********************
            type:'post',   
            async: false,
            data: {cases:'operacoes', opcao:'opcao passada: link '},
            url: 'app/case.php',
            // *********************
            success:function(data){
                $("#bodyGeneral").html(data);
            },
            // *********************
            error:function(data){
                console.log('Error');
                $("#bodyGeneral").html(data);
            }
            });
        });
        //** INDICADORES */
        $("#indicadores").click(function(){
            $.ajax({
            // *********************
            type:'post',   
            async: false,
            data: {cases:'indicadores', opcao:'opcao passada: link '},
            url: 'app/case.php',
            // *********************
            success:function(data){
                $("#bodyGeneral").html(data);
            },
            // *********************
            error:function(data){
                console.log('Error');
                $("#bodyGeneral").html(data);
            }
            });
        });
        //** iQOption */
        $("#iqoption").click(function(){
            $.ajax({
            // *********************
            type:'post',   
            async: false,
            data: {cases:'iqoption', opcao:'opcao passada: link '},
            url: 'app/case.php',
            // *********************
            success:function(data){
                $("#bodyGeneral").html(data);
            },
            // *********************
            error:function(data){
                console.log('Error');
                $("#bodyGeneral").html(data);
            }
            });
        });
        //** ADMIN USER */
        $("#admuser").click(function(){
            $.ajax({
            // *********************
            type:'post',   
            async: false,
            data: {cases:'admuser', opcao:'opcao passada: link '},
            url: 'app/case.php',
            // *********************
            success:function(data){
                $("#bodyGeneral").html(data);
            },
            // *********************
            error:function(data){
                console.log('Error');
                $("#bodyGeneral").html(data);
            }
            });
        });

    // *********************
    });

    //Detectar tecla pressionada. (necesita mais estudo)
	// function botones (valor) {		
	// 	//Almacenamos en valor de la tecla pulsada
	// 	var teclapulsada=valor.keyCode;
	// 	document.getElementById('respuesta').innerHTML='Tecla='+teclapulsada;
    // }