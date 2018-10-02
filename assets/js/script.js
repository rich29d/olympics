// JavaScript Document

var 
voto = false,
num_votos = 0,
moveSliderAtivo = false,
part_aberta = false,
part_sel = 0,
varImg = new Date().getSeconds(),
larguraWindow = $(window).width(),
scrollStatus = true,
animate = {	
	entrada : function(){
		
		
		
		if(larguraWindow>950){ $('.pular_intro').fadeIn(); }
		
		var
			obj = {
				count   : $('.animate').length,
				count_det   : $('.detalhe').length
			}
		var num = 1,
		crono = setInterval(function(){
			/*console.log(num);*/
			$('.animate')
				.eq(num)
				.css({
					'margin-top':0,
					'opacity':1,
					'transform':'scale(1)'
				});			
			num++;
			if(num>=obj.count){
				clearInterval(crono);
				if(larguraWindow>950) setTimeout(function(){animate.zoom();},2000);				
			}			
			
		},400);
		
		setTimeout(function(){$('.cont_seta .seta').attr('src','assets/img/seta.gif?var=' + varImg);},1500);
		
		var num2 = 0,
		crono2 = setInterval(function(){
			$('.detalhe').eq(num2).addClass('movOrbita');
			if(num2>=obj.count_det){ clearInterval(crono2);	}
			num2++;		
		},1000);
		
		if(larguraWindow<950){ setTimeout(function(){animate.zoom();},3000); }
        
	},
	zoom: function(){
		
		if(larguraWindow>950){			 			
					
					$('.detalhe').css('top','200%');
					setTimeout(function(){$('.detalhe').removeClass('movOrbita');},2000);					
					var winLarg = $(window).width();
					$('.planeta').removeClass('animate');			
					var num = 1,
					crono = setInterval(function(){
						$('.cont_sequencia').css('background-image','url(assets/img/sequencia/planeta_' + num + '.png)');
						if(num==141){
							$('.cont_faq_inicio').css({'transform':'scale(1)'});
							$('.fundo_branco').fadeIn();
							setTimeout(function(){
								moveSliderAtivo = true;
								$('#ghm').fadeIn();
							},2000);
						}
						if(num>=143){ clearInterval(crono);	}
						num+=4;						
					},30);
					setTimeout(function(){
						$('.tbl_seta, .cont_logo, .logo').hide();						
					},50);		
				
		}else{ 
			$('.planeta').removeClass('animate');
			$('.cont_faq_inicio').removeClass('animate_no_init').fadeIn().css('display','table');
			setTimeout(function(){
				moveSliderAtivo = true;
				$('#ghm').fadeIn();
			},1500);			
		}
			
		
		
	
	},
	entrada_participantes: function(){
		$('.cont_part').show();
		$('.bt.faq').fadeIn()
		$('footer').animate({'bottom':0});
		var num = 1,
		crono = setInterval(function(){
			$('#pos' + (num++)).removeClass('pers_child').removeClass('opacity');
			if(num>3){ $('#pos' + num).addClass('opacity4') }
			if(num>7){ clearInterval(crono); }			
		},200);
		
		$('.logo').hide();
		if(larguraWindow<950){
			$('header').fadeIn();
			$('.cont_bt_outros_part').fadeIn()
		}
		$('.up, .down').show();
		$('.down').css('opacity',1);
		setas.avanco();
				
	},mouse: function(){		
		InitDragDrop();
	}
}


var mat = [
	{pontos:0, class:".pt3", km:0, id:4, ativo: true},
	{pontos:0, class:".pt1", km:0, id:2, ativo: false},
	{pontos:0, class:".pt2", km:0, id:1, ativo: false},
	{pontos:0, class:".pt4", km:0, id:6, ativo: false},
	{pontos:0, class:".pt5", km:0, id:5, ativo: false},
	{pontos:0, class:".pt6", km:0, id:3, ativo: false}
];

var pag_part = 1;


var part = {
	scrollUp: function(){
		var 
		 	altWin = $(window).height(),
			altPar = $('#pos1').height();			
		// $('.cont_part').animate({'top': -(altWin/1.5) - (larguraWindow>950?25:0)});
		
		if(larguraWindow < 768) {
			$('.cont_part').animate({ 'top': -(($('.cont_part .part').outerHeight() * 3) - 25) + "px" });
		} else {
			$('.cont_part').animate({ 'top': -($('.cont_part .part').outerHeight() * 3) + "px" });
		}
		
		$('.cont_bt_outros_part').css('opacity',0);
		$('.up, .right').css('opacity',1);
		$('.part').removeClass('opacity4');

		pag_part = 4;
		
		for(var i=1; i<=3; i++){$(mat[i-1].class).addClass('opacity4')}
		scrollStatus = false;
	},
	scrollDown: function(){
		var altWin = $(window).height();			
		$('.cont_part').animate({'top': 10});

		if(larguraWindow < 768) {
			$('.cont_part').animate({ 'top': '10px' });
		}

		$('.cont_bt_outros_part').css('opacity',0);
		$('.down, .right').css('opacity',1);		
		$('.part').removeClass('opacity4');

		pag_part = 1;
		
		for(var i=4; i<=6; i++){ $(mat[i-1].class).addClass('opacity4') }
		scrollStatus = true;
	},
	scrollLeft: function(){
		$('.cont_part').animate({'left': '-150%'},1000);		
		if(larguraWindow<950){
			$('header').animate({'top':0});
			$('footer').animate({'bottom':0});
			$('#toggle-audio, .bt.faq').animate({'bottom': '100px'})
		}
		$('.cont_bt_outros_part').css('opacity',0);
		$('.left').css('opacity',1);
	},
	scrollRight: function(){
		$('.cont_part').animate({'left': (window.innerWidth - $('.cont_part').outerWidth()) / 2 },1000);
		$('.cont_bt_outros_part').css('opacity',0);
		$('.cont_bt_outros_part.right').css('opacity',1);
		if(larguraWindow<950){
			$('header').animate({'top':-50});
			$('footer').animate({'bottom':-80});
			$('#toggle-audio, .bt.faq').animate({'bottom': '-50px'})
		}
		part.scrollDown();
	},
	pos: function(){
		
		for(var i=0; i<=5; i++){
			for(var j=0; j<5; j++){				
				if(mat[j+1].ativo && mat[j].pontos < mat[j+1].pontos){
					var axl = mat[j];
					mat[j] = mat[j+1];
					mat[j+1] = axl;
				}				
			}	
		}
		
		$('.part').removeClass('opacity4');
		
		for(var i=1; i<=6; i++){
			//console.log(mat[i-1].class + ":" + mat[i-1].pontos);
			$(mat[i-1].class).attr('id','pos' + i);
			$(mat[i-1].class + ' .num').text(i);
			if(i>3){ $(mat[i-pag_part].class).addClass('opacity4') }
			$(mat[i-1].class).css('background-image','url(assets/img/personagens/' + $(mat[i-1].class).data('gif') + (i<3?'_' + (25+25*i) + 'p':'') + '.gif)');
			$(mat[i-1].class + "_km span").text((mat[i-1].km).toFixed(0));	
		}
		
	},
	consultaPonto: function(){
					
		$.get( "http://maratonanetflixolympics.s3-website-sa-east-1.amazonaws.com/olympics.json", function( data ) {
			var dados = JSON.parse( data );
			  for(i in dados){
				for(var j=0; j<6; j++){
					if(mat[j].class == ".pt" + dados[i].id){
						mat[j].pontos = dados[i].total;
					}
				}
				
			  }
			  
			  part.pos();
			  part.calculaPercurso();  	  
		});
		
	},
	calculaPercurso: function(){
		var porc = (tempo_corrido/tempo_total)//*100;
		var strPercurso = (porc*174.82)//.toFixed(0);
		
		if(strPercurso.length > 3){
			var strPer ='';
			for(var i=0; i<strPercurso.length; i++){
				strPer += i !=  strPercurso.length-3 ? strPercurso[i] : "." + strPercurso[i];		
			}
			strPercurso = strPer;
		}		
		$('.contador span').text(strPercurso);
		$('.bar_contador').css('width', porc + "px");
		tempo_corrido++;		
		for(var i=0; i<=5; i++){
			
			setas.avanco('.seta_' + mat[i].id,porc,mat[i].ativo);
			
		}
	
	},
	voto_ok: function(nome){
		$('.tituloGIF').hide();
		$('.voto_ok').show();
	},
	resultado: function(){
		$('.cont_part_result').show();
		var
			obj = {
				count   : $('.cont_part_result .animate').length,
				count_det   : $('.detalhe').length
			}
		var num = 0,
		crono = setInterval(function(){
			$('.cont_part_result .animate')
				.eq(num)
				.css({
					'margin-top':0,
					'opacity':1,
					'transform':'scale(1)'
				});			
			num++;
			if(num>=obj.count){ 
				clearInterval(crono); 
				$('.detalhe')
				.addClass('result')				
				.css({
						'margin-top':0,
						'opacity':1,
						'transform':'scale(1)'
				});
			}		
		},400);
		$('footer').animate({'bottom':0});
		if(larguraWindow<950){ $('header').show().animate({'top':0}); }
		$('.logo').hide();
	}
}

var
	telas = {
	
	abre_faq: function(){ $('.cont_faq').fadeIn(); setTimeout(function(){ $('.cont_faq').css('display','table') });},
	fecha_faq: function(){ $('.cont_faq').fadeOut(); },
	abre_torce: function(img,txt,id){ 
		$('.partGif').attr('src',"").attr('src',"assets/img/personagens/" + img + ".gif");
		$('.fbGif').attr('href',"javascript:share_prompt('http://www.fireedev.com.br/olympics/v3/assets/img/personagens/" + img + ".gif?ver=" + (Math.floor((Math.random() * 1000) + 1)) + "' ,'" + txt + "')");
		$('.twGif').attr('href',"http://www.fireedev.com.br/olympics/v3/share/twitter-auth.php?status=Maratona%20de%20Gif&image=http://www.fireedev.com.br/olympics/v3/assets/img/personagens/" + img + ".gif&pers=" + txt + "&id=" + id + "&id_img=" + img);
		part_sel = id;
		$('.cont_torce').fadeIn(); 
		setTimeout(function(){ $('.cont_torce').css('display','table') });
		$('.cont_shake').hide();
		$('.cont_torcedor').fadeIn().css('display','table');
		$('.tituloGIF').show();
		$('.voto_ok').hide();
	},
	fecha_torce: function(){ 
		$('.cont_torce').fadeOut(); 
		voto = false; 
		num_votos=0;
		$('.cont_conta_pontos .celula').text("+1");				
		$('.cont_conta_pontos')
		.css({'opacity':0,'transform':'scale(0)'});
		$('.shake_hand img').show();	
	},
	abre_faq_inicio: function(){ $('.cont_faq_inicio').css({'transform':'scale(1)'});},
	fecha_faq_inicio: function(){ 
		
		$('#toggle-audio').animate({'bottom': '100px'});
		$('.cont_faq_inicio').removeClass('animate_no_init').fadeOut();
		$('.cont_sequencia').hide();
		$('.cont_svg').show();
		//$( ".cont_svg" ).load( "assets/img/planeta.html" );
		animate.entrada_participantes();
		animate.mouse();
		init();
		var winLarg = $(window).width();
		
		$('.planeta').css('z-index',200);
		if(larguraWindow>950){
			$('.planeta').animate({
				'left': winLarg/2 - 1050,
				'top': -500
			},1000,"linear");
		}else{
			$('.planeta').animate({
				'left': winLarg/2 - 680,
				'top': -200
			},1000,"linear");	
		}
	},
	abre_shake: function(){
		$('.cont_torcedor').hide();
		$('.cont_shake').fadeIn().css('display','table');
		voto = true;
	},
	fecha_shake: function(){
		$('.cont_shake').hide();
		$('.cont_torcedor').fadeIn().css('display','table');
		voto = false;
		num_votos=0;
		$('.cont_conta_pontos .celula').text("+1");				
		$('.cont_conta_pontos')
		.css({'opacity':0,'transform':'scale(0)'});
		$('.shake_hand img').show();
	},
	pular_intro: function(){
		$('.cont_faq_inicio').removeClass('animate_no_init').css({'transform':'scale(1)','display':'none'}).fadeIn().css('display','table');
		setTimeout(function(){
			moveSliderAtivo = true;
			$('#ghm').fadeIn();
		},1500);
		$('.cont_sequencia, .detalhes, .cont_logo, .cont_seta').remove();
		$('.planeta').removeClass('animate');
		$('.pular_intro').remove();
	}
		
}

var imagens = {
	_load: function(num_img){
		if(num_img<=147){
			loader = new PxLoader(); 
	
			for(i=1;i<=147; i++){
				var pxImage = new PxLoaderImage('assets/img/sequencia/planeta_'+i+'.png'); 
				pxImage.imageNumber =  i; 
				loader.add(pxImage); 
			}
			loader.addProgressListener(function(e) { 
				$('.cont_sequencia .imagens_ocultas').append('<img src="assets/img/sequencia/planeta_' + e.completedCount + '.png"/>');
			}); 
			 
			loader.start();
		}
		
		/*for(i=1;i<=6; i++){
			for(i=1;i<=300; i++){
				$('.cont_sequencia .imagens_ocultas').append('<img src="assets/img/setas/seta_' + i + '/seta_' + j + '.png)"/>');
			}
		}*/
		
	}
	
}


var setas= {
	avanco: function(id,porc,ativo){
			var conta  = ((300-$(id).data("inicio")) / tempo_total);
			var quadro = Math.round(conta * tempo_corrido);
			//var quadro = (300-$(id).data("inicio")/(tempo_total-tempo_corrido)) //(((300-$(id).data("inicio"))/100*porc)-$(id).data("inicio")/(tempo_total-tempo_corrido)).toFixed(0);
			
			
			if(ativo ){
				console.log('Quadro: ' + quadro)
			console.log('Tempo total:' + tempo_total)
			console.log('Distancia:' + (300 - parseInt($(id).data("inicio"))) );
			console.log("inicio:"+ $(id).data("inicio"));

				//console.log(" r: " + (300-$(id).data("inicio")));				
				$(id).css('background-image','url(assets/img/setas/seta_' + $(id).data("seta") + '/seta_' + quadro + '.png)');
				//console.log((((300-$(id).data("inicio"))/100*porc)-300/(tempo_total-tempo_corrido)).toFixed(0));
				//console.log('tempo: ' +(tempo_total-tempo_corrido).toFixed(0));
				//console.log('Quadro:' + quadro.toFixed(0));
				
				//console.log('?: ' + (300-$(id).data("inicio"))/100*porc);
			}
				
		
	}
}

	

$(function(){
	animate.entrada();
	//part.onloadGIF();
	//part.resultado();
	//part.consultaPonto();
	setInterval(function(){ part.consultaPonto(); },1000);
	
	part.pos();
	
	
	if(larguraWindow>950){ imagens._load(1);}
	else{ animate.entrada(); part.onloadGIF();}
	
	function moveSlider(){
				
			$("#treadmill").animate({
			marginLeft:moveSliderAtivo?"-=" + larguraWindow + "px":0
			}, 2000, function(){
				setTimeout(function(){
				   if($("#treadmill").offset().left < -(larguraWindow*5)){$("#treadmill").css("margin-left",0)}               
				   moveSlider();
				}, 1000)
			})
		
	}
	moveSlider();
	$(document).bind('mousewheel', function(e){
        if(e.originalEvent.wheelDelta /120 > 0) {
           if(scrollStatus){part.scrollUp();}
        }
        else{
            if(!scrollStatus){part.scrollDown(); }
        }
    });
	
});