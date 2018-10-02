<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Olympics - Netflix</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/icone.jpg" >
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/slider.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Maratona de Gifs - Netflix" />
<meta property="og:description" content="Nossos personagens estão correndo para descobrir quem tem mais fãs. Escolha seu favorito e comece a torcer." />
<meta property="og:url" content="http://www.fireedev.com.br/olympics/v2/" />
<meta property="og:image" content="http://www.fireedev.com.br/olympics/v2/assets/img/thumb_maratona-1.jpg" />
<style>

body{}


.planeta{
	cursor: -moz-grab;
    cursor: -webkit-grab;
    cursor: grab;
	-webkit-user-select: none;
    -webkit-user-drag: none;
}
.planeta:active{
	cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
    cursor: grabbing;
}


</style>
    <?php 
	error_reporting(0);
	//session_start();
	
	
	
	
	?>
    
</head>

<body>

<!--onload="animate.entrada()"-->



<article class="fixed100">


<div style="position: absolute; z-index:210; right: 20px; top: 20px; display: none;">

	<style>
		label{ float: right; }
		label input{ width: 20px; margin-bottom: 10px; text-align: center }
	</style>
    
    <label>
    	<button class="bt_part_2" onclick="part.addPonto('.pt1')" >Participante 1</button>
        <input class="pt1_bt" value="5" type="text" />
    </label><br>
	<label>
    	<button class="bt_part_0" onclick="part.addPonto('.pt2')" >Participante 2</button>
        <input class="pt2_bt" value="5" type="text" />
    </label><br>
    <label>
    	<button class="bt_part_1" onclick="part.addPonto('.pt3')" >Participante 3</button>
        <input class="pt3_bt" value="0" type="text" />
    </label><br>
    
    <label>
    	<button class="bt_part_3" onclick="part.addPonto('.pt4')" >Participante 4</button>
        <input class="pt4_bt" value="28" type="text" />
    </label><br>
    <label>
    	<button class="bt_part_4" onclick="part.addPonto('.pt5')" >Participante 5</button>
        <input class="pt5_bt" value="88" type="text" />
    </label><br>
    <label>
    	<button class="bt_part_5" onclick="part.addPonto('.pt6')" >Participante 6</button>
        <input class="pt6_bt" value="195" type="text" />
    </label>
</div>

	<img class="logo animate s3" src="<?php echo base_url(); ?>assets/img/netflix.png">
    
    
    <header> </header>
    
   
    <section>
    	      
        <div class="planeta fixed100 tabela animate s2 scale drag">
        	<div class="celula">
            
                <div class="cont_flag cf_0 absolute100 index4">
                    <div class="flag">
                        <div class="perf tabela">
                            <div class="cont_foto celula">
                                <div class="foto" style="background-image: url(<?php echo base_url(); ?>assets/img/personagens/pers_2.png)"></div>
                            </div>
                            <div class="titulo celula">
                                Claire Underwood
                                <div class="km pt2_km"><span>100</span>km</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont_flag cf_1 absolute100 index4">
                    <div class="flag">
                        <div class="perf tabela">
                            <div class="cont_foto celula">
                                <div class="foto" style="background-image: url(<?php echo base_url(); ?>assets/img/personagens/pers_3.png)"></div>
                            </div>
                            <div class="titulo celula">
                                Shaolin Fantastic
                                <div class="km pt3_km"><span>100</span>km</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont_flag cf_2 absolute100 index4">
                    <div class="flag">
                        <div class="perf tabela">
                            <div class="cont_foto celula">
                                <div class="foto" style="background-image: url(<?php echo base_url(); ?>assets/img/personagens/pers_1.png)"></div>
                            </div>
                            <div class="titulo celula">
                                Crazy Eyes
                                <div class="km pt1_km"><span>100</span>km</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont_flag cf_3 absolute100 index4">
                    <div class="flag">
                        <div class="perf tabela">
                            <div class="cont_foto celula">
                                <div class="foto" style="background-image: url(<?php echo base_url(); ?>assets/img/personagens/pers_4.png)"></div>
                            </div>
                            <div class="titulo celula">
                                Dustin Henderson
                                <div class="km pt4_km"><span>100</span>km</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont_flag cf_4 absolute100 index4">
                    <div class="flag">
                        <div class="perf tabela">
                            <div class="cont_foto celula">
                                <div class="foto" style="background-image: url(<?php echo base_url(); ?>assets/img/personagens/pers_5.png)"></div>
                            </div>
                            <div class="titulo celula">
                                Lito Rodrigues
                                <div class="km pt5_km"><span>100</span>km</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont_flag cf_5 absolute100 index4">
                    <div class="flag">
                        <div class="perf tabela">
                            <div class="cont_foto celula">
                                <div class="foto" style="background-image: url(<?php echo base_url(); ?>assets/img/personagens/pers_6.png)"></div>
                            </div>
                            <div class="titulo celula">
                                Steven Murphy
                                <div class="km pt6_km"><span>100</span> km</div>
                            </div>
                        </div>
                    </div>
                </div>            	
                
                
                <div class="absolute100 cont_sequencia animate s1">
                	<div class="fundo_branco absolute100"></div>
                    <div class="imagens_ocultas" style="display:none"></div>
                </div>
                <!-----sequencia------>
                
                <canvas id="canvas" width="1301" height="1674" ></canvas>
                
                <div class="cont_svg" style="display:none">
                
                <img class="mapa" src="<?php echo base_url(); ?>assets/img/mapa.png" />

                </div>
        	</div>
        </div>
    </section> <!--mapa-->
    
    <div class="detalhes">
        <div class="detalhe det_1 animate s2 scale mouseMove_1">
            <img id="detalhe-c1-1" src="<?php echo base_url(); ?>assets/img/cloud-1-1.png" />
            <img id="detalhe-c1-2" src="<?php echo base_url(); ?>assets/img/cloud-1-2.png" />
            <img id="detalhe-c1-3" src="<?php echo base_url(); ?>assets/img/cloud-1-3.png" />
        </div>
        <div class="detalhe det_2 animate s2 scale mouseMove_2">
            <img src="<?php echo base_url(); ?>assets/img/detalhe_2.png" />
        </div>
        <div class="detalhe det_3 animate s2 scale mouseMove_1">
            <img src="<?php echo base_url(); ?>assets/img/detalhe_3.png" />
        </div>
        <div class="detalhe det_4 animate s2 scale mouseMove_2">
            <img id="detalhe-c2-1" src="<?php echo base_url(); ?>assets/img/cloud-2-1.png" />
            <img id="detalhe-c2-2" src="<?php echo base_url(); ?>assets/img/cloud-2-2.png" />
        </div>
    </div> 

	<section>
    
    	<div class="cont_torce tabela escuro fixed100">
        	<div class="celula">
            	<a class="bt_fechar_torce" href="javascript:telas.fecha_torce()"><img class="bt_x animate" src="<?php echo base_url(); ?>assets/img/bt_fechar_faq.png" /></a>
            	<div class="tabela cont_torcedor">
                	<div class="linha">
                    	<div class="celula">
                        	<img class="partGif" />
                        </div>
                    </div>
                    <div class="linha">
                    	<div class="celula tituloGIF">
                        	Torça aqui por seu atleta favorito.<br>
							Quanto mais torcida nas redes sociais,<br>
							mais rápido ele corre.
                        </div>
                    </div>
                    <div class="linha">
                    	<div class="celula">
                        	<a target="popup" class="bt share fbGif" href="javascript:;">
                            	
                            </a>
                        	<a class="bt share twGif" href="javascript:;">                            
                            	
                            </a>
                            <a class="bt bt_shake mobile" href="javascript:telas.abre_shake();">
                            	<img src="<?php echo base_url(); ?>assets/img/share_shake.png" width="45px;">
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="tabela cont_shake mobile_table">
                	<a class="bt bt_shake" href="javascript:telas.fecha_shake();">
                		<img class="voltar_shake" src="<?php echo base_url(); ?>assets/img/seta_left.png" />
                    </a>
                	<div class="linha">
                    	<div class="celula">
                        	<img class="shake_hand" src="<?php echo base_url(); ?>assets/img/shake_hand.png" />
                        </div>
                    </div>
                    <div class="linha">
                    	<div class="celula tituloGIF">
                        	Balance seu celular como<br>
                            se estivesse torcendo e<br>
                            ajude seu personagem favorito.
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
        </div>
    
    	<div class="cont_faq tabela escuro fixed100">
        	<div class="celula">
            	<a class="bt_fechar_faq" href="javascript:telas.fecha_faq()"><img class="bt_x aniamate s1" src="<?php echo base_url(); ?>assets/img/bt_fechar_faq.png" /></a>
            	 Netflix não para. <br class="mobile">Muito menos os <br class="mobile">nossos personagens.<br>
                E eles precisam da <br class="mobile">sua ajuda para ganhar.<br>
                <span>Escolha seu personagem <br class="mobile">favorito e torça por ele.<br>
                Quanto mais torcida nas <br class="mobile">redes sociais, mais rápido <br class="mobile">ele corre.</span>
            </div>
        </div>
    
    	<div class="cont_faq_inicio animate_no_init fixed100">
        	<div id="slider">
                <div id="treadmill">
                    <div class="slider-item" style="background-image: url(assets/img/personagens/pers_1.gif)"></div>
                    <div class="slider-item" style="background-image: url(assets/img/personagens/pers_2.gif)"></div>
                    <div class="slider-item" style="background-image: url(assets/img/personagens/pers_3.gif)"></div>
                    <div class="slider-item" style="background-image: url(assets/img/personagens/pers_4.gif)"></div>
                    <div class="slider-item" style="background-image: url(assets/img/personagens/pers_5.gif)"></div>
                    <div class="slider-item" style="background-image: url(assets/img/personagens/pers_6.gif)"></div>
                    <div class="slider-item" style="background-image: url(assets/img/personagens/pers_1.gif)"></div>
                </div>
            </div>

            <div id="ghm" style="display:none">
               
               
                    <div class="celula" style="margin-top: 6%; display:block">
                        <img class="logo_tela" src="<?php echo base_url(); ?>assets/img/netflix.png">
                    </div>
              
                    <div class="celula" style="margin-top: 11%; display:block">                
                        Netflix não para. <br class="mobile">Muito menos os <br class="mobile">nossos personagens.<br>
                        E eles precisam da <br class="mobile">sua ajuda para ganhar.<br>
                        <span>Escolha seu personagem <br class="mobile">favorito e torça por ele.<br>
                    Quanto mais torcida nas <br class="mobile">redes sociais, mais rápido <br class="mobile">ele corre.</span>
                    </div>            
                       
                    <div class="celula" style="vertical-align:top; text-align: left; margin-top: 6%; display:block">
                        <a class="bt_fechar_faq_inicio" href="javascript:telas.fecha_faq_inicio()"><img src="<?php echo base_url(); ?>assets/img/bt_fechar_faq_inicio.png" /></a>
                    </div>
                 
               
            </div>
        </div>
    </section> <!--torcida-->
    
    

	<section>
    	<div class="cont_part pers_parent">
        	
            <div id="pos1" class="part pt3 tabela pers_child opacity" data-gif="pers_1" style="background-image: url(assets/img/personagens/pers_1.gif)">
                
                <div class="cont_pos">
                    <div class="pos">
                        <div class="num">1</div>
                        <div class="ext">º</div>
                    </div>
                    <div class="fundo"></div>
                </div>
                
                <div class="celula">
                    <div class="tabela">
                        <h4 class="part_title">Nome</h4>
                        <p class="part_p">Crazy Eyes</p>
                        <h4 class="part_title">Time</h4>
                        <p class="part_p">Orange Is The New Black</p>
                        <h4 class="part_title">Lema</h4>
                        <p class="part_p">&ldquo;Você acende o fogo dentro de mim.&rdquo;</p>

                        <a class="bt_help" href="javascript:telas.abre_torce('pers_1','Crazy Eyes',4);">TORÇA POR MIM</a>
                    </div>
                </div>
                
                
            </div>
            
            <div id="pos2" class="part pt1 tabela pers_child opacity" data-gif="pers_2" style="background-image: url(assets/img/personagens/pers_2.gif)">
                
                <div class="cont_pos">
                    <div class="pos">
                        <div class="num">2</div>
                        <div class="ext">º</div>
                    </div>
                    <div class="fundo"></div>
                </div>
                
                <div class="celula">
                    <div class="tabela">
                        <h4 class="part_title">Nome</h4>
                        <p class="part_p">Claire Underwood</p>
                        <h4 class="part_title">Time</h4>
                        <p class="part_p">House Of Cards</p>
                        <h4 class="part_title">Lema</h4>
                        <p class="part_p">&ldquo;Eu sou mesmo o tipo de inimigo que você quer fazer?&rdquo;</p>

                        <a class="bt_help" href="javascript:telas.abre_torce('pers_2','Claire Underwood',2);">TORÇA POR MIM</a>
                    </div>
                </div>
            </div>
            
            <div id="pos3" class="part pt2 tabela pers_child opacity" data-gif="pers_3" style="background-image: url(assets/img/personagens/pers_3.gif)">
                
                <div class="cont_pos">
                    <div class="pos">
                        <div class="num">3</div>
                        <div class="ext">º</div>
                    </div>
                    <div class="fundo"></div>
                </div>
                
                <div class="celula">
                    <div class="tabela">
                        <h4 class="part_title">Nome</h4>
                        <p class="part_p">Shaolin</p>
                        <h4 class="part_title">Time</h4>
                        <p class="part_p">The Get Down</p>
                        <h4 class="part_title">Lema</h4>
                        <p class="part_p">&ldquo;Se eu estragar minha calça, vou te matar duas vezes.&rdquo;</p>

                        <a class="bt_help" href="javascript:telas.abre_torce('pers_3','Shaolin Fantastic',1);">TORÇA POR MIM</a>
                    </div>
                </div>                
            </div>
            
            <div id="pos4" class="part pt4 tabela pers_child opacity" data-gif="pers_4" style="background-image: url(assets/img/personagens/pers_4.gif)">
                
                <div class="cont_pos">
                    <div class="pos">
                        <div class="num">4</div>
                        <div class="ext">º</div>
                    </div>
                    <div class="fundo"></div>
                </div>
                
                <div class="celula">
                    <div class="tabela">
                        <h4 class="part_title">Nome</h4>
                        <p class="part_p">Dustin Henderson</p>
                        <h4 class="part_title">Time</h4>
                        <p class="part_p">Stranger Things</p>
                        <h4 class="part_title">Lema</h4>
                        <p class="part_p">&ldquo;Precisamos de energia para a viagem.&rdquo;</p>

                        <a class="bt_help" href="javascript:telas.abre_torce('pers_4','Dustin Henderson',6);">TORÇA POR MIM</a>
                    </div>
                </div>
                
            </div>
            
            <div id="pos5" class="part pt5 tabela pers_child opacity" data-gif="pers_5" style="background-image: url(assets/img/personagens/pers_5.gif)">
                
                <div class="cont_pos">
                    <div class="pos">
                        <div class="num">5</div>
                        <div class="ext">º</div>
                    </div>
                    <div class="fundo"></div>
                </div>
                
                <div class="celula">
                    <div class="tabela">
                        <h4 class="part_title">Nome</h4>
                        <p class="part_p">Lito Rodrigues</p>
                        <h4 class="part_title">Time</h4>
                        <p class="part_p">Sense8</p>
                        <h4 class="part_title">Lema</h4>
                        <p class="part_p">&ldquo;Hernando, por favor.&rdquo;</p>
                        
                        <a class="bt_help" href="javascript:telas.abre_torce('pers_5','Lito Rodrigues',5);">TORÇA POR MIM</a>
                    </div>
                </div>
                
                
            </div>
            
            <div id="pos6" class="part pt6 tabela pers_child opacity" data-gif="pers_6" style="background-image: url(assets/img/personagens/pers_6.gif)">
                
                <div class="cont_pos">
                    <div class="pos">
                        <div class="num">6</div>
                        <div class="ext">º</div>
                    </div>
                    <div class="fundo"></div>
                </div>
                
                <div class="celula">
                    <div class="tabela">
                        <h4 class="part_title">Nome</h4>
                        <p class="part_p">Steven Murphy</p>
                        <h4 class="part_title">Time</h4>
                        <p class="part_p">Narcos</p>
                        <h4 class="part_title">Lema</h4>
                        <p class="part_p">&ldquo;Os mocinhos só precisam ter sorte uma vez.&rdquo;</p>

                        <a class="bt_help" href="javascript:telas.abre_torce('pers_6','Steven Murphy',3);">TORÇA POR MIM</a>
                    </div>
                </div>
                
                
            </div> 
            
        </div>
     	
        <a href="javascript:telas.abre_faq();" class="bt faq">
        	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 34.591 34.591" enable-background="new 0 0 34.591 34.591" xml:space="preserve">
			<circle fill="#E50914" cx="17.296" cy="17.296" r="17.296"/>
			<text transform="matrix(1 0 0 1 10.481 27.208)" fill="#FFFFFF" font-family="'proxima-bold'" font-size="29.5543">?</text>        
        	</svg>
        </a>
           
        <a class="cont_bt_outros_part down" href="javascript:part.scrollUp();">
            <img src="<?php echo base_url(); ?>assets/img/seta_down.png" class="bt_outros_part" />
        </a>
        
         <a class="cont_bt_outros_part up" href="javascript:part.scrollDown();">
            <img src="<?php echo base_url(); ?>assets/img/seta_down.png" class="bt_outros_part" />
        </a>
        
        <a class="cont_bt_outros_part right mobile" href="javascript:part.scrollLeft();">
            <img src="<?php echo base_url(); ?>assets/img/seta_down.png" class="bt_outros_part" />
        </a>
        
        <a class="cont_bt_outros_part left mobile" href="javascript:part.scrollRight();">
            <img src="<?php echo base_url(); ?>assets/img/seta_down.png" class="bt_outros_part" />
        </a>
        
    </section> <!--partcipantes-->
    
	
        
    <section>    
        <div class="cont_logo tabela fixed100 index8 animate s2 slide opacity" >
        
        
            <div class="celula" style="height: 100%;">
               
               <img src="<?php echo base_url(); ?>assets/img/maratona.png" class="titulo" /><br>
               <img src="<?php echo base_url(); ?>assets/img/de_gifs.png" class="logo_netflix" />
               
            </div>
        
        </div>
        
        
        
        <div class="tabela fixed100 index6 tbl_seta">
            <div class="celula">
            	<div class="cont_seta">
                   <img class="seta_sombra animate s2 opacity" src="<?php echo base_url(); ?>assets/img/seta_sombra.png" />
                   <img class="animate s2 opacity rio" src="<?php echo base_url(); ?>assets/img/rio.png" />
                   <img class="seta" />
                   
            </div>
        </div>
        
        
        
    </section><!-----seta---->
    
    <section>
    	<div class="fixed100 tabela index10 tbl_result">
        	<div class="celula">
    	
            <div class="cont_part_result">
                
                <div class="tabela t1">
                    <div class="celula">
                        <div class="part pt1 tabela animate s1 slide opacity" data-gif="pers_1" style="background-image: url(assets/img/personagens/pers_1.jpg)">
                            
                            <div class="cont_pos"></div>
                            
                            <div class="celula">
                                Orange is the New Black
                                <span>04d 07h 22m 30s</span>
                            </div>
                            
                            
                        </div>
                     </div>
                </div>
                
                <div class="tabela t2">
                
                    <div class="celula rsl_cell_2">
                        <div class="part pt2 tabela animate s1 slide opacity" data-gif="pers_2" style="background-image: url(assets/img/personagens/pers_2.jpg)">
                            
                            <div class="cont_pos"></div>
                            	
                            <div class="celula">
                                Orange is the New Black
                                <span>04d 07h 22m 30s</span>
                            </div>
                        </div>
                    </div>
                
                    <div class="celula">                	
                        <div class="part pt3 tabela animate s1 slide opacity" data-gif="pers_3" style="background-image: url(assets/img/personagens/pers_3.jpg)">
                            
                            <div class="cont_pos"></div>
                            
                            <div class="celula">
                                Orange is the New Black
                                <span>04d 07h 22m 30s</span>
                            </div>
                            
                        </div>                    
                     </div>
                     
                </div>
                
                 <div class="tabela t3">
                
                    <div class="celula">
                
                        <div class="part pt4 tabela animate s1 slide opacity" data-gif="pers_4" style="background-image: url(assets/img/personagens/pers_4.jpg)">
                            
                            <div class="cont_pos"></div>
                            	
                            <div class="celula">
                                Orange is the New Black
                                <span>04d 07h 22m 30s</span>
                            </div>
                            
                            
                        </div>
                     
                     
                     </div>
                     <div class="celula rsl_cell_5">
                     
                        
                        <div class="part pt5 tabela animate s1 slide opacity" data-gif="pers_5" style="background-image: url(assets/img/personagens/pers_5.jpg); ">
                            
                            <div class="cont_pos"></div>
                            
                            <div class="celula">
                                Orange is the New Black
                                <span>04d 07h 22m 30s</span>
                            </div>
                            
                            
                        </div>
                     
                     
                      </div>   
                     <div class="celula">
                    
                        
                        <div class="part pt6 tabela animate s1 slide opacity" data-gif="pers_6" style="background-image: url(assets/img/personagens/pers_6.jpg)">
                            
                            <div class="cont_pos"></div>
                            
                            <div class="celula">
                                Orange is the New Black
                                <span>04d 07h 22m 30s</span>
                            </div>
                            
                            
                        </div> 
                    
                    </div>
                     
                </div>
                
            </div>
            
         </div>
      </div>
        
    </section> <!--resultado-->
    
    <footer>
    	<div class="tabela">
        	<div class="celula" style="width: 30%;">
            	
                <div class="cont_contador">
                	<div class="contador"><span>0</span> de 17.482 Km</div>
                	<div class="cont_bar_contador movProgress">
                    	<div class="bar_contador"></div>
                    </div>
                </div>                
            </div>
           <div class="celula desktop" style="background: url(assets/img/faixa_nome.png) center center; width:500px;">
            	
           </div>
           
           <div class="celula" style="width: 30%;">
            
            
            	<div class="cont_logo_bar"><img class="logo_bar" src="<?php echo base_url(); ?>assets/img/netflix.png"></div>
            
            
            	<a class="bt_watch" href="javascript:void(0);" target="_blank">
            	
                <style>
					
					.cont_bt_watch, .watch, .watch img{
						width: 136px;
					    height: 31px;
						position: absolute;
						top: 0;
						right: 0;
						transition: all .6s ease;
						overflow: hidden;
					}
					.cont_bt_watch{
						position: relative;
						border: 1px solid #e50913;
						float: left;
    					margin-left: 30px;
					}
					.watch.vermelho{ background: #e50913; z-index: 4 }
					.cont_bt_watch:hover .watch.vermelho{ width: 0 }
					.watch.branco{ background: #FFF; z-index: 2}
					
					@media screen and (max-width:1240px){

						.cont_bt_watch, .watch, .watch img {
							width: 100px;
							height: 23px;
							position: absolute;
							top: 0;
							right: 0;
						}
						
						.cont_bt_watch{
							border: 1px solid #e50913;	
							margin-bottom: 10px;
							position: relative;
							margin: auto;
						}
						
						.cont_contador, .cont_bt_watch{ float: none; }
						
					}
					
				</style>
                
                <div class="cont_bt_watch">
                	<div class="watch vermelho"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALgAAAAqCAYAAAAAnZGPAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAOaSURBVHja7JrRcZtAEIbXmbznOgiuIHRgUoFJBUYVGFeAUoHiCmRXQFwB6gClApEKRCq4vOxNdnYODgHWCOX/Zm6M0R53i34te8vdWGsJgGvlA24BgMABgMABgMABgMABgMABgMABBA4ABA4ABA4ABA4ABA7OhSGimojya3XwBput/mtxV3z8lYhaRHBwbQLfX7O4iYg+Lmy+kfhi+oiJ6J6P/xDRrqdPSkRf+Pg32zaecclz3nD/z/z/L+4vBZME5tp0jDfEz9C98s1Z8nrN4iYiImvtUtrG/qPusDH8mY+DtTYWtrG19thhW/G1yFobsd2Rj13/zHazYZvchjmO8DPUuuY85xiLaEuZaOQRRuaxq5VIKxa2PCcF4ATmbKXgC7ZNxLmEz6Xqh+P6W2WbDhB4NcLPUPPNec4xEgh83lYoQfgiTyxsUs8XUohoJiOrUbYZf256xFJ2zMFw3y7B6B/PGD+nCnzqGC76b5egnaUsMjP++5PzRpdnxyofdtyLHJQ4L/4u8tFP6tqy7wsR/Qjkpkbkuak433Lfl3f08xz3so9WXGeDHHx6S1VkNiKV0FFE59Q126Q90V5Gs43K07uiYe7Joys+H/X40hfBT/FzbASfa4ztxBQKKYpopWcxthXnjBLuoSPXrZV4s55FZhlIUfRCTVOMEPgpfo4V+JxjlGKMCCnK+FJXKlIHWd6SZTrHnohuiegb2zeqdFiqVOSWiFb8uG5V6TD0+H3i/k+cAknWIhV4Dz/PcS9DrMQ9e0CKMn1xWYtqRXVCmStS0SYJRD5ZiQkt2MizQD16qiOhCD6Hn6EIPvcY2xPuC1KUjnaww4hFbpwF8tuEH8VFxxezGSDwWFVlfKXKUwR+qp+hlnv6zDmG/LFcdDXlkt9kZqISsvOkAUZsEnrkt4gurShE2mFEutDwdUrxON6zrXuMZ57HuKbi66657168tYzVo39uP1eeaxQ89k7ZNzy3OcaQ812LSswKVZRxLR+wiDmoRWEVeGOYDFiMupc3xlNxiQcsUN18fPN1ffIJflLgBZf1vA+YYwzyvAMwF54BXPxuwpwj0K5n4fRARM9iweP2ocg9IG8cbRrPPpQ7EXVbYduqqNWKSC8XZXdq38ebstN7ZBKulU/10/d5Ip5Kz8rfqWNIvx8H2F0E2C4LrhpslwUQOAAQOAAQOAAQOAAQOAAQOIDAcQsABA4ABA4ABA4ABA4ABA7AAP4OAKUyHtQEf+EtAAAAAElFTkSuQmCC" alt="watch now" title="watch now" /></div>
                    <div class="watch branco"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALgAAAAqCAYAAAAAnZGPAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAQ4SURBVHja7JxBVtpQFIZ/ezpi0jhgwqSwgsYViCswrkBYgXEF2hWAKxBWAK7AdAVNV2A6YcKgccLUDnpfe72+QEhSBc//n8MR5CXv3bwv9/33gR48PT2Bot6rPvASUAScogg4RRFwiiLgFEXAKYqAUwScogg4RRFwiiLgFPWa+rjvASxabc5idQUA7gFMAYyrnKCzWjKDUzsNNwBMaFGo9wh4CuAEQE6Lsht2pAsg6KyW6YamIYBTef4IIJHJ9CkC8EWe/5S2mWnTlZ+ZB5IIwGd5/UOO18D0N4w1K+gvWDPmMioas9b0PcO9V4AvWu0RgFiep53V8mjNshsWgHSmoAmlbeBpm0jbXED5Lr8/UsAMANwWDHcM4FLGO9oQWg7gUL3+G6eM9agi3L4xN9kHLUrDmTvWGXrRag88TTXcicnGXQVbV8Gdq7a5yroXJpsGKitGCu5MHe8UyzmyEuGlBszYrESDioDbMTfZR39fAN+XDH5usqsDcGImysF9BmBuJuRYlmQHqMvcPbNMD+S9SYnx2OwXyPG5Av5Ave/+fOoawNeKcb7GtVwnl/0nAIbM4M3IZZi5gjRctNqhgcvp1GSuRIByGfWTB2ioHYXxBm8aqGwYGbsxrgGkN84Cy4U36iNX5xkR8Pr2JFKwTmVi3EW+MBDri/8gPvTWQAgAdyYj/RLLMio50XcK9Jk6PvZYgrIqG2cdNdHHV3UDxwVWkYBXWFLzzmo576yWubIfkcm+J8b3On85E9hDZS2Gnt2OWNrNCopPXUSOTUbvyw3yAOCqTpwKvKI4a1/Lmn0M1XG3UiMR8IrFZaSsA1T2cWBFpmDriQefeGCfGSvSU5OVm0y3afm9lOMvTYHpPPY2mW3bOKuo6T50gjgn4PULov6i1b5ftNr3JkP6lta5TEBPHnM1yX3jJydyQxzKCpAar7pOmWTyEykmq076uVlJ7uWxKU68YR8jlfG/cRelXkGENd7YFUipWIzcZKhMslRkLMWFTExifHxSwoeHUshOzSoxkfOG/zlOlBifryhsqo8rdb5JZ7VMCPj29mSgCqLEYwMC/NvPvcCfTxFHagKc7QjUZGRynpkCPjUZfuBZxq3cHvq1HJuqzBiapb8M3NvEOSwAri/H6vaZjK2JPvR4r91K2Vktd3qrcJczuC54hp3VMluzwxIIkKcy0V08/zDDZbKh2gkIpV3oyWiZeGsYb54r/z1SvjXyWCTfDeJuuMeiOOH/cEjHWbQ7EuLlBzCXDfbhdGoK9Z3WwS7/67ZFqx0DSIuWQClCzwHcKPhCBbrTnUCXeSb1WAGeq7a5yVp6x0EXZcd4/r2PO9POWoA+Xn41NRZgkjUFoo3T935fwXdj4q3bh7V3N7KzRcApirsoFEXAKYqAUxQBpwg4RRFwiiLgFEXAKYqAUxQBpygCThFwiiLgFLXD+j0AcvpHOHP6nYUAAAAASUVORK5CYII=" alt="watch now" title="watch now" /></div>
                </div>
                
            </a>
            </div>
        </div>
    </footer>
    
    <a class="pular_intro desktop" href="javascript:telas.pular_intro()"><img src="assets/img/pular_intro.png"></a>
    <a href="#" class="off" id="toggle-audio" onclick="return false;">
        <img class="on" src="<?php echo base_url(); ?>assets/img/audio_on.png">
        <img class="off" src="<?php echo base_url(); ?>assets/img/audio_off.png">
    </a>
    
</article>
<script>
<?php
					
	/*$dia_ini =  13;
	$hor_ini = 0;
	$min_ini = 3;
	$seg_ini = 0;*/
	$dia_ini =  date('d');
	$hor_ini = date('H');
	$min_ini = date('i');
	$seg_ini = date('s');
	$inicial = ($dia_ini * 86400) + ($hor_ini * 3600) + ($min_ini * 60) + $seg_ini;
	
	$dia =  date('d');
	$hor = date('H');
	$min = date('i');
	$seg = date('s');
	$atual = ($dia * 86400) + ($hor * 3600) + ($min * 60) + $seg;
	
	echo "var tempo_corrido = " . ($atual - $inicial) . ";";
	
?>
var tempo_total = 150;//518400;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="http://connect.facebook.net/en_US/all.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>assets/js/drag.js"></script>
<script src="<?php echo base_url(); ?>assets/js/percurso.js"></script>
<script src="<?php echo base_url(); ?>assets/js/audio.js"></script>
<script>
var canvas, stage, exportRoot;
function init() {
	// --- write your JS code here ---
	
	canvas = document.getElementById("canvas");
	exportRoot = new lib.percurso();

	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);
	stage.update();

	createjs.Ticker.setFPS(lib.properties.fps);
	createjs.Ticker.addEventListener("tick", stage);
}


FB.init({
    appId: '1322541594441114', 
	version:  'v2.7',
    status: true, 
    cookie: true,
    xfbml: true
});

function share_prompt(img, txt, id)
{


    FB.ui(
       {
         method: 'feed',
         name: txt,
         link: img,
         picture: img,
         caption: 'Reference Documentation',
         description: 'Dialogs provide a simple, consistent interface for applications to interface with users.',
         message: 'Facebook Dialogs are easy!'
       
       },
	   // callback
	  function(response) {
		if (response && !response.error_message) {
		  alert('Você votou em ' + txt + '.');
		} else {
		  alert('Post cancelado!');
		}
	  }
     );
 }

</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ios-shake.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.shake.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pxloader/PxLoader.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pxloader/PxLoaderImage.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/clouds.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/keepRatio.js"></script>

<div id="niff" style="position: fixed; bottom: 0; left: 0; color: white;"></div>

</body>
</html>
